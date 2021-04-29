<?php
    $all_pages = ['Home', 'Gallery', 'Contact', 'Resume'];
    $current_page = basename($_SERVER['SCRIPT_NAME'], ".php");
    function renderNavItems($pages, $current)
    {
      $output = "<ul class = 'nav'>";
      foreach($pages as $item) {
        $href = lcfirst($item);
        if ($item == "Home") $href = "index";
    
        $class = "nav-link";
        if ($href == $current) $class .= " home";
        $output .= "<li class = 'nav-item'><a href='$href.php' class = '$class'>$item</a> </li>";
      } 
      $output .= "</ul>";
      echo $output;
    }
    function chooseCssFile($current) {
        if ($current == 'index') $current = 'style';
        echo $current . ".css";
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <script src="https://kit.fontawesome.com/b811c36675.js" crossorigin="anonymous"></script>
  <title>Minh Dao's website</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Hachi+Maru+Pop&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php 
    chooseCssFile($current_page);
  ?>">

</head>
<body>
  <header>
    <div class="logo">
      <a href="index.html">
        <img src="./assets/ellipse-7.png" alt="my-logo">
        <p>Minh Dao</p>
      </a>
    </div>

    <nav>
      <?php
        renderNavItems($all_pages, $current_page);
      ?>
    </nav>

  </header>
