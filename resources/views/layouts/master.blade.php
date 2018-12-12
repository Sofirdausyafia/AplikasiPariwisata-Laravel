<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- ClockPicker Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('dist/bootstrap-clockpicker.min.css')}}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/mdb.min.css')}}">

    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

    <title>@yield('inititle')</title>
    <style>
      .input-group-addon {
        background-color: #eee;
        border: 1px solid #ccc;
        color: #555;
        border-radius: 0 4px 4px 0;
        padding: 6px 12px;
      }
    </style>
  </head>
  <body>
  @include('layouts.nav')
 	<main>
    @yield('isi')
  </main>

  <footer class="main-footer">
    @include('layouts.footer')
  </footer>
    <script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/mdb.min.js')}}"></script>

    <!-- ClockPicker script -->
    <script type="text/javascript" src="{{asset('dist/bootstrap-clockpicker.min.js')}}"></script>

   <!--  <script type="text/javascript">
        $('.clockpicker').clockpicker()
          .find('input').change(function(){
              // TODO: time changed
              console.log(this.value);
          });

        // $('#demo-input').clockpicker({
        //   autoclose: true
        // });
    </script> -->

    <script type="text/javascript">
      $('.clockpicker').clockpicker({
         donetext: 'Done'
      });
    </script>

  </body>
</html>