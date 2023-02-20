<html>
    <head>
        <title>Laravel Blog - @yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body style="margin:0px;">


    <!-- I will have a standard post template but then I should also have a general page template -->
    <!-- The standard post template will have a sidebar that includes "my thoughts" section  - mediavine or adroll ads should be able to slide in there as well-->
    <!-- The general page template will be used for homepage and category pages - will just use normal container class - nothing in sidebar -->



        <!-- This is the site header - how can I move this code to its own file? -->
        @section('header')
        <div style="background-color:gray">
            <div class="row">
                <div class="col-3">
                    <h2 class="my-3">RollTheBryce</h2>
                </div>
                <div class="col-3">
                    <!-- Nothing here - just for spacing -->
                </div>
                <div class="col-6">
                    <a class="me-3" href="">Technology</a>
                    <a class="me-3" href="">AI</a>
                    <a class="me-3" href="">Entrepeneurship</a>
                    <a class="me-3" href="">My Portfolio</a>
                </div>
                <!-- <div class="col-3">
                    <p>Site search????</p>
                </div> -->
                <!-- Link to socials or other links? -->
            </div>
        </div>
        @show
        <!-- This is the site header - how can I move this code to its own file? -->

        <div class="row">
            <div class="col-9">
                <div class="container">
                    @yield('content')
                </div>
            </div>


            <!-- This is the site sidebar - how can I move this code to its own file? -->
            @section('sidebar')
            <div class="col-3">
                <div class="container">
                    <div class="card">sidebar first card</div>
                    <div class="card">sidebar second card</div>
                </div>
            </div>
            @show
            <!-- This is the site sidebar - how can I move this code to its own file? -->
        </div>


        <!-- This is the site footer - how can I move this code to its own file? -->
        @section('footer')
        <div style="background-color:gray">
            <div class="row text-center">
                <h4>Footer</h4>
                <div class="col-4">
                    <p>Link 1<p>
                    <p>Link 2<p>
                    <p>Link 3<p>
                </div>
                <div class="col-4">
                    <p>Link 4<p>
                    <p>Link 5<p>
                    <p>Link 6<p>
                </div>
                <div class="col-4">
                    <p>Link 7<p>
                    <p>Link 8<p>
                    <p>Link 9<p>
                </div>
                <!-- Link to socials or other links? -->
            </div>
        </div>
        @show
        <!-- This is the site footer - how can I move this code to its own file? -->
    </body>
</html>