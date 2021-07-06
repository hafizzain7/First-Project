<?php
session_start();
   if(isset($_POST['submit'])){
        
     if(isset($_SESSION['cart'])){
        /* ------if already added in to the cart------ */
        $itemid=array_column($_SESSION['cart'],'id');
        if(in_array($_POST['id'],$itemid))
        {
            echo "<script>
            alert('Item Alredy Exist');
            window.location.href=('index.php');
            </script>";
        }
        else{
        $count=count($_SESSION['cart']);
        $_SESSION['cart'][$count]=array('id'=>$_POST['id'],'name'=>$_POST['name'],'price'=>$_POST['price'],'image'=>$_POST['image'],'quantity'=>'1');
        echo "<script>
            alert('Item Added');
            window.location.href=('index.php');
            </script>";
        }
     }
     else{

        $_SESSION['cart'][0]=array('id'=>$_POST['id'],'name'=>$_POST['name'],'price'=>$_POST['price'],'image'=>$_POST['image'],'quantity'=>'1');
        echo "<script>
        alert('Item Added');
        window.location.href=('index.php');
        </script>";
     }
   }

   if(isset($_POST['remove_item'])){
       foreach ($_SESSION['cart'] as $key => $value) {
        if($value['id']==$_POST['id']){
          unset($_SESSION['cart'][$key]);
          $_SESSION['cart']=array_values( $_SESSION['cart']);
          echo "<script>
            alert('Item Removed');
            window.location.href=('mycart.php');
            </script>";
        }
       }
   }
   
 ?>