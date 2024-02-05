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


    <!-- Team Start -->
    @include('front.section.team')
    <!-- Team End -->
</x-master-layout>
