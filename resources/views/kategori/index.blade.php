@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="card-title">Manage Kategori</h3>
            <a href="{{ route('kategori.create') }}" class="btn btn-primary">+ Add Kategori</a>
        </div>
        <div class="card-body">
            <table id="kategoriTable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Kategori</th>
                        <th>Nama Kategori</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        let table = $('#kategoriTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('kategori.data') }}",
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                { data: 'kategori_kode', name: 'kategori_kode' },
                { data: 'kategori_nama', name: 'kategori_nama' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });

        $(document).on('click', '.delete-btn', function() {
            let id = $(this).data('id');
            if (confirm("Apakah Anda yakin ingin menghapus kategori ini?")) {
                $.ajax({
                    url: `/kategori/${id}`,
                    type: 'DELETE',
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        alert(response.success);
                        table.ajax.reload();
                    },
                    error: function(xhr) {
                        alert('Terjadi kesalahan: ' + xhr.responseText);
                    }
                });
            }
        });
    });
</script>
@endpush
