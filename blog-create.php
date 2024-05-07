
<?php 
include "db.php";
if(isset($_POST['submit'])){
  $title = htmlspecialchars((trim($_POST['title'])));
  $about = htmlspecialchars(trim($_POST['about']));
  $image = $_FILES['image'];
  $error = [];

  empty($title) ? ($error[]= 'please enter a title..') : '';
  empty($about) ? ($error[]= 'please enter an about description..') : '';
  is_uploaded_file($image['tmp_name']) ? '' : ($error[] = "please upload image...");

  if(!$error){
    $image_path = "photo/".$image['name'];
    move_uploaded_file($image['tmp_name'], $image_path);
    $query = "INSERT INTO articles (title, about, image, posted_at) VALUES ('$title', '$about', '$image_path', now())";

    $result = mysqli_query($con, $query);
    if($result){
      header('location: index.php');
    }else{
      echo mysqli_connect_error();
    }
  }
}
?>

<?php
include 'component/header.php'
?>


<h1>New article</h1>
<form action="" method="post" enctype="multipart/form-data" class="w-50">

<div>
  <ul>
    <?php if(isset($error)) : ?>
      <?php if ($error) : ?>
        <?php foreach($error as $e) : ?>
          <li><?= $e ?></li>
        <?php endforeach; ?>
      <?php endif; ?>
    <?php endif; ?>

  </ul>
</div>

  <div class="my-3">
    <label for="title">Title</label>
    <input type="text" name="title" id="" placeholder="Enter ur title: " class="form-control">
    
  </div>

  <div class="my-3">
    <label for="title">About</label>
    <textarea type="text" name="about" id="" placeholder="Enter ur about: " class="form-control"></textarea>
    
  </div>

  <div class="my-3">
    <label for="image">Upload photo</label>
    <input type="file" name="image" id="" class="form-control">
    
  </div>

  <button type="submit" name="submit" class="btn btn-outline-success ">submit</button>

</form>

<?php include 'component/footer.php'
?>