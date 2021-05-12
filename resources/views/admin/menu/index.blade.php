@extends('admin.layouts.layout')
@section('pageTitle', 'Menus')
@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ucfirst(request()->segment(2))}} List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Thumbnail</th>
                        <th>Active</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Thumbnail</th>
                        <th>Active</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($menus as $menu)
                        <tr>
                            <td>{{$menu->title}}</td>
                            <td>{{$menu->description}}</td>
                            <td>
                                <img src="{{$menu->thumbnail_url}}" style="width: 150px" alt="{{$menu->title}}">
                            </td>
                            <td>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input toggle-status"
                                           id="customSwitch{{$menu->id}}"
                                           data-id="{{$menu->id}}" {{$menu->status == 1 ? 'checked' : ''}}>
                                    <label class="custom-control-label"
                                           for="customSwitch{{$menu->id}}"></label>
                                </div>
                            <td><a href='{{url("admin/menu/$menu->id/edit")}}'>Edit</a> | Delete</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@push('customScript')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $("input.toggle-status").change(function () {
            let menuID = $(this).data('id');
            const url = "{{config('app.url') . '/admin/changeMenuStatus'}}";
            $.ajax({
                type: 'PATCH',
                url,
                data: {menuID: menuID},
                success: (data) => {
                    //console.log(data);
                }
            })

        });
    </script>
@endpush
