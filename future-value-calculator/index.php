<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Future Value Calculator</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div id="content">
    <h1>Future Value Calculator</h1>
    <form method="POST" action="action.php">
        <div id="data">
            <label>Investment Amount:</label>
            <input type="text" name="funds" value="0"><br>
            <label>Yearly Interest Rate:</label>
            <input type="text" name="rate" value="0"><br>
            <label>Number of Years:</label>
            <input type="text" name="years" value="0">
        </div>
        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate"><br>
        </div>
    </form>

</div>
</body>
</html>