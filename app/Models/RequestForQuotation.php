<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestForQuotation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'purchase_request_id',
        'request_for_quotation_no',
        'mode_of_procurement',
        'spo_id',
        'bac_id',
        'spo_status',
        'bac_status',
        'print_status',
        'canvassing_status',
        'cancel_status',
        'remarks',
    ];

    public function user() {
        return $this->hasOne(User::class);
    }
    public function spo() {
        return $this->hasOne(User::class, 'id', 'spo_id');
    }
    public function bac() {
        return $this->hasOne(User::class, 'id', 'bac_id');
    }
    public function purchase_request() {
        return $this->hasOne(PurchaseRequest::class);
    }
}
