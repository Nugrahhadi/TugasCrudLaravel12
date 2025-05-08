@extends('satuans.layout')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Daftar Satuan</h5>
            <a class="btn btn-success" href="{{ route('satuans.create') }}">Tambah Satuan</a>
        </div>
        <div class="card-body">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    {{$message}}
                </div>
            @endif

            <table class="table table-bordered table-hover">
                <thead class="table-light">
                    <tr>
                        <th width="50px">No</th>
                        <th>Nama Satuan</th>
                        <th>Keterangan</th>
                        <th width="200px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($satuans as $satuan)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$satuan->nama_satuan}}</td>
                        <td>{{$satuan->keterangan}}</td>
                        <td>
                            <form action="{{route('satuans.destroy', $satuan->id)}}" method="POST">
                                <a class="btn btn-info btn-sm" href="{{route('satuans.show', $satuan->id)}}">Lihat</a>
                                <a class="btn btn-primary btn-sm" href="{{route('satuans.edit', $satuan->id)}}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{$satuans->links()}}
        </div>
    </div>
@endsection