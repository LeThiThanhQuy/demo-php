<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Convert Currency</title>

</head>
<body>
<form method="post" action="index.php">
    <table>
        <tr>
            <th>Amount</th>
            <th>From </th>
            <th>To </th>
        </tr>
        <tr>
            <td>
                <input type="text" id="nGiaTri" name="amount">
            </td>
            <td>
                <label><select id="im" name="importCurrency">
                        <option id="imVND" value="23300"> VND</option>
                        <option id="imUSD" value="1"> USD</option>

                    </select></label>
            </td>
            <td>
                <label for="ex">
                    <select id="ex" name="exportCurrency">
                        <option id="exUSD" value="1"> USD</option>
                        <option id="exVND" value="23000"> VND</option>

                    </select>
                </label>
            </td>
        </tr>
    </table>
    <button type="submit">Convert</button>
</form>

<br>
Result:
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $amount = $_REQUEST["amount"];
    $importCurrency = $_REQUEST["importCurrency"];
    $exportCurrency = $_REQUEST["exportCurrency"];

    $result = $amount * $exportCurrency/$importCurrency;
    echo $result;
    
}
?>
</body>
</html>