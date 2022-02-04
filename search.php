<?php 
include_once __DIR__ . '/db.php';
$typeFilter = $products;

if (isset($_GET['type']) !== false || isset($_GET['price']) !== false) {
    $type = $_GET['type'];
    $price = $_GET['price'];
    var_dump($price);
    if ($type === 'all' && $price === 'all') {
        $typeFilter = $products;
        
    } else {
    $typeFilter = [];
    foreach ($products as $product) {
        if ($product['type'] === $type || $product["price"] <= $price) {
            $typeFilter[] = $product;
            echo "ciao";
        }
    }
}

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div>
    <form action='search.php' method='GET'>
      <select name='type' id='type'>
        <option value='all'>all</option>
        <option value='smartphone'>smartphone</option>
        <option value='tablet'>tablet</option>
        <option value='music'>music</option>
      </select>
      <select name='price' id='price'>
        <option value='all'>all</option>
        <option value='500'>500</option>
        <option value='800'>800</option>
        <option value='1000'>1000</option>
      </select>
      <button>Cerca</button>
    </form>
    </div>
    <div class="container">
        <?php
        foreach ($typeFilter as $product) {
             include __DIR__ . '/products.php';
        }
        ?>
    </div>
</body>
</html>