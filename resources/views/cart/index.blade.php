@extends('layout')
@section('title', 'السلة')
@section('Page')
<section class="cart_area">

    <div class="container">
        <div class="row">
        <div class="col">
            @if (Session::has('error'))
            <div class="alert alert-danger">
            <span style="text-align: center; font-weight: bold;"><h4 style="text-align: center font-weight: bold; color:red;">{{Session::get('error')}}</h4>  </span>
            </div>
            @endif
            @if(count(get_cart()) > 0)
    
            <table class="table">
                <thead>
                    <th scope="col" style="width: 50%;">المنتج</th>
                    <th scope="col" style="width: 8%;">الكمية</th>
                    <th scope="col" style="width: 10%;">السعر</th>
                    <th scope="col" style="width: 22%;">المجموع</th>
                    <th scope="col" style="width: 10%;"></th>
                </thead>
                <tbody>
                    @php $total = 0; @endphp
                    @if (get_cart())
                    @foreach (get_cart() as $cart)
                        @php
                            $sub_total = data_get($cart,"product.price") * data_get($cart,"quantity");
                            $total += $sub_total;
                        @endphp
                    <tr>
                        <td>
                            @if(count(data_get($cart,'product.image')??[]))
                            <img src="{{ '/uploads/' . data_get($cart,"product.image.0") }}" class="img-fluid rounded-start" style="width:100px;">
                                </div>
                            @endif
                            <h6 style="margin-top: 10px;">{{data_get($cart,"product.name")}}</h6>
                        </td>
                        <td>
                            <h6>{{data_get($cart,"quantity")}}</h6>
                        </td>
                        <td>
                            <h6>{{number_format(data_get($cart,"product.price"))}} YER </h6>
                        </td>
                        <td>
                            <h6>{{number_format($sub_total)}} YER </h6>
                        </td>
                        <td>
                            <a href="{{route('remove',[$cart->id,$cart->user_id])}}" class="btn btn-danger btn-sm">X</a>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                    </tbody>
                    </table> 
                    <table class="table">
                        <thead>
                            <th scope="col" style="text-align: center;">إجمالي سلة المشتريات </th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <h6 scope="col" style="text-align: center;">{{number_format($total)}} YER </h6>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <form action="#">
                        <p style="text-align: center;"><a class="btn btn-outline-info btn-lg" href="{{ route('checkouts.index') }}">التقديم لإتمام الطلب </a></p>
                    </form>
                    @else
                    <h3 style="margin: 10px; font-weight: bold; text-align: center; color:blue;">سلة المشتريات فارغة حالياً</h3>
                    <p style="text-align: center; margin-top: 25px;"><a class="btn btn-outline-info btn-lg" href="{{ route('home.index') }}" style="width: 15%;">العوده الى المتجر</a></p>
                    @endif
                        </div>
                    </div>
                    </div>
</section>
@endsection


