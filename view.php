<?php
    include "config.php";

    $sql = "SELECT * FROM  'posts'";

    $result = $conn->query($sql);

    ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h2>Posts</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php   

                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                    
                ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['title'] ?></td>
                    <td><?php echo $row['body'] ?></td>
                    <td><a href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;
                    <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a>
                </td>
                </tr>
                <?php
                }
            }    
                ?>
            </tbody>
        </table>
    </div>
  </body>
</html>