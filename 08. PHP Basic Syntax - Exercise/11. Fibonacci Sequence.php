<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
<form>
    N: <input type="text" name="num"/>
    <input type="submit"/>
</form>
<?php
if (isset($_GET['num'])) {
    $a = intval($_GET['num']);

    $fib0 = 1;
    $fib1 = 1;
    $fib = 1;
    echo $fib0 . ' ';
    for ($i = 2; $i <= $a; $i++) {
        echo $fib . ' ';
        $fib = $fib0 + $fib1;
        $fib0 = $fib1;
        $fib1 = $fib;
    }
}
?>
</body>
</html>