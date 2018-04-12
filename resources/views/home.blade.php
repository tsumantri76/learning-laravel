@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in {{ Auth::user()->role_id }}

                    @if(Auth::user()->role_id == 1 or  Auth::user()->role_id == 2)
                        <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                            Tambah
                        </button>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <br>

    @if(count($posts != null))
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach($posts as $row)
                    @if(Auth::user()->role_id == 1 or  Auth::user()->role_id == 2)
                        <div class="card">
                            <div class="card-header">{{ $row->judul }}
                                <div class="btn-group float-right" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-info btn-sm">Edit</button>
                                    <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                                </div>                                
                            </div>

                            <div class="card-body">
                                {{ $row->desc }}
                            </div>
                        </div>
                    @else
                        <div class="card">
                            <div class="card-header">{{ $row->judul }}</div>

                            <div class="card-body">
                                {{ $row->desc }}
                            </div>
                        </div>
                    @endif
                    <br>
                @endforeach

                {{ $posts->links() }}
            </div>
        </div>
    @else
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-body">Postingan tidak ada</div>
            </div>
        </div>
    @endif
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form action="{{ route('simpan') }}" method="post">
            <div class="modal-body">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Enter Judul">
                    </div>
                    <div class="form-group">
                        <label for="desc">Deskripsi</label>
                        <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>

        </div>
    </div>
</div>

@endsection
