<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pros Before Bros!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>Welcome to the Brand New WebPro Panel!</h1>
    <h3>Here are the products we offer:</h3>
    <ul>
      <?php
        $json = file_get_contents('');
        $obj = json_decode($json);

        $products = $obj->products;
        foreach ($products as $product) {
          echo "<li>$product</li>";
        }
      ?>
    </ul>
</body>
</html>
