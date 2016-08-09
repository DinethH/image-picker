<?php

  include_once ('db.php');
  
  $picks = $_REQUEST['picks'];
  
  //$picks = '[{"shopcategoryid":"2","categoryid":"1","correct":1},{"shopcategoryid":"3","categoryid":"1","correct":1},{"shopcategoryid":"1","categoryid":"1","correct":-1}]';
  
  $picks = json_decode($picks);
  
  $sql = "INSERT INTO bd_shopcategoriescheck (shopcategoryid, categoryid, correct) VALUES ";
  
  $valuesArr = array();
  
  foreach ($picks as $key => $object) {
      $shopcategoryid = (int) $object->shopcategoryid;
      $categoryid = (int)$object->categoryid;
      $correct = (int) $object->correct;
      
      $valuesArr[] = "($shopcategoryid, $categoryid, $correct)";
      
      
  }
  $sql .= implode(',', $valuesArr);

  
  $stmt = $db->query($sql);
  
  echo "success";