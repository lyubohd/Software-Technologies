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
    $n = intval($_GET['num']);

    $fib0 = 0;
    $fib1 = 1;
    $fib2 = 1;
    echo "$fib1" . ' ';
    echo "$fib2" . ' ';
    for ($i = 3; $i <= $n; $i++) {
        $fib = $fib0 + $fib1 + $fib2;
        echo "$fib" . ' ';
        $fib0 = $fib1;
        $fib1 = $fib2;
        $fib2 = $fib;
    }
}
?>
</body>
</html>