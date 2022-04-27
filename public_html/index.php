<?php  echo'<a href="includes\head.inc.html" > Mon lien </a>'; ?>
<body>
    <?php  echo'<a href="includes\header.inc.html" > Mon lien </a>'; ?>
</body>
<?php  echo'<a href="includes\body.inc.html" > Mon lien </a>'; ?>

Bonjour, <?php echo htmlspecialchars($_POST['nom']); ?>.
Tu as <?php echo (int)$_POST['age']; ?> ans.