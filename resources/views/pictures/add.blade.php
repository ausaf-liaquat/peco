@extends('layouts.app')

@section('content')
  <!-- ========== title-wrapper start ========== -->
  <div class="title-wrapper pt-30">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="title mb-30">
                <h2>{{ __('Add Picture') }}</h2>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
</div>
<!-- ========== title-wrapper end ========== -->

<div class="card-styles">
    <div class="card-style-3 mb-30">
        <div class="card-content">

            @if ($message = Session::get('success'))
                <div class="alert-box success-alert">
                    <div class="alert">
                        <h4 class="alert-heading">Success</h4>
                        <p class="text-medium">
                            {{ $message }}
                        </p>
                    </div>
                </div>
            @endif

            <form action="{{ route('picture.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- @method('PUT') --}}

                <div class="row">
                    <div class="col-12">
                        <div class="input-style-1">
                            <label for="title">{{ __('Image Title') }}</label>
                            <input type="text" @error('title') class="form-control is-invalid" @enderror name="tilte"
                                   id="title" placeholder="{{ __('Title') }}"
                                   value="" required>
                            {{-- @error('name')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-style-1">
                            <label for="description">{{ __('Description') }}</label>
                            <input type="text" @error('name') class="form-control is-invalid" @enderror name="description"
                                   id="description" placeholder="{{ __('Description') }}"
                                   value="" required>
                            {{-- @error('name')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-style-1">
                            <label for="location">{{ __('Location') }}</label>
                            <input type="text" @error('name') class="form-control is-invalid" @enderror name="location"
                                   id="location" placeholder="{{ __('Location') }}"
                                   value="" required>
                            {{-- @error('name')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-style-1">
                            <label for="category_id">{{ __('Category') }}</label>
                            <select class="form-control" name="category_id" id="category_id">
                                <option value="">Please Select</option>
                                <option value="1">Retail</option>
                                <option value="2">Corporate Office</option>
                                <option value="3"> Residential</option>
                            </select>
                            {{-- @error('name')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-style-1">
                            <label for="category_id">{{ __('Image Upload') }}</label>
                            <div class="input-group">
                                {{-- <div class="input-group-prepend">
                                  <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                </div> --}}
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="inputGroupFile01"
                                    aria-describedby="inputGroupFileAddon01">
                                  {{-- <label class="custom-file-label" for="inputGroupFile01">Choose file</label> --}}
                                </div>
                              </div>
                            {{-- @error('name')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}
                        </div>
                    </div>
                   
                    <!-- end col -->
                    <div class="col-12">
                        <div class="button-group d-flex justify-content-center flex-wrap">
                            <button type="submit" class="main-btn primary-btn btn-hover w-100 text-center">
                                {{ __('Submit') }}
                            </button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection