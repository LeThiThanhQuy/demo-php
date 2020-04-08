<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Future Value Calculator</title>
    <style>
        #content{
            width: 450px;
            margin: 0 auto;
            padding: 0px 20px 20px;
            background: white;
            border: 2px solid navy;
        }
        h1{
            color: navy;
        }

        label{
            width: 10em;
            padding-right: 1em;
            float: left;
        }

        #data input{
            float: left;
            width: 15em;
            margin-bottom: .5em;
        }

        #buttons input{
            float: left;
            margin-bottom: .5em;
        }
        br{
            clear: left;
        }

    </style>
</head>
<body>
<div id="content">
    <h1>Future Value Calculator</h1>
    <form method="POST">
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
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        function calculate()
        {
            $funds = $_POST['funds'];
            $rate = $_POST['rate'];
            $years = $_POST['years'];
            $result = $funds + $funds * ($rate / 100);
            for ($i = 2; $i <= $years; $i++) {
                $result = $result + $result * ($rate / 100);
            }
            echo "<span>Investment Amount:</span>" . $funds . "$</br>";
            echo "<span>Yearly Interest Rate:</span>" . $rate . "% </br>";
            echo " <span>Number of Years:</span>" . $years . "</br>";
            echo " <span>Future Value:</span>" . $result . "$</br>";
        }

        calculate();

    }
    ?>
</div>
</body>
</html>