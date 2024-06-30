@extends('front.master')

@section('title', 'Service')


@section('service-active', 'active')

@section('hero')
<x-hero-section title="Services" subtitle="Services"></x-hero-section>

@endsection

@section('content')

<!-- Service Start -->
<x-front-services-component></x-front-services-component>
<!-- Service End -->

<!-- Testimonial Start -->
<x-front-testimonials-component></x-front-testimonials-component>
<!-- Testimonial End -->

@endsection