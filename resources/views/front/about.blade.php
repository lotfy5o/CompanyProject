@extends('front.master')

@section('title', 'About')


@section('about-active', 'active')

@section('hero')

<x-hero-section title="About Us" subtitle="About"></x-hero-section>

@endsection

@section('content')
<!-- About Start -->
<x-front-features-component></x-front-features-component>
<!-- About End -->



<!-- Features Starts -->
<x-front-features-component></x-front-features-component>
<!-- Features End -->


<!-- Team Start -->
<x-front-members-component></x-front-members-component>
<!-- Team End -->
@endsection