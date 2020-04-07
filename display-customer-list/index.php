<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of customers</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
<table border="1">
    <caption><h1>Danh sách khách hàng</h1></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>

    <?php
    $customerlist = array(
        "1" => array("ten" => "Mai Văn Vàng",
            "ngaysinh" => "1983-08-11",
            "diachi" => "Hà Nội",
            "anh" => "img/h01.jpg"),
        "2" => array("ten" => "Trần Đình Trọng",
            "ngaysinh" => "1989-03-23",
            "diachi" => "Nam Định",
            "anh" => "img/h02.jpg"),
        "3" => array("ten" => "Nguyễn Công Phượng",
            "ngaysinh" => "1993-04-18",
            "diachi" => "Lào Cai",
            "anh" => "img/h03.jpg"),
        "4" => array("ten" => "Phan Văn Đức",
            "ngaysinh" => "1999-07-09",
            "diachi" => "Ninh Bình",
            "anh" => "img/h04.jpg"),
        "5" => array("ten" => "Lê Bảo Bình",
            "ngaysinh" => "1996-11-23",
            "diachi" => "Hải Phòng",
            "anh" => "img/h05.jpg"),
    );

    ?>
    <?php
    foreach ($customerlist as $key => $values) {
        echo "<tr>",
            "<td>" . $key . "</td>",
            "<td>" . $values['ten'] . "</td>",
            "<td>" . $values['ngaysinh'] . "</td>",
            "<td>" . $values['diachi'] . "</td>",
            "<td><img src ='" . $values['anh'] . "' width = '60px' height ='60px'/></td>",
        "</tr>";
    }
    ?>
</table>

</body>
</html>