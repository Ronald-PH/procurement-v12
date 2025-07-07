<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApprovalRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'purchase_request_id',
        'remarks',
    ];

    public function user() {
        return $this->hasOne(User::class);
    }
    public function purchase_request() {
        return $this->hasOne(PurchaseRequest::class);
    }
}
