@extends('layout')
@section('title', ' الادوات المنزلية')
@section('Page')
<link rel="stylesheet" href="css/Elec.css">
    <section class="blog-banner-area" id="contact">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>الادوات المنزلية</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('home.index') }}">الرئيسية</a></li>
              <li class="breadcrumb-item active" aria-current="page">الادوات المنزلية</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
  <section>
  <div class="container">

    {{-- <form action="{{ route('houses.search') }}" method="GET">
    <!-- Start Filter Bar -->
    <div class="filter-bar d-flex flex-wrap align-items-center" style="margin-top: 20px;">
        <div class="input-group filter-bar-search">
          <input type="text" placeholder="ابحث عن المنتج" name="search" style="font-size: 16px;">
          <div class="input-group-append">
            <button type="button"><i class="ti-search"></i></button>
          </div>
        </div>
    </div>
    <!-- End Filter Bar -->
    </form> --}}


  <div class="row">
    <div class="col">
                @if(count($houses) > 0)
                <ul>
              
                @foreach($houses as $house)
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
                <div class="d-flex justify-content-center">
                {{ $houses->links() }}
                </div>
                @else
                <h3 style="margin: 10px; font-weight: bold; text-align: center;">لا يوجد منتجات لعرضها</h3>
                @endif
    </div>
  </div>
</div>
</section>
@endsection


