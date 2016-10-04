<html>
<head>
  This is home <br/>
</head>

<body>

<table>
  <tr><td>ID</td><td>FirstName</td>

   <?php
    foreach ($arr as $val) {
      echo '<tr><td><a href="index.php?people='.$val->id.'">'.$val->id.'</a></td><td>'.$val->FirstName.'</td></tr>';
		}
    ?>
  </table>

</body>

</html>
