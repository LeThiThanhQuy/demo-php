<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Read Numbers Into Words</title>
    <style>
        #text {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }

        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
</head>
<body>
<h2>READ NUMBER</h2>
<form method="POST">
    <input type="text" id="text" name="number" placeholder="Nhập số cần đọc"/>
    <input type="submit" id="submit" value="Đọc"/>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number = $_POST['number'];

    if (strlen($number) <= 3) {
        $unit = $number % 10;
        $dozens = floor(($number % 100) / 10);
        $hundreds = floor($number / 100);
        echo readHundreds($hundreds,$dozens,$unit);
    }
    else {
        echo 'INVALID NUMBER !!!';
    }
}
function readUnit($unit)
{
    switch ($unit) {
        case 0 :
            return ' ';
        case 1 :
            return ' one';
        case 2 :
            return ' two';
        case 3 :
            return ' three';
        case 4 :
            return ' four';
        case 5 :
            return ' five';
        case 6 :
            return ' six';
        case 7 :
            return ' seven';
        case 8 :
            return ' eight';
        case 9 :
            return ' nine';
    }
}

function readDozens($dozens, $unit)
{
    switch ($dozens) {
        case 0 :
            return readUnit($unit);
        case 1 :
            switch ($unit) {
                case 0 :
                    return ' ten';
                case 1 :
                    return ' eleven';
                case 2 :
                    return ' twelve';
                case 3 :
                    return ' thirteen';
                case 8 :
                    return ' eighteen';
                default :
                    return readUnit($unit) . 'teen';
            }
        case 2 :
            return ' twenty ' . readUnit($unit);
        case 3 :
            return ' thirty ' . readUnit($unit);
        case 8 :
            return ' eighty' . readUnit($unit);
        default :
            return readUnit($dozens) . 'ty' . ' ' . readUnit($unit);
    }
}

function readHundreds($hundreds, $dozens, $unit)
{
    if ($hundreds == 0) {
        return readDozens($dozens, $unit);
    } else {
        return readUnit($hundreds) . ' hundred and ' . readDozens($dozens, $unit);
    }
}

?>
</body>
</html>