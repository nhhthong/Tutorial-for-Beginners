<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <?php
        $error = '';
        $alert = '';
        if (isset($_GET['urName']))
        {
            $a = $_GET['urName'];
            if ($a == ''){
                $error = 'Vui lòng nhập tên của bạn';
            }
            else if (!isset($_GET['op']) || !isset($_GET['ck'])){
                $error = 'Vui lòng chọn 1 giới tính';
            }else if (!isset($_GET['ck']) && isset($_GET['op'])){
                $error = 'Vui lòng chọn 1 trình duyệt';
            }else{
                $alert = 'Cập nhập thành công';
            }

        }
    ?>

    <form action="" method="get">
        <p>Your name:</p>
        <input type="text" name="urName">
        <p>Your sex:</p>
        <input type="radio" name="op" value="male">Male<br>
        <input type="radio" name="op" value="female">Female<br>
        <input type="checkbox" name="ck" value="ie">Using Internet Explorer<br>
        <input type="checkbox" name="ck" value="ff">Using Firefox<br>
        <input type="checkbox" name="ck" value="gc">Using Google Chrome<br>
        <p>How many children do you have?</p>
        <select id="num" name="children" style="margin-bottom: 15px">
            <option value="none">None</option>
            <option value="one">1</option>
            <option value="two">2</option>
            <option value="three">3</option>
        </select><br>
        <input type="submit" value="Submit"></td>
        <p style="color: red"><?= $error ?></p></td>
        <p style="color: green"><?= $alert ?></p>
    </form>
</body>
</html>
