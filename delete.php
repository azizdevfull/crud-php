<?php
    include "config.php";

    if (isset($_GET['id'])) {
        $post_id = $_GET['id'];
       $sql = "DELETE FROM 'posts' WHERE post_id = '$post_id'";
       
       $result = $db->query($sql);

       if ($result == TRUE) {
        echo "Post deleted successfully!";
       }else{
        echo "Error: " . $sql . "<br" . $conn->error;
       }
    }

    ?>