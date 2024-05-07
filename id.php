<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Google+Sans:wght@400;500;700&display=swap">

    <title>Virtual ID Card</title>

    <style>

        body {

            font-family: 'Google Sans', sans-serif;

            -webkit-touch-callout: none; /* Disable long press on mobile */

            -webkit-user-select: none; /* Disable selection */

            -moz-user-select: none;

            -ms-user-select: none;

            user-select: none;

        }

        .id-card {

            width: 450px;

            margin: 20px auto;

            border: 3px solid #bbb;

            border-radius: 10px;

            padding: 10px;

        }

        .header {

    background-color: green;

    color: white;

    padding: 10px; /* Increase padding to add top gap */

    margin-top: 0px; /* Add top margin to create gap between header and ID card */

    text-align: center;

    border-top-left-radius: 10px;

    border-top-right-radius: 10px;

}



.student-image {

    float: right;

    border-radius: 10px;

    margin-left: 10px;

    margin-top: 10px; /* Add top margin to create gap between image and header */

}



.details {

    margin-top: 20px;

    padding: 0 10px; /* Added padding for better readability */

}



.form-container {

    margin-top: 50px; /* Add top margin to create gap between form and ID card */

}

        .details p {

            margin: 5px 0;

        }

        form {

            width: 300px;

            margin: 20px auto;

            text-align: center;

        }

        input[type="text"] {

            width: 200px;

            padding: 5px;

            margin-bottom: 10px;

        }

        input[type="submit"] {

            padding: 8px 20px;

            background-color: green;

            color: white;

            border: none;

            border-radius: 5px;

            cursor: pointer;

        }

    </style>

</head>

<body>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

        <label for="roll_number">Enter Roll Number:</label><br>

        <input type="text" id="roll_number" name="roll_number" maxlength="12"><br>

        <input type="submit" value="Submit">

    </form>



    <?php

    // Check if the roll number is submitted via POST

    if(isset($_POST['roll_number'])) {

        $host = "sql.freedb.tech";

        $user = "freedb_rahuk";

        $pass = "Dcqg3NFxbM!pg3u";

        $dbname = "freedb_database1";



        // Establish database connection

        $conn = new mysqli($host, $user, $pass, $dbname);



        // Check connection

        if ($conn->connect_error) {

            die("Connection failed: " . $conn->connect_error);

        }



        // Retrieve roll number from POST data

        $roll_number = $_POST['roll_number'];



        // Retrieve student details from database based on roll number

        $sql = "SELECT s.roll_number, s.name, s.course, s.dept, s.batch, i.image 

                FROM images s 

                INNER JOIN images i ON s.roll_number = i.roll_number 

                WHERE s.roll_number = '$roll_number'";

        

        $result = $conn->query($sql);



        if ($result->num_rows > 0) {

            // Output ID card details

            while($row = $result->fetch_assoc()) {

                echo '<div class="id-card">';

                echo '<div class="header" style="font-size: 16px; overflow: hidden;">';

                echo '<div style="float:left;"><img src="https://upload.wikimedia.org/wikipedia/en/c/c7/Andhra_University_logo.png" width="50" height="50"></div>';

                echo '<div style="float:left; margin-left: 24px;">COLLEGE OF ENGINEERING (A)<br>ANDHRA UNIVERSITY<br>VISAKHAPATNAM-530 003</div>';

                echo '<div style="float:right;">Ph No: <br>0891-2844000</div>';

                echo '</div>';

                echo '<br>';

                echo '<div class="student-image" style="margin-right: 20px;">';

echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" width="100" height="100" style="border-radius: 7px; border: 2px solid #bbb;">';

echo '</div>';

echo '<ul style="margin-top: 6px; margin-left: 15%; text-decoration: underline;">STUDENT IDENTITY CARD</ul>';

echo '<div class="details">';

echo '<p>Reg. No:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . $row['roll_number'] . '</p>';

echo '<p>Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . $row['name'] . '</p>';

echo '<p>Course:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . $row['course'] . '</p>';

echo '<p>Department:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . $row['dept'] . '</p>';

echo '<p>Batch:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . $row['batch'] . '</p>';

echo '</div>';



                echo '</div>';

            }

        } else {

            echo "No details found for the provided roll number.";

        }



        // Close database connection

        $conn->close();

    }

    ?>

 <script src='https://cdn.jsdelivr.net/npm/disable-devtool'></script>

    <script>

    DisableDevtool({

        ondevtoolopen: (type) => {

            const info = 'devtool opened!; type =' + type;

            // Reload the current page

            window.location.reload();

            window.location.href = "https://google.com";

            alert("You can't see the Source Code"); // If you are worried about blocking the page, use console.warn(info); and open the console to view

            

        },

    })

</script>

<footer style="position: fixed; bottom: 30px; width: 100%; background-color: #fff; color: #333; text-align: center; padding: 10px 0;font-family: 'Google Sans', sans-serif;">

        <p style="margin: 0; font-family: 'Google Sans', sans-serif; font-size: 18px;">© Designed by <a href="https://t.ly/irfrc" style="text-decoration: none; color: red">Melam Rahul</a></p>

    </footer>

</body>

<script>

    // Disable right-click context menu

    document.oncontextmenu = function() {

        return false;

    };



    // Disable certain key combinations

    document.onkeydown = function(e) {

        if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {

            return false;

        }

        if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {

            return false;

        }

        if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {

            return false;

        }

    };

</script>

</html>
