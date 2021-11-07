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

<br><h2>Create Merk HP</h2><br><br>

<form action="{{ route('merk.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label>Merk Code</label><br>
        <input type="text" class="form-control" name="merk_code"><br>
    </div>

    <div class="form-group">
        <label>Nama Merk HP</label><br>
        <input type="text" class="form-control" name="nama_merk"><br>
    </div>

    <div class="form-group">
        <label>Tahun Didirikan</label><br>
        <input type="text" class="form-control" name="tahun"><br>
    </div>

    <div class="form-group">
        <label>Pendiri</label><br>
        <input type="text" class="form-control" name="pendiri"><br>
    </div>

    <div class="form-group">
        <label>Negara Asal</label><br>
        <input type="text" class="form-control" name="negara"><br>
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
    
</form>

</div>

</body>
</html>