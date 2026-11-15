<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // Menampilkan daftar pegawai
    public function index()
    {
        $employees = Employee::latest()->get();

        return view('employees.index', compact('employees'));
    }

    // Menyimpan data pegawai
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nip' => 'required|unique:employees,nip',
            'nama_pegawai' => 'required',
            'jabatan' => 'nullable',
            'no_telepon' => 'nullable',
        ]);

        Employee::create($validated);

        return redirect()->route('employees.index')
            ->with('success', 'Data pegawai berhasil ditambahkan.');
    }

    // Mengubah data pegawai
    public function update(Request $request, Employee $employee)
    {
        $validated = $request->validate([
            'nip' => 'required|unique:employees,nip,' . $employee->id,
            'nama_pegawai' => 'required',
            'jabatan' => 'nullable',
            'no_telepon' => 'nullable',
        ]);

        $employee->update($validated);

        return redirect()->route('employees.index')
            ->with('success', 'Data pegawai berhasil diperbarui.');
    }

    // Menghapus data pegawai
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employees.index')
            ->with('success', 'Data pegawai berhasil dihapus.');
    }

    public function edit(Employee $employee)
    {
    return view('employees.edit', compact('employee'));
    }
}
