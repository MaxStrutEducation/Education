<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>fORM</title>
    <link href="style/bootstrap.css" type="text/css" rel="stylesheet">
    <link href="style/main.css"  type="text/css" rel="stylesheet">
</head>

<body>
<div class="center container ">
  <div class="content row">
    <form action="" method="POST" role="form" class="">
        <div class="form-group">
          <p>Enter triangle parameters </p>
            <div class="section_form section_a">
                <label for="SideA" name="SideA">SideA</label>
                <input type="text" name="SideA" id="SideA" class="form-control" required/>
            </div>
            <div class="section_form section_b">
                <label for="SideB">SideB</label>
                <input type="text" name="SideB" id="SideB" class="form-control" required/>
            </div>
            <div class="section_form section_c">
                <label for="SideC">SideC</label>
                <input type="text" name="SideC" id="SideC" class="form-control" required/>
            </div>
        </div>
        <div class="btn_center">
          <input type="submit" value="Show result" class="btn btn-danger"/>
        </div>
    </form>
  </div>
</div>
</body>
</html>
