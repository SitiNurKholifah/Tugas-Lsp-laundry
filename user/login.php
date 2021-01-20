<?php require'../layout/header.php'; ?>
<div class="d-flex justify-content-center">
<form>
<h2 class="form-signin-heading">Silahkan login</h2>
<div class="form-group row">
     <label for="inputnama" class="col-sm-2 col-form-label">nama</label>
       <div class="col-sm-10">
         <input type="text" readonly class="form-control-col-6" id="inputnama">
    </div>
</div>
<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="email" class="form-control-col-6" id="inputEmail3">
    </div>
</div>
    <button type="submit" class="btn btn-primary">Sign in</button>
</div>
</form>
</div> 
<?php require'../layout/footer.php '; ?>
