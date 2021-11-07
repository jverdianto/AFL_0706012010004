@extends('layout/mainlayout')

@section('title', 'Jenis HP')

@section('main_content')
    <div class="container">
        <br><h1>Jenis HP</h1>
        <a class="btn btn-info" href="{{ route('jenis.create') }}">Create Jenis HP</a><br><br>

        <div class="row row-cols-4 row-cols-md-4 g-4">
            @foreach($jenis as $jenis)
            <div class="col">
                <div class="card text-center" style="width: 100%">
                    <a href="{{ route('jenis.show', $jenis->id) }}">
                        <img class="card-img-top" src="{{ $jenis['img_url'] }}" alt="Card image" style="height: 210px; width: 300px">
                    </a>
                    <div class="card-body">
                        <h4 class="card-title">{{ $jenis['nama_hp'] }}</h4>
                        
                        <form action="{{ route('jenis.destroy', $jenis->id) }}" method="POST">
                            <a class="btn btn-primary" href="{{ route('jenis.show', $jenis->id) }}">Show</a>
                            <a class="btn btn-success" href="{{ route('jenis.edit', $jenis->id) }}">Edit</a>
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