<?php
include_once "function.php";

$commands[] = "git checkout master";

foreach ($commands as $command)
{
    $output = array();
    $return_var = '';
    $string exec($command,$output,$return_var);
    echo "<h3><code>".$command.'</code></h3>';
    echo "<h4>string</h4>";
    pr($string);
    echo "<h4>output</h4>";
    pr($output);
    echo "<h4>return_var</h4>";
    pr($return_var);
    
}



?>