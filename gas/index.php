<?php
include('../administrator/functions.php');
include('../components/navBar.php');
?>

<div class="container position-absolute top-50 start-50 translate-middle">
<form action="" method="post">
    
            <div class="row">
                <div class="col-md-12 col-lg-6 pb-4">
                    <span>jumlah gas :</span>
                    <input type="number" name="jumlah_gas" class="form-control" required>
                </div>
                
                <div class="form-floating col-md-12 col-lg-6 pb-4">
                    <select name="jenis_gas" class="form-select" id="jenis_gas" required>
                        <option value="">- Pilih Jenis Gas -</option>
                        <option value="3kg">gas melon (3kg)</option>
                        <option value="12kg">gas (12kg)</option>
                    </select>
                    <label for="jenis_gas">3kg / 12kg</label>
                </div>
            </div>
                
            <div class="row">
                <div class="col-lg-6 col-md-12 pb-4">
                    <span>harga gas :</span>
                    <input type="number" name="harga_gas" class="form-control" disabled required>
                </div>

                <div class="col-lg-6 col-md-12 pb-4">
                    <span>alamat :</span>
                    <input type="text" name="pembeli_gas" class="form-control" required>
                </div>
                </div>

</form>
</div>

<?php
include('../components/footer.php');
?>