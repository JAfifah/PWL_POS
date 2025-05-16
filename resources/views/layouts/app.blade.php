<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


@extends('adminlte::page')

@section('title', config('adminlte.title', 'Admin Panel'))

@vite('resources/js/app.js')

@section('content_header')
    @hasSection('content_header_title')
        <h1 class="text-muted">
            @yield('content_header_title')
            @hasSection('content_header_subtitle')
                <small class="text-dark">
                    <i class="fas fa-xs fa-angle-right text-muted"></i>
                    @yield('content_header_subtitle')
                </small>
            @endif
        </h1>
    @endif
@stop

@section('content')
    @yield('content_body')
@stop

@section('footer')
    <div class="float-right">
        Version: {{ config('app.version', '1.0.0') }}
    </div>
    <strong>
        <a href="{{ config('app.company_url', '#') }}">
            {{ config('app.company_name', 'My Company') }}
        </a>
    </strong>
@stop

{{-- Sidebar Menu --}}
@section('adminlte_sidebar')
    <li class="nav-item">
        <a href="{{ route('home') }}" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>Dashboard</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('kategori.index') }}" class="nav-link">
            <i class="nav-icon fas fa-list"></i>
            <p>Manage Kategori</p>
        </a>
    </li>
@stop

@push('js')
<script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
@endpush

@stack('scripts')

@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css" />
@endpush
