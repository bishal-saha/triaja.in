@extends('layouts.default')

@section('page-title', 'Home')

@section('content')
    @include('home.partials.slider')
    @include('home.partials.stats')
    @include('home.partials.services-two')
    @include('home.partials.about')
    @include('home.partials.services-three')
    @include('home.partials.form')

    @include('home.partials.testimonial')
    @include('home.partials.accordion')
@endsection
