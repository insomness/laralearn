@extends('admin.layouts.master')
@section('title')
    Semua Transaksi
@show
@section('content')
<div class="row">
    <div class="col-md">
        @include('admin.layouts.message')
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card card-nav-tabs">
            <h4 class="card-header card-header-primary">
                Semua Transaksi
            </h4>
            <div class="card-body">
                <table class="table table-stripped" id="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">User</th>
                        <th scope="col">Status</th>
                        <th scope="col">Tanggal Kirim</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                    @forelse ($transaksi as $t)
                      <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td> {{$t->user->name}} </td>
                        <td>
                            @switch($t->status)
                                @case(1)
                                Disetujui
                                    @break
                                @case(2)
                                Ditolak
                                    @break
                                @default
                                Pending
                            @endswitch
                        </td>
                        <td>{{$t->created_at->toDateString()}}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{route('admin.transaksi.show', $t->id)}}" class="btn btn-info btn-block ">Detail</a>
                            </div>
                        </td>
                      </tr>
                      @empty
                      <tr>
                        <td colspan="5">
                            <h4 class="d-flex justify-content-center">Tidak ada transaksi</h4>
                        </td>
                      </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
          </div>
    </div>
</div>
@endsection
