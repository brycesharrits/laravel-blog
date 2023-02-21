<html>
    <head>
        <title>Laravel Blog - @yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body style="margin:0px;">


    <!-- I will have a standard post template but then I should also have a general page template -->
    <!-- The standard post template will have a sidebar that includes "my thoughts" section  - mediavine or adroll ads should be able to slide in there as well-->
    <!-- The general page template will be used for homepage and category pages - will just use normal container class - nothing in sidebar -->

        @include('layouts.header')

        <div class="row">
            <div class="col-9">
                <div class="container">
                    @yield('content')
                </div>
            </div>

            @include('layouts.sidebar-my-thoughts')
        </div>

        @include('layouts.footer')
    </body>
</html>