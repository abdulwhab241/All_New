@extends('layout')
@section('title', ' نتائج البحث')
@section('Page')
<link rel="stylesheet" href="css/Elec.css">

<section>
    <div class="container">
    <div class="row">
    <div class="col">
                    {{-- @if(count($posts) > 0) --}}
                    <ul>
                    
                    @foreach($posts as $house)
                    <a href="{{ route('houses.show', ['house' => $house['id']]) }}">
                    <li>
                    <div class="card border-0" style="width: 15rem;">
                        <img class="card-img-top" src="{{ '/uploads/' . data_get($house,"image.0") }}" >
                        <div class="card-body">
                        <h5 class="card-title"> {{ $house->name }}</h5>
                        <p class="card-text"> السعر: {{ $house->price }} YER</p>
                        </div>
                    </div>
                    </li>
                    </a>
                    @endforeach
                    </ul>
                    {{-- {{ $posts->links() }} --}}
                    {{-- @else
                    <p>There are no House to display.</p>
                    @endif --}}
    </div>
    </div>
    </div>
    </section>
    @endsection