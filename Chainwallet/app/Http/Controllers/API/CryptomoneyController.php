<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\crypto_money;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class CryptomoneyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(crypto_money $crypto_money)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(crypto_money $crypto_money)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, crypto_money $crypto_money)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(crypto_money $crypto_money)
    {
        //
    }
    public function saveDataToDB(Request $request)
    {
        // API'ye istek gönderme
        $marketapikey = env('MARKET_API_KEY');
        $response = Http::withHeaders([
            'X-CMC_PRO_API_KEY' => $marketapikey,
        ])->get('https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest');

        // API'den gelen verileri diziye dönüştürme
        $data = json_decode($response->body(), true);

        // Her bir kripto para birimi için veri tabanına kaydetme
        foreach ($data['data'] as $item) {
            $cryptoMoney = new crypto_money([
                'name' => $item['name'],
                'symbol' => $item['symbol'],
                'max_supply' => $item['max_supply'],
                'circulating_supply' => $item['circulating_supply'],
                'total_supply' => $item['total_supply'],
                'platform' => $item['platform'],
                'price' => $item['quote']['USD']['price']
            ]);
            $cryptoMoney->save();
        }
    }
}
