<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>FORM</title>
</head>

<body>
<?php
    echo('<br/>');
    echo('form.php - DONE!');
    echo('<br/>');
?>
<div class="container ">
  <div class="row">
    <form action="" method="POST" role="form" class="shop_form">
        <div class="form-group">
          <p>Add new item</p>
            <div class="section_image">
                <label for="section_image" name="section_image">Image</label>
                <input type="text" name="section_image" id="section_image" class="form-input" required/>
            </div>
            <div class="section_name">
                <label for="section_name" name="section_name">Name</label>
                <input type="text" name="section_name" id="section_name" class="form-input" required/>
            </div>
            <div class="section_description">
                <label for="section_description">Description</label>
                <input type="text" name="section_description" id="section_description" class="form-input" required/>
            </div>
            <div class="section_price">
                <label for="section_price" name="section_price">Price</label>
                <input type="text" name="section_price" id="section_price" class="form-input" required/>
            </div>
        </div>
        <div class="btn_center">
            <input type="submit" value="Add item" class="form-submit"/>
            <input type="reset" value="Reset form" class="form-reset"/>
        </div>
    </form>

      <?php
        $section_image = $_REQUEST['section_image'];
        $section_name = $_REQUEST['section_name'];
        $section_description = $_REQUEST['section_description'];
        $section_price = $_REQUEST['section_price'];
      ?>

  </div>
</div>
</body>
</html>
