@extends('layouts.layout')
@section('judulpage','Dashboard')
@section('judulkonten','Dashboard')
@section('isikonten')
<div class="row">
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
                <i class="far fa-envelope"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Total Surat</h4>
                </div>
                <div class="card-body">
                    {{ $totalsurat }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-danger">
                <i class="far fa-envelope-open"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Total Surat Izin Kerja</h4>
                </div>
                <div class="card-body">
                    {{$totalsuratizin}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-warning">
                <i class="fas fa-envelope-open-text"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Total Surat Lamaran Kerja</h4>
                </div>
                <div class="card-body">
                    {{ $totalsuratlamaran }}
                </div>
            </div>
        </div>
    </div>

</div>
@endsection