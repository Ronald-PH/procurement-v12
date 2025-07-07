<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'purchase_request_no',
        'rc_code',
        'fund_cluster',
        'purpose',
        'description',
        'purchase_request_date',
        'requested_id',
        'supply_id',
        'recommending_id',
        'approval_id',
        'requested_status',
        'supply_status',
        'recommending_status',
        'approval_status',
        'cancel_status',
        'status_remarks',
        'request_number',
        'requested_designation',
        'recommending_designation',
        'approval_designation',
        'total_items',
        'purchase_remarks',
    ];

    public function user() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    public function requested() {
        return $this->hasOne(User::class, 'id', 'requested_id');
    }
    public function supply() {
        return $this->hasOne(User::class, 'id', 'supply_id');
    }
    public function recommending() {
        return $this->hasOne(User::class, 'id', 'recommending_id');
    }
    public function approval() {
        return $this->hasOne(User::class, 'id', 'approval_id');
    }
}
