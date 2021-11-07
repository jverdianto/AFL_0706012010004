<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="">Jeffrey's Website</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        @if($title === "Home")
        <li class="nav-item active">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/merk">Merk HP</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/jenis">Jenis HP</a>
        </li>
        @elseif($title === "Merk HP")
        <li class="nav-item">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="/merk">Merk HP</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/jenis">Jenis HP</a>
        </li>
        @elseif($title === "Jenis HP")
        <li class="nav-item">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/merk">Merk HP</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="/jenis">Jenis HP</a>
        </li>
        @endif
    </ul>
  </div>
</nav>

    <!-- <nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
        <a class="navbar-brand">Jeffrey's Website</a>
        </div>
        <ul class="nav navbar-nav">
        @if($title === "Home")
            <li class="active"><a href="/">Home</a></li>
            <li><a href="/merk">Merk HP</a></li>
            <li><a href="/jenis">Jenis HP</a></li>
        @elseif($title === "Merk HP")
            <li><a href="/">Home</a></li>
            <li class="active"><a href="/merk">Merk HP</a></li>
            <li><a href="/jenis">Jenis HP</a></li>
        @elseif($title === "Jenis HP")
            <li><a href="/">Home</a></li>
            <li><a href="/merk">Merk HP</a></li>
            <li class="active"><a href="/jenis">Jenis HP</a></li> 
        @elseif($title === "Merk")
            <li><a href="/">Home</a></li>
            <li><a href="/merk">Merk HP</a></li>
            <li><a href="/jenis">Jenis HP</a></li> 
        @elseif($title === "Jenis")
            <li><a href="/">Home</a></li>
            <li><a href="/merk">Merk HP</a></li>
            <li><a href="/jenis">Jenis HP</a></li> 
        @endif
        </ul>
    </div>
    </nav> -->

</body>
</html>