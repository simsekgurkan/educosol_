@extends('admin.assets.master')
@section('title','Educosol Services')

@section('content')
    <div class="pagetitle">
        {{--            <h1>Dashboard</h1>--}}
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item active">@yield('title')</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    @if ($message = Session::get('success'))

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>{{ $message }}</strong>
        </div>


    @endif






        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Keyword</th>
                        <th>Created At</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Keyword</th>
                        <th>Created At</th>
                        <th>Status</th>
                        <th>Action</th>

                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach ($services as $service)


                        <tr>
                            <td> <img src="../{{$service->image}}" alt="" width="150px"> </td>
                            <td>{{$service->name}}</td>
                            <td>{{$service->about}}</td>
                            <td>{{$service->keyword}}</td>
                            <td>{{$service->created_at}}</td>
                            <td>
                                <input class="switch" article-id="{{$service->id}}" type="checkbox" data-toggle="toggle" data-on="Publish" data-off="Not Publish" data-onstyle="success" data-offstyle="danger"
                                       @if ($service->status==1)
                                           checked
                                    @endif
                                >
                            </td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{route('services')}}" target="_blank"><button type="button" class="btn btn-sm btn-success"><i class="fa fa-eye"> </i></button></a>
                                    <a href="{{route('admin.services.edit',$service->id)}}"> <button type="button" class="btn btn-sm btn-primary mx-1"> <i class="fa fa-pen"> </i></button></a>
                                    <form action="{{ route('admin.services.destroy', $service->id) }}" method="post"
                                          class="">
                                        @csrf
                                        @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-times"> </i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('css')
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
    <script>
        $(function() {
            $('.switch').change(function() {
                id = $(this)[0].getAttribute('article-id');
                status1 = $(this).prop('checked');


                $.get("{{route('admin.switch')}}", {id:id , status1:status1}, function(data, status) {
                });
            })
        })
    </script>
@endsection


