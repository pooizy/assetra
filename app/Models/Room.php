<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Room extends Model
{
    protected $fillable = [
        'nama_ruangan',
        'kode_ruangan',
        'keterangan',
    ];

    public function assets(): HasMany
    {
        return $this->hasMany(Asset::class);
    }
}