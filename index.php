<?php
    include "config.php";

    if (isset($_POST['submit'])) {
        $title = $_POST['title'];
        $body = $_POST['body'];
        
        $sql = "insert into posts (title, body) values ('$title', '$body')";
        // $query = "insert into users (user_id, user_name, password) values ('$user_id', '$user_name', '$password')";
        $result = $conn->query($sql);
        
        if ($result == TRUE) {
            echo "New Post Added Successfully";
        }
        else{
            echo "Error: " . $sql . "<br />". $conn->error;
        }
        
        $conn->close();
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
        <h2 align="center">Posts</h2>

        <form action="" method="post">
            <fieldset>
                <label for="">Title</label>
                <input type="text" name="title"><br>
                <label for="">Body</label>
                <input type="text" name="body"><br>
                <input type="submit" name="submit" value="Create Post">
            </fieldset>
        </form>
    </body>
    </html>