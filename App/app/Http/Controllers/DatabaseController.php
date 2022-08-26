<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class DatabaseController extends Controller
{
    public function pepper(Request $req)
    {
        Transaction::updateOrCreate(
            [
                "transaction_id" => $req->transaction
            ],
            [
                "status" => $req->status,
                "payment_type" => $req->payment_type,
                "cms_vendor" => $req->cms_vendor,
                "product_id" => $req->prod,
                "purchase_date" => $req->purchase_date
            ]
        );

        return response(["ok"], 200);
    }
}
