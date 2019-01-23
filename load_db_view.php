<?php
 $dsn = "pgsql:host=localhost;dbname=;port=";
    $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false
    ];
    $pdo = new PDO($dsn, '', '', $opt);
   


    $result=$pdo->query("SELECT table_name
                        FROM information_schema.tables
                        where table_schema='public'and table_name !='geometry_columns' and table_name !='geography_columns' and table_name !='spatial_ref_sys'and table_name !='raster_columns' and table_name !='raster_overviews'
                        ORDER BY table_name;");  
    $returnTable="<table class='table'>";
    foreach($result as $row){
        $returnTable.="<tr>";
            foreach ($row as $key => $value) {
                $returnTable.="<td>{$value}</td>";
                //$returnTable.="<td><button class='tabledb' dataid='{$value}'>view att table</button></td>";
                $returnTable.="<td><i class='viewTableDb fas fa-table' dataId='{$value}'></i></td><td><i class='addTableDb fas fa-plus-circle' id ='{$value}'></i></td>";
                
                
                
                
                
            }
        $returnTable.="</tr>";

    };
    $returnTable.="</table>";
    echo $returnTable;
?>
