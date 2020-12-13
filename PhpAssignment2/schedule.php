<!DOCTYPE html>

<html>
    <head>
        <title>Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" href="css/healthfirst.css" rel="stylesheet"/> 
    </head>
    <?php
    session_start();
    if (isset($_SESSION['name'])) {
        header("location:http://localhost/PhpAssignment2/home.php");
    }
    ?>
    <?php
    $mysqli_connect = new mysqli("localhost", "root", "", "php", 3306);

    if (isset($_GET['type'])) {
        $query = "SELECT * FROM schedule WHERE type = '" . $_GET['type'] . "'";
    } else {
        $query = "SELECT * FROM schedule WHERE type = 'adults'";
    }

    $result = $mysqli_connect->query($query);
    ?>
    <body class="body1">
        <div class="menu">
            <span class="mainspn">Health First  </span>
            <div class="dropdown">
                <button class="dropbtn">Gallery</button>
                <div class="dropdown_content">
                    <a href="Events.html">Events</a>
                    <a href="bbb.html">Best Body Builders</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Schedule</button>
                <div class="dropdown_content">
                    <a href="ds.html">Daily Schedule</a>
                    <a href="hd.html">Holidays</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">What We Do</button>
                <div class="dropdown_content">
                    <a href="areo.html">Aerobics</a>
                    <a href="bb.html">Body Building</a>
                    <a href="yg.html">Yoga</a>
                </div>
            </div>
            <a href="contactus.html"><button class="dropbtn">Contact Us</button></a>
            <a href="login.php"><input type="button" value="Login"/></a>
        </div>
        <br/>
        <form action="schedule.php" method="GET">
            <select name="type">  
                <?php
                $resultCombo = $mysqli_connect->query("SELECT Type FROM schedule");
                while ($row1 = $resultCombo->fetch_assoc()) {
                    ?>
                    <option><?php echo $row1['Type']; ?></option>
                    <?php
                }
                ?>
            </select>
            <input type="submit" value="Select Schedule"/>
        </form>

        <table class="t" align="center">
            <?php if ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <th>Sunday</th>
                    <td><?php echo $row['Sunday']; ?></td>
                </tr>
                <tr>
                    <th>Monday</th>
                    <td><?php echo $row['Monday']; ?></td>
                </tr>
                <tr>
                    <th>Tuesday</th>
                    <td><?php echo $row['Tuesday']; ?></td>
                </tr>
                <tr>
                    <th>Wednesday</th>
                    <td><?php echo $row['Wednesday']; ?></td>
                </tr>
                <tr>
                    <th>Thursday</th>
                    <td><?php echo $row['Thursday']; ?></td>
                </tr>
                <tr>
                    <th>Friday</th>
                    <td><?php echo $row['Friday']; ?></td>
                </tr>
                <tr>
                    <th>Saturday</th>
                    <td><?php echo $row['Saturday']; ?></td>
                </tr>
            <?php }
            ?>
        </table>
    </body>
</html>