<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<style>

    /**
        Tạo thêm 2 class khác tương tự
     */

    .A{
        background-color: #9d9d9d;
        color: white;
    }

    .B{
        background-color: deepskyblue;
        color: white;
    }

    .C{
        background-color: goldenrod;
        color: white;
    }

    .A:hover{
        background-color: #3c763d;
        color: yellow;
    }

    .C:hover{
        background-color: blueviolet;
        color: yellow;
    }

    .B:hover{
        background-color: red;
        color: yellow;
    }
</style>


<table border="1" cellpadding="10" cellspacing="10" style="border-collapse: collapse; width:  300px; margin: auto">

    <?php
    for($i = 1; $i <= 30; $i++)
        {
            $class = 'A';
            if($i % 3 == 1){
                $class = 'B';
            }
            else if($i % 3 == 2){
                $class = 'C';
            }
            ?>
            <tr class="<?= $class ?>">
                <td><?= $i ?></td>
                <td><?= "Sinh viên" . $i ?></td>
            </tr>
            <?php
        }
    ?>
    <!-- dùng php lặp n lần với các class khác nhau lặp đi lặp lại theo thứ tự -->
</table>

</body>
</html>