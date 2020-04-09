<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<?php
$result = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST')  {
    $Num1 = $_POST['num1'];
    $Num2 = $_POST['num2'];
    $Calculate = $_POST['calculation'];
    switch ($Calculate) {
        case '+':
            $result = $Num1 + $Num2;
            break;
        case '-':
            $result = $Num1 - $Num2;
            break;
        case '*':
            $result = $Num1 * $Num2;
            break;
        case '/':
            if($Num2 !== "0" ){
                $div = $Num1 / $Num2;
                $result = $div;
            } else { echo $result = " khong duoc chia cho 0"; }
            break;
    }

}
?>
<div id = "content">
    <h2>Simple Calculator</h2>
    <form method="post">
        <label>First operand:</label>
        <input type="text" name="num1" value="0"><br/>

        <label>Operator:</label>
        <select name="calculation">
            <option value ="+">Addition</option>
            <option value ="-">Subtraction</option>
            <option value ="*">Multiplication</option>
            <option value ="/">Division</option>
        </select><br/>

        <label>Second operand:</label>
        <input type="text" name="num2" value="0"><br/>

        <label>&nbsp</label>
        <input type="submit" value="Calculate"><br/>

        <h2><b>Result:</b></h2><br/>
        <span id="result">
            <?php echo $result ?>
        </span>

    </form>
</div>

</body>
</html>