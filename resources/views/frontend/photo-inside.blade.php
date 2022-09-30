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

        .img {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        .img:hover {
            opacity: 0.7;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.9);
            /* Black w/ opacity */
        }

        /* Modal Content (image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }

        /* Caption of Modal Image */
        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }

        /* Add Animation */
        .modal-content,
        #caption {
            -webkit-animation-name: zoom;
            -webkit-animation-duration: 0.6s;
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @-webkit-keyframes zoom {
            from {
                -webkit-transform: scale(0)
            }

            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes zoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        /* The Close Button */
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px) {
            .modal-content {
                width: 100%;
            }
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
                <div class="col-lg-12 col-md-4 col-xs-6 mb-5">
                    <div class="mb-5" id="full-img">

                    </div>
                    <strong>
                        <p class="text-center font-x1" id="title"></p>
                    </strong>
                    <p class="text-center" id="desc"></p>
                    <p class="text-center" id="location"></p>
                    <p class="text-center" id="year"></p>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb mb-4 retail">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                        data-image="{{ url('') }}/assets/images/office.png" data-target="#image-gallery">
                        <img class="img" src="{{ url('') }}/assets/images/office.png" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb mb-4 retail">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                        data-image="https://images.pexels.com/photos/158971/pexels-photo-158971.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                        data-target="#image-gallery">
                        <img class="img" src="{{ url('') }}/assets/images/office.png" alt="Another alt text">
                    </a>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6 thumb mb-4 retail">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                        data-image="https://images.pexels.com/photos/305070/pexels-photo-305070.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                        data-target="#image-gallery">
                        <img class="img" src="{{ url('') }}/assets/images/office.png" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb mb-4 retail">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test1"
                        data-image="https://images.pexels.com/photos/853168/pexels-photo-853168.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                        data-target="#image-gallery">
                        <img class="img" src="{{ url('') }}/assets/images/office.png" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb mb-4 corporate_office">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                        data-image="https://images.pexels.com/photos/158971/pexels-photo-158971.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                        data-target="#image-gallery">
                        <img class="img" src="{{ url('') }}/assets/images/office.png" alt="Another alt text">
                    </a>
                </div>



                <div class="col-lg-3 col-md-4 col-xs-6 thumb mb-4 corporate_office">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                        data-image="https://images.pexels.com/photos/305070/pexels-photo-305070.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                        data-target="#image-gallery">
                        <img class="img" src="{{ url('') }}/assets/images/office.png" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb mb-4 corporate_office">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                        data-image="https://images.pexels.com/photos/853168/pexels-photo-853168.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                        data-target="#image-gallery">
                        <img class="img" src="{{ url('') }}/assets/images/office.png" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb mb-4 corporate_office">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                        data-image="https://images.pexels.com/photos/158971/pexels-photo-158971.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                        data-target="#image-gallery">
                        <img class="img" src="{{ url('') }}/assets/images/office.png" alt="Another alt text">
                    </a>
                </div>



                <div class="col-lg-3 col-md-4 col-xs-6 thumb mb-4 residential">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                        data-image="https://images.pexels.com/photos/305070/pexels-photo-305070.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                        data-target="#image-gallery">
                        <img class="img" src="{{ url('') }}/assets/images/off.png" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb mb-4 residential">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                        data-image="https://images.pexels.com/photos/853168/pexels-photo-853168.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                        data-target="#image-gallery">
                        <img class="img" src="{{ url('') }}/assets/images/off.png" alt="Another alt text">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb mb-4 residential">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                        data-image="https://images.pexels.com/photos/158971/pexels-photo-158971.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                        data-target="#image-gallery">
                        <img class="img" src="{{ url('') }}/assets/images/off.png" alt="Another alt text">
                    </a>
                </div>
            </div>



            <br>
        </main>
    </div>
    <!-- The Modal -->
    <div id="img-modal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
    </div>
@endsection

@section('footer')
    @parent
@endsection

@section('js')
    <script>
        // Get the modal
        var modal = document.getElementById("img-modal");

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementsByClassName("img");
        // console.log(img);
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        $('.img').on('click', function() {
       
            modal.style.display = "block";
            modalImg.src = this.src;
            // captionText.innerHTML = this.data-title;
        })


        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
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
            $(".thumb").hide();
            console.log(localStorage.getItem("class"));
            $("." + localStorage.getItem("class")).show();
        } else {
            console.log('Browser does not support Web Storage.');
        }
    </script>
@endsection
