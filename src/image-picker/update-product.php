<?php

  $shopcategoryid = $_REQUEST[''];
  $categoryid = $_REQUEST[''];


  $sqlP = "INSERT INTO bd_shopcategoriescheck (shopcategoryid, categoryid, correct) VALUES (1001, 93, 1)";

  $sqlN = "INSERT INTO bd_shopcategoriescheck (shopcategoryid, categoryid, correct) VALUES (1001, 93, -1)";
