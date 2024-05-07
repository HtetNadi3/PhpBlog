<?php include "component/header.php" ?>

<div class="container">
  <div class="mx-auto shadow-lg" style="width: 450px;">
    <div class="p-5 mx-auto text-center" style="width: 350px;">
      <h1 class="mb-5 text-primary"><i class="fa-solid fa-circle-user text-primary"></i> Login</h1>

      <div class="my-3">
        <input type="email" name="email" id="email" placeholder="Enter email address" class="form-control">
      </div>

      <div class="my-3">
        <input type="password" name="password" id="password" placeholder="Enter password" class="form-control">
      </div>

      <div class="my-3 text-center">
        <button type="submit" class="btn btn-primary text-center">Login</button>
      </div>

      <div>
        <p>No account, <a href="">Register here</a></p>
      </div>
    </div>
  </div>
</div>
<?php include "component/footer.php" ?>