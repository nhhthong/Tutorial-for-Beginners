<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<style>
    *{
        box-sizing: border-box;
    }
    #panel{
        width: 300px;
        height: 300px;
        margin: auto;
    }
    .cell{
        width: 30px;
        height: 30px;
        background-color: #0b97c6;
        border: 1px solid black;
        float: left;
    }

</style>
<div id="panel">
    <?php
    for($i=1; $i <= 100; $i++) {
        $r = random_int(0, 255);
        $g = random_int(0, 255);
        $b = random_int(0, 255);
        echo "<div  class=\"cell\" style=\"background-color: rgb($r,$g,$b)\"></div>";
    }
    ?>
</div>
</body>
</html>
