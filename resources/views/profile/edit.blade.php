@extends('layouts.master')
@section('title', 'Home')
<x-app-layout>


<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
            <span class="icofont-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

@section('content')

    <div class="heros overlays hero-profile"
        style="background-image: url('{{ url('images/bg11.png') }}'); height: 400px; background-size: cover; background-repeat: no-repeat;">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 text-center">
                    <h1 class="heading mt-6 mb-2" style="color:#fff; font-weight: bolder;" data-aos="fade-up">Your Profile
                    </h1>
                </div>
            </div>
        </div>
    </div>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>



        </div>
    </div>
    @endsection
</x-app-layout>