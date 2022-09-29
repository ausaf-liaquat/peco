
    <div class="wrapper row1">
        <header id="header" class="hoc clear">

            <div class="fl_left">
                <img src="{{ url('') }}/assets/images/logo1.JPG" alt="" width="75" style="width:75%;">
            </div>
            <nav id="mainav" class="fl_right">
                <ul class="clear">
                    <li class="{{ (request()->routeIs('home')) ? 'active' : '' }}"><a href="{{route('home')}}">Home</a></li>
                    <li class="{{ (request()->routeIs('about')) ? 'active' : '' }}"><a href="{{route('about')}}">About PECO</a></li>
                    <li class="{{ (request()->routeIs('gallery')||request()->routeIs('photo.inside')) ? 'active' : '' }}"><a href="{{route('gallery')}}">Project Gallery</a></li>
                    <li class="{{ (request()->routeIs('contact')) ? 'active' : '' }}"><a href="{{route('contact')}}">Contact</a></li>

                </ul>
            </nav>

        </header>
    </div>