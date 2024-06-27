@extends('admin.index')

@section('title', __('keywords.edit_company'))

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">

            <h2 class="h5 page-title">{{__('keywords.edit_company')}}</h2>


            <div class="card shadow">
                <div class="card-body">

                    <form action="{{ route('admin.companies.update', ['company' => $company]) }}" method="post"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <x-form-label field="name"></x-form-label>
                                    <input type="text" name="name" class="form-control"
                                        placeholder="{{__('keywords.name')}}" value="{{ $company->name }}">

                                    <x-validation-error field="name"></x-validation-error>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <x-form-label field="image"></x-form-label>
                                    <input type="file" name="image" class="form-control-file">

                                    <x-validation-error field="image"></x-validation-error>
                                </div>
                            </div>

                        </div>
                        <x-submit-button></x-submit-button>
                    </form>

                </div>
            </div>
            <!-- end section -->
        </div> <!-- .col-12 -->
    </div> <!-- .row -->
</div>
@endsection