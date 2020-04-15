<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php
    $root = $_SERVER['DOCUMENT_ROOT'];
    $dirname = filter_input(INPUT_GET, 'dir', FILTER_SANITIZE_STRING);
    $create = filter_input(INPUT_POST, 'create', FILTER_SANITIZE_STRING);
    $folder = filter_input(INPUT_POST, 'folderName', FILTER_SANITIZE_STRING);

    if ($dirname){
        $dir_path = $root . '/' . $dirname;

    }else{
        $dir_path = $root;
    }

    if ($create && $folder) {
        mkdir($folder);
    }


    $files = scandir($dir_path);
?>


<style>
    tr.header{
        font-weight: bold;
        color: white;
        background-color: deepskyblue;
    }

    td{
        padding: 10px;
    }

</style>

<script>
    $(document).ready(function () {

        $(".rename").click(function () {

            $('#myModal').modal({
                backdrop: 'static',
                keyboard: false
            });
        });
    });
</script>


<br>
<div style="width: 300px; margin: auto; margin-bottom: 50px">

    <form method="post">
        <input type="text" name="folderName">
        <input type="submit" value="New folder" name="create">
    </form>

    <br>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload" name="submit">
    </form>

</div>



<table border="1" cellpadding="15" cellspacing="10" style="text-align: center; margin: auto; border-collapse: collapse">
    <tr>
        <td colspan="6">
            <button>Back</button>
        </td>
    </tr>
    <tr class="header">
        <td>Icon</td>
        <td>File name</td>
        <td>Type</td>
        <td>Last modified</td>
        <td>File size</td>
        <td>Action</td>
    </tr>
    <?php
    foreach ($files as $file){

        if (substr($file, 0, 1) === '.')
        {
            continue;
        }

        $path = $dir_path . '/' . $file; #Lấy đường dẫn
        #echo $path . '<br>';
        $isDir = is_dir($path); #Kiểm tra đường dẫn có phải thư mục hay ko
        $ext = pathinfo($path, PATHINFO_EXTENSION); #Lấy kiểu file
        $time = date('d/M/yy', filemtime($path));
        $size = '-';

        $dirLink = str_replace($root, '', $path);

        if ($isDir) {
            $dirLink = "?dir=$dirLink";
        }else{
            $fileLink  = 'http://localhost/' . $dirLink;
        }


        if (!$isDir){
            $size = filesize($path);
            if ($size > 1000000){
                $size = round($size/1000000.0, 1) . ' Mb';
            }else if ($size > 1000) {
                $size = round($size / 1000.0, 1) . ' Kb';
            }else{
                $size = $size . ' byles';
            }
        }

        if ($isDir){
            $type = 'Directory';
            $icon = 'images/Folder-icon.png';
        }else if($ext == 'html'){
            $type = 'HTML Document';
            $icon = 'images/text-x-tex-icon.png';
        }else if ($ext == 'png'){
            $type = 'PNG Image';
            $icon = 'images/png.png';
        }else if ($ext == 'gif'){
            $type = 'Dynamic Image';
            $icon = 'images/document-compress-icon.png';
        }else if ($ext == 'php'){
            $type = 'PHP Document';
            $icon = 'images/php.png';
        }

        ?>
        <tr>
            <td><img src="<?= $icon ?>"></td>
            <td><a href="<?= $dirLink?>"><?= $file ?></a></td>
            <td><?= $type ?></td>
            <td><?= $time ?></td>
            <td><?= $size ?></td>
            <td><a href="#" class="rename">Rename</a> | <a href="#">Delete</a></td>
        </tr>
        <?php
    }
    ?>
</table>


<!-- Rename dialog -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Đổi tên thư mục</h4>
            </div>
            <div class="modal-body">
                <p>Nhập tên mới.</p>
                <input type="text">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-success" data-dismiss="modal">Lưu</button>
            </div>
        </div>
    </div>
</div>
<!-- Rename dialog -->



</body>
</html>