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

<br><h2>Create Jenis HP</h2><br><br>  

<form action="{{ route('jenis.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label>Nama HP</label><br>
        <input type="text" class="form-control" name="nama_hp"><br>
    </div>

    <div class="form-group">
        <label>Size</label><br>
        <input type="text" class="form-control" name="size"><br>
    </div>

    <div class="form-group">
        <label>Camera</label><br>
        <input type="text" class="form-control" name="camera"><br>
    </div>

    <div class="form-group">
        <label>RAM</label><br>
        <input type="text" class="form-control" name="ram"><br>
    </div>

    <div class="form-group">
        <label>Storage</label><br>
        <input type="text" class="form-control" name="storage"><br>
    </div>

    <div class="form-group">
        <label>Battery Capacity</label><br>
        <input type="text" class="form-control" name="battery"><br>
    </div>

    <div class="form-group">
        <label>Merk HP</label><br>
        <input type="text" class="form-control" name="merk_hp"><br>
    </div>

    <br>

    <div class="form-group">
        <label>Image URL</label><br>
        <input type="text" class="form-control" name="img_url"><br>
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