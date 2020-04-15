<?php
    require_once('config.php');
?>
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

<style>
    body{
        padding-top: 50px;
    }
    table{

        text-align: center;
    }
    tr.item{
        border-top: 1px solid #5e5e5e;
        border-bottom: 1px solid #5e5e5e;
    }

    tr.item:hover{
        background-color: #d9edf7;
    }

    tr.item td{
        min-width: 150px;
    }

    tr.header{
        font-weight: bold;
    }

    a{
        text-decoration: none;
    }
    a:hover{
        color: deeppink;
        font-weight: bold;
    }
</style>

<script>
    function  isInputValid() {
        let id = $("#id").val();
        let name = $("#name").val();
        let price = $("#price").val();
        let image = $("#image").val();
        let desc = $("#desc").val();
        let error = $('#error-message');
        let errorContent = $('#error-message-content');

        if (id === ""){
            errorContent.html("Please enter product id");
            displayError();
            return false;
        }
        else if (name === ""){
            errorContent.html("Please enter product name");
            displayError();
            return false;
        }
        else if (price === ""){
            errorContent.html("Please enter product price");
            displayError();
            return false;
        }
        else if (image === ""){
            errorContent.html("Please enter product image");
            displayError();
            return false;
        }else if (desc === ""){
            errorContent.html("Please enter product description");
            displayError();
            return false;
        }
        error.hide();
        return true;
    }

    function displayError() {
        let error = $("#error-message");
        error.fadeIn(2000);
        setTimeout(function () {
            error.fadeOut(1000);
        }, 3000);
    }
</script>

<?php
    $id = filter_input(INPUT_POST,'id', FILTER_SANITIZE_STRING);
    $name = filter_input(INPUT_POST,'name', FILTER_SANITIZE_STRING);
    $price = filter_input(INPUT_POST,'price', FILTER_SANITIZE_NUMBER_INT);
    $image = filter_input(INPUT_POST,'image', FILTER_SANITIZE_STRING);
    $desc = filter_input(INPUT_POST,'desc', FILTER_SANITIZE_STRING);
    $action = filter_input(INPUT_POST,'action', FILTER_SANITIZE_STRING);

    $label01 = "";
    $label02 = "";

    if ($action == 'edit'){

        $db = getDB();
        $result = getProductById($id);
        $data = $result->fetch_assoc();
        $name = $data['name'];
        $price = $data['price'];
        $image = $data['image'];
        $desc = $data['description'];

        $action = 'save';
        $label01 = "Save";
        $label02 = "Update sản phẩm";

    }else if ($action == 'save'){
        if ($id && $name && $price && $image && $desc){
            $result = saveProduct($id, $name, $price, $image, $desc);
            setOneTimeMessage('Update product success');
            redirect('index.php');
        }
    }else if ($action == 'add'){
        if ($id && $name && $price && $image && $desc){
            $result = addProduct($id, $name, $price, $image, $desc);
            setOneTimeMessage('Add new product success');
            redirect('index.php');
        }
    }else{
        $action = 'add';
        $label01 = "Add";
        $label02 = "Thêm sản phẫm";
    }
?>

<div class="container" style="width: 600px">
    <h2><?= $label02 ?></h2>
    <form action="" method="post" onsubmit="return isInputValid()">
        <div class="form-group">
            <label for="id">ID:</label>
            <input value="<?= $id ?>" type="text" class="form-control" id="id" placeholder="Enter Id" name="id">
        </div>
        <div class="form-group">
            <label for="name">Name:</label>
            <input value="<?= $name ?>" type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input value="<?= $price ?>" type="text" class="form-control" id="price" placeholder="Enter Price" name="price">
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <input value="<?= $image ?>" type="text" class="form-control" id="image" placeholder="Enter Image" name="image">
        </div>
        <div class="form-group">
            <label for="desc">Description:</label>
            <input value="<?= $desc ?>" type="text" class="form-control" id="desc" placeholder="Enter Description" name="desc">
        </div>
        <input type="hidden" name="action" value="<?= $action ?>">
        <button type="submit" class="btn btn-primary"><?= $label01 ?></button>
        <button type="reset" class="btn btn-default">Reset</button>
    </form>

    <br>
    <div id="error-message" class="alert alert-danger" style="display: none">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <span id="error-message-content"></span>
    </div>
</div>


</body>
</html>