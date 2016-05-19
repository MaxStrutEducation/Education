<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <div class="result_form">
        <p>Common values</p>
        <?php foreach ($AllTriangle as $triangle): ?>
            <?php $getperimetr = ClassTriangle\GetTriangleParams($triangle); ?>
        <?php endforeach; ?>
        <p><?php print 'side A = ' . $getperimetr->a; ?></p>
        <p><?php print 'side B = ' . $getperimetr->b; ?></p>
        <p><?php print 'side C = ' . $getperimetr->c; ?></p>
    </div>

    <div>
        <?php foreach ($AllTriangle as $triangle): ?>
            <?php $getperimetr = ClassTriangle\GetTriangleParams($triangle); ?>
            <div class="riangle_name">
                <p><?php print $getperimetr->name; ?></p>
            </div>
            <div class="triangle_values">
                <p><?php print 'perimeter' . ' = ' . $getperimetr->perimeter; ?></p>
                <p><?php print 'area' . ' = ' . $getperimetr->area; ?></p>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="back_form">
        <a href="index.php">Show form</a>
    </div>


</body>
</html>



