<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Registeration Form</title>
</head>
<body>
    <div class="user">
        <h3>Form Registerasi User</h3>
        <form class="form">
            <div class="form__group">
                <input type="text" placeholder="Nama" class="form__input" name="name" id="name"/>
            </div>
                    
            <div class="form__group">
                <input type="email" placeholder="Email" class="form__input" name="email" id="email"/>
            </div>
                    
            <div class="form__group">
                <input type="text" placeholder="Jobs" class="form__input" name="jobs" id="jobs"/>
            </div>
            <!-- the button -->
            <input type="submit" class="btn" name="submit" id="submit" value="Register">
            <input type="submit" class="btn" name="load_data" id="load_data" value="Tampilkan Data">
        </form>
    </div>
    <!-- PHP CODE -->
    <?php
    $host = "datauser.database.windows.net";
    $user = "aditya";
    $pass = "A@d1ty4&";
    $db = "User";
    try {
        $conn = new PDO("sqlsrv:server = $host; Database = $db", $user, $pass);
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    } catch(Exception $e) {
        echo "Failed: " . $e;
    }
    if (isset($_POST['submit'])) {
        try {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $job = $_POST['jobs'];
            $date = date("Y-m-d");
            // Insert data
            $sql_insert = "INSERT INTO User (name, email, job, date) 
                        VALUES (?,?,?,?)";
            $stmt = $conn->prepare($sql_insert);
            $stmt->bindValue(1, $name);
            $stmt->bindValue(2, $email);
            $stmt->bindValue(3, $job);
            $stmt->bindValue(4, $date);
            $stmt->execute();
        } catch(Exception $e) {
            echo "Failed: " . $e;
        }
        echo "<h3>Your're registered!</h3>";
    } else if (isset($_POST['load_data'])) {
        try {
            $sql_select = "SELECT * FROM User";
            $stmt = $conn->query($sql_select);
            $registrants = $stmt->fetchAll(); 
            if(count($registrants) > 0) {
                echo "<h2>People who are registered:</h2>";
                echo "<table>";
                echo "<tr><th>Name</th>";
                echo "<th>Email</th>";
                echo "<th>Job</th>";
                echo "<th>Date</th></tr>";
                foreach($registrants as $registrant) {
                    echo "<tr><td>".$registrant['name']."</td>";
                    echo "<td>".$registrant['email']."</td>";
                    echo "<td>".$registrant['job']."</td>";
                    echo "<td>".$registrant['date']."</td></tr>";
                }
                echo "</table>";
            } else {
                echo "<h3>No one is currently registered.</h3>";
            }
        } catch(Exception $e) {
            echo "Failed: " . $e;
        }
    }
 ?>

</body>
</html>
