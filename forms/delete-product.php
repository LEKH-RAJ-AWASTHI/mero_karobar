<?php

    require('../config/connection.inc.php');
    //1. get the id of product to be deleted
    $id=$_GET['id'];
    // echo $id;
    //2. execute the query to delete
    $sqlStock="DELETE FROM stock WHERE product_id=$id";
    $sqlPrice="DELETE FROM price WHERE product_id=$id";
    $sql="DELETE FROM product WHERE product_id=$id";
    $resStock=mysqli_query($con, $sqlStock);
    $resPrice=mysqli_query($con, $sqlPrice);
    $res= mysqli_query($con, $sql);
    if($res && $resPrice && $resStock){
        // echo "product deleted succesfully";
        // create session variable to display message
        $_SESSION['delete']='

        <div id="delete" class="alert alert-danger" role="alert">
        Data Deleted Successfully
        
      </div>
      ';
      header('location:'.SITEURL.'sites/product.php');
    }
    else{
        // echo "product deletion unsuccessfully";
        $_SESSION['delete']='Product Deletion failed';
        header('location:'.SITEURL.'sites/product.php');

    }

?>