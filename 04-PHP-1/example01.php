<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<style>
    *{
        box-sizing: border-box;
    }

    .cell {
        width: 30px;
        height: 30px;
        float: left;
        border: 1px solid black;
    }

    #panel{
        width: 300px;
        margin: auto;
    }

    .alert {
        clear: both;
        width: 30%;
        text-align: center;
        margin: auto;
    }
</style>

<script>
    $(document).ready(function () {
        var bgColor = $("body").css('background-color');

        $(".cell").hover(function () {
            let color = $(this).css('background-color');
            $("body").css('background-color', color);
        });

        $(".cell").click(function () {
            bgColor = $(this).css('background-color');
            $(".alert").fadeIn(2000);
            setTimeout(function () {
                $(".alert").fadeOut(1000);
            }, 3500);
        });

        $("#panel").mouseleave(function () {
            $("body").css('background-color', bgColor);
        })
    });
</script>

<div id="panel">
    <div class="cell" style="background-color: indianred"></div>
    <div class="cell" style="background-color: deepskyblue"></div>
    <div class="cell" style="background-color: blueviolet"></div>
    <div class="cell" style="background-color: red"></div>
    <div class="cell" style="background-color: green"></div>
    <div class="cell" style="background-color: lightcoral"></div>
    <div class="cell" style="background-color: dodgerblue"></div>
    <div class="cell" style="background-color: goldenrod"></div>
    <div class="cell" style="background-color: yellowgreen"></div>
    <div class="cell" style="background-color: indianred"></div>
    <div class="cell" style="background-color: deepskyblue"></div>
    <div class="cell" style="background-color: blueviolet"></div>
    <div class="cell" style="background-color: red"></div>
    <div class="cell" style="background-color: green"></div>
    <div class="cell" style="background-color: lightcoral"></div>
    <div class="cell" style="background-color: dodgerblue"></div>
    <div class="cell" style="background-color: goldenrod"></div>
    <div class="cell" style="background-color: yellowgreen"></div>
    <div class="cell" style="background-color: indianred"></div>
    <div class="cell" style="background-color: deepskyblue"></div>
    <div class="cell" style="background-color: blueviolet"></div>
    <div class="cell" style="background-color: red"></div>
    <div class="cell" style="background-color: green"></div>
    <div class="cell" style="background-color: lightcoral"></div>
    <div class="cell" style="background-color: dodgerblue"></div>
    <div class="cell" style="background-color: goldenrod"></div>
    <div class="cell" style="background-color: yellowgreen"></div>
    <div class="cell" style="background-color: indianred"></div>
    <div class="cell" style="background-color: deepskyblue"></div>
    <div class="cell" style="background-color: blueviolet"></div>
    <div class="cell" style="background-color: red"></div>
    <div class="cell" style="background-color: green"></div>
    <div class="cell" style="background-color: lightcoral"></div>
    <div class="cell" style="background-color: dodgerblue"></div>
    <div class="cell" style="background-color: goldenrod"></div>
    <div class="cell" style="background-color: yellowgreen"></div>
    <div class="cell" style="background-color: indianred"></div>
    <div class="cell" style="background-color: deepskyblue"></div>
    <div class="cell" style="background-color: blueviolet"></div>
    <div class="cell" style="background-color: red"></div>
    <div class="cell" style="background-color: green"></div>
    <div class="cell" style="background-color: lightcoral"></div>
    <div class="cell" style="background-color: dodgerblue"></div>
    <div class="cell" style="background-color: goldenrod"></div>
    <div class="cell" style="background-color: yellowgreen"></div>
    <div class="cell" style="background-color: indianred"></div>
    <div class="cell" style="background-color: deepskyblue"></div>
    <div class="cell" style="background-color: blueviolet"></div>
    <div class="cell" style="background-color: red"></div>
    <div class="cell" style="background-color: green"></div>
    <div class="cell" style="background-color: lightcoral"></div>
    <div class="cell" style="background-color: dodgerblue"></div>
    <div class="cell" style="background-color: goldenrod"></div>
    <div class="cell" style="background-color: yellowgreen"></div>
    <div class="cell" style="background-color: indianred"></div>
    <div class="cell" style="background-color: deepskyblue"></div>
    <div class="cell" style="background-color: blueviolet"></div>
    <div class="cell" style="background-color: red"></div>
    <div class="cell" style="background-color: green"></div>
    <div class="cell" style="background-color: lightcoral"></div>
    <div class="cell" style="background-color: dodgerblue"></div>
    <div class="cell" style="background-color: goldenrod"></div>
    <div class="cell" style="background-color: yellowgreen"></div>
    <div class="cell" style="background-color: indianred"></div>
    <div class="cell" style="background-color: deepskyblue"></div>
    <div class="cell" style="background-color: blueviolet"></div>
    <div class="cell" style="background-color: red"></div>
    <div class="cell" style="background-color: green"></div>
    <div class="cell" style="background-color: lightcoral"></div>
    <div class="cell" style="background-color: dodgerblue"></div>
    <div class="cell" style="background-color: goldenrod"></div>
    <div class="cell" style="background-color: yellowgreen"></div>
    <div class="cell" style="background-color: indianred"></div>
    <div class="cell" style="background-color: deepskyblue"></div>
    <div class="cell" style="background-color: blueviolet"></div>
    <div class="cell" style="background-color: red"></div>
    <div class="cell" style="background-color: green"></div>
    <div class="cell" style="background-color: lightcoral"></div>
    <div class="cell" style="background-color: dodgerblue"></div>
    <div class="cell" style="background-color: goldenrod"></div>
    <div class="cell" style="background-color: yellowgreen"></div>
    <div class="cell" style="background-color: indianred"></div>
    <div class="cell" style="background-color: deepskyblue"></div>
    <div class="cell" style="background-color: blueviolet"></div>
    <div class="cell" style="background-color: red"></div>
    <div class="cell" style="background-color: green"></div>
    <div class="cell" style="background-color: lightcoral"></div>
    <div class="cell" style="background-color: dodgerblue"></div>
    <div class="cell" style="background-color: goldenrod"></div>
    <div class="cell" style="background-color: yellowgreen"></div>
    <div class="cell" style="background-color: deepskyblue"></div>
    <div class="cell" style="background-color: blueviolet"></div>
    <div class="cell" style="background-color: red"></div>
    <div class="cell" style="background-color: green"></div>
    <div class="cell" style="background-color: lightcoral"></div>
    <div class="cell" style="background-color: dodgerblue"></div>
    <div class="cell" style="background-color: goldenrod"></div>
    <div class="cell" style="background-color: yellowgreen"></div>
    <div class="cell" style="background-color: indianred"></div>
    <div class="cell" style="background-color: deepskyblue"></div>
</div>

<p style="clear: both"></p>

<div class="alert alert-success" style="display: none">
    backgroud color has been changed!
</div>

</body>
</html>