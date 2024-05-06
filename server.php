<?php
     $disk_json = file_get_contents('dischi.json');
     $disk = json_decode($disk_json, true);
   
     header('Content-Type: application/json');
     echo json_encode($disk);
?>