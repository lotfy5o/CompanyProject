@extends('admin.index')

@section('title', __('keywords.show_company'))

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">

            <h2 class="h5 page-title">{{__('keywords.show_company')}}</h2>


            <div class="card shadow">
                <div class="card-body">

                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group mb-3">
                                <label for="name">{{__('keywords.name')}}</label>
                                <p class="form-control">{{ $company->name }}</p>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="form-group mb-3">
                                <label for="image">{{__('keywords.image')}}</label>
                                <div>
                                    <img src=" {{ asset('storage') }}/companies/{{ $company->image }} " alt="#"
                                        width="50px">
                                </div>
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