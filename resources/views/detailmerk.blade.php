@extends('layout/mainlayout')

@section('title', 'Merk')

@section('main_content')
    <br><h1>Tentang Merk</h1><br>
    @foreach($merk as $merk)
        <img src="{{ $merk['img_url'] }}" style="width: 300px"></img><br><br>
        <h2>{{ $merk['nama_merk'] }}</h2>
        <h4>Tahun didirikan: {{ $merk['tahun'] }}</h4>
        <h4>Pendiri: {{ $merk['pendiri'] }}</h4>
        <h4>Negara: {{ $merk['negara'] }}</h4>
    @endforeach
    <br>
    <?php $index = 1 ?>
    <table class="table table-striped">
    @foreach($merk->jenis as $jenis)
        <tr>
            <th>NO</th>
            <th>Nama HP</th>
            <th>Size</th>
            <th>Camera</th>
            <th>RAM</th>
            <th>Storage</th>
            <th>Battery</th>
        </tr>
        <tr>
            <th scope="row">{{ $index }}</th>
            @php $index++ @endphp
            <td>{{ $jenis['nama_hp'] }}</td>
            <td>{{ $jenis['size'] }}</td>
            <td>{{ $jenis['camera'] }}</td>
            <td>{{ $jenis['ram'] }}</td>
            <td>{{ $jenis['storage'] }}</td>
            <td>{{ $jenis['battery'] }}</td>
        </tr>  
    @endforeach
    </table>
    <br><br><br>
@endsection