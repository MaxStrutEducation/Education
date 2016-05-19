<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Result</title>
    <link href="style/bootstrap.css" type="text/css" rel="stylesheet">
    <link href="style/main.css"  type="text/css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="result_common col-md-3">
                <div class="result_common_inner">
                    <p>Common values</p>
                    <?php foreach ($AllTriangle as $triangle): ?>
                        <?php $getperimetr = ClassTriangle\GetTriangleParams($triangle); ?>
                    <?php endforeach; ?>
                    <p><?php print 'side A = ' . $getperimetr->a; ?></p>
                    <p><?php print 'side B = ' . $getperimetr->b; ?></p>
                    <p><?php print 'side C = ' . $getperimetr->c; ?></p>
                </div>
            </div>
            <div class="result_pers col-md-9 result_pers_inner">
                
                <div class="result_per">
                    <?php foreach ($AllTriangle as $triangle): ?>
                        <?php $getperimetr = ClassTriangle\GetTriangleParams($triangle); ?>
                        <div class=" name_value_section col-md-4">
                            <div class="riangle_name">
                                <p><?php print $getperimetr->name; ?></p>
                            </div>
                            <div class="triangle_values">
                                <p><?php print 'perimeter' . ' = ' . $getperimetr->perimeter; ?></p>
                                <p><?php print 'area' . ' = ' . $getperimetr->area; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="result_back_form">
                    <a href="index.php" class="result_back_form_link">Show form</a>
                </div>
            </div>
         </div>
    </div>



</body>
</html>



