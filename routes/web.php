<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;

Route::get('/', function () {
    return view('event');
});

Route::post('/pay', function (Request $request) {

    Config::$serverKey = env('MIDTRANS_SERVER_KEY');
    Config::$isProduction = false;
    Config::$isSanitized = true;
    Config::$is3ds = true;

    $params = [
        'transaction_details' => [
            'order_id' => 'ORDER-' . time(),
            'gross_amount' => (int)$request->price,
        ],
        'customer_details' => [
            'first_name' => $request->name,
            'email' => $request->email,
        ],
        'callbacks' => [
            'finish' => 'http://127.0.0.1:8000'
        ]
    ];

    return response()->json([
        'token' => Snap::getSnapToken($params)
    ]);
});