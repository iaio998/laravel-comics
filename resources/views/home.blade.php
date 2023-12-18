@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main class="py-5 bg-black text-white">
    <div class="container">
        <div class="row">
            @foreach ($product as $comic)
            <div class="col-2">
                <div>
                    <img class="my-img" src="{{$comic['thumb']}}" alt="{{$comic['title']}}" />
                    <div>
                        <p>{{$comic['series']}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</main>
@endsection