<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM cafe ORDER BY id DESC");
?>

<html>
<head>    
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="assets/styletable.css">
</head>

<body>
<a href="add.php">Add New User</a><br/><br/>
<div class="tabel">
    <table width='80%' border=1>

    <tr>
        <th>Nama</th> <th>Makanan</th> <th>Harga</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['makanan']."</td>";
        echo "<td>".$user_data['harga']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</div>
</body>
</html>