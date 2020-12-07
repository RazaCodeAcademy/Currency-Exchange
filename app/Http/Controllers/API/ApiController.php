<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \GuzzleHttp\Client;
use GuzzleHttp\Message\Response;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = 0;
        return view('api_data',[
            'response' => $response,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getApiData(Request $request)
    {
        if (!empty($request->base_currency)) {
            
            $client = new client();
            $base_currency = $request->base_currency;
            $currency_converted = $request->currency_converted;
            $amount = $request->amount;
            $request = $client -> get('https://api.exchangeratesapi.io/latest?base='.$base_currency.'&symbols='.$currency_converted);
            $request1 = $client -> get('https://api.exchangeratesapi.io/latest?base='.$currency_converted.'&symbols='.$base_currency);
            $response = json_decode($request->getBody(),true);
            $response1 = json_decode($request1->getBody(),true);

            foreach($response['rates'] as $key => $rates){
                $response = $rates * $amount;
                $cur_rate = $rates;
            }

            foreach($response1['rates'] as $key => $rates){
                $base_rate = $rates;
            }

            return view('exchange',[
                'response' => $response,
                'amount' => $amount,
                'base_currency' => $base_currency,
                'currency_converted' => $currency_converted,
                'cur_rate' => $cur_rate,
                'base_rate' => $base_rate,
            ]);
        } else{
            $base_currency = "USD";
            $currency_converted = "CAD";
            $amount = 1;
            $response = null;
            return view('exchange',[
                'response' => $response,
                'amount' => $amount,
                'base_currency' => $base_currency,
                'currency_converted' => $currency_converted,
            ]);
        }
    }
}
