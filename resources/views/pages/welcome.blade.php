 @extends('main')
 @section('title', 'Tooted')
 @section('nav')
	@include('partials._nav')
 @endsection
 @section('content')
 {{--layout for--}}	
	<?php $i = 0;?>
  	@foreach($products as $product)
  	  @if($i==0)
			  <div class="row">
	   @endif
  
		  		<div class="col-md-3 my-20 text-center">
		  				<a class="n-lnk" href="products/{{$product->id}}"  role="button" title="Vaata lähemalt {{$product->name}}" rel="internal">
                {{--Admin can delete--}}
                @if(Auth::user() && Auth::user()->role==0)
		    			<p>
		  					<object><a class="inv-del text-danger pull-left js-del" data-id="{{($product->id)}}" title="Kustuta" rel="internal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
		  					  </object></p>
		  	   @endif
		  			<h3 class="mb-20 prdct-ttl">{{$product->name}} </h3>
		  					          <img class="img-square mb-20" src="http://placekitten.com/140/140" alt="{{$product->name}}" width="140" height="140">     
		  					          <p class="text-white"><span class="prc-bg p-5">{{formatPrice($product->price)}} €</span></p>
		  					          <p class="text-justify">{{limitText($product->description,80)}}</p></a>
		          <p><a class="btn btn-default" href="products/{{$product->id}}"  role="button" title="{{$product->name}}" rel="internal">Vaata lähemalt »</a></p>
		          {{--Admin can edit--}}
		          @if(Auth::user() && Auth::user()->role==0)
		          	<p><a class="text-success" href="{{url($product->id)}}/edit" title="Muuda toodet" rel="internal"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></p>
		          @endif
		          	 
		       </div>  

		       @if($i==3)
				
		  	   </div>
               <?php $i=0;?>
               @else <?php $i++;?> 
 			  @endif
		     
   	@endforeach
 @endsection
 @section('footer')
 	@include('partials._footer_del_front')
 @endsection
 
                
                  
             

               
               
    

