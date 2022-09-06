<?php
require "function.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <h2><a class="navbar-brand" href="#">Web Converter</a></h2>
  </div>
</nav>

<div class="shadow p-3 mb-5 bg-white text-center"><h3>Konversi Bilangan</h3></div>

<form>
<div class="container mt-3 px-5 col-md-6">   
<div class="input-group mt-3 mb-3">

<div class="dropdown">
  <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown">
    Binary
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="decimal.php">Decimal</a></li>
    <li><a class="dropdown-item" href="hexa.php">Hexadecimal</a></li>
    <li><a class="dropdown-item" href="octa.php">Octal</a></li>
  </ul>
</div>
    <input name="binary" type="number" class="form-control" placeholder="Masukan Bilangan" value="<?=$binary;?>" required>
    <button type="submit" class="btn btn-success mb-6">Convert</button>
    
  </div>

  <div class="shadow p-2 mb-3 bg-dark text-center text-white">Hasil Konversi</div>

  <!-- Kolom output -->
  <label>Binary</label>
  <div class="card bg-primary mb-3 text-white">
    <div class="p-2 card-body"><?=$binary;?></div>
</div>

  <label>Decimal</label>
  <div class="card mb-3">
    <div class="p-2 card-body"><?=$deci;?></div>
</div>

<label>Hexadecimal</label>
  <div class="card mb-3">
    <div class="p-2 card-body"><?=$hitunghex;?></div>
</div>
<label>Octal</label>
  <div class="card">
    <div class="p-2 card-body"><?=$hitungoct;?></div>
</div>


</div>
</form>

<footer class="py-3 bg-dark mt-5">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-white">Copyright &copy; Rifky Ahmad Althaf</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>

</body>
</html>