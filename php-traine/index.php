<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    class Room{
        public function __construct()
        {
            echo ('Construct method');
        }
        public function __invoke()
        {
            echo ('Invoke method');
        }
        public function __toString()
        {
            echo('String method');
        }
    }


$obj = new Room();
echo('<br/>');
$obj();
echo('<br/>');
echo $obj;
?>
</body>
</html>