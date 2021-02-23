<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/css/doc.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/developers.convert.css') }}" />
    @stack('styles')
</head>

<body>
    <div class="top-menu">
        <div class="container">
            <ul id="topMenu">
                <li>
                    <a class="link-top" href="https://heyhi.sg/partner/login">Organization</a>
                </li>
                <li>
                    <a class="link-top" href="https://heyhi.sg/heyhidemo">Book a demo</a>
                </li>
            </ul>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand pr-3" href="/">
                <img src="{{ asset('/img/logo.png') }}" alt="Logo">
            </a>
            <button class=" menu-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="animated-button">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item pr-3">
                        <a class="btn-menu menu-link" href="https://www.heyhi.sg/pricing">Pricing</a>
                    </li>
                    <li class="nav-item pr-3">
                        <a class="btn-menu menu-link" href="https://blog.heyhi.sg">Blog</a>
                    </li>
                    <li class="nav-item pr-3">
                        <a class="btn-menu menu-link" href="https://www.heyhi.sg/app">Join meeting</a>
                    </li>
                    <li class="nav-item pr-3">
                        <a class="btn-menu menu-link" href="https://www.heyhi.sg/user/login">Login / Signup</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn-menu btn-active menu-link" href="https://www.heyhi.sg/create">Try us now</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- <nav class="bd-subnavbar py-2" aria-label="Secondary navigation">
    <div class="container-xxl d-flex align-items-md-center">
        <button class="btn bd-sidebar-toggle d-md-none py-0 px-1 ms-3 order-3 collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#bd-docs-nav" aria-controls="bd-docs-nav"
                aria-expanded="false" aria-label="Toggle docs navigation">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="bi bi-expand" fill="currentColor"
                 viewBox="0 0 16 16">
                <title>Expand</title>
                <path fill-rule="evenodd"
                      d="M1 8a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 8zM7.646.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 1.707V5.5a.5.5 0 0 1-1 0V1.707L6.354 2.854a.5.5 0 1 1-.708-.708l2-2zM8 10a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 14.293V10.5A.5.5 0 0 1 8 10z"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="bi bi-collapse" fill="currentColor"
                 viewBox="0 0 16 16">
                <title>Collapse</title>
                <path fill-rule="evenodd"
                      d="M1 8a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 8zm7-8a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 4.293V.5A.5.5 0 0 1 8 0zm-.5 11.707l-1.146 1.147a.5.5 0 0 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 11.707V15.5a.5.5 0 0 1-1 0v-3.793z"/>
            </svg>
            Menu
        </button>
    </div>
</nav> --}}
    <div class="container-xxl my-md-4 bd-layout">
        <aside class="bd-sidebar">
            <nav class="collapse bd-links" id="bd-docs-nav" aria-label="Docs navigation">
                <ul class="list-unstyled mb-0 py-3 pt-md-1">
                    <li class="mb-1">
                        <a href="/#getting-started" class="d-inline-flex align-items-center">Getting started</a>
                    </li>
                    <li class="mb-1">
                        <a href="/#authentication" class="d-inline-flex align-items-center">Authentication</a>
                    </li>
                    <li class="mb-1">
                        <a href="/#custom-plan" class="d-inline-flex align-items-center">Custom plan</a>
                    </li>
                    <li class="mb-1">
                        <a href="/#meeting" class="d-inline-flex align-items-center">Meeting</a>
                    </li>
                    <li class="mb-1">
                        <a href="/#user" class="d-inline-flex align-items-center">User</a>
                    </li>
                    <li class="mb-1">
                        <a href="/#sso" class="d-inline-flex align-items-center">SSO</a>
                    </li>
                    <li class="mb-1">
                        <a href="/#embedded-whiteboard" class="d-inline-flex align-items-center">Embedded whiteboard</a>
                    </li>
                </ul>
            </nav>
        </aside>
        <!-- left sidebar -->
        <main class="bd-main order-1">
            <div class="bd-content ps-lg-4">
                @yield('content')
            </div>
        </main>
    </div>

    <div class="container-fluid footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="privacy-menu">
                        <div>
                            <ul>
                                <li>
                                    <a href="https://www.heyhi.sg/faq">Faq</a>
                                </li>
                                <li>
                                    <a href="https://www.heyhi.sg/privacy">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="https://www.heyhi.sg/terms">Terms & Conditions</a>
                                </li>
                            </ul>
                        </div>
                        <div class="follow-social">
                            Follow us on <a target="_blank"
                                href="https://www.facebook.com/Heyhi-Online-classroom-with-interactive-whiteboard-110616413906823">Facebook</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="{{ asset('/js/bootstrap.bundle.js') }}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script>
        $('.menu-button').on('click', function() {
            $('.animated-button').toggleClass('open');
        });
    </script>
    @stack('scripts')
</body>

</html>
