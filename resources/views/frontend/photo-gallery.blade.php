@extends('layouts.master')

@section('title')
    Photo Gallery
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


            <div class="text-center">
                <img class="mt-4" src="{{ url('') }}/assets/images/pg.png" alt="" style="margin-bottom: 68px;">
            </div>
            <!-- / main body -->
            <div class="clear"></div>
            <!-- Gallery -->


            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="sector">BY SECTOR</label>
                            <div class="form-group">
                                <select name="sector" id="sector" class="">
                                    <option value="all">All</option>
                                    <option value="retail">Retail</option>
                                    <option value="corporate_office">Corporate Office</option>
                                    <option value="residential">Residential</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb mb-4 retail">
                    <a class="thumbnail" href="javascript:;" data-image-id="" data-toggle="modal"
                        data-class="retail"
                        data-title="International Commerce Centre (ICC) | 74,000 sf"
                        data-desc="International US Investment Bank" data-location="Hong Kong" data-year="2021"
                        data-image="{{ url('') }}/assets/images/office.png" data-target="#image-gallery">
                        <img class="" src="{{ url('') }}/assets/images/office.png" alt="Another alt text">
                    </a>
                    <strong>Project Name</strong>
                    <p>Location | 550000 SF</p>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb mb-4 retail">
                    <a class="thumbnail" href="javascript:;" data-image-id="" data-toggle="modal"
                        data-class="retail"
                        data-title="International Commerce Centre (ICC) | 74,000 sf"
                        data-desc="International US Investment Bank" data-location="Hong Kong" data-year="2021"
                        data-image="{{ url('') }}/assets/images/office.png" data-target="#image-gallery">
                        <img class="" src="{{ url('') }}/assets/images/office.png" alt="Another alt text">
                    </a>
                    <strong>Project Name</strong>
                    <p>Location | 550000 SF</p>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6 thumb mb-4 retail">
                    <a class="thumbnail" href="javascript:;" data-image-id="" data-toggle="modal"
                        data-class="retail"
                        data-title="International Commerce Centre (ICC) | 74,000 sf"
                        data-desc="International US Investment Bank" data-location="Hong Kong" data-year="2021"
                        data-image="{{ url('') }}/assets/images/office.png" data-target="#image-gallery">
                        <img class="" src="{{ url('') }}/assets/images/office.png" alt="Another alt text">
                    </a>
                    <strong>Project Name</strong>
                    <p>Location | 550000 SF</p>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb mb-4 retail">
                    <a class="thumbnail" href="javascript:;" data-image-id="" data-toggle="modal"
                        data-class="retail"
                        data-title="International Commerce Centre (ICC) | 74,000 sf"
                        data-desc="International US Investment Bank" data-location="Hong Kong" data-year="2021"
                        data-image="{{ url('') }}/assets/images/office.png" data-target="#image-gallery">
                        <img class="" src="{{ url('') }}/assets/images/office.png" alt="Another alt text">
                    </a>
                    <strong>Project Name</strong>
                    <p>Location | 550000 SF</p>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb mb-4 corporate_office">
                    <a class="thumbnail" href="javascript:;" data-image-id="" data-toggle="modal"
                        data-class="corporate_office"
                        data-title="International Commerce Centre (ICC) | 74,000 sf"
                        data-desc="International US Investment Bank" data-location="Hong Kong" data-year="2021"
                        data-image="{{ url('') }}/assets/images/office.png" data-target="#image-gallery">
                        <img class="" src="{{ url('') }}/assets/images/office.png" alt="Another alt text">
                    </a>
                    <strong>Project Name</strong>
                    <p>Location | 550000 SF</p>
                </div>



                <div class="col-lg-3 col-md-4 col-xs-6 thumb mb-4 corporate_office">
                    <a class="thumbnail" href="javascript:;" data-image-id="" data-toggle="modal"
                        data-class="corporate_office"
                        data-title="International Commerce Centre (ICC) | 74,000 sf"
                        data-desc="International US Investment Bank" data-location="Hong Kong" data-year="2021"
                        data-image="{{ url('') }}/assets/images/office.png" data-target="#image-gallery">
                        <img class="" src="{{ url('') }}/assets/images/office.png" alt="Another alt text">
                    </a>
                    <strong>Project Name</strong>
                    <p>Location | 550000 SF</p>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb mb-4 corporate_office">
                    <a class="thumbnail" href="javascript:;" data-image-id="" data-toggle="modal"
                        data-class="corporate_office"
                        data-title="International Commerce Centre (ICC) | 74,000 sf"
                        data-desc="International US Investment Bank" data-location="Hong Kong" data-year="2021"
                        data-image="{{ url('') }}/assets/images/office.png" data-target="#image-gallery">
                        <img class="" src="{{ url('') }}/assets/images/office.png" alt="Another alt text">
                    </a>
                    <strong>Project Name</strong>
                    <p>Location | 550000 SF</p>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb mb-4 corporate_office">
                    <a class="thumbnail" href="javascript:;" data-image-id="" data-toggle="modal"
                        data-class="corporate_office"
                        data-title="International Commerce Centre (ICC) | 74,000 sf"
                        data-desc="International US Investment Bank" data-location="Hong Kong" data-year="2021"
                        data-image="{{ url('') }}/assets/images/office.png" data-target="#image-gallery">
                        <img class="" src="{{ url('') }}/assets/images/office.png" alt="Another alt text">
                    </a>
                    <strong>Project Name</strong>
                    <p>Location | 550000 SF</p>
                </div>



                <div class="col-lg-3 col-md-4 col-xs-6 thumb mb-4 residential">
                    <a class="thumbnail" href="javascript:;" data-image-id="" data-toggle="modal"
                        data-class="residential"
                        data-title="International Commerce Centre (ICC) | 74,000 sf"
                        data-desc="International US Investment Bank" data-location="Hong Kong" data-year="2022"
                        data-image="{{ url('') }}/assets/images/off.png" data-target="#image-gallery">
                        <img class="" src="{{ url('') }}/assets/images/off.png" alt="Another alt text">
                    </a>
                    <strong>Project Name</strong>
                    <p>Location | 550000 SF</p>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb mb-4 residential">
                    <a class="thumbnail" href="javascript:;" data-image-id="" data-toggle="modal"
                        data-class="residential"
                        data-title="International Commerce Centre (ICC) | 74,000 sf"
                        data-desc="International US Investment Bank" data-location="Hong Kong" data-year="2022"
                        data-image="{{ url('') }}/assets/images/off.png" data-target="#image-gallery">
                        <img class="" src="{{ url('') }}/assets/images/off.png" alt="Another alt text">
                    </a>
                    <strong>Project Name</strong>
                    <p>Location | 550000 SF</p>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb mb-4 residential">
                    <a class="thumbnail" href="javascript:;" data-image-id="" data-toggle="modal"
                        data-class="residential"
                        data-title="International Commerce Centre (ICC) | 74,000 sf"
                        data-desc="International US Investment Bank" data-location="Hong Kong" data-year="2022"
                        data-image="{{ url('') }}/assets/images/off.png" data-target="#image-gallery">
                        <img class="" src="{{ url('') }}/assets/images/off.png" alt="Another alt text">
                    </a>
                    <strong>Project Name</strong>
                    <p>Location | 550000 SF</p>
                </div>
                <div class="col-lg-3 col-md-4 col-xs-6 thumb mb-4 residential">
                    <a class="thumbnail" href="javascript:;" data-image-id="" data-toggle="modal"
                        data-class="residential"
                        data-title="International Commerce Centre (ICC) | 74,000 sf"
                        data-desc="International US Investment Bank" data-location="Hong Kong" data-year="2022"
                        data-image="{{ url('') }}/assets/images/off.png" data-target="#image-gallery">
                        <img class="" src="{{ url('') }}/assets/images/off.png" alt="Another alt text">
                    </a>
                    <strong>Project Name</strong>
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

@section('js')
    <script>
        $("select").change(function() {
            if ($(this).val() === 'all') {
                $(".thumb").show();
            } else {
                $(".thumb").hide();
                $("." + $(this).val()).show();
            }

        });
    </script>

    <script>
        $('.thumbnail').on('click', function() {
            console.log($(this).attr("data-image"))
            if (typeof(Storage) !== "undefined") {
                // Store
                localStorage.setItem("image", $(this).attr("data-image"));
                localStorage.setItem("title", $(this).attr("data-title"));
                localStorage.setItem("desc", $(this).attr("data-desc"));
                localStorage.setItem("location", $(this).attr("data-location"));
                localStorage.setItem("year", $(this).attr("data-year"));
                localStorage.setItem("class", $(this).attr("data-class"));
            }
            window.location.href = "{{ route('photo.inside') }}";
        })
    </script>
@endsection
