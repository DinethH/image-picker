<?php

  include_once ('db.php');


  $sql = "SELECT bc.id AS categoryid, bc.name AS name, bc.englishname AS englishname
          FROM bd_categories bc JOIN bd_shopcategories bsc ON bc.id = bsc.categoryid JOIN bd_shopcategoriesproducts bscp ON bsc.id = bscp.shopcategoryid
          WHERE bsc.categoryid > 0 AND bscp.shopbikeid > 0 AND bscp.shopbikeid IS NOT NULL
          GROUP BY bc.id
          ORDER BY bc.id";


  $stmt = $db->query($sql);
  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

  jsonOut($rows);


