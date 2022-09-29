@extends('layouts.master')

@section('title')
    Photo Gallery Inside
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

        select {
            width: 100%;
            margin: 8px 0 27px;
            box-sizing: border-box;
            border: none;
            border-bottom: 2px solid rgb(199 199 199);
            border-radius: 0%;
            padding: 0px 0px 8px;
        }
    </style>
@endsection
@section('header')
    @parent
@endsection

@section('content')
    <div class="wrapper row3">

        <main class="hoc clear">
            <!-- main body -->
            <!-- Gallery -->


            <div class="row">
                <div class="col-lg-12 col-md-4 col-xs-6 mb-5 thumb">
                    <div class="mb-5" id="full-img">

                    </div>
                    <h5>
                        <p class="text-center" id="title"></p>
                    </h5>
                    <p class="text-center" id="desc"></p>
                    <p class="text-center" id="location"></p>
                    <p class="text-center" id="year"></p>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb mb-4 retail">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                        data-image="{{ url('') }}/assets/images/contact.png" data-target="#image-gallery">
                        <img class="" src="{{ url('') }}/assets/images/contact.png" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb mb-4 retail">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                        data-image="https://images.pexels.com/photos/158971/pexels-photo-158971.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                        data-target="#image-gallery">
                        <img class="" src="{{ url('') }}/assets/images/contact.png" alt="Another alt text">
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6 thumb mb-4 retail">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                        data-image="https://images.pexels.com/photos/305070/pexels-photo-305070.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                        data-target="#image-gallery">
                        <img class="" src="{{ url('') }}/assets/images/contact.png" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb mb-4 retail">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test1"
                        data-image="https://images.pexels.com/photos/853168/pexels-photo-853168.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                        data-target="#image-gallery">
                        <img class="" src="{{ url('') }}/assets/images/contact.png" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb mb-4 corporate_office">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                        data-image="https://images.pexels.com/photos/158971/pexels-photo-158971.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                        data-target="#image-gallery">
                        <img class="" src="{{ url('') }}/assets/images/office.png" alt="Another alt text">
                    </a>
                </div>



                <div class="col-lg-3 col-md-4 col-xs-6 thumb mb-4 corporate_office">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                        data-image="https://images.pexels.com/photos/305070/pexels-photo-305070.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                        data-target="#image-gallery">
                        <img class="" src="{{ url('') }}/assets/images/office.png" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb mb-4 corporate_office">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                        data-image="https://images.pexels.com/photos/853168/pexels-photo-853168.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                        data-target="#image-gallery">
                        <img class="" src="{{ url('') }}/assets/images/office.png" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb mb-4 corporate_office">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                        data-image="https://images.pexels.com/photos/158971/pexels-photo-158971.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                        data-target="#image-gallery">
                        <img class="" src="{{ url('') }}/assets/images/office.png" alt="Another alt text">
                    </a>
                </div>



                <div class="col-lg-3 col-md-4 col-xs-6 thumb mb-4 residential">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                        data-image="https://images.pexels.com/photos/305070/pexels-photo-305070.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                        data-target="#image-gallery">
                        <img class="" src="{{ url('') }}/assets/images/off.png" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb mb-4 residential">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                        data-image="https://images.pexels.com/photos/853168/pexels-photo-853168.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                        data-target="#image-gallery">
                        <img class="" src="{{ url('') }}/assets/images/off.png" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb mb-4 residential">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                        data-image="https://images.pexels.com/photos/158971/pexels-photo-158971.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                        data-target="#image-gallery">
                        <img class="" src="{{ url('') }}/assets/images/off.png" alt="Another alt text">
                    </a>
                </div>
            </div>



            <br>
        </main>
    </div>
@endsection

@section('footer')
    @parent
@endsection

@section('js')
    <script>
        // $("select").change(function() {
        //     if ($(this).val() === 'all') {
        //         $(".thumb").show();
        //     } else {
        //         $(".thumb").hide();
        //         $("." + $(this).val()).show();
        //     }

        // });
    </script>

    <script>
        // Check browser support
        if (typeof(Storage) !== "undefined") {
            // Retrieve
            $('#full-img').append("<img style='width:100%;' src='" + localStorage.getItem("image") + "'>")
            $('#title').html(localStorage.getItem("title"))
            $('#desc').html(localStorage.getItem("desc"))
            $('#location').html(localStorage.getItem("location"))
            $('#year').html(localStorage.getItem("year"))

        } else {
            console.log('Browser does not support Web Storage.');
        }
    </script>
@endsection
