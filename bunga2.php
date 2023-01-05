<html>
<head>
    <title>Bunga Majemuk</title>
</head>
<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<!-- <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="bunga1.php">Bunga Tunggal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="bunga2.php">Bunga Majemuk</a>
        </li>
      </ul>
    </div>
  </div>
</nav> -->
<br>
<strong>Note : Jika bunga tahun maka periode harus bernilai tahun</strong>
<form action="" method="POST" name="form1">
    <table>
        <tr>
            <td>Modal</td>
            <td>:</td>
            <td><input type="number" name="m" size="25"></td>
        </tr>
        <tr>
            <td>Periode</td>
            <td>:</td>
            <td><input type="number" name="t" size="25"></td>
        </tr>
        <tr>
            <td>Bunga</td>
            <td>:</td>
            <td><input type="number" name="i" size="25"></td>
        </tr>
        <tr>
            <td><input type="submit" name="spn" value="simpan"></td>
        </tr>
    </table>
</form>
</body>
<b>Hasil</b>
<?php
if(isset($_POST['spn'])){
    $m=$_POST['m'];
    $t=$_POST['t'];
    $i=$_POST['i'];

echo "<br>";
echo "Future <br>";
$bm=((1+($i/100))**$t);
$ma=$m * round($bm,4) ;
$format_m=number_format($m, 2, ",", ".");
$format_ma=number_format($ma,2,",",".");
 echo "Ma = Mo * (1+i)^t <br>";
 echo "Ma = Rp. $format_m * (1+$i%)^$t <br>";
 echo "Ma = Rp. $format_m * (".round($bm,4).") <br>";
 echo "Ma = Rp. $format_ma <br>";
echo "<br>";
echo "Present <br>";
$bm1=((1+($i/100))**-($t));
$mo=$m * round($bm1, 4);
$format_mo=number_format($mo,2, ",", ".");
 echo "Mo = Ma * (1+i)^-t <br>";
 echo "Mo = Rp. $format_m * (1+$i%)^-$t <br>";
 echo "Mo = Rp. $format_m * (".round($bm1, 4).") <br>";
 echo "Mo = Rp. $format_mo";
}
?>
</table>
</html>