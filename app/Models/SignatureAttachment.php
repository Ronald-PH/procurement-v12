<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SignatureAttachment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'path',
    ];

    public function user() {
        return $this->hasOne(User::class);
    }
}
