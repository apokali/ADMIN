<?php
   if(!isset($page_titile)) {
        $page_title = 'Staff Area';
   }
?>

<!doctype html>
<html lang="en">
<head>
    <title>Admin - <?php echo $page_title; ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" 
          href="<?php echo url_for('/stylesheets/admin.css'); ?>"/>
</head>

<body>
      <header>
          <h1>INTERNATIONAL DIVISION Admin Area</h1>
      </header>
      <nav>
          <ul>
              <li><a href="<?php echo url_for('/staff/index.php'); ?>">Menu</a></li>
          </ul>
      </nav>