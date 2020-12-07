@extends('layouts.master')
@section('title','Currency-Exchange Exchange Page')
@section('content')

    <!-- Start Banner -->
    <div class="section inner_page_banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_title">
                        <h3>Exchange</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- section -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="full text_align_right_img">
                        <img src="{{ url('storage/images/img1.png') }}" alt="#" />
                    </div>
                </div>
                <div class="col-md-6 layout_padding">
                    <div class="full paddding_left_15">
                        <div class="heading_main text_align_left">
                           <h2><span class="theme_color">Exchange</span> your currency</h2>
                        </div>
                    </div>
                    <div class="full paddding_left_15">
                        <div style="background: #ff880e; padding: 25px; height: 75%; border-radius:10px;">
                            <div class=" mb-5">
                                <form action="{{ action('API\ApiController@getApiData') }}" method="get" autocomplete="off">
                                    <div class="d-flex">

                                        <div class="select-box mb-2">
                                            <label for="">From</label>
                                            <select name="base_currency">
                                                <option value="CAD" {{$base_currency == "CAD" ? 'selected' : ''}}>Canadian dollar (CAD)</option>
                                                <option value="USD" {{$base_currency == "USD" ? 'selected' : ''}}>US dollar (USD)</option>
                                                <option value="HKD" {{$base_currency == "HKD" ? 'selected' : ''}}>Hong Kong dollar (HKD)</option>
                                                <option value="ISK" {{$base_currency == "ISK" ? 'selected' : ''}}>Icelandic krona (ISK)</option>
                                                <option value="PHP" {{$base_currency == "PHP" ? 'selected' : ''}}>Philippine peso (PHP)</option>
                                                <option value="DKK" {{$base_currency == "DKK" ? 'selected' : ''}}>Danish krone (DKK)</option>
                                                <option value="HUF" {{$base_currency == "HUF" ? 'selected' : ''}}>Hungarian forint (HUF)</option>
                                                <option value="CZK" {{$base_currency == "CZK" ? 'selected' : ''}}>Czech koruna (CZK)</option>
                                                <option value="AUD" {{$base_currency == "AUD" ? 'selected' : ''}}>Australian dollar (AUD)</option>
                                                <option value="RON" {{$base_currency == "RON" ? 'selected' : ''}}>Romanian leu (RON)</option>
                                                <option value="SEK" {{$base_currency == "SEK" ? 'selected' : ''}}>Swedish krona (CAD)</option>
                                                <option value="IDR" {{$base_currency == "IDR" ? 'selected' : ''}}>Indonesian rupiah (IDR)</option>
                                                <option value="INR" {{$base_currency == "INR" ? 'selected' : ''}}>Indian rupee (INR)</option>
                                                <option value="BRL" {{$base_currency == "BRL" ? 'selected' : ''}}>Brazilian real (BRL)</option>
                                                <option value="RUB" {{$base_currency == "RUB" ? 'selected' : ''}}>Russian rouble (RUB)</option>
                                                <option value="HRK" {{$base_currency == "HRK" ? 'selected' : ''}}>Croatian kuna (HRK)</option>
                                                <option value="JPY" {{$base_currency == "JPY" ? 'selected' : ''}}>Japanese yen (JPY)</option>
                                                <option value="THB" {{$base_currency == "THB" ? 'selected' : ''}}>Thai baht (THB)</option>
                                                <option value="CHF" {{$base_currency == "CHF" ? 'selected' : ''}}>Swiss franc (CHF)</option>
                                                <option value="SGD" {{$base_currency == "SGD" ? 'selected' : ''}}>Singapore dollar (SGD)</option>
                                                <option value="PLN" {{$base_currency == "PLN" ? 'selected' : ''}}>Polish zloty (PLN)</option>
                                                <option value="BGN" {{$base_currency == "BGN" ? 'selected' : ''}}>Bulgarian lev (BGN)</option>
                                                <option value="TRY" {{$base_currency == "TRY" ? 'selected' : ''}}>Turkish lira (TRY)</option>
                                                <option value="CNY" {{$base_currency == "CNY" ? 'selected' : ''}}>Chinese yuan renminbi (CNY)</option>
                                                <option value="NOK" {{$base_currency == "NOK" ? 'selected' : ''}}>Norwegian krone (NOK)</option>
                                                <option value="NZD" {{$base_currency == "NZD" ? 'selected' : ''}}>New Zealand dollar (NZD)</option>
                                                <option value="ZAR" {{$base_currency == "ZAR" ? 'selected' : ''}}>South African rand (ZAR)</option>
                                                <option value="MXN" {{$base_currency == "MXN" ? 'selected' : ''}}>Mexican peso (MXN)</option>
                                                <option value="ILS" {{$base_currency == "ILS" ? 'selected' : ''}}>Israeli shekel (ILS)</option>
                                                <option value="PBG" {{$base_currency == "PBG" ? 'selected' : ''}}>Pound sterling (PBG)</option>
                                                <option value="KRW" {{$base_currency == "KRW" ? 'selected' : ''}}>South Korean won (KRW)</option>
                                                <option value="MYR" {{$base_currency == "MYR" ? 'selected' : ''}}>Malaysian ringgit (MYR)</option>
                                            </select>
                                        </div>
                                        <div class="select-box mb-2 ml-1">
                                            <label for="">To</label>
                                            <select name="currency_converted">
                                                <option value="CAD" {{$currency_converted == "CAD" ? 'selected' : ''}}>Canadian dollar (CAD)</option>
                                                <option value="USD" {{$currency_converted == "USD" ? 'selected' : ''}}>US dollar (USD)</option>
                                                <option value="HKD" {{$currency_converted == "HKD" ? 'selected' : ''}}>Hong Kong dollar (HKD)</option>
                                                <option value="ISK" {{$currency_converted == "ISK" ? 'selected' : ''}}>Icelandic krona (ISK)</option>
                                                <option value="PHP" {{$currency_converted == "PHP" ? 'selected' : ''}}>Philippine peso (PHP)</option>
                                                <option value="DKK" {{$currency_converted == "DKK" ? 'selected' : ''}}>Danish krone (DKK)</option>
                                                <option value="HUF" {{$currency_converted == "HUF" ? 'selected' : ''}}>Hungarian forint (HUF)</option>
                                                <option value="CZK" {{$currency_converted == "CZK" ? 'selected' : ''}}>Czech koruna (CZK)</option>
                                                <option value="AUD" {{$currency_converted == "AUD" ? 'selected' : ''}}>Australian dollar (AUD)</option>
                                                <option value="RON" {{$currency_converted == "RON" ? 'selected' : ''}}>Romanian leu (RON)</option>
                                                <option value="SEK" {{$currency_converted == "SEK" ? 'selected' : ''}}>Swedish krona (CAD)</option>
                                                <option value="IDR" {{$currency_converted == "IDR" ? 'selected' : ''}}>Indonesian rupiah (IDR)</option>
                                                <option value="INR" {{$currency_converted == "INR" ? 'selected' : ''}}>Indian rupee (INR)</option>
                                                <option value="BRL" {{$currency_converted == "BRL" ? 'selected' : ''}}>Brazilian real (BRL)</option>
                                                <option value="RUB" {{$currency_converted == "RUB" ? 'selected' : ''}}>Russian rouble (RUB)</option>
                                                <option value="HRK" {{$currency_converted == "HRK" ? 'selected' : ''}}>Croatian kuna (HRK)</option>
                                                <option value="JPY" {{$currency_converted == "JPY" ? 'selected' : ''}}>Japanese yen (JPY)</option>
                                                <option value="THB" {{$currency_converted == "THB" ? 'selected' : ''}}>Thai baht (THB)</option>
                                                <option value="CHF" {{$currency_converted == "CHF" ? 'selected' : ''}}>Swiss franc (CHF)</option>
                                                <option value="SGD" {{$currency_converted == "SGD" ? 'selected' : ''}}>Singapore dollar (SGD)</option>
                                                <option value="PLN" {{$currency_converted == "PLN" ? 'selected' : ''}}>Polish zloty (PLN)</option>
                                                <option value="BGN" {{$currency_converted == "BGN" ? 'selected' : ''}}>Bulgarian lev (BGN)</option>
                                                <option value="TRY" {{$currency_converted == "TRY" ? 'selected' : ''}}>Turkish lira (TRY)</option>
                                                <option value="CNY" {{$currency_converted == "CNY" ? 'selected' : ''}}>Chinese yuan renminbi (CNY)</option>
                                                <option value="NOK" {{$currency_converted == "NOK" ? 'selected' : ''}}>Norwegian krone (NOK)</option>
                                                <option value="NZD" {{$currency_converted == "NZD" ? 'selected' : ''}}>New Zealand dollar (NZD)</option>
                                                <option value="ZAR" {{$currency_converted == "ZAR" ? 'selected' : ''}}>South African rand (ZAR)</option>
                                                <option value="MXN" {{$currency_converted == "MXN" ? 'selected' : ''}}>Mexican peso (MXN)</option>
                                                <option value="ILS" {{$currency_converted == "ILS" ? 'selected' : ''}}>Israeli shekel (ILS)</option>
                                                <option value="PBG" {{$currency_converted == "PBG" ? 'selected' : ''}}>Pound sterling (PBG)</option>
                                                <option value="KRW" {{$currency_converted == "KRW" ? 'selected' : ''}}>South Korean won (KRW)</option>
                                                <option value="MYR" {{$currency_converted == "MYR" ? 'selected' : ''}}>Malaysian ringgit (MYR)</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="d-flex">
                                        <div class="input-box mt-2">
                                            <label for="">Amount</label><br>
                                            <input type="number" name="amount" value="{{$amount}}" placeholder="Enter Your Currency Ammount" class="mb-2">
                                            <input type="submit" value="Exchange Currency" class="mb-2">
                                        </div>
                                    </div>
                                </form>
                                <div class="detail-rates">
                                    @if ($response)
                                        <strong class="base_currency">{{$amount}} {{$base_currency}} = </strong>
                                        <div class="d-flex align-items-baseline pl-5">
                                            <h1 class="text-white"> {{round($response,2)}} </h1>
                                            <strong class="pl-2 coverted_currency"> {{$currency_converted}} </strong>
                                        </div>
                                        <strong class="font-bold">1 {{$currency_converted}} = {{$base_rate}} {{$base_currency }}</strong><br>
                                        <strong class="font-bold">1 {{$base_currency }} = {{$cur_rate}} {{$currency_converted}}</strong>
                                    @else
                                    <!-- There are no results, show the form maybe? -->
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

    </body>

    </html>
