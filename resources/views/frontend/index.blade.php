<!DOCTYPE html>

<html lang="">

<head>
    <title>Jeren</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="{{ url('') }}/assets/css/layout.css" rel="stylesheet" type="text/css" media="all">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>

<body id="top">

    <div class="wrapper row1">
        <header id="header" class="hoc clear">

            <div class="fl_left">
                <img src="{{ url('') }}/assets/images/logo1.JPG" alt="" width="75" style="width:75%;">
            </div>
            <nav id="mainav" class="fl_right">
                <ul class="clear">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="#">About PECO</a></li>
                    <li><a href="#">Project Gallery</a></li>
                    <li><a href="#">Contact</a></li>

                </ul>
            </nav>

        </header>
    </div>
    <div class="bgded overlay" style="background-image:url('{{ url('') }}/assets/images/pic1.jpg');">
        <div id="pageintro" class="hoc clear">

            <div class="flexslider basicslider">
                <ul class="slides">
                    <li>
                        <article>
                            <p>Lacinia</p>
                            <h3 class="heading">Eleifend tristique lacus</h3>
                            <p>Eleifend sagittis cras convallis nisl eget</p>
                            <footer><a class="btn" href="#">Nullam porttitor</a></footer>
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
                <img src="{{ url('') }}/assets/images/pic5.jpg" alt="">
            </div>
            <p class="btmspace-50 center">Enim neque nec placerat risus suscipit vitae volutpat nisi sit amet turpis
                molestie ut sodales nisi efficitur duis id ex eros vivamus ac vehicula nibh non luctus ipsum suspendisse
                dolor metus varius in facilisis vitae euismod nec ex donec ullamcorper eros vel molestie sagittis libero
                augue elementum libero cursus euismod sem leo sed augue praesent condimentum odio sit amet nulla tempor
                sollicitudin lacinia mauris vestibulum cras euismod accumsan dolor et convallis praesent porttitor
                maximus viverra proin fermentum scelerisque neque quis consequat mauris rutrum eget proin fringilla nisi
                libero in tincidunt tortor porttitor sed phasellus vitae molestie massa suspendisse.</p>
            {{-- <ul class="nospace group center">
                <li class="one_quarter first">
                    <article><a href="#"><i class="icon btmspace-30 fa fa-500px"></i></a>
                        <h6 class="heading">Varius eros ac</h6>
                    </article>
                </li>
                <li class="one_quarter">
                    <article><a href="#"><i class="icon btmspace-30 fa fa-adjust"></i></a>
                        <h6 class="heading">Augue praesent</h6>
                    </article>
                </li>
                <li class="one_quarter">
                    <article><a href="#"><i class="icon btmspace-30 fa fa-amazon"></i></a>
                        <h6 class="heading">Bibendum pulvinar</h6>
                    </article>
                </li>
                <li class="one_quarter">
                    <article><a href="#"><i class="icon btmspace-30 fa fa-apple"></i></a>
                        <h6 class="heading">Dignissim aliquam</h6>
                    </article>
                </li>
            </ul> --}}

            <!-- / main body -->
            <div class="clear"></div>

            <div class="row">
                <div class="col-md-4 "><img src="{{ url('') }}/assets/images/pic6.jpg" alt=""></div>
                <div class="col-md-8 mb-2 ml-2"><img class="mb-2" src="{{ url('') }}/assets/images/pic3.JPG" alt=""><h5>Project Name</h5><p>Location | 550000 SF</p>
                </div>
                <div class="col-md-8 mt-2"><img src="{{ url('') }}/assets/images/pic3.JPG" alt=""><h5>Project Name</h5><p>Location | 550000 SF</p></div>
                <div class="col-md-4 mt-2"></div>
                <div class="col-md-4 mt-2"></div>
                <div class="col-md-8 mt-2"><img src="{{ url('') }}/assets/images/pic3.JPG" alt=""><h5>Project Name</h5><p>Location | 550000 SF</p></div>
            </div>
            <br>
        </main>
    </div>



    <div class="wrapper row4">
        <footer id="footer" class="hoc clear">

            <div class="one_third first">
                <h1 class="">PECO</h1>
                <p style="line-height: 4%;">Precision Engineering Co Ltd</p>
                <p style="line-height: 21px;">20/F, DUMMY, No. 1 DUMMY St.</p>
                <p style="line-height: 5%;">DUMMY, Kowloon, Hong Kong</p>
                <ul class="nospace btmspace-30 linklist contact">

                    <li>TEL: +00 (123) 456 7890</li>
                    <li>FAX: +00 (123) 456 7890</li>
                    <li> info@domain.com</li>
                </ul>
                {{-- <ul class="faico clear">
                    <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
                </ul> --}}
            </div>


        </footer>
    </div>
    <div class="wrapper row5">
        <div id="copyright" class="hoc clear">

            {{-- <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p> --}}
            <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/"
                    title="Free Website Templates">OS Templates</a></p>

        </div>
    </div>
    <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
    <!-- JAVASCRIPTS -->
    <script src="{{ url('') }}/assets/js/jquery.min.js"></script>
    <script src="{{ url('') }}/assets/js/jquery.backtotop.js"></script>
    <script src="{{ url('') }}/assets/js/jquery.mobilemenu.js"></script>
    <script src="{{ url('') }}/assets/js/jquery.flexslider-min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>
