@extends('main')
@section('title', 'Muuda')
@section('nav')
  @include('partials._nav')
@endsection
@section('content')

 <h1><span id="js-txt-chng">Muuda toodet: </span><span id="js-val-chng"> {{$product->name}}</span></h1>
<form action="{{ url('/') }}/products/{{$product->id}}" method="POST" role="form">
    {{method_field('PATCH')}}
     {{ csrf_field() }}
  @include('partials._errors')
  @include('partials._form', ['nameValue'=>$product->name,'priceValue'=>$product->price, 'descValue'=>$product->description,'submitButtonText'=>'Muuda'])


</form>

@include('partials._back_hp')
@endsection
@section('footer')
 @include('partials._footer_ajax')
@endsection