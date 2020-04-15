<?php
    function getDB(){
        $conn = new mysqli(SERVER, USER, PASS, DB);
        if ($conn-> connect_error){
            die('Can not connect to mySQL db: ' . $conn -> connect_error);
        }
        return $conn;
    }

    function setOneTimeMessage($massage){
        $_SESSION['one-time-message'] = $massage;
    }

    function getOneTimeMessage(){
        if (isset($_SESSION['one-time-message'])){
            $message = $_SESSION['one-time-message'];
            unset($_SESSION['one-time-message']);
            return $message;
        }else{
            return '';
        }
    }

    function redirect($page){
        header("Location: ". HOST. "/" . $page);
    }

    function getProduct($db){
        $sql  = "select * from product";
        return $db-> query($sql);
    }

    function addProduct($id, $name, $price, $image, $desc){
        $sql = "insert into product value (?,?,?,?,?)";
        $db = getDB();
        $stm = $db->prepare($sql);
        $stm->bind_param('ssiss',$id,$name,$price,$image,$desc); //ssiss : string, int
        $result = $stm->execute();

        $stm->close();

        return $result;
    }

    function saveProduct($id, $name, $price, $image, $desc){
        $sql = "update product set name = ?, price = ?,image = ?, description = ? where id = ?";
        $db = getDB();
        $stm = $db->prepare($sql);
        $stm->bind_param('sisss',$name,$price,$image,$desc,$id); //ssiss : string, int
        $status = $stm->execute();

        $stm->close();

        return $status;
    }

    function deleteProduct($id){
        $sql = "delete from product where id = ?";
        $db = getDB();
        $stm = $db->prepare($sql);
        $stm->bind_param('s',$id); //ssiss : string, int
        $status = $stm->execute();

        $stm->close();

        return $status;
    }

    function getProductById($id){
        $sql = "select * from product where id = ?";
        $db = getDB();
        $stm = $db->prepare($sql);
        $stm->bind_param('s',$id); //ssiss : string, int
        $status = $stm->execute();
        if ($status){
            $data = $stm->get_result();
            return $data;
        }
        else{
            $stm->close();
            return null;
        }
    }
?>