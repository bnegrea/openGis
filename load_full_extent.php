<?php
if (isset($_POST['db_table'])){
    $table=$_POST['db_table'];
    if (isset($_POST['query_select_fields'])){
        $fields=$_POST['query_select_fields'];
    } else {
        $fields='*';
    }
    if (isset($_POST['where'])){
        $where=' WHERE '.$_POST['where'];
    }else{
        $where='';
    }
        
    
    
    $dsn = "pgsql:host=localhost;dbname=;port=";
    $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false
    ];
    $pdo = new PDO($dsn, '', '', $opt);
   
    
    $result=$pdo->query("SELECT {$fields}, ST_AsGeoJSON(ST_Transform (geom, 4326)) as geojson FROM {$table}{$where};");  
    
    
    $features=[];
    foreach($result as $row){
        unset($row['geom']);                                                          
        $geometry=$row['geojson']=json_decode($row['geojson']); 
        unset($row['geojson']);
        $feature=["type"=>"Feature","geometry"=>$geometry,"properties"=>$row];
        array_push($features,$feature);                                                  
    };
    $featureCollection=["type"=>"FeatureCollection","features"=>$features];
    echo json_encode($featureCollection);
} else {
    echo "error: no table set";
}
 


?>