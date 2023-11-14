@extends('admin.assets.master')
@section('title','Servis Ekle')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary float-right">@yield('title')</h6>
        </div>
        <div class="card-body">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{$error}}
                    </div>
                @endforeach
            @endif
            <form class="" action="{{route('admin.services.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Service Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Keyword</label>
                    <input type="text" name="keyword" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="">Uplaod A Photo</label>
                    <input type="file" name="image"  class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="about" id="summernote" class="form-control" required> </textarea>
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


