<?php 

require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Race.php';
require_once __DIR__ . '/Data/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title> PHP - OOP 2 </title>
</head>

<body>


<?php 
foreach($db as $product): 
if (in_array("cane", $db))
?>

    <div class="card">
        <img src=" <?php echo $product->image ?> " class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"> <?php echo $product->item_name ?> </h5>
            <p class="card-text"> <?php echo $product->price ?> $ </p>
            <p class="card-text"> <?php echo $product->category ?> </p>
        </div>
    </div>
<?php endforeach; ?>

<?php 
foreach($db as $product): 
if (in_array("gatto", $db))
?>

    <div class="card">
        <img src=" <?php echo $product->image ?> " class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"> <?php echo $product->item_name ?> </h5>
            <p class="card-text"> <?php echo $product->price ?> $ </p>
            <p class="card-text"> <?php echo $product->category ?> </p>
        </div>
    </div>
<?php endforeach; ?>

</body>
</html>