<?php
/**................................................................
 * @package eblog v 1.0
 * @author Faith Awolu 
 * Hillsofts Technology Ltd.            
 * (hillsofts@gmail.com)
 * ................................................................
 */


	include'connect.php';
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM offence WHERE id= :post_id");
	$result->bindParam(':post_id', $id);
        if($result->execute()){    
      header("location:view-offence.php");
        }else{
            echo 'error, Please retry';
        }     
?>