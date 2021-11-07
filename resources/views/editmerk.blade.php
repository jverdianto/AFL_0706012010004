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

<br><h2>Edit Merk HP</h2><br><br> 

<form action="{{ route('merk.update', $merk->merk_code ) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="PATCH">

    <div class="form-group">
        <label>Code Merk</label><br>
        <input type="text" class="form-control" name="merk_code" value="{{ $merk->merk_code }}"><br>
    </div>

    <div class="form-group">
        <label>Nama Merk HP</label><br>
        <input type="text" class="form-control" name="nama_merk" value="{{ $merk->nama_merk }}"><br>
    </div>

    <div class="form-group">
        <label>Tahun</label><br>
        <input type="text" class="form-control" name="tahun" value="{{ $merk->tahun }}"><br>
    </div>

    <div class="form-group">
        <label>Pendiri</label><br>
        <input type="text" class="form-control" name="pendiri" value="{{ $merk->pendiri }}"><br>
    </div>

    <div class="form-group">
        <label>Negara</label><br>
        <input type="text" class="form-control" name="negara" value="{{ $merk->negara }}"><br>
    </div>

    <br>

    <div class="form-group">
        <label>Image URL</label><br>
        <input type="text" class="form-control" name="img_url" value="{{ $merk->img_url }}"><br>
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