 {{--used by edit.blade--}}
 @section('footer')
 <script type="text/javascript">
 $( document ).ready(function() {

         $( "form" ).submit( function (e) {
          e.preventDefault();
         
          
          
          var serForm = $("form").serialize();
    
  			 
  			 $.ajax({
            method: "POST",
            url: '{{ url('/') }}' + "/products/"+'{{$product->id}}',
            data: serForm,
            dataType: 'json',
            success: function(data) {
                console.log(data);
                $("h1").addClass('bg-success p-5');
                $("#js-txt-chng").text(data.msg);
                $("#js-val-chng").text(data.val);
                $("p.bg-danger").remove();
                setTimeout(function(){
                  $("h1").removeClass('bg-success p-5');
                   $("#js-txt-chng").text("Muuda toodet: ");
                }, 2000);
                
            },
            error: function(e) {
               $("p.bg-danger").remove();
               var message = JSON.parse(e.responseText);
               if(message.name!=undefined){
                  var m = message.name;
               }

               if(message.price!=undefined){
                  var m = message.price;
               }

               if(message.description!=undefined){
                  var m = message.description;
               }
               

               

                  $('form').prepend('<p class="bg-danger p-5">'+m+'</p>');
              
                
               
            }
        });
		});
   });
 </script>