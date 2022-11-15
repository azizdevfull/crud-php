<?php
    include 'config.php';

    if (isset($_POST['update'])) {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $post_id = $_GET['id'];

        $sql = "update posts set title = '$title', body = '$body' where id = '$post_id'";
        // $sql = "UPDATE `posts` SET `title`='$title',`body`='$body' WHERE 'id' = '$post_id'";
        $result = $conn->query($sql);

        if($result == TRUE){
             echo "Post updated successfully!";
        }else{
            echo "Error" . $sql . "<br />" . $conn->error;
        }
    }


    if (isset($_GET['id'])) {
        $post_id = $_GET['id'];

        $sql = "select * from posts where id='$post_id'";

        $result = $conn->query($sql);

        if($result->num_rows > 0){
            while ($row = $result->fetch_assoc()){
                $title = $row['title'];
                $body = $row['body'];
            }
        
            ?>
      <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Posts</title>
    </head>
    <body>
        
        <h2>Post Update</h2>
        
        <form action="" method="post">
            <fieldset>
                <label for="">Title</label>
                <input type="text" name="title" value="<?php echo $title ?>"><br>
                <label for="">Body</label>
                <input type="text" name="body" value="<?php echo $body ?>"><br>
                <input type="submit" name="update" value="Update Post">
            </fieldset>
        </form>
    </body>
    </html>
    <?php 
    }else{
        header('location: view.php');
    }
}
?>
        
        <!-- }
    } -->