@extends('layout')
@section('title', 'المنتج')
@section('Page')
<section style="margin-top: 10px; margin-bottom:10px;">
  <div class="container" >
  <div class="row">
    <div class="col">
    <div class="card mb-3 border-0" style="width: 100%; margin: 5px;  padding:5px; background: #F1F6F7;">
  <div class="row g-0">
    <div class="col-md-4">
      @if (Session::has('message'))
      <div class="alert alert-info">
        <span style="text-align: center; font-weight: bold;"> {{Session::get('message')}} </span>
      </div>
      @endif
      @if(count(data_get($electronic,'image')??[]))
      @foreach(data_get($electronic,'image') as $image)
      <img src="{{ '/uploads/' . $image }}" class="img-fluid rounded-start" style="padding: 5px; width:150px; height:100px;">
      @endforeach
      @endif
    </div>
    <div class="col-md-8">
      <div class="card-body" style="padding: 5px;">
        <h3 class="card-title" style="margin-top: 10px;"> {{ $electronic['name'] }}</h3>
        <p class="card-text" style="font-weight: bold;  margin-top: 20px; "> {{ $electronic['disc'] }}</p>
        <p class="card-text" style="color: blue; font-weight: bold;">السعر: {{ $electronic['price'] }} YER </p>
      </div>
      <form action="{{ route('add',$electronic['id']) }}" method="POST">
        @csrf
          <div>
          <input type="number" name="quantity" min="1" value="1" style="width: 50px; text-align: center; padding:5px;">
          <input type="submit" class="btn btn-outline-info btn-lg " value="إضافة الى السلة" style="cursor: pointer; border: none; margin: 10px; font-weight: bold;">   
        </div>
      </form>
      </div>
  </div> 
</div>   
</div>
</div>
</section>
<section style="text-align: center; margin-bottom: 20px;">
  <h6 style="text-align: center;">
    <a href="{{ route('electronics.index') }}"> الالكترونيات ⌚</a> / 
    <a href="{{ route('electrics.index') }}">الكهربائيات ⚡</a> / 
    <a href="{{ route('houses.index') }}"> الادوات المنزلية 🏠</a> / 
    <a href="{{ route('medicals.index') }}"> الطبية 🏥</a> / 
    <a href="{{ route('moderns.index') }}"> الجديد🤩 </a>
  </h6>
</section>
@endsection