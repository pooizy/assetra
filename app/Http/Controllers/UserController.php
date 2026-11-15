<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Daftar seluruh pengguna
    public function index()
    {
        $users = User::latest()->get();

        return view('users.index', compact('users'));
    }

    // Form tambah pengguna
    public function create()
    {
        return view('users.create');
    }

    // Simpan pengguna baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'peran' => 'required|in:admin,petugas,siswa',
        ]);

        $validated['password'] = Hash::make($validated['password']);

        // Buat akun pengguna
        $user = User::create($validated);

        // Akun yang dibuat Admin langsung aktif
        $user->email_verified_at = now();
        $user->status_akun = 'disetujui';
        $user->save();

        return redirect()->route('users.index')
            ->with('success', 'Pengguna berhasil ditambahkan dan akun sudah aktif.');
    }

    // Form edit pengguna
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    // Perbarui pengguna
    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('users', 'email')->ignore($user->id),
            ],
            'peran' => 'required|in:admin,petugas,siswa',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        if (!empty($validated['password'])) {
            $user->password = $validated['password'];
        }

        // Jika email berubah, wajib verifikasi ulang
        if ($user->email !== $validated['email']) {
            $user->email_verified_at = null;
        }

        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->peran = $validated['peran'];
        $user->save();

        return redirect()->route('users.index')
            ->with('success', 'Pengguna berhasil diperbarui.');
    }

    // Setujui pendaftaran
    public function approve(User $user)
    {
        $user->status_akun = 'disetujui';
        $user->save();

        return redirect()->route('users.index')
            ->with('success', 'Pendaftaran pengguna berhasil disetujui.');
    }

    // Tolak pendaftaran
    public function reject(User $user)
    {
        $user->status_akun = 'ditolak';
        $user->save();

        return redirect()->route('users.index')
            ->with('success', 'Pendaftaran pengguna berhasil ditolak.');
    }

    // Hapus pengguna
    public function destroy(User $user)
    {
        if ($user->id === auth()->id()) {
            return back()->with(
                'error',
                'Kamu tidak bisa menghapus akun sendiri.'
            );
        }

        $user->delete();

        return redirect()->route('users.index')
            ->with('success', 'Pengguna berhasil dihapus.');
    }
}
