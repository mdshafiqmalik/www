<!DOCTYPE html>
<?php
$r1= rand(0,10);
$r2= rand(0,10);
$r3= rand(0,10);
$r4 = rand(0,10);
$randVersion ="$r1"."."."$r2"."."."$r3".".".$r4;  ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/root.css?id=<?php echo $randVersion; ?>">
    <link rel="stylesheet" href="assets/channels.css?id=<?php echo $randVersion; ?>">
    <title></title>
    <style media="screen">
    #channels{
      filter: var(--svgblue);
    }
    </style>
  </head>
  <body>
  <?php include 'components/header.php'; ?>
    <div class="top">
      <div class="filterSearch">
        <!-- <span id="sp">Filter :</span> -->
        <select class="filterOpt" name="filterOpt" id="filterOpt">
          <option value="all">All</option>
          <option value="mostActive">Most Active</option>
          <option value="newlyAdded">Newly Added</option>
          <option value="atoz">A to Z</option>
        </select>

        <select class="filterOpt" name="lang" id="lang">
          <option value="all">English</option>
          <option value="mostActive">Urdu</option>
          <option value="mostActive">All</option>
        </select>
      </div>
      <div class="search">
        <div id="search">
        <span>&#128269;</span>
          <input id="" type="search" name="" value="" placeholder=" Search Name Here....">
        </div>
      </div>
    </div>



    <div class="authors cont500">
    </div>
  </body>
</html>
