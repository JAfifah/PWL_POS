@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Edit Kategori</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('kategori/update/' . $kategori->kategori_id) }}">
                @csrf
                @method('POST') <!-- HARUS sesuai dengan route yang ada -->
                
                <div class="form-group">
                    <label>Kode Kategori</label>
                    <input type="text" class="form-control" name="kodekategori" value="{{ $kategori->kategori_kode }}" required>
                </div>
                
                <div class="form-group">
                    <label>Nama Kategori</label>
                    <input type="text" class="form-control" name="namakategori" value="{{ $kategori->kategori_nama }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
