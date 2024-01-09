@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <div class="bg-black text-white py-5">
        <div class="container">
            <button class="btn btn-primary"><a href="{{route('comics.create')}}">Create new</a></button>
            @if(session()->has('message'))
            <div class="alert alert-success">{{ session()->get('message') }}</div>
            @endif
            <div class="row">
                @foreach ($comics as $comic)
                @include('partials.card')
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                <button class="my-2">LOAD MORE</button>
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