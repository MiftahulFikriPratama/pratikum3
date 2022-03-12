<?php
include_once '../layout/header.php';
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form>
  <div class="form-group">
    <label for="nama">NAMA</label> 
    <input id="nama" name="nama" placeholder="Nama Player" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label>NAMA GAME</label> 
    <div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="nama_game" id="nama_game_0" type="radio" class="custom-control-input" value="mobilelegends"> 
        <label for="nama_game_0" class="custom-control-label">Mobile Legends</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="nama_game" id="nama_game_1" type="radio" class="custom-control-input" value="pubg"> 
        <label for="nama_game_1" class="custom-control-label">PUBG</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="nama_game" id="nama_game_2" type="radio" class="custom-control-input" value="freefire"> 
        <label for="nama_game_2" class="custom-control-label">Free Fire</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="alasan">ALASAN MEMILIH GAME DIATAS</label> 
    <textarea id="alasan" name="alasan" cols="40" rows="5" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="nilai">NILAI GAME ITU</label> 
    <input id="nilai" name="nilai" placeholder="Berapa % Anda Menyukainya" type="text" class="form-control">
  </div> 
  <div class="form-group">
    <button name="submit" type="submit" class="btn btn-primary">KIRIM</button>
  </div>
</form>
 
<?php
require_once '../layout/footer.php';
?>