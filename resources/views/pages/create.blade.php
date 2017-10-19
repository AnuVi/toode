@extends('main')
@section('title', 'Sisestamine')
@section('nav')
  @include('partials._nav')
@endsection
@section('content')
  
<form action="{{ url('/') }}/products" method="POST" role="form" enctype="multipart/form-data">
    {{ csrf_field() }}
  @include('partials._errors')
  @include('partials._form', ['nameValue'=>old('name'),'priceValue'=>old('price'), 'descValue'=>old('description'),'submitButtonText'=>'Lisa'])


</form>
@endsection