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
    td{
        padding: 10px;
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
    $(document).ready(function () {



        $(".delete").click(function () {
            let name = $(this).data('name');
            let id = $(this).data('id');

            $("#model-dialog-header").html(name);
            $("#delete-form-id").val(id);
            $("#myModal").modal({
                backdrop: 'static',
                keyboard: false
            });

        });


    });
</script>


<table cellpadding="10" cellspacing="10" border="0" style="border-collapse: collapse; margin: auto">

    <tr class="control" style="text-align: left; font-weight: bold; font-size: 20px">
        <td colspan="5">
            <a href="add.php">Thêm sản phẩm</a>
        </td>
    </tr>
    <tr class="header">
        <td>Image</td>
        <td>Name</td>
        <td>Price</td>
        <td>Description</td>
        <td>Action</td>
    </tr>

    <?php
        $db = getDB();
        $result = getProduct($db);

        $count = 0;
        //print_r($result);
        if ($result != null && $result->num_rows >0){
            $count = $result->num_rows;
            while ($data = $result->fetch_assoc())
            {
                //print_r($data);
                $id = $data['id'];
                $name = $data['name'];
                $price = $data['price'];
                $image = $data['image'];
                $description = $data['description'];
                ?>
                    <tr class="item">
                        <td><img src="<?= $image ?>" style="max-height: 80px"></td>
                        <td><?= $name ?></td>
                        <td><?= number_format($price) ?></td>
                        <td><?= $description ?></td>
                        <td>
                            <form action="add.php" method="post" style="display: inline">
                                <input type="hidden" name="id" value="<?= $id ?>">
                                <input type="hidden" name="action" value="edit">
                                <button class="btn btn-info" type="submit">Edit</button>
                            </form>

                            <button data-id =<?= $id ?> data-name="<?= $name ?>" class="btn btn-danger delete" type="button">Delete</button>

                    </tr>
                <?php
            }
        }
    ?>

    <tr class="control" style="text-align: right; font-weight: bold; font-size: 17px">
        <td colspan="5">
            <p>Số lượng sản phẩm: <?= $count ?></p>
        </td>
    </tr>
</table>

<?php
    $message = getOneTimeMessage();
    if ($message){
        ?>
            <div id="error-message" class="alert alert-info" style="text-align: center">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <span id="error-message-content"><?= $message ?></span>
            </div>
        <?php
    }
?>


<!-- Delete Confirm Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 id="model-dialog-header" class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure you wanna delete this product?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <form action="delete.php" method="post" style="display: inline">
                    <input id="delete-form-id" type="hidden" name="id" value="">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>

        </div>

    </div>
</div>


</body>
</html>