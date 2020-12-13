<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <link type="text/css" rel="stylesheet" href="css/home.css"/>
    </head>

    <?php
//    session_start();
//    if (isset($_SESSION['name'])) {
//        $name = $_SESSION['name'];
//    } else {
//        header("location:http://localhost/PhpAssignment2/index.php");
//    }

    $mysqli_connect = new mysqli("localhost", "root", "", "php", 3306);

    $query = "SELECT * FROM schedule";

    $result = $mysqli_connect->query($query);
    ?>

    <body class="home_page">

        <form action="logout_process.php" method="POST">
            <input type="submit" value="Logout" class="logout"/>
        </form>

        <table id="table" class="t">
            <tr>
                <th hidden="">ID</th>
                <th>Type</th>
                <th>Sunday</th>
                <th>Monday</th>
                <th>Tuesday</th>
                <th>Wednesday</th>
                <th>Thursday</th>
                <th>Friday</th>
                <th>Saturday</th>
            </tr>
            <?php
            while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td hidden=""><?php echo $row['id']; ?></td>
                    <td><?php echo $row['Type']; ?></td>
                    <td><?php echo $row['Sunday']; ?></td>
                    <td><?php echo $row['Monday']; ?></td>
                    <td><?php echo $row['Tuesday']; ?></td>
                    <td><?php echo $row['Wednesday']; ?></td>
                    <td><?php echo $row['Thursday']; ?></td>
                    <td><?php echo $row['Friday']; ?></td>
                    <td><?php echo $row['Saturday']; ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
        <div class="change">
            <input id="id" type="text" name="id" hidden="">
            <input id="type" class="text" type="text" name="type" placeholder="Type">
            <input id="sun" class="text" type="text" name="sun" placeholder="Sunday">
            <input id="mon" class="text" type="text" name="mon" placeholder="Monday">
            <input id="tue" class="text" type="text" name="tue" placeholder="Tuesday">
            <input id="wed" class="text" type="text" name="wed" placeholder="Wednesday">
            <input id="thur" class="text" type="text" name="thur" placeholder="Thursday">
            <input id="fri" class="text" type="text" name="fri" placeholder="Friday">
            <input id="sat" class="text" type="text" name="sat" placeholder="Saturday">
            <button id="add" class="con" onclick="addTo()">ADD</button>
            <button id="update" class="con" hidden="" onclick="update()">UPDATE</button>
            <button id="delete" class="con" hidden="" onclick="del()">DELETE</button>
            <button id="new" class="con" hidden="" onclick="goto()">NEW</button>
        </div>
        
        <script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript" src="js/functions.js"></script>
    </body>
</html>
