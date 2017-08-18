<?php
$conn = mysqli_connect("localhost","root","","todo");
if(!$conn){
    die("Connection failed:" . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even){background-color: #f2f2f2}

        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>

<h2>TODO LIST</h2>

<table>
    <tr>
        <th>ID</th>
        <th>TASK</th>
    </tr>
    <?php
    $sql = "SELECT id,task FROM todolist";
    $result = mysqli_query($conn,$sql);
    while($row = $result->fetch_assoc()){
    ?>
    <tr>
        <td> <?= $row['id'] ?> </td>
        <td> <?= $row['task'] ?> </td>
    </tr>
    <?php
    }

    mysqli_free_result($result);
    mysqli_close($conn);
    ?>


</table>

</body>
</html>
