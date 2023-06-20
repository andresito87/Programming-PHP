<?php
$callback = function()
{
    echo "callback achieved";
};

call_user_func($callback);
echo "<br>";
$bigLongVariableName = "PHP";
$short =& $bigLongVariableName;
$bigLongVariableName .= " rocks!";
print "\$short is $short <br/>";
print "Long is $bigLongVariableName";
echo "<br>";
$short = "Programming $short";
print "\$short is $short <br/>";
print "Long is $bigLongVariableName";