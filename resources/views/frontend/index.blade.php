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
        .img{
            border-radius: 5px
        }

        .flex {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            /* max-width: 50vw; */
            margin: auto;
        }

        .flex>div:nth-child(odd) {
            align-self: flex-end;
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
    
                <div class="sectiontitle">
                    <img class="img_home" src="{{ url('') }}/assets/images/pic6.jpg" alt="">
                </div>
                  
                <div class="flex">
                
                    @foreach (\DB::table('projects')->take(5)->get() as $item)
                        <!-- your php code would go here, and just output a list of images -->
                        
                        <div>
                            <a href="{{route('project.detail',['id'=>$item->id])}}" style="color: black;">
                            <img class="mb-2 img thumbnail" src="{{ url('') }}/assets/images/{{ $item->image }}" alt=""
                                style="width: 779px">
                            <br>
                            <strong>{{ $item->title }}</strong>
                            <p>{{ $item->location }} | {{ $item->description }}</p></a>
                        </div>
                    @endforeach
            
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
@endsection
