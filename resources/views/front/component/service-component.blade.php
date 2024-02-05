<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">
        <div class="wow fadeInUp" data-wow-delay="0.1s">
            @if ($iconHaveBackground)
                <p class="section-title text-secondary justify-content-center"><span></span>Our
                    Services<span></span></p>
                <h1 class="text-center mb-5">What Solutions We Provide</h1>
            @endif
        </div>
        <div class="row g-4">
            @if (count($services) > 0)
                @if ($iconHaveBackground)
                    @foreach ($services as $service)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item d-flex flex-column text-center rounded">
                                <div class="service-icon flex-shrink-0">
                                    <i class="fa {{ $service->icon }} fa-2x"></i>
                                </div>
                                <h5 class="mb-3">{{ $service->name }}</h5>
                                <p class="m-0">{{ $service->description }}</p>
                                <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    @endforeach
                @else
                    @foreach ($services as $service)
                        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="feature-item bg-light rounded text-center p-4">
                                <i class="fa fa-3x {{ $service->icon }} text-primary mb-4"></i>
                                <h5 class="mb-3">{{ $service->name }}</h5>
                                <p class="m-0">{{ $service->description }}</p>
                            </div>
                        </div>
                    @endforeach
                @endif
            @endif
        </div>
    </div>
</div>