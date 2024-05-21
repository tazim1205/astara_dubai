@extends('backend.layouts.master')
@section('body')
<main class="content">
    <div class="container-fluid p-0">


        @component('components.beardcrumb')

        {{-- /*Page Title Goese Here in this slot variable*/ --}}
        @slot('title')
        @lang('chairman_message.create_title')
        @endslot

        @endcomponent
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('chairman_message.store')}}" method="post" enctype="multipart/form-data" id="formData">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                                    <label for="name">@lang('chairman_message.name')</label><span class="text-danger">*</span>
                                    <input type="text" name="name" class="form-control  mt-1 @error('name') is-invalid @enderror" id="name" value="{{$data->name}}" required>
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                                    <label for="image">@lang('chairman_message.image')</label>
                                    <input type="file"  class="form-control" name="image">
                                    <img src="{{ asset('backend/img/chairman_message/')}}/{{ $data->image }}" width="90px" height="100px" class="mt-3">
                                    @error('image')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                                    <label for="description">@lang('chairman_message.description')</label><span class="text-danger">*</span>
                                    <textarea class="form-control" name="description" rows="6">{{ $data->description }}</textarea>
                                    @error('description')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12 mt-4" style="text-align: right">
                                    <button type="submit" id="submit" class="btn  btn-success"> <i class="fa fa-save"></i> @lang('common.update')</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


@endsection
