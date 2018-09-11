<?php 
require_once'connection.php';

?>

<body>
    <table border = "1">
        <tbody>
            <?php
            $query="select * from registration";
            $result=mysqli_query($con,$query);
            if(!empty($result))
            {
                foreach($result as $row)
                    {
             
            ?>
            <tr>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['user_name']?></td>
                <td><?php echo $row['email']?></td>
                <td><?php echo $row['phone']?></td>
                <td><?php echo $row['password']?></td>
            </tr>
            <?php
                
            }
            }
            
            ?>




        </tbody>



    </table>
</body>