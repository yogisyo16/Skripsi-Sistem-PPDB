@extends('layouts.panitia.role-panitia.nav-role-panitia')

@section('css-table')
    <link rel="stylesheet" href="{{ asset('css/panitia-style.css') }}">
@endsection

@section('jenis-panitia')
    selamat datang {{ Auth::user()->name }} di Sistem PPDB
@endsection

@section('sidebar-space')
    <li class="sidebar-item">
        <a href="{{ route('homePanitiaIntiShow') }}" class="sidebar-link">
            <i class="material-icons">
                home
                <span>Home</span>
            </i>
        </a>
    </li>
@endsection

@section('content-space')
<div class="container mt-4">
    <div class="mb-4 mt-2">
        <a href="{{ route('viewWawancaraPanitiaIntiShow', $wawancaraFinansial[0]->user_id) }}" class="btn btn-primary">Back</a>
    </div>
    <h4>Hasil Wawancara Finansial {{ $wawancaraFinansial[0]->nama_lengkap }}</h4>
    <hr>
@if ($wawancaraFinansial[0]->hsl_udp == null && $wawancaraFinansial[0]->hsl_spp == null && $wawancaraFinansial[0]->hsl_ups == null && $wawancaraFinansial[0]->hsl_uang_seragam == null && $wawancaraFinansial[0]->hsl_uang_kegiatan == null && $wawancaraFinansial[0]->hsl_uang_alat == null)
    <div class="d-flex justify-content-center">
        <h4>Belum ada data</h4>
    </div>
@else
    <div class="container">
        <div class="row">
            <div class="col">
                <h6>Biaya sekolah siswa</h6>
            </div>
            <div class="col">
                <h6>Biaya yang sudah dibayarkan</h6>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="input-group mb-3">
                <span class="input-group-text">Pembayaran UDP</span>
                <input type="text" readonly class="form-control" name="hsl_udp" id="hsl_udp" value="{{ $wawancaraFinansial[0]->hsl_udp }}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Pembayaran SPP</span>
                <input type="text" readonly class="form-control" name="hsl_spp" id="hsl_spp" value="{{ $wawancaraFinansial[0]->hsl_spp }}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Pembayaran UPS</span>
                <input type="text" readonly class="form-control" name="hsl_ups" id="hsl_ups" value="{{ $wawancaraFinansial[0]->hsl_ups }}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Uang Seragam</span>
                <input type="text" readonly class="form-control" name="hsl_uang_seragam" id="hsl_uang_seragam" value="{{ $wawancaraFinansial[0]->hsl_uang_seragam }}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Uang Kegiatan</span>
                <input type="text" readonly class="form-control" name="hsl_uang_kegiatan" id="hsl_uang_kegiatan" value="{{ $wawancaraFinansial[0]->hsl_uang_kegiatan }}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Uang Alat</span>
                <input type="text" readonly class="form-control" name="hsl_uang_alat" id="hsl_uang_alat" value="{{ $wawancaraFinansial[0]->hsl_uang_alat }}">
            </div>
        </div>
        <div class="col">
            <div class="input-group mb-3">
                <span class="input-group-text">@</span>
                <input type="text" readonly class="form-control" name="pembayaran_udp" id="pembayaran_udp" value="{{ $wawancaraFinansial[0]->pembayaran_udp }}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">@</span>
                <input type="text" readonly class="form-control" name="pembayaran_spp" id="pembayaran_spp" value="{{ $wawancaraFinansial[0]->pembayaran_spp }}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">@</span>
                <input type="text" readonly class="form-control" name="pembayaran_ups" id="pembayaran_ups" value="{{ $wawancaraFinansial[0]->pembayaran_ups }}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">@</span>
                <input type="text" readonly class="form-control" name="pembayaran_uang_seragam" id="pembayaran_uang_seragam" value="{{ $wawancaraFinansial[0]->pembayaran_uang_seragam }}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">@</span>
                <input type="text" readonly class="form-control" name="pembayaran_uang_kegiatan" id="pembayaran_uang_kegiatan" value="{{ $wawancaraFinansial[0]->pembayaran_uang_kegiatan }}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">@</span>
                <input type="text" readonly class="form-control" name="pembayaran_uang_alat" id="pembayaran_uang_alat" value="{{ $wawancaraFinansial[0]->pembayaran_uang_alat }}">
            </div>
        </div>
    </div>
    <hr>
    <div class="input-group mb-3">
        <span class="input-group-text">Total Pembayaran</span>
        <input type="text" readonly class="form-control" name="total_uang" id="total_uang">
    </div>
    <div class="row">
        <div class="col">
            <div class="input-group mb-3">
                <span class="input-group-text">Total yang harus dibayar</span>
                <input type="text" readonly class="form-control" name="total_tunai" id="total_tunai" value="{{ $wawancaraFinansial[0]->total_tunai }}">
            </div>
        </div>
        <div class="col">
            <div class="input-group mb-3">
                <span class="input-group-text">@</span>
                <input type="text" readonly class="form-control" name="total_dibayar" id="total_dibayar" value="{{ $wawancaraFinansial[0]->total_dibayar }}">
            </div>
        </div>
    </div>
@endif
</div>
@endsection