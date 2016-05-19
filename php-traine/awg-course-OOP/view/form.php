<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Triangle</title>
    <link href="../style/bootstrap.css" rel="stylesheet">
    <link href="../style/main.css" rel="stylesheet">
</head>

<body>
<div class="center container">
  <div class="content">
    <form action="" method="POST" role="form">
        <div class="form-group">
          <label for="inp-command_text">Enter triangle parameters </label>
            <label for="SideA" name="SideA">SideA</label>
              <input type="text" name="SideA" id="SideA" class="form-control"/>
            <label for="SideB">SideB</label>
              <input type="text" name="SideB" id="SideB" class="form-control"/>
            <label for="SideC">SideC</label>
              <input type="text" name="SideC" id="SideC" class="form-control"/>
        </div>
        <div class="btn_center">
          <input type="submit" value="Show result" class="btn btn-danger"/>
        </div>
    </form>
  </div>
</div>
</body>
</html>
