{{--used by welcome.blade--}}

 @section('footer')
 <script type="text/javascript">
 $( document ).ready(function() {
          // c
          $('.js-del').click(function(e){
          e. preventDefault();
        
              var deleteThis= $(this).data('id');
              var token = "{{ csrf_token() }}";
              if (confirm('Kas oled kindel, et kustutada?')) {
                
                 $.post( '{{ url('/delete') }}'+'/'+deleteThis, { id: deleteThis,  _token: token })
                  .done(function( data )
                  {
                   
                    
                       if (data['return']==1){
                          alert("Toode kustutatud!")
                          setTimeout(function(){
                            window.location.href= '{{ url('/') }}';
                          }, 500);
                          }
                        });
                
            } else {
              // Do nothing!
            } 
      });     
		
   });
 </script>
@endsection