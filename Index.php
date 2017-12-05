
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../css/main.css" >
</head>
<body>
<p>
    fsdfgdgdfgdfg
</p>

<?php
/**
 * Created by PhpStorm.
 * User: Programmist1c
 * Date: 21.06.2017
 * Time: 15:03
 */
//echo "fddfhd";
//echo 2+3;
//echo "<a href=\"php/Index.html\" >go</a>";
//echo "<a href=\"php/test.php\" >go</a>";
$arr = [ 1, 2, 3 ];
var_dump( $arr );
?>

<script type="text/javascript">
    document.write("Today is " + Date() );
    onerror = errorHandler
    //document.writ("Добро пожаловать на этот сайт!") // Преднамеренная ошибка
    function errorHandler(message, url, line)
    {
        out = "К сожалению, обнаружена ошибка.\n\n";
        out += "Ошибка: " + message + "\n";
        out += "URL: " + url + "\n";
        out += "Строка: " + line + "\n\n";
        out += "Щелкните на кнопке OK для продолжения работы.\n\n";
        alert(out);
        return true;
    }
</script>
</body>
</html>

