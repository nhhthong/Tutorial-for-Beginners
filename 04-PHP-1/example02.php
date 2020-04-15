<!DOCTYPE html>
<html lang="en">
<head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <style>
        *{
            box-sizing: border-box;
        }
        body{
            text-align: center;
            background-color: #cc0000;
        }
        #game-table{
            width: 300px;
            height: 300px;
            margin: auto;
            background-color: white;
        }
        #image-list{
            width: 500px;
            height: 200px;
            margin: auto;
            background-color: white;
        }
        .image-cell{
            height: 100px;
            width: 100px;
            border: 1px solid black;
            float: left;
        }

        .image-cell img{
            max-width: 100%;
        }
    </style>
    <script>
        $(document).ready(function () {
            $("img").click(function () {
                var angle = (($(this).data('angle') || 0) + 90) % 360; //read data
                $(this).css('transform','rotate(' + angle + 'deg)');
                $(this).data('angle', angle);
            });
        });
        
        function startDrag(event) {
            let id = event.target.id;
            event.dataTransfer.setData('imageId', id);
        }
        
        function allowDrop(event, receiver) {
            if (receiver.childElementCount === 0){
                event.preventDefault();
            }
        }

        function receiveDate(event) {
            event.preventDefault();
            let id = event.dataTransfer.getData('imageId');
            let realImage = document.getElementById(id);
            event.target.appendChild(realImage);
        }
    </script>
</head>
<body>
<h1 style="color: white">Game Xếp hình</h1>
<div id="game-table">
    <div class="image-cell" ondragover="allowDrop(event, this)" ondrop="receiveDate(event)"></div>
    <div class="image-cell" ondragover="allowDrop(event, this)" ondrop="receiveDate(event)"></div>
    <div class="image-cell" ondragover="allowDrop(event, this)" ondrop="receiveDate(event)"></div>
    <div class="image-cell" ondragover="allowDrop(event, this)" ondrop="receiveDate(event)"></div>
    <div class="image-cell" ondragover="allowDrop(event, this)" ondrop="receiveDate(event)"></div>
    <div class="image-cell" ondragover="allowDrop(event, this)" ondrop="receiveDate(event)"></div>
    <div class="image-cell" ondragover="allowDrop(event, this)" ondrop="receiveDate(event)"></div>
    <div class="image-cell" ondragover="allowDrop(event, this)" ondrop="receiveDate(event)"></div>
    <div class="image-cell" ondragover="allowDrop(event, this)" ondrop="receiveDate(event)"></div>
</div>

<p style="margin-top: 20px; margin-bottom: 20px"></p>

<div id="image-list">
    <div class="image-cell" ondragover="allowDrop(event, this)" ondrop="receiveDate(event)">
        <img src="images/image_part_001.png" id = "image1" draggable="true" ondragstart="startDrag(event)"/>
    </div>
    <div class="image-cell" ondragover="allowDrop(event, this)" ondrop="receiveDate(event)">
        <img src="images/image_part_002.png" id = "image2" draggable="true" ondragstart="startDrag(event)"/>
    </div>
    <div class="image-cell" ondragover="allowDrop(event, this)" ondrop="receiveDate(event)">
        <img src="images/image_part_003.png" id = "image3" draggable="true" ondragstart="startDrag(event)"/>
    </div>
    <div class="image-cell" ondragover="allowDrop(event, this)" ondrop="receiveDate(event)">
        <img src="images/image_part_004.png" id = "image4" draggable="true" ondragstart="startDrag(event)"/>
    </div>
    <div class="image-cell" ondragover="allowDrop(event, this)" ondrop="receiveDate(event)">
        <img src="images/image_part_005.png" id = "image5" draggable="true" ondragstart="startDrag(event)"/>
    </div>
    <div class="image-cell" ondragover="allowDrop(event, this)" ondrop="receiveDate(event)">
        <img src="images/image_part_006.png" id = "image6" draggable="true" ondragstart="startDrag(event)"/>
    </div>
    <div class="image-cell" ondragover="allowDrop(event, this)" ondrop="receiveDate(event)">
        <img src="images/image_part_010.png" id = "image7" draggable="true" ondragstart="startDrag(event)"/>
    </div>
    <div class="image-cell" ondragover="allowDrop(event, this)" ondrop="receiveDate(event)">
        <img src="images/image_part_008.png" id = "image8" draggable="true" ondragstart="startDrag(event)"/>
    </div>
    <div class="image-cell" ondragover="allowDrop(event, this)" ondrop="receiveDate(event)">
        <img src="images/image_part_009.png" id = "image9" draggable="true" ondragstart="startDrag(event)"/>
    </div>
    <div class="image-cell" ondragover="allowDrop(event, this)" ondrop="receiveDate(event)">
        <img src="images/image_part_007.png" id = "image10" draggable="true" ondragstart="startDrag(event)"/>
    </div>
</div>
</body>
</html>
