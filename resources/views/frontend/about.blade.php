@extends('layouts.master')

@section('title')
    About
@endsection
@section('css')
    <style>
        .img_about {
            width: 75%;
            align-content: center;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
@endsection
@section('header')
    @parent
@endsection

@section('content')
    <div class="bgded overlay" style="background-image:url('{{ url('') }}/assets/images/KV.png');">
        <div id="breadcrumb" class="hoc clear">

            {{-- <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Lorem</a></li>
                <li><a href="#">Ipsum</a></li>
                <li><a href="#">Dolor</a></li>
            </ul> --}}

        </div>
    </div>
    <div class="wrapper row3">

        <main class="hoc clear">
            <!-- main body -->

            <div class="sectiontitle">
                <img src="{{ url('') }}/assets/images/about2.png" alt="">
            </div>
            <p class="btmspace-50 center">ABOUT PECO


                PECO is a growing company, based in Hong Kong. We specialize in tailoring a complete range of project
                management, interior fit-out services for corporate offices only. Our director and staff have been involved
                in the corporate office fit out sector for over 20 years and provide a wealth of experience in delivering
                many quality office fit outs, and post fit out maintenance services.</p>

            <div class="text-center">
                <img src="{{ url('') }}/assets/images/os.png" alt="" style="margin-bottom: 68px;">
            </div>
            <!-- / main body -->
            <div class="clear"></div>

            <div class="row">
                <div class="col-md-6 mb-2">
                    <img class="img_about" src="{{ url('') }}/assets/images/cd.png" alt="">
                </div>
                <div class="col-md-6">
                    <img class="" src="{{ url('') }}/assets/images/off.png" alt="">
                
                </div>
                <div class="col-md-6">
                    <img src="{{ url('') }}/assets/images/off.png" alt="">
                </div>
                <div class="col-md-6 mb-2 mt-3">
                    <img class="img_about" src="{{ url('') }}/assets/images/pm.png" alt="">
                </div>
                <div class="col-md-6 mb-2 mt-3">
                    <img class="img_about" src="{{ url('') }}/assets/images/c.png" alt="">
                </div>
                <div class="col-md-6">
                    <img src="{{ url('') }}/assets/images/off.png" alt="">
                </div>
                <div class="col-md-6">
                    <img src="{{ url('') }}/assets/images/off.png" alt="">
                </div>
                <div class="col-md-6 mb-2 mt-3">
                    <img class="img_about" src="{{ url('') }}/assets/images/pfm.png" alt="">
                </div>
            </div>
            <br>
        </main>
    </div>
@endsection

@section('footer')
    @parent
@endsection
