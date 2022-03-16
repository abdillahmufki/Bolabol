@extends('layouts.app')

{{-- set title --}}

@section('title', 'Home')

@section('content')
    <section class="h-full w-full border-box transition-all duration-500 linear" style="background-color: #141432">


        <div style="font-family: 'Poppins', sans-serif">
            <!-- Hero-header-2-3 -->
            <div>
                <div class="mx-auto flex pt-12 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 lg:flex-row flex-col">
                    <!-- Left Column -->
                    <div
                        class="lg:flex-grow lg:w-1/2 flex flex-col lg:items-start lg:text-left mb-3 md:mb-12 lg:mb-0 items-center text-center">

                        <p class="mb-8 leading-relaxed font-semibold text-sm" style="color: #fb6262">
                            More than Football Community
                        </p>

                        <h1 class="lg:block hidden title-font sm:text-5xl lg:text-6xl text-4xl mb-8 font-semibold sm:leading-tight"
                            style="color: #cbcbd2; line-height: 1.2">
                            The best way <br />
                            to analyze your team in the league
                        </h1>

                        <h1 class="lg:hidden block title-font sm:text-5xl lg:text-6xl text-4xl mb-8 lg::px-10 md:px-10 sm:px-6 px-0 font-semibold sm:leading-tight"
                            style="color: #cbcbd2; line-height: 1.2">
                            The best way to analyze your team in the league
                        </h1>

                        <div
                            class="inline-block items-center mx-auto lg:mx-0 lg:flex justify-center lg:space-x-8 md:space-x-2 sm:space-x-3 space-x-0">

                            <button
                                class="inline-flex font-semibold text-white text-base py-4 px-6 rounded-xl mb-4 lg:mb-0 md:mb-0 focus:outline-none box-shadow-header-2-3"
                                style="background: #524eee; font-family: 'Poppins', sans-serif;">
                                Match Result
                            </button>

                            <button
                                class="btn-outline-header-2-3 font-normal text-black text-base py-4 px-6 rounded-xl focus:outline-none bg-transparent rounded hover:border-transparent"
                                style="font-family: 'Poppins', sans-serif">
                                <div class="flex items-center">
                                    <img style="height: 20px;" class="mr-2"
                                        src="{{ asset('/assets/img/icon-1.png') }}" alt="" />
                                    Tables
                                </div>
                            </button>
                        </div>

                    </div>

                    <!-- Right Column -->
                    <div class="w-full lg:w-1/2 text-center justify-center flex pr-0">
                        <img id="hero-header-2-3" src="{{ asset('/assets/img/hero-1.svg') }}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('after-style')
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        .btn-outline-header-2-3 {
            border: 1px solid #707092;
            color: #707092;
        }

        .btn-outline-header-2-3:hover {
            border: 1px solid #ffffff;
            color: #ffffff;
        }

        .btn-outline-header-2-3:hover div path {
            fill: #ffffff;
        }

        .box-shadow-header-2-3:hover {
            --tw-shadow: inset 0 0px 25px 0 rgba(20, 20, 50, 0.7);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
                var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .navigation-header-2-3 a:hover,

        .active::after {
            font-weight: 600;
        }

        .navigation-header-2-3 a:hover {
            color: #e7e7e8;
        }

        .navigation-header-2-3 {
            color: #707092;
        }

        .bg-screen-header-2-3 {
            background-color: #707092;
        }

        .bg-popup-header-2-3 {
            background-color: #141432;
        }

    </style>
@endpush
