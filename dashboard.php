<!DOCTYPE html>
<html>

<head>
  <?php
  session_start();
  if (!isset($_SESSION['email']))
    echo '<script>window.location.href="index.php"</script>';
  ?>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td,
    th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
  </style>
</head>

<body>
  <a href='./backend/logout.php' class="btn btn-primary">Logout</a>
  <h2 style=" text-align: center ;color: aqua;">SUPREMESTOX TRADING - ADMIN PAGE</h2>
  <?php
  require_once './backend/backend.php';
  $backend = new Backend();
  $result = $backend->getAllDemos();
  ?>
  <table>
    <tr>
      <th>Sn.</th>
      <th>Name</th>
      <th>Email ID</th>
      <th>Contact</th>
      <th>Segments</th>
      <th>Created At</th>
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_assoc($result)) {
      $i++;
      echo "
      <tr>
      <td>$i</td>
      <td>$row[name]</td>
      <td>$row[email]</td>
      <td>$row[contact_no]</td>
      <td>$row[segments]</td>
      <td>$row[created_at]</td>
    </tr>";
    }
    ?>
    <!-- <tr>
      <td>Sno.</td>
      <td>Name</td>
      <td>email</td>
      <td>M.P</td>
    </tr> -->
  </table>
  <P style="text-align: center; margin-top:80px">Copyright © 2023 SUPREMESTOX TRADING , All rights reserved.</P>
  <p style="text-align: center;color: black;">&#10155; Note :- clik on back for exit this page </p>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>

</html>