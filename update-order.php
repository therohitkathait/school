<?php
include 'connect.php';
if (isset($_POST['order'])) {
    $order = $_POST['order'];
    $i=1;
    // Loop through the order array and update the database accordingly
    foreach ($order as $k=>$v) {
        $sql = "UPDATE scl_addfees SET order_column = ".$i." WHERE id=".$v; 
        mysqli_query($conn, $sql);
        $i++; 
    }

    // Return success message
    echo "Order updated successfully!";
}
?>