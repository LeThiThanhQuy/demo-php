<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Future Value Calculator</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $funds = $_POST['funds'];
        $rate = $_POST['rate'];
        $years = $_POST['years'];

        $result = $funds + $funds * ($rate / 100);
        for ($i = 2; $i <= $years; $i++) {
            $result = $result + $result * ($rate / 100);
        }
    }
?>
<div id="content">
    <h1>Future Value Calculator</h1>

    <label>Investment Amount:</label>
    <span><?php echo $funds ?></span><br/>

    <label>Yearly Interest Rate:</label>
    <span><?php echo $rate ?></span><br/>

    <label>Number of Years:</label>
    <span><?php echo $years ?></span><br/>

    <label>Future Value:</label>
    <span><?php echo "$".$result ?></span><br/>

</div>
</body>
</html>
