<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div id="content">
    <h1>Product Discount Calculator</h1>
    <form method="POST" action="action.php">
        <div id="data">
            <label>Product Description:</label>
            <input type="text" name="description"/><br/>
            <label>List Price: </label>
            <input type="text" name="price"/><br/>
            <label>Discount Percent:</label>
            <input type="text" name="discount_percent"/>(%)<br/>
        </div>
        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculator Discount"><br>
        </div>
    </form>

</div>
</body>
</html>