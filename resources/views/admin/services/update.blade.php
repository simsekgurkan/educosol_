@extends('admin.assets.master')
@section('title',' Update: '.$service->name)

@section('content')
    <div class="card shadow mb-4">
        <div class="pagetitle">
            {{--            <h1>Dashboard</h1>--}}
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active">@yield('title')</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <div class="card-body">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{$error}}
                    </div>
                @endforeach
            @endif
            <form class="" action="{{route('admin.services.update',$service->id)}}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Service Name</label>
                    <input type="text" name="name" class="form-control"  value="{{$service->name}}" required>
                </div>
                <div class="form-group">
                    <label for="">Keyword</label>
                    <input type="text" name="keyword" class="form-control" value="{{$service->keyword}}" required>
                </div>

                <div class="form-group">
                    <label for="">Uplaod A Photo</label>
                    <img src="{{asset($service->image)}}" class="img-fluid img-thumbnail rounded mx-auto d-block" width="300 "alt="">
                    <br>
                    <input type="file" name="image"  class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="about" id="summernote" class="form-control"  required> {{$service->about}}</textarea>
                </div>

                <div class="form-group">
                    <button type="submit" name="button" class="btn btn-success btn-block">Save</button>
                </div>
            </form>

        </div>
    </div>

@endsection
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
@section('js')
    <!-- include summernote css/js -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#summernote').summernote(
                {height:200}
            );
        });
    </script>
@endsection


