@extends('layout')
@section('title', 'الرئيسية')
@section('Page')



    <section style="margin-top: 20px; margin-bottom: 20px;">
    <div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4" >   
        <a href="{{ route('electronics.index') }}" style="text-align: right;">
            <div class="card border-0" style="width: 18rem;">
            <img src="image/home/ELIC.jpg" class="rounded-circle img-thumbnail border-0" alt="...">
            <div class="card-body">
            <h5 class="card-title">الالكترونيات ⌚</h5>
            <p class="card-text">جميع الاجهزة الالكترونية متوفرة لدينا أمنه وفعالة</p>
            </div>
            </div>
        </a>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4" style="margin-top: 10px;">
        <a href="{{ route('electrics.index') }}" style="text-align: right;">
            <div class="card border-0" style="width: 18rem;">
            <img src="image/home/Elictrce.jpg" class="rounded-circle img-thumbnail border-0" alt="...">
            <div class="card-body">
            <h5 class="card-title">الكهربائيات ⚡</h5>
            <p class="card-text">جميع الاجهزة الكهربائية متوفرة لدينا أمنه وفعالة</p>
            </div>
            </div>
        </a>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4" style="margin-top: 10px;">
        <a href="{{ route('houses.index') }}" style="text-align: right;">
            <div class="card border-0" style="width: 18rem;">
            <img src="image/home/House.jpg" class="rounded-circle img-thumbnail border-0" alt="...">
            <div class="card-body">
            <h5 class="card-title">الادوات المنزلية 🏠</h5>
            <p class="card-text">جميع الادوات المنزلية متوفرة لدينا أمنه وفعالة</p>
            </div>
            </div>
        </a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6" style="margin-top: 10px;">
        <a href="{{ route('medicals.index') }}" style="text-align: right;">
            <div class="card border-0" style="width: 18rem;">
            <img src="image/home/DOC.jpg" class="rounded-circle img-thumbnail border-0" alt="...">
            <div class="card-body">
            <h5 class="card-title">الطبية 🏥</h5>
            <p class="card-text">جميع المنتجات الطبية متوفرة لدينا أمنه وفعالة</p>
            </div>
            </div>
        </a>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6" style="margin-top: 10px;">
        <a href="{{ route('moderns.index') }}" style="text-align: right;">
            <div class="card border-0" style="width: 18rem;">
            <img src="image/home/New.jpg" class="rounded-circle img-thumbnail border-0" alt="...">
            <div class="card-body">
            <h5 class="card-title">الجديد  🤩</h5>
            <p class="card-text">جميع المنتجات الجديدة متوفرة لدينا أمنه وفعالة</p>
            </div>
            </div>
        </a>
        </div>
    </div>
    </div>
    </section>

@endsection
