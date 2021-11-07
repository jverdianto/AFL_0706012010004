@extends('layout/mainlayout')

@section('title', 'Jenis')

@section('main_content')
    <br><h1>Spesifikasi HP</h1><br>
    @foreach($jenis as $jenis)
        <img src="{{ $jenis['img_url'] }}" style="width: 400px" style="float: left"></img><br><br>
        <h2>{{ $jenis['nama_hp'] }}</h2><br>
        <h4>Size: {{ $jenis['size'] }}</h4>
        <h4>Camera: {{ $jenis['camera'] }}</h4>
        <h4>RAM: {{ $jenis['ram'] }}</h4>
        <h4>Storage: {{ $jenis['storage'] }}</h4>
        <h4>Battery capacity: {{ $jenis['battery'] }}</h4>
        <h4>Merk HP: 
            <a href="{{ route('merk.show', $jenis->merk->merk_code) }}">
                {{ $jenis->merk->nama_merk }}
            </a>
        </h4><br><br><br>
    @endforeach
@endsection