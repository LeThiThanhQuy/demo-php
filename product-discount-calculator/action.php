<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $description = $_POST["description"];
    $price = $_POST["price"];
    $discountPercent = $_POST["discount_percent"];
    $discountAmount = $price * $discountPercent * 0.1;
    $discountPrice = $price - $discountAmount;
}
?>
<div id="content">
    <h1>Product Discount Calculator</h1>
    <label>Product Description: </label>
    <span><?php echo $description ?> </span><br/>

    <label>Price: </label>
    <span><?php echo $price ?>$</span><br/>

    <label>Discount Percent: </label>
    <span><?php echo $discountPercent ?>%</span><br/>

    <label>Discount Amount: </label>
    <span><?php echo $discountAmount ?>$</span><br/>

    <label>Discount Price: </label>
    <span><?php echo $discountPrice ?>$</span><br/>

</div>
</body>
</html>