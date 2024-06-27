@extends('admin.index')

@section('title', __('keywords.show_testimonial'))

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">

            <h2 class="h5 page-title">{{__('keywords.show_testimonial')}}</h2>


            <div class="card shadow">
                <div class="card-body">


                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group mb-3">
                                <label for="name">{{__('keywords.name')}}</label>
                                <p class="form-control">{{ $testimonial->name }}</p>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="form-group mb-3">
                                <label for="position">{{__('keywords.position')}}</label>
                                <p class="form-control">{{ $testimonial->position }}</p>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group mb-3">
                                <label for="image">{{__('keywords.image')}}</label>
                                <div>
                                    <img src=" {{ asset('storage') }}/testimonials/{{ $testimonial->image }} " alt="#"
                                        width="50px">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label for="description">{{__('keywords.description')}}</label>
                                <p class="form-control">{{ $testimonial->description }}</p>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
            <!-- end section -->
        </div> <!-- .col-12 -->
    </div> <!-- .row -->
</div>
@endsection