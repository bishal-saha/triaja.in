@extends('layouts.default')

@section('page-title', 'Contact Us')

@section('content')
    <!--=========== breadcrumb Section Start =========-->
    <div class="sc-breadcrumb-style sc-pt-135 sc-pb-110">
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sc-slider-content p-z-idex">
                        <div class="sc-slider-subtitle">Home - Contact</div>
                        <h1 class="slider-title white-color sc-mb-25 sc-sm-mb-15">Contact Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=========== breadcrumb Section End =========-->
    @include('contact.partials.form')
    @include('contact.partials.map')
@endsection
