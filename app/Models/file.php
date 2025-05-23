<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class file extends Model
{
    /** @use HasFactory<\Database\Factories\FileFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'stored_name',
        'encrypted_key',
        'iv'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, "user_id");
    }
}
