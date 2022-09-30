@extends('layouts.master')

@section('title')
    About
@endsection
@section('css')
    <style>
        .img_about {

            align-content: center;
            display: block;
            margin-left: auto;
            margin-right: auto;
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
    <div class="bgded" style="background-image:url('{{ url('') }}/assets/images/KV.png');">
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
                <img class="img_about" src="{{ url('') }}/assets/images/about2.png" alt="">
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
                    <img class="img" src="{{ url('') }}/assets/images/off.png" alt="">

                </div>
                <div class="col-md-6">
                    <img class="img" src="{{ url('') }}/assets/images/off.png" alt="">
                </div>
                <div class="col-md-6 mb-2 mt-3">
                    <img class="img_about" src="{{ url('') }}/assets/images/pm.png" alt="">
                </div>
                <div class="col-md-6 mb-2 mt-3">
                    <img class="img_about" src="{{ url('') }}/assets/images/c.png" alt="">
                </div>
                <div class="col-md-6">
                    <img class="img" src="{{ url('') }}/assets/images/off.png" alt="">
                </div>
                <div class="col-md-6">
                    <img class="img" src="{{ url('') }}/assets/images/off.png" alt="">
                </div>
                <div class="col-md-6 mb-2 mt-3">
                    <img class="img_about" src="{{ url('') }}/assets/images/pfm.png" alt="">
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
            captionText.innerHTML = this.alt;
        })


        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>
@endsection
