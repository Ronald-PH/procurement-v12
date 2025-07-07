<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseRequestAttachment extends Model
{
    use HasFactory;

    protected $fillable = [
        'purchase_request_id',
        'path',
        'name',
    ];
    
    public function purchase_request() {
        return $this->hasOne(PurchaseRequest::class);
    }
}
