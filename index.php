

<!-- Creiamo un array consentente dei prodotti con
Nome
Prezzo
Immagine
Tipologia
Stampiamo tutti i nostri prodotti in pagina
Poi con una select filtriamo i nostri prodotti per prezzo o per tipologia -->

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
    include __DIR__ . '/db.php';
        foreach ($products as $product) {
             include __DIR__ . '/products.php';
        }
        ?>
    </div>
</body>
</html>