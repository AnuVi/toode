@extends('main')
@section('title', 'Toode')
@section('nav')
@include('partials._nav')
 @endsection
 @section('content')
    <div class="media mb-20">
        <div class="media-left pr-20">
        <a href="#">
            <img src="http://placekitten.com/140/140" alt="{{$product->name}}" width="200" height="200">
        </a>
    </div>
        <div class="media-body">
             <h3 class="prdct-ttl">{{$product->name}}
              @if (Auth::user()) 
              {{-- Admin or User? If admin let's give a chance to make changes--}}
                 @if(Auth::user()->role==0)
                 <a class="pull-right btn btn-primary" href="{{url($product->id)}}/edit" title="Muuda toodet" rel="internal" role="button">Muuda</a>
                  @endif
              @endif
            </h3>
             
             <p><span class="prc-bg text-white p-5">{{formatPrice($product->price)}}</span></p>
             <p>{{$product->description}}</p>

        </div>
        @if (Auth::user()) 
    
   </div>
    
    {{-- Admin or User?
         If admin let's give a chance to delete
     --}}
     @if(Auth::user()->role==0)
     <p class="pull-right"><a class="btn btn-danger btn-sm" id="myModal" data-name="{{$product->name}}" data-toggle="modal" title="Kustuta" data-target="#myModal" data-id="{{$product->id}}">Kustuta</a></p>
    @endif 
    <p class="inf mb-20">Lisas: {{$product->created_at->toFormattedDateString('d.m.Y')}} {{ Auth::user()->name }} </p>
    @endif 
    
    @include('partials._back_hp')

@endsection
@section('footer')
    @include('partials._footer_del')
@endsection