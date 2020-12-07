@extends('layouts.master')
@section('title','Currency-Exchange Address Details Page')
@section('content')

   <!-- section -->
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
                           <h2><span class="theme_color"></span>Add Administration Adress & Detail</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
    <!-- address_form -->
    <div class="section contact_form">
        <div class="container">
            @if(count($errors)>0)
                <div class="alert-danger alert">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(\Session:: has('success'))
                <div class="alert-success alert">
                    <p>{{\Session::get('success')}}</p>
                </div>
            @endif
            <div class="row">
                <div class="col-lg-6 col-sm-12 offset-lg-3">
                    <div class="full">
                        <form class="contact_form_inner" action="/address/{{ $address->id ?? ''}}" method="post">
                            <fieldset>
                                @csrf
                                <div class="field">
                                    <input type="text" name="email" value="{{ $address->email ?? ''}}" placeholder="Your Email" required/>
                                </div>

                                <fieldset>
                                    <div class="field">
                                        <input type="text" name="phone" value="{{ $address->phone ?? ''}}" placeholder="Your Phone Number"/>
                                    </div>

                                    <div class="field">
                                        <textarea name="address" value="{{ $address->address ?? ''}}" placeholder="Address....." required>{{ $address->address ?? ''}}</textarea>
                                    </div>
                                <div class="field center">
                                    <button>SUBMIT</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end address_form -->
@endsection

</body>

</html>
