<?php
    include 'config.php';

    if (isset($_POST['update'])) {
        $title = $_POST['title'];
        $body = $_POST['body'];

        $sql = "UPDATE 'posts' SET title='$title', body='$body'";

        $result = $conn->query($sql);

        if($result == TRUE){
             echo "Post updated successfully!";
        }else{
            echo "Error" . $sql . "<br />" . $conn->error;
        }
    }


    if (isset($GET['id'])) {
        $post_id = $_GET['id'];

        $sql = "SELECT * FROM 'posts' WHERE id='$post_id'";

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
        
        <form action="" method="POST">
            <fieldset>
                <label for="">Title</label>
                <input type="text" name="title" value="<?php echo $title ?>"><br>
                <label for="">Body</label>
                <input type="text" name="body" value="<?php echo $body ?>"><br>
                <input type="submit" name="submit" value="Update Post">
            </fieldset>
        </form>
    </body>
    </html>
    <?php 
    }else{
        header('Location: view.php');
    }
}
?>
        
        <!-- }
    } -->