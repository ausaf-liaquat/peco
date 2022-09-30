@extends('layouts.master')

@section('title')
    Index
@endsection
@section('css')
    <style>
        .img_home {

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
    <div class="bgded overlay" style="background-image:url('{{ url('') }}/assets/images/pic1.JPG');">
        <div id="pageintro" class="hoc clear">

            <div class="flexslider basicslider">
                <ul class="slides">
                    <li>
                        <article>
                            <p>Lacinia</p>
                            <h3 class="heading">Eleifend tristique lacus</h3>
                            <p>Eleifend sagittis cras convallis nisl eget</p>

                        </article>
                    </li>
                    <li>
                        <article>
                            <p>Pulvinar</p>
                            <h3 class="heading">Ornare tortor quisque</h3>
                            <p>Odio semper sed euismod mi euismod curabitur</p>
                            <footer><a class="btn inverse" href="#">Eget venenatis</a></footer>
                        </article>
                    </li>
                    <li>
                        <article>
                            <p>Sagittis</p>
                            <h3 class="heading">Feugiat blandit erat</h3>
                            <p>Convallis nibh nulla nec dictum mi consequat vel</p>
                            <footer><a class="btn" href="#">Facilisis vestibulum</a></footer>
                        </article>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <div class="wrapper row3">

        <main class="hoc clear">
            <!-- main body -->

            <div class="sectiontitle">
                <img class="img_home" src="{{ url('') }}/assets/images/pic5.jpg" alt="">
            </div>
            <p class="btmspace-50 center">Enim neque nec placerat risus suscipit vitae volutpat nisi sit amet turpis
                molestie ut sodales nisi efficitur duis id ex eros vivamus ac vehicula nibh non luctus ipsum suspendisse
                dolor metus varius in facilisis vitae euismod nec ex donec ullamcorper eros vel molestie sagittis libero
                augue elementum libero cursus euismod sem leo sed augue praesent condimentum odio sit amet nulla tempor
                sollicitudin lacinia mauris vestibulum cras euismod accumsan dolor et convallis praesent porttitor
                maximus viverra proin fermentum scelerisque neque quis consequat mauris rutrum eget proin fringilla nisi
                libero in tincidunt tortor porttitor sed phasellus vitae molestie massa suspendisse.</p>

            <!-- / main body -->
            <div class="clear"></div>

            <div class="row">
                <div class="col-md-4 "><img src="{{ url('') }}/assets/images/pic6.jpg" alt=""></div>
                <div class="col-md-8 mb-2 ml-2"><img class="mb-2 img" src="{{ url('') }}/assets/images/pic3.JPG"
                        alt="">
                    <strong>Project Name</strong>
                    <p>Location | 550000 SF</p>
                </div>
                <div class="col-md-8 mt-2"><img class="img" src="{{ url('') }}/assets/images/pic3.JPG" alt="">
                    <strong>Project Name</strong>
                    <p>Location | 550000 SF</p>
                </div>
                <div class="col-md-4 mt-2"></div>
                <div class="col-md-4 mt-2"></div>
                <div class="col-md-8 mt-2"><img class="img" src="{{ url('') }}/assets/images/pic3.JPG" alt="">
                    <strong>Project Name</strong>
                    <p>Location | 550000 SF</p>
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
            // console.log('dds');
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
