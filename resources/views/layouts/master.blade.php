<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DGital | {{ $pageName == '/' ? 'Home' : Str::ucfirst($pageName) }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    @include('front.partioals.head')
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        @include('front.partioals.navbar')
        <!-- Navbar & Hero End -->

        <main>
            {{ $slot }}
        </main>

        <!-- Footer Start -->
        @include('front.partioals.footer')
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    @include('front.partioals.scriptjs')
</body>

</html>
