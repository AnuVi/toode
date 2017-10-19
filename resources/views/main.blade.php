@include('partials._header')
    <body>
         @yield('nav')
        <div class="container">
          
           
               @yield('content')


        </div>
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
 <script  src="{{URL::asset('js/app.js')}}"></script>
    @yield('footer')
    @include('partials._del_modal')
  </body>
</html>
