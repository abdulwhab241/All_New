@extends('layout')
@section('title', ' الكهربائيات')
@section('Page')
<link rel="stylesheet" href="css/Elec.css">
    <section class="blog-banner-area" id="contact">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>الكهربائيات</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('home.index') }}">الرئيسية</a></li>
              <li class="breadcrumb-item active" aria-current="page">الكهربائيات</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
  <section>
  <div class="container">
  <div class="row">
    <div class="col">
                @if(count($electrics) > 0)
                <ul>
            
                @foreach($electrics as $electric)
                <a href="{{ route('electrics.show', ['electric' => $electric['category_id']]) }}">
                <li>
                <div class="card border-0" style="width: 15rem;">
                  <img class="card-img-top" src="{{ '/uploads/' . data_get($electric,"image.0") }}" >
                  <div class="card-body">
                    <h5 class="card-title"> {{ $electric->name }}</h5>
                    <p class="card-text"> السعر: {{ $electric->price }} YER</p>
                  </div>
                </div>
                </li>
                </a>
                @endforeach
                </ul>
                <div class="d-flex justify-content-center">
                {{ $electrics->links() }}
                </div>
                @else
                <h3 style="margin: 10px;">لا يوجد منتجات لعرضها</h3>
                @endif
    </div>
  </div>
</div>
</section>
@endsection



