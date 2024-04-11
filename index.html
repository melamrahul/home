<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bible Study Report</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Google+Sans:wght@400;700&display=swap">
  <style>
    /* General Styles */
    body {
      font-family: 'Google Sans', sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    /* Form Styles */
    .container {
      max-width: 400px;
      margin: 50px auto;
      margin-left: 15px;
      margin-right: 15px;
      padding: 20px;
      background-color: #fff;
      border-radius: 20px;
      border: 2px solid #197afe;
      box-shadow: 0 0 15px #197afe;
    }

    .container h2 {
      margin-bottom: 20px;
      text-align: center;
      color: #007bff;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .form-group input,
    textarea,
    select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
      border-color: #197afe;
      box-shadow: 0 0 5px #197afe;
    }

    .form-group input[type="submit"] {
      background-color: #007bff;
      color: #fff;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .form-group input[type="submit"]:hover {
      background-color: #0056b3;
    }

    /* Style for custom select */
    .custom-select {
      appearance: none;
      /* Hide default arrow */
      -webkit-appearance: none;
      -moz-appearance: none;
      border-radius: 5px;
      box-sizing: border-box;
      border-color: #197afe;
      box-shadow: 0 0 5px #197afe;
      width: 100%;
      box-sizing: border-box;
      cursor: pointer;
    }

    /* Style for hover effect */
    .custom-select:hover {
      border-color: #007bff;
    }

    /* Style for focus effect */
    .custom-select:focus {
      outline: none;
      border-color: #007bff;
      box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    /* Style for custom dropdown arrow */
    .custom-select::after {
      content: '\25BC';
      /* Unicode character for down arrow */
      position: absolute;
      top: 50%;
      right: 10px;
      transform: translateY(-50%);
      pointer-events: none;
    }
  </style>
</head>

<body>
  <div class="container">
    <h2>Bible Study Details</h2>
    <form action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF"]); ?>" method="POST">
      <div class="form-group">
        <label for="hostel_name">Hostel Name:</label>
        <input type="text" id="hostel_name" name="hostel_name" required>
      </div>
      <div class="form-group">
        <label for="topic">Topic or Passage Name:</label>
        <textarea id="topic" name="topic" rows="1" required></textarea>
      </div>
      <div class="form-group">
        <label for="std_count">No. of Students Attended: </label>
        <select id="std_count" name="std_count" required>
          <option value=""></option>
          <?php
                    for ($i = 1; $i <= 40; $i++) {
                        echo "<option value='$i'>$i</option>";
                    }
                    ?>
        </select>
      </div>
      <div class="form-group">
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>
      </div>
      <div class="form-group">
        <label for="day">Day:</label>
        <select id="day" name="day" class="custom-select" required>
          <option value="">Select Day</option>
          <option value="Monday">Monday</option>
          <option value="Tuesday">Tuesday</option>
          <option value="Wednesday">Wednesday</option>
          <option value="Thursday">Thursday</option>
          <option value="Friday">Friday</option>
          <option value="Saturday">Saturday</option>
        </select>
      </div>
      <div class="form-group">
        <input type="submit" name="submit" value="Submit">
      </div>
    </form>


    <?php
if (isset($_POST['submit'])) {
    $hostel_name = $_POST['hostel_name'];
    $topic = $_POST['topic'];
    $std_count = $_POST['std_count'];
    $date = $_POST['date'];
    $day = $_POST['day'];

    // Validate form data
    if (empty($hostel_name) || empty($topic) || empty($std_count) || empty($date) || empty($day)) {
        echo "All fields are required";
    } else {
        $host = 'sql.freedb.tech';
        $user = 'freedb_rahuk';
        $pass = 'Dcqg3NFxbM!pg3u';
        $dbname = 'freedb_database1';

        // Create connection
        $conn = new mysqli($host, $user, $pass, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare and bind SQL statement
        $sql = "INSERT INTO sample (hostel_name, topic, std_count, date, day) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssiss", $hostel_name, $topic, $std_count, $date, $day);

        // Execute SQL statement
        if ($stmt->execute()) {
            echo "Your Details are Recorded successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close connection
        $stmt->close();
        $conn->close();
    }
}
?>

  </div>
</body>

</html>