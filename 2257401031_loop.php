<style>
 .form-box {
    border: 1px solid #ccc;
    padding: 8px;
    width: 100%; /*lebar*/
    margin: 0 auto;
    background-color: #f9f9f9;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  .button-link{
    display: inline-block;
  padding: 2px 2px;
  background-color: blue;
  color: white;
  border: none;
  text-decoration: none;
  text-align: center;
  cursor: pointer;
  }
</style>
<div class="form-box">
<form method="post">
<b><label for="text">Jenis Perulangan</label></b><br><br>
  <label for="text">Teks</label><br>
  <input type="text" id="text" name="text"><br><br>
  <label for="repetitions">Jumlah perulangan</label><br>
  <input type="number" id="repetitions" name="repetitions"><br><br>
  <input type="submit" value="Cetak" style="background-color: blue; color: white;">
  <a href="indexlama.php" class="button-link">kembali</a>
</form>

<?php
/**
 * Nim : 2257401031
 * Nama : SAHRU
 * Kelas : MI22A
 */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $text = $_POST["text"];
  $repetitions = $_POST["repetitions"];

  for ($i = 1; $i <= $repetitions; $i++) {
    echo "$i. $text<br>";
  }
}
?>
</div>
