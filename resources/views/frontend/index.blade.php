@extends('layouts.master')

@section('title')
    Index
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
                <div class="col-md-8 mb-2 ml-2"><img class="mb-2" src="{{ url('') }}/assets/images/pic3.JPG"
                        alt="">
                    <h5>Project Name</h5>
                    <p>Location | 550000 SF</p>
                </div>
                <div class="col-md-8 mt-2"><img src="{{ url('') }}/assets/images/pic3.JPG" alt="">
                    <h5>Project Name</h5>
                    <p>Location | 550000 SF</p>
                </div>
                <div class="col-md-4 mt-2"></div>
                <div class="col-md-4 mt-2"></div>
                <div class="col-md-8 mt-2"><img src="{{ url('') }}/assets/images/pic3.JPG" alt="">
                    <h5>Project Name</h5>
                    <p>Location | 550000 SF</p>
                </div>
            </div>
            <br>
        </main>
    </div>
@endsection

@section('footer')
    @parent
@endsection
