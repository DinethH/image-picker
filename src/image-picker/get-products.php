<?php
  include_once ('db.php');

  $categoryid = $_REQUEST['categoryid'];

  $sql = "SELECT bc.id AS categoryid, bsc.id AS shopcategoryid, bsc.url, bsc.title, bsc.translation, bscp.shopbikeid AS shopbikeid
      FROM bd_categories bc JOIN bd_shopcategories bsc ON bc.id = bsc.categoryid JOIN bd_shopcategoriesproducts bscp ON bsc.id = bscp.shopcategoryid
      WHERE bsc.categoryid = $categoryid AND bscp.shopbikeid > 0 AND bscp.shopbikeid IS NOT NULL
      GROUP BY bsc.id
      ORDER BY bsc.translation";


  $stmt = $db->query($sql);
  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

  jsonOut($rows);

