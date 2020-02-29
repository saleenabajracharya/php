<?php require_once('db.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <a href="indexs.php" class="btn btn-warning">Create Data</a>
    <table class="table table-bordered">
        <tr>
         <th>id</th>
         <th>username</th>
         <th>email</th>
         <th>Action</th>
        </tr>
        <?php 
            $sql="SELECT * FROM users";
            $result = mysqli_query($con,$sql);
            if ($result->num_rows > 0)
            
            {//if start
                while($row=$result-> fetch_assoc())
                {//while start
             ?>
             <tr>
            <td><?php echo $row["id"]?></td>
             <td><?php echo $row["username"]?></td>
             <td><?php echo $row["email"]?></td>
             <td><a href="delete.php?id=<?php echo $row["id"]?> " class="btn btn-danger">Delete</a></td>
             </tr>
            

                    <?php  
                   }//while close
                   }//if close
                else{ 
                  ?>
                   <tr colspan="4">Data not found</tr>

                    <?php
                    }
                    ?>
    </table>
</body>
</html>
