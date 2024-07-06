@extends('admin.index')

@section('title', __('keywords.show_member'))

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">

            <h2 class="h5 page-title">{{__('keywords.show_member')}}</h2>


            <div class="card shadow">
                <div class="card-body">


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="name">{{__('keywords.name')}}</label>
                                <p class="form-control">{{ $member->name }}</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="image">{{__('keywords.image')}}</label>
                                <div>
                                    <img src=" {{ asset('storage') }}/members/{{ $member->image }} " alt="#"
                                        width="50px">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="position">{{__('keywords.position')}}</label>
                                <p class="form-control">{{ $member->position }}</p>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="facebook">{{__('keywords.facebook')}}</label>
                                <p class="form-control">{{ $member->facebook }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="twitter">{{__('keywords.twitter')}}</label>
                                <p class="form-control">{{ $member->twitter }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="linkedin">{{__('keywords.linkedin')}}</label>
                                <p class="form-control">{{ $member->linkedin }}</p>
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