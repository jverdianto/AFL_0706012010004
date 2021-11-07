<!DOCTYPE HTML>
<html>  
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        h2{text-align: center;}
        .button{text-align: center;}
    </style>    
</head>

<body>

<div class="container">

<br><h2>Edit Jenis HP</h2><br><br>  

<form action="{{ route('jenis.update', $jenis->id ) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PATCH">

    <div class="form-group">
        <label>Nama HP</label><br>
        <input type="text" class="form-control" name="nama_hp" value="{{ $jenis->nama_hp }}"><br>
    </div>

    <div class="form-group">
        <label>Size</label><br>
        <input type="text" class="form-control" name="size" value="{{ $jenis->size }}"><br>
    </div>

    <div class="form-group">
        <label>Camera</label><br> 
        <input type="text" class="form-control" name="camera" value="{{ $jenis->camera }}"><br>
    </div>

    <div class="form-group">
        <label>RAM</label><br>
        <input type="text" class="form-control" name="ram" value="{{ $jenis->ram }}"><br>
    </div>

    <div class="form-group">
        <label>Storage</label><br>
        <input type="text" class="form-control" name="storage" value="{{ $jenis->storage }}"><br>
    </div>

    <div class="form-group">
        <label>Battery Capacity</label><br>
        <input type="text" class="form-control" name="battery" value="{{ $jenis->battery }}"><br>
    </div>

    <div class="form-group">
        <label>Merk HP</label><br>
        <input type="text" class="form-control" name="merk_hp" value="{{ $jenis->merk_hp }}"><br>
    </div>

    <br>

    <div class="form-group">
        <label>Image URL</label><br>
        <input type="text" class="form-control" name="img_url" value="{{ $jenis->img_url }}"><br>
    </div>

    <br>

    <div class="col text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

    <br><br><br>

</form>

</div>

</body>
</html>