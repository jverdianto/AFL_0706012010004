@extends('layout/mainlayout')

@section('title', 'Merk HP')

@section('main_content')
    <div class="container">
        <br><h1>Merk HP</h1>
        <a class="btn btn-info" href="{{ route('merk.create') }}">Create Merk HP</a><br><br>

        <div class="row row-cols-4 row-cols-md-4 g-4">
            @foreach($merk as $merk)
            <div class="col">
                <div class="card text-center" style="width: 100%">
                    <a href="{{ route('merk.show', $merk->merk_code) }}">
                        <img class="card-img-top" src="{{ $merk['img_url'] }}" alt="Card image" style="height: 140px; width: 300px">
                    </a>
                    <div class="card-body">
                        <h4 class="card-title">{{ $merk['nama_merk'] }}</h4>
                        
                        <form action="{{ route('merk.destroy', $merk->merk_code) }}" method="POST">
                            <a class="btn btn-primary" href="{{ route('merk.show', $merk->merk_code) }}">Show</a>
                            <a class="btn btn-success" href="{{ route('merk.edit', $merk->merk_code) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <br><br><br>

    </div>
@endsection