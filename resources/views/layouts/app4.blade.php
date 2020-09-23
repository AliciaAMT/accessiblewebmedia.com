<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Accessible Web Media" />
    <meta name="author" content="Alicia Taylor" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!--<script src="{{ asset('js/app.js') }}" defer></script>-->

    <!-- Fonts -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" async />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous" async></script>
       
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" async rel="stylesheet" type="text/css" />
         <!-- Google fonts
         <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" async />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" async />
         Core theme CSS (includes Bootstrap)-->
        
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    @PWA

    </head>
    <body id="page-top">
        <div id="app">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: rgba(0, 0, 0, 0.9);">
                <div class="container">
                    <a class="navbar-brand js-scroll-trigger" href="/" style="font-family: Lucida Grande,Lucida Sans Unicode,Lucida Sans,Geneva,Verdana,sans-serif; color: #37fbe7;">Accessible Web Media</a>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        Menu
                        <i class="fas fa-bars ml-1"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav text-uppercase ml-auto">

 <!-- Authentication Links -->
 @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" style="background-color: #000000;" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/home">Dashboard</a>
                            </li>
                            @if (Auth::user()->role=='Administrator')
                            <li class="nav-item">
                                <a class="nav-link" href="/admin">Admin</a>
                            </li>
                            @endif
                           
                        @endguest
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/#services">Services</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <main class="py-4">
                @yield('content')
            </main>

            <!-- Footer-->
            <footer class="footer py-4">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 text-lg-left">Copyright © Accessible Web Media 2020</div>
                        <div class="col-lg-4 my-3 my-lg-0">
                        </div>
                        <div class="col-lg-4 text-lg-right">
                            <a href="/credits">Image Credits</a>
                        </div>
                    </div>
                </div>
            

            </footer>
            <!-- Bootstrap core JS-->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
            <!-- Third party plugin JS-->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
            <!-- Contact form JS-->
            <script src="{{ asset('assets/mail/jqBootstrapValidation.js') }}"></script>
            
            <script>
                $(document).ready(function(){
                    $("#editUserForm input,#editUserForm select,#editUserForm button").jqBootstrapValidation({
                        preventSubmit: true,
                        submitError: function ($form, event, errors) {
                            // additional error messages or events
                        },
                        submitSuccess: function ($form, event) {
                            event.preventDefault(); // prevent default submit behaviour
                            // get values from FORM
                            var role = $("select#role").val();
                            var name = $("input#name").val();
                            var email = $("input#email").val();
                            var phone = $("input#phone").val();
                            var street = $("input#street").val();
                            var apartment = $("input#apartment").val();
                            var street = $("input#street").val();
                            var city = $("input#city").val();
                            var state = $("input#state").val();
                            var zip = $("input#zip").val();
                            var firstName = name; // For Success/Failure Message
                            // Check for white space in name for Success/Fail message
                            if (firstName.indexOf(" ") >= 0) {
                                firstName = name.split(" ").slice(0, -1).join(" ");
                            }
                            $this = $("#editUserButton");
                            $this.prop("disabled", true); // Disable submit button until AJAX call is complete to prevent duplicate messages
                        
                                $.ajaxSetup({
                                    headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                    }
                                });

                            
                            $.ajax({
                                url: "/users/{{ $user->id }}",
                                type: "POST",
                                data: {
                                    role: role,
                                    phone: phone,
                                    name: name,
                                    email: email,
                                    street: street,
                                    apartment: apartment,
                                    city: city,
                                    state: state,
                                    zip: zip,
                                    _token: '{!! csrf_token() !!}',
                                    _method: 'PATCH',
                                },
                                cache: false,
                                success: function () {
                                    // Success message
                                    $("#success").html("<div class='alert alert-success'>");
                                    $("#success > .alert-success")
                                        .html(
                                            "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;"
                                        )
                                        .append("</button>");
                                    $("#success > .alert-success").append(
                                        "<strong>User update successful. </strong>"
                                    );
                                    $("#success > .alert-success").append("</div>");
                                    //clear all fields
                                    //$("#editUserForm").trigger("reset");
                                },
                                error: function () {
                                    // Fail message
                                    $("#success").html("<div class='alert alert-danger'>");
                                    $("#success > .alert-danger")
                                        .html(
                                            "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;"
                                        )
                                        .append("</button>");
                                    $("#success > .alert-danger").append(
                                        $("<strong>").text(
                                            "Sorry something went wrong. Please try again later!"
                                        )
                                    );
                                    $("#success > .alert-danger").append("</div>");
                                    //clear all fields
                                    $("#editUserForm").trigger("reset");
                                },
                                complete: function () {
                                    setTimeout(function () {
                                        $this.prop("disabled", false); // Re-enable submit button when AJAX call is complete
                                    }, 1000);
                                },
                            });
                        },
                        filter: function () {
                            return $(this).is(":visible");
                        },
                    });

                    $('a[data-toggle="tab"]').click(function (e) {
                        e.preventDefault();
                        $(this).tab("show");
                    });
                });

                /*When clicking on Full hide fail/success boxes */
                $("#name").focus(function () {
                    $("#success").html("");
                });

            </script>
            <!-- Core theme JS-->
            <script src="{{asset('js/scripts.js')}}"></script>
           
        </div>
    </body>
</html>