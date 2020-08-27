<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\CheckoutRequest;
use App\Model\Product;
use App\Model\Transaction;
use App\Model\TransactionDetail;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    $data = $request->except('trannsaction_details');
    $data['uuid'] = 'TRX' . mt_rand(10000, 99999) . mt_rand(100, 999);

    $transaction = Transaction::create($data);

    foreach ($request->trannsaction_details as $product) {
    	$details[] = new $transaction->id([
    		'transaction_id' => $transaction->id,
    		'product_id' => $product,
    	]);

    	Product::find($product)->decrement('quantity');
    }

    $transaction->details()->saveMany($details);

    return Respponse::success($transaction);
}
