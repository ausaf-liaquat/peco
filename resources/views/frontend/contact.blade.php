@extends('layouts.master')

@section('title')
    Contact
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
        input[type=text] {
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
    <div class="bgded" style="background-image:url('{{ url('') }}/assets/images/contact1.png');">
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
                <img class="mb-4" src="{{ url('') }}/assets/images/contact_h.png" alt="">

                <div class="row">
                    <div class="col-md-6">
                        @if (Session::has('status'))
                        <p class="alert alert-success">{{ Session::get('status') }}</p>
                        @endif
                        <form action="{{route('contact.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                {{-- <label for="name">Name</label> --}}
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="form-group">
                                {{-- <label for="name">Email</label> --}}
                                <input type="text" class="form-control" name="email" id="email" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <label for="message"></label>
                                <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Message" required></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-lg btn-primary" value="Send" style="margin:30px 0px 30px 0px;border-radius: 0px;
                                background: #2f3797;font-weight:700;">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-5 col-md-push-1">
                        <div class="gtco-contact-info">
                            <h1>PECO</h1>
                            <p style="line-height: 4%;">Precision Engineering Co Ltd</p>
                            <p style="line-height: 21px;">20/F, DUMMY, No. 1 DUMMY St.</p>
                            <p style="line-height: 5%;">DUMMY, Kowloon, Hong Kong</p>
                            <ul class="nospace btmspace-30 linklist contact">
                
                                <li style="padding: 10px 0px 10px 0px;">TEL: +00 (123) 456 7890</li>
                                <li style="padding: 10px 0px 10px 0px;">FAX: +00 (123) 456 7890</li>
                                <li style="padding: 10px 0px 10px 0px;"> info@domain.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

          

            <br>
        </main>
    </div>
@endsection

@section('footer')
    @parent
@endsection
