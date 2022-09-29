@extends('layouts.app')

@section('content')
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>{{ __('Pictures') }}</h2>
                </div>
            </div>
            <div class="col-md-6">
                <a href="{{route('picture.create')}}" class="btn btn-primary float-end">
                    <i class="fas fa-plus"></i> Add
                </a>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- ========== title-wrapper end ========== -->

    <div class="card-styles">
        <div class="card-style-3 mb-30">
            <div class="card-content">

                {{-- <div class="alert-box primary-alert">
                    <div class="alert">
                        <p class="text-medium">
                            Sample table page
                        </p>
                    </div>
                </div> --}}

                <div class="table-wrapper table-responsive">
                    <table class="table striped-table">
                        <thead>
                            <tr>
                                <th>
                                    <h6>Image</h6>
                                </th>
                                <th>
                                    <h6>Name</h6>
                                </th>
                                <th>
                                    <h6>Description</h6>
                                </th>
                                <th>
                                    <h6>Category</h6>
                                </th>
                                <th>
                                    <h6>Action</h6>
                                </th>
                            </tr>
                            <!-- end table row-->
                        </thead>
                        <tbody>
                            @forelse($pictures as $picture)
                                <tr>
                                    <td>
                                        <img src="{{ $picture->image }}" alt="">
                                    </td>
                                    <td>
                                        <p>{{ $picture->title }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $picture->description }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $picture->categories->name }}</p>
                                    </td>
                                    <td>
                                        <p>-</p>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">
                                        <p>No result found</p>
                                    </td>
                                </tr>
                            @endforelse
                            <!-- end table row -->
                        </tbody>
                    </table>
                    <!-- end table -->

                    {{ $pictures->links() }}
                </div>

            </div>
        </div>
    </div>
@endsection
