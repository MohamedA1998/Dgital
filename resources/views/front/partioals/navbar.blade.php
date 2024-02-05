<div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="{{ route('front.index') }}" class="navbar-brand p-0">
            <h1 class="m-0">DGital</h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <a href="{{ route('front.index') }}"
                    class="nav-item nav-link {{ $pageName == '/' ? 'active' : '' }}">Home</a>

                <a href="{{ route('front.about') }}"
                    class="nav-item nav-link {{ $pageName == 'about' ? 'active' : '' }}">About</a>

                <a href="{{ route('front.services') }}"
                    class="nav-item nav-link {{ $pageName == 'services' ? 'active' : '' }}">Service</a>

                <a href="{{ route('front.projects') }}"
                    class="nav-item nav-link {{ $pageName == 'projects' ? 'active' : '' }}">Project</a>

                <div class="nav-item dropdown">
                    <a href="#"
                        class="nav-link dropdown-toggle {{ $pageName == 'team' || $pageName == 'testmonials' ? 'active' : '' }}"
                        data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0 ">
                        <a href="{{ route('front.team') }}" class="dropdown-item">Our Team</a>
                        <a href="{{ route('front.testmonials') }}" class="dropdown-item">Testimonial</a>
                    </div>
                </div>

                <a href="{{ route('front.contact') }}"
                    class="nav-item nav-link {{ $pageName == 'contact' ? 'active' : '' }}">Contact</a>

            </div>
            <a href="" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Get Started</a>
        </div>
    </nav>

    @if (Route::is('front.index'))
        <div class="container-xxl bg-primary hero-header">
            <div class="container px-lg-5">
                <div class="row g-5 align-items-end">
                    <div class="col-lg-6 text-center text-lg-start">
                        <h1 class="text-white mb-4 animated slideInDown">A Digital Agency Of Inteligents & Creative
                            People</h1>
                        <p class="text-white pb-3 animated slideInDown">Tempor rebum no at dolore lorem clita rebum
                            rebum ipsum rebum stet dolor sed justo kasd. Ut dolor sed magna dolor sea diam. Sit diam
                            sit justo amet ipsum vero ipsum clita lorem</p>
                        <a href=""
                            class="btn btn-secondary py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Read
                            More</a>
                        <a href=""
                            class="btn btn-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact
                            Us</a>
                    </div>
                    <div class="col-lg-6 text-center text-lg-start">
                        <img class="img-fluid animated zoomIn" src="{{ asset('front') }}/img/hero.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="container-xxl py-5 bg-primary hero-header">
            <div class="container my-5 py-5 px-lg-5">
                <div class="row g-5 py-5">
                    <div class="col-12 text-center">
                        <h1 class="text-white animated slideInDown">{{ Str::ucfirst($pageName) }}</h1>
                        <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">
                                    {{ Str::ucfirst($pageName) }}
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    @endif

</div>
