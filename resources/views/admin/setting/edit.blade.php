@extends('admin.layouts.layout')
@section('pageTitle', 'Setting')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ucfirst(request()->segment(2))}} List</h6>
        </div>
        <div class="card-body">
            {{settings()->all($fresh = true)}}
        </div>
    </div>
@endsection
