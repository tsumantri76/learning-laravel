@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                    Tambah
            </button>
            <br><br>
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @php $no=1; @endphp
                    @foreach($users as $row)
                        <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->email }}</td>
                            <td>
                                <span>
                                    <a href="" class="btn btn-info btn-sm"> Edit</a>
                                </span>
                                <span>
                                    <a href="" class="btn btn-danger btn-sm"> Hapus</a>
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $users->links() }}
        </div>
    </div>
</div>

{{-- Modal --}}
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