<?php
    $table=$_POST['db_table'];
    $bbox_coord=$_POST['bbox_coord'];
     
    
        
    
    
    $dsn = "pgsql:host=localhost;dbname=test4;port=5432";
    $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false
    ];
    $pdo = new PDO($dsn, 'postgres', 'postgres', $opt);
   
    
    $result=$pdo->query("select *, ST_AsGeoJSON(St_Transform((ST_Intersection(\"{$table}\".\"geom\",(ST_Transform(ST_GeomFromText
(St_asText(ST_FlipCoordinates('POLYGON (({$bbox_coord}))')),4326),3044)))),4326))
		   as geojson from {$table} where
		   
		   ST_Intersects(\"{$table}\".\"geom\",(ST_Transform(ST_GeomFromText
(St_asText(ST_FlipCoordinates('POLYGON (({$bbox_coord}))')),4326),3044)));");  
    
    
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



?>