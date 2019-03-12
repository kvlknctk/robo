@extends('layout.master')

@section('body')

   @include('part.breadcumb')



    <section class="whitepage">
        <div class="container">
            <div class="row">
                @yield('merkez')
            </div>
        </div>
    </section>

    <section class="contactbg  no-bottom" id="contactus">

        <div class="container">
            <div class="row">
                @include('part.contact')
            </div>
        </div>

        <div class="space-single"></div>

    </section>


@endsection