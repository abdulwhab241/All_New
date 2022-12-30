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




      @if(count(data_get($modern,'image')??[]))
      @foreach(data_get($modern,'image') as $image)
      <a href="#"> <img src="{{ '/uploads/' . $image }}" class="img-fluid rounded-start" style="padding: 5px; width: 150px; height: 100px;"></a>
      @endforeach
      @endif

    </div>
    <div class="col-md-8">
      <div class="card-body" style="padding: 5px;">
        <h3 class="card-title" style="margin-top: 10px;"> {{ $modern['name'] }}</h3>
        <p class="card-text" style="font-weight: bold;  margin-top: 20px; "> {{ $modern['disc'] }}</p>
        <p class="card-text" style="color: blue; font-weight: bold;">السعر: {{ $modern['price'] }} YER </p>
      </div>
    </div>
    <div>
      <input type="number" name="" id="" value="1" readonly style="width: 50px; text-align: center;">
      <button class="btn btn-outline-info btn-lg "  style="cursor: pointer; border: none; margin: 10px; font-weight: bold;">إضافة الى السلة</button>    
    </div>
    {{-- <a href='#'  class="btn btn-outline-info btn-lg btn-block"  style="cursor: pointer; border: none; margin: 10px; font-weight: bold;">إضافة الى السلة</a> --}}
  </div> 
</div>   
</div>
</div>
  </div>
</section>
<section style="text-align: center; margin-bottom: 20px;">
  <h6 >
    التصنيفات: 
    <a href="{{ route('electronics.index') }}"> الالكترونيات ⌚</a> / 
    <a href="{{ route('electrics.index') }}">الكهربائيات ⚡</a> / 
    <a href="{{ route('houses.index') }}"> الادوات المنزلية 🏠</a> / 
    <a href="{{ route('medicals.index') }}"> الطبية 🏥</a> / 
    <a href="{{ route('moderns.index') }}"> الجديد🤩 </a>
  </h6>

</section>
@endsection