<!DOCTYPE html>
<html>

<head>
    <title></title>
    <style>
    body {
        background-color: #f2f2f2;
        text-align: center;
    }

    table,
    th,
    td,
    tr {
        text-align: center;
        border: 1px solid black;
        border-collapse: collapse;
    }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>Name</th>
            <th>E-mail</th>
            <th>Username</th>

        </tr>
        <?php   
                          include '../Controllers/DataController.php' ;

                          $data = loadData();

                          foreach($data as $row)  
                          {  
                              ?>
        <tr>
            <td><a href="details.php?name=<?php echo $row['name'] ?>"><?php echo $row['name'] ?></a></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['username'] ?></td>

        </tr>
        <?php 
                          }  
                          ?>
    </table>
</body>

</html>