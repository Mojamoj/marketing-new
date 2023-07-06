<!DOCTYPE html>
<html>
<head>
  <title>Form Submission Result</title>
  <style>
    /* Custom styling for the form submission result page */
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      margin: 0;
    }

    .container {
      max-width: 500px;
      margin: 50px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    h2 {
      color: #333;
      margin-top: 0;
    }

    p {
      margin-bottom: 10px;
    }

    .btn {
      display: inline-block;
      padding: 10px 20px;
      background-color: #4c55af;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="main">
  <div class="container">
    <h2>Form Submission Result</h2>
    <?php

    function combineNames($fname, $mname, $lname)
    {
        // Combine the names
        $full_name = $fname . " " . $mname . " " . $lname;

        // Return the combined name
        return $full_name;
    }

    // Retrieve and display form data
    if (isset($_POST['fname']) && isset($_POST['mname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['product']) && isset($_POST['payment']) && isset($_POST['paying']) && isset($_POST['street']) && isset($_POST['postal']) && isset($_POST['region'])) {
      include 'cyb_mkt_garcia.php';
      $fname = $_POST['fname'];
      $mname = $_POST['mname'];
      $lname = $_POST['lname'];
      $email = $_POST['email'];
      $product = $_POST['product'];
      $payment = $_POST['payment'];
      $paying = $_POST['paying'];
      $street = $_POST['street'];
      $postal = $_POST['postal'];
      $region = $_POST['region'];

        // Combine the names
    $full_name = combineNames($fname, $mname, $lname);

    // Display the combined name
      echo "<p><strong>Full name:</strong> " . $full_name . "</p>";     
      echo "<p><strong>email:</strong> " . $email . "</p>";
      echo "<p><strong>product ordered:</strong> " . $product . "</p>";
      echo "<p><strong>type of payment:</strong> " . $payment . "</p>";
      echo "<p><strong>date of paying:</strong> " . $paying . "</p>";
      echo "<p><strong>Street/House number:</strong> " . $street . "</p>";
      echo "<p><strong>Zip/postal:</strong> " . $postal . "</p>";
      echo "<p><strong>Regionl:</strong> " . $region . "</p>";
    } else {
      echo "<p>No form data submitted.</p>";
    }
    ?>
  </div>
  <a href="cyb_mkt_new.html" class="btn">Go Back</a>
  <a href="output_view.php" class="btn">View Entries</a>
  </div>
</body>
</html>