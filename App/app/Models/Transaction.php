<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        "transaction_id",
        "status",
        "payment_type",
        "cms_vendor",
        "product_id",
        "amount",
        "purchase_date",
    ];
}
