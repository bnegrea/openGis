<?php
$table=$_POST['db_table'];
 $dsn = "pgsql:host=localhost;dbname=;port=";
    $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false
    ];
    $pdo = new PDO($dsn, 'postgres', '', $opt);
   


    $result=$pdo->query("Select * from {$table} fetch first 20 rows only;");  
    $returnTable="<table class='table table-sm table-bordered table-striped'>";
    foreach($result as $row){
        $returnTable.="<tr>";
            foreach ($row as $key => $value) {
                $returnTable.="<td>{$value}</td>";  
            }
        $returnTable.="</tr>";

    };
    $returnTable.="</table>";
    echo $returnTable;
?>