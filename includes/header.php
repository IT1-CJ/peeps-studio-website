<?php
// Set a default page title if none provided
if (!isset($pageTitle)) $pageTitle = 'Peeps Studio LLC';
if (!isset($activePage)) $activePage = '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Peeps Studio LLC – Dance classes for all ages in Florida. Ballet, Hip Hop, Contemporary, and more.">
  <title><?= htmlspecialchars($pageTitle) ?></title>
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>

<header>
  <nav>
    <a class="logo" href="/index.php">Peeps<span> Studio</span></a>
    <ul>
      <li><a href="/index.php"   <?= $activePage === 'home'    ? 'class="active"' : '' ?>>Home</a></li>
      <li><a href="/classes.php" <?= $activePage === 'classes' ? 'class="active"' : '' ?>>Classes</a></li>
      <li><a href="/contact.php" <?= $activePage === 'contact' ? 'class="active"' : '' ?>>Contact</a></li>
    </ul>
  </nav>
</header>
