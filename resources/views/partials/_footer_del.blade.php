 {{--used by edit.blade--}}
 @section('footer')
 <script type="text/javascript">
 $( document ).ready(function() {
        
           
      
          
         $( "#myModal" ).on('shown.bs.modal', function () {
  
           $('.modal').css("display", "block");
            $('a').css('padding-right', '17px');
              var deleteName = $('#myModal').data('name');
              console.log(deleteName);
              console.log($('#js-dl-name').html(' '+deleteName));
           
          });

         //close -cancel
         $( ".js-cls-btn" ).click( function () {

          //invoiding jumping
           var deleteThis = $('#myModal').data('id');
            $('body').removeClass('modal-open'); 
            $('div.modal').css("display", "none");
            $('.modal-backdrop').remove();
        });


        // let's delete
         $( "#btn-y" ).click( function () {
            deleteThis = $('#myModal').data('id');
           
  			      var token = "{{ csrf_token() }}";
           

           $.post( '{{ url('/delete') }}'+'/'+deleteThis, { id: deleteThis,  _token: token })
.done(function( data )
{
 
  
     if (data['return']==1){
      $('body').removeClass('modal-open');
            $('div.modal').css("display", "none");
            $('.modal-backdrop').remove();
      $("h3").prepend('<p class="bg-success p-5">Toode kustutatud</p>');
        setTimeout(function(){
          window.location.href= '{{ url('/') }}';
        }, 2000);
       

     		} // data return end
			});
		});
   });
 </script>
@endsection