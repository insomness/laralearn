@extends('admin.layouts.master')
@section('title' ,'Detail Kelas')
@section('content')
<div class="row">
    <div class="col-md-12">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title ">Tambah Materi</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('admin.kelas.simpanvideo', $kelasId)}}">
                    @csrf

                    <div class="form-group py-3 mt-3">
                        <label for="judul">Judul Materi</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" required >
                        @error('judul')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group py-3 mt-3">
                        <label for="embed">Embed Youtube</label>
                        <input type="text" class="form-control @error('embed') is-invalid @enderror" id="embed" name="embed" required >
                        @error('embed')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary d-block">Tambah Materi</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
