<?php
include "db.php";
$query = "SELECT * FROM articles";
$result = mysqli_query($con, $query);
if ($result) {
    $articles = $result;
    
} else {
    echo mysqli_connect_error();
}

?>

<?php include "component/header.php" ?>

<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
    <?php while($article = mysqli_fetch_assoc($articles)): ?>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="<?= $article['image'] ?>" class="card-img-top object-fit-cover" alt="img" style="height: 10rem">
                <div class="card-body">
                    <a href="blog-view.php?id=<?= $article['id'] ?>" class="h3"><?= htmlspecialchars_decode($article['title']) ?></a>
                    <p class="card-text"><?= htmlspecialchars_decode(substr($article['about'], 0, 100)) ?>
                    </p>

                    <?php 
                        $str_to_array = explode(" ", htmlspecialchars_decode($article['about']));
                        $slice_array = array_slice($str_to_array,0,15);
                        $result = implode(" ", $slice_array);
                        $result .= " ... ";
                        print_r($result);
                    ?>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
</div>
<?php include  "component/footer.php" ?>