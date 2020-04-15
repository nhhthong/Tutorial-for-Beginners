<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <?php
        $error = '';
        $result = '';
        if(isset($_GET['numA']) && isset($_GET['numB']))
        {
            $a = $_GET['numA'];
            $b = $_GET['numB'];
            if ($a == ''){
                $error = 'Vui lòng nhập số hạng 1';
            }else if ($b == ''){
                $error = 'Vui lòng nhập số hạng 2';
            }
            else if (!isset($_GET['op'])){
                $error = 'Vui lòng chọn 1 phép toán';
            }else{
                $op = $_GET['op'];
                if ($op == 'add'){
                    $result = $a + $b;
                }else if ($op == 'sub') {
                    $result = $a - $b;
                }else if ($op == 'mul') {
                    $result = $a * $b;
                }else if ($b == 0) {
                    $error = 'Không thể chia cho 0';
                }else{
                    $result = $a / $b;
                }
            }
        }
    ?>


    <form action="" method="get">
        <table>
            <tr>
                <td>Số hạng 1</td>
                <td><input type="text" name="numA"></td>
            </tr>
            <tr>
                <td>Số hạng 2</td>
                <td><input type="text" name="numB"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="radio" name="op" value="add">Cộng
                    <input type="radio" name="op" value="sub">Trừ
                    <input type="radio" name="op" value="mul">Nhân
                    <input type="radio" name="op" value="div">Chia
                </td>
            </tr>
            <tr>
                <td></td>
                <td><p><?= $result ?></p></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Xem kết quả"></td>
            </tr>
            <tr>
                <td></td>
                <td><p style="color: red"><?= $error ?></p></td>
            </tr>
        </table>
    </form>
</body>
</html>
