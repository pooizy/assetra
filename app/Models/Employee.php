<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model
{
    protected $fillable = [
        'nip',
        'nama_pegawai',
        'jabatan',
        'no_telepon',
    ];

    public function assets(): HasMany
    {
        return $this->hasMany(Asset::class, 'employee_id');
    }
}
