<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //supaya bisa tambah data
    protected $fillable = [
        'user_id',
        'jabatan',
        'gaji_pokok'
    ];

    //relasi ke table user 
    public function user() {
        return $this->belongsTo(User::class);
    }
}
