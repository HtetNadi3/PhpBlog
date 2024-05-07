<?php include "component/header.php" ?>

<div class="container">
  <div class="mx-auto shadow-lg" style="width: 450px;">
    <div class="p-5 mx-auto text-center" style="width: 350px;">
      <h1 class="mb-5 text-primary"><i class="fa-solid fa-circle-user text-primary"></i> Register</h1>

      <div class="my-3">
        <input type="text" name="name" id="email" placeholder="Name" class="form-control">
      </div>

      <div class="my-3">
        <input type="email" name="email" id="email" placeholder="Email" class="form-control">
      </div>

      <div class="my-3">
        <input type="password" name="password" id="password" placeholder="password"class="form-control">
      </div>

      <div class="my-3">
        <input type="password" name="password" id="password" placeholder="Comfirm password" class="form-control">
      </div>

      <div class="my-3 text-center">
        <button type="submit" class="btn btn-primary text-center">Register</button>
      </div>

      <div>
        <p>You've already account, <a href="">login here</a></p>
      </div>
    </div>
  </div>
</div>
<?php include "component/footer.php" ?>