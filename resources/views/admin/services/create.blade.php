@extends('admin.index')

@section('title', __('keywords.add_new_service'))

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">

            <h2 class="h5 page-title">{{__('keywords.add_new_service')}}</h2>


            <div class="card shadow">
                <div class="card-body">

                    <form action="{{ route('admin.services.store') }}" method="post" enctype="multipart/form-data">

                        @csrf
                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group mb-3">
                                    <label for="title">{{__('keywords.title')}}</label>
                                    <input type="text" name="title" class="form-control"
                                        placeholder="{{__('keywords.title')}}">

                                    @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="icon">{{__('keywords.icon')}}</label>
                                    <input type="text" name="icon" class="form-control"
                                        placeholder="{{__('keywords.icon')}}">

                                    @error('icon')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="description">{{__('keywords.description')}}</label>
                                    <textarea name="description" class="form-control"
                                        placeholder="{{__('keywords.description')}}"></textarea>

                                    @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary">{{__('keywords.submit')}}</button>
                    </form>

                </div>
            </div>
            <!-- end section -->
        </div> <!-- .col-12 -->
    </div> <!-- .row -->
</div>
@endsection