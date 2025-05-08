@extends('satuans.layout')

@section('content')
    <div class="card">
      <div class="card-header">
        <h5 class="mb-0">Tambah Satuan</h5>
      </div>
      <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{route('satuans.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama_satuan" class="form-label">Nama Satuan</label>
                    <input type="text" name="nama_satuan" class="form-control" value="{{old('nama_satuan')}}" required>
                </div>
                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <textarea name="keterangan" class="form-control" rows="3">{{old('keterangan')}}</textarea>
                </div>
                <div class="text-end">
                    <a href="{{route('satuans.index')}}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
      </div>
    </div>
@endsection