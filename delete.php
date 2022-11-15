<?php
    include "config.php";

    if (isset($_GET['id'])) {
        $post_id = $_GET['id'];
       $sql = "delete from posts WHERE `id` = '$post_id'";
       
       $result = $conn->query($sql);

       if ($result == TRUE) {
        echo "Post deleted successfully!";
       }else{
        echo "Error: " . $sql . "<br" . $conn->error;
       }
    }

    ?>