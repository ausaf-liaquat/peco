<!DOCTYPE html>

<html lang="">

<head>
    <title>{{ config('app.name') }} - @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="{{ url('') }}/assets/css/layout.css" rel="stylesheet" type="text/css" media="all">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>
        a {
            text-decoration: none;
        }
        .parsley-required{
            color: red;
        }
    </style>
    @yield('css')
</head>

<body id="top">
    @section('header')
        @include('layouts.header')
    @show
    @yield('content')

    @section('footer')
        @include('layouts.footer')
    @show
    <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
    <!-- JAVASCRIPTS -->
    <script src="{{ url('') }}/assets/js/jquery.min.js"></script>
    <script src="{{ url('') }}/assets/js/jquery.backtotop.js"></script>
    <script src="{{ url('') }}/assets/js/jquery.mobilemenu.js"></script>
    <script src="{{ url('') }}/assets/js/jquery.flexslider-min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <script>
        $(function() {
            var current = location.pathname;
            $('#mainav li a').each(function() {
              
                var $this = $(this);
                console.log($this);
                // if the current path is like this link, make it active
                if ($this.attr('href').indexOf(current) !== -1) {
                    $this.addClass('active');
                }
            })
        })
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>
      $('form').parsley();
</script>

</body>

</html>
