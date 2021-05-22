<!DOCTYPE html>
<html lang="en">
<head>
  <title>IP Info</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>IP Info</h2>       
  <table class="table">
    <thead>
      <tr>
        <th>IP Address</th>
        <th>User Agent</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $_SERVER["REMOTE_ADDR"];?></td>
        <td><?php echo $_SERVER["HTTP_USER_AGENT"];?></td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>
