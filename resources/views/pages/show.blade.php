@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <div class="bg-black text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>

                        <img class="my-img" src="{{$product['thumb']}}" alt="{{$product['title']}}" />
                        <div>
                            <p>{{$product['series']}}</p>
                            <p>{{$product['description']}}</p>
                            <p>GENRE: {{$product['type']}} | NAME: {{$product['title']}} </p>
                            <p>PRICE: {{$product['price']}}</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-primary text-white py-5">
        <div class="container">
            <div class="row">
                @foreach ($hyper as $option)
                <div class="d-flex align-items-center col gap-2 m-0 px-2">
                    <div class="div-img">
                        <img src="{{$option['img']}}" alt="{{$option['text']}}" />
                    </div>
                    <a href="#"> {{ $option['text'] }}</a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="final-one">
        <div class="container">
            <div class="row">
                <div>

                </div>
            </div>
        </div>
    </div>
</main>
@endsection