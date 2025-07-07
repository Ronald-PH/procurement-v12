<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'company',
        'address',
        'tin_no',
        'email',
        'contact_nos',
        'status',
    ];

    public function user() {
        return $this->hasOne(User::class);
    }
}
