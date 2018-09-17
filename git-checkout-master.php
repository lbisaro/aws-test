<?php
include_once "function.php";

$commands[] = "git checkout master";
$commands[] = "git pull";
$commands[] = "git describe --all";

foreach ($commands as $command)
{
    $output = array();
    exec($command,$output);
    echo "<style>
    body {
        font-family: arial; 
        font-size: 16px;
    } 
    table {
        border-collapse: collapse;
        width: 100%;
    }
    table,tr,td,th {
        border: 1px solid #555;
    }
    </style>";
    echo "<table>
    <tr>
        <th<code>".$command."</code></th>
    </tr>
    <tr>
        <td>";
    
    if (!empty($output))
    {
        foreach($output as $str)
            echo "<code>".$str."</code>";
    }
    else
    {
        echo "<i>NULL</i>";
    }
    
    echo "</td>
    </tr>
    </table>";
    
}



?>