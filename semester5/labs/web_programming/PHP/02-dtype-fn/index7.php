<!DOCTYPE html>
<html>

<body>

<?php

echo "<h2>Magic Constants</h2>";

echo "<hr>";

echo "Current Line : " . __LINE__;

echo "<br><br>";

echo "Current File : " . __FILE__;

echo "<br><br>";

echo "Current Directory : " . __DIR__;

echo "<br><br>";

function display(){

    echo "Function Name : " . __FUNCTION__;

}

display();

?>

</body>

</html>