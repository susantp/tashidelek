@extends('admin.layouts.layout')
@section('pageTitle', 'Menus')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                <a class="btn btn-primary" href="{{route('admin.menu.index')}}">
                    <i class="fa fa-arrow-left"></i></a> {{ucfirst(request()->segment(2))}} Edit
            </h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    @if(session()->has('message'))
                        <div class="alert alert-success">Successfully Updated.</div> @endif
                    {!! Form::open(["url"=>"admin/menu/$menu->id", 'method'=>'put', 'enctype'=>'multipart/form-data']) !!}
                    <div class="form-group">
                        {!! Form::text('title', (isset($menu)) ? $menu->title : '', ['placeholder'=>'Title', 'class'=>'form-control']) !!}
                        @if ($errors->has('title'))
                            <div class="alert alert-danger">{{ $errors->first('title') }}</div> @endif
                    </div>
                    <div class="form-group">
                        {!! Form::textarea('description', (isset($menu)) ? $menu->description : '', ['placeholder'=>'Description', 'class'=>'form-control', 'rows'=>'10']) !!}
                        @if ($errors->has('description'))
                            <div class="alert alert-danger">{{ $errors->first('description') }}</div> @endif
                    </div>
                    <div class="form-group">
                        {!! Form::label('image', 'Background Image') !!}
                        <p>
                            <img src='{{asset("storage/menuImages/$menu->bg_image")}}' style="width: 100px" alt="">
                        </p>
                        {!! Form::file('image') !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit((isset($menu)) ? 'Update' : 'Save', ['class'=>'btn btn-primary']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>

        </div>
    </div>
@endsection
