<?php
// $pageTitle must be set before including this file
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <?php
  // Sets the browser tab title — if the page hasn't provided a title, fall back to 'FocusFlow'
  // htmlspecialchars stops any dodgy characters in the title breaking the page
  ?>
  <title><?php echo htmlspecialchars($pageTitle ?? 'FocusFlow'); ?> | FocusFlow</title>

  <link rel="stylesheet" href="css/style.css" />
  <link rel="icon" type="image/png" href="images/logo.png" />
</head>
<body>

<!-- Shared header that appears at the top of every page -->
<header class="site-header">
  <div class="header-inner">
    <div class="logo-wrap">
      <img src="images/logo.png" alt="FocusFlow Logo" class="logo" />
      <span class="site-name">FocusFlow</span>
    </div>
    <p class="tagline">Your personal productivity hub</p>
  </div>
</header>

<!-- Main navigation — highlights whichever page the user is currently on -->
<nav class="site-nav" aria-label="Main navigation">
  <ul>
    <?php
    // Checks the current filename and adds class="active" to the matching link so CSS can highlight it 
    ?>
<li><a href="index.php" <?php if(basename($_SERVER['PHP_SELF']) == 'index.php') echo 'class="active"'; ?>>Home</a></li>
<li><a href="study_tips.php" <?php if(basename($_SERVER['PHP_SELF']) == 'Study_Tips.php') echo 'class="active"'; ?>>Study Tips</a></li>
<li><a href="reviews.php" <?php if(basename($_SERVER['PHP_SELF']) == 'Reviews.php') echo 'class="active"'; ?>>Reviews</a></li>
  </ul>
</nav>