@extends('satuans.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Detail Satuan</h5>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-3">Nama Satuan</div>
                <div class="col-md-9">: {{ $satuan->nama_satuan }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-3">Keterangan</div>
                <div class="col-md-9">: {{ $satuan->keterangan ?? '-' }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-3">Dibuat pada</div>
                <div class="col-md-9">: {{ $satuan->created_at->format('d/m/Y H:i') }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-3">Diperbarui pada</div>
                <div class="col-md-9">: {{ $satuan->updated_at->format('d/m/Y H:i') }}</div>
            </div>
            <div class="text-end">
                <a href="{{ route('satuans.index') }}" class="btn btn-secondary">Kembali</a>
                <a href="{{ route('satuans.edit', $satuan->id) }}" class="btn btn-primary">Edit</a>
            </div>
        </div>
    </div>
@endsection