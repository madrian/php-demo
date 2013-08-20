<?php
/**
 * Created by JetBrains PhpStorm.
 * User: adrian
 * Date: 8/20/13
 * Time: 5:26 PM
 * To change this template use File | Settings | File Templates.
 */

$names=array("James", "Donna", "Paul");
echo "Array contains " . $names[0] . " " . $names[1] . " " . $names[2];
$length=count($names);
echo $length;
for ( $i=0; $i<$length; $i++ ) {
    echo $names[$i] . " ";
    echo "<br/>" . $i;
}