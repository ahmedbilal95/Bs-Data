
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
        body {
            margin:0px;
            
        
        }
        table td
        {
            width:100px;
            color:black;
        }
        table {
            border-radius:30px;
        }
      
    </style>
</head>
<body>

<?php 
    $server="localhost";
    $databasename="BS Sweets";
    $username="root";
    $password="";
    $object = new mysqli($server,$username,$password,$databasename);
    // print_r($object);

    
// if($object->connect_error)
// {
//     echo "stop <br>";
// }
// else{
//     echo "run <br>";
// }
$query = "SELECT * FROM products;";
$result = $object->query($query);
// print_r($result->fetch_assoc());
        // print_r($row);
        ?>
        <table class="container bg-info" border="5">
        <thead class="text-warning">
            
            <tr>
            
                <th>Id</th>
                <th>Name</th>
                <th>Price</th>
                <th>Categoriesid</th>
                
            </tr>
            </thead>
            <tbody>
            <?php
    while ($row = $result->fetch_assoc()) {
        ?>
        
           
            <tr>    
                <td class="text-light"><?php echo $row['id'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['price'];?></td>
                <td><?php echo $row['categoriesid'];?></td>
                
                
            </tr>
            
           
       
        <?php
           
     }

// if($result===TRUE){
//     echo 'run_query';
// }
// else{
//     echo "nahi chala ga " ;
// }
    
?>
     </tbody>
        </table>
</body>
</html>
