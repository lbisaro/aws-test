<?php
include_once "function.php";

$commands[] = "git checkout master";
$commands[] = "git pull";

foreach ($commands as $command)
{
    $output = array();
    $return_var = '';
    $string = exec($command,$output,$return_var);
    echo "<style>body {font-family: arial; font-size: 16px;} </style>";
    echo "<h3><code>".$command.'</code></h3>';
    echo "<table>
    <tr>
        <th>output</th>
        <th>return_var</th>
        <th>string</th>
    </tr>
    <tr>
        <td>".$output."</td>
        <td>".$return_var."</td>
        <td>".$string."</td>
    </tr>
    </table>";
    
}



?>