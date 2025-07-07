<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbstractOfQuotation extends Model
{
    use HasFactory;

    protected $fillable = [
        'purchase_request_id',
        'chairperson',
        'vice_chairperson',
        'member_1',
        'member_2',
        'member_3',
    ];

    public function purchase_request() {
        return $this->hasOne(PurchaseRequest::class);
    }
}
