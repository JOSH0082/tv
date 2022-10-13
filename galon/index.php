<?php
include('../administrator/functions.php');

if(isset($_POST['simpan'])){
  if(beliGalon($_POST) > 0){
    $gagal = false;
  }else{
    $gagal = true;
  }
}

include('../components/navBar.php');
?>

<?php if($gagal === true):
  echo mysqli_error($conn);?>
  <div class="alert alert-danger" role="alert">
    gagal mengirim pesanan!
  </div>
<?php elseif($gagal === false):
  ?>
  <div class="alert alert-success" role="alert">
    berhasil mengirim pesanan!
  </div>
<?php endif; ?>

<div class="container position-absolute top-50 start-50 translate-middle">
<form action="" method="post">
    
  <div class="row"> 
    <div class="col-md-12 col-lg-6 pb-4">
        <span>jumlah galon :</span>
        <input type="number" name="jumlah_galon" class="form-control" required>
    </div>

    <div class="col-lg-6 col-md-12 pb-4">
        <span>harga galon :</span>
        <input type="number" name="harga_galon" class="form-control" required>
    </div>

      <div class="col-lg-6 col-md-12 pb-4">
          <span>alamat :</span>
          <input type="text" name="pembeli_galon" class="form-control" required>
      </div>
  </div>

  <div class="row">
    <div class="col">
        <button class="btn btn-primary" name="simpan" type="submit">isi ulang!</button>
    </div>
  </div>
    
</form>
</div>
<?php
include('../components/footer.php');
?>
