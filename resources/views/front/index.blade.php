<x-master-layout>
    <!-- Feature Start -->
    @livewire('front.component.service-component', ['iconHaveBackground' => false])
    <!-- Feature End -->


    <!-- About Start -->
    @livewire('front.component.skill-component')
    <!-- About End -->


    <!-- Facts Start -->
    @livewire('front.component.counter-component')
    <!-- Facts End -->


    <!-- Service Start -->
    @livewire('front.component.service-component')
    <!-- Service End -->


    <!-- Newsletter Start -->
    <div class="container-xxl bg-primary newsletter py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 px-lg-5">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <p class="section-title text-white justify-content-center"><span></span>Newsletter<span></span>
                    </p>
                    <h1 class="text-center text-white mb-4">Stay Always In Touch</h1>
                    <p class="text-white mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos
                        labore. Clita erat ipsum et lorem et sit sed stet lorem sit clita duo justo</p>
                    <div class="position-relative w-100 mt-3">
                        @livewire('front.component.subscribe-component')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->


    <!-- Projects Start -->
    @include('front.section.projects')
    <!-- Projects End -->


    <!-- Testimonial Start -->
    @include('front.section.testimonial')
    <!-- Testimonial End -->


    <!-- Team Start -->
    @include('front.section.team')
    <!-- Team End -->
</x-master-layout>
