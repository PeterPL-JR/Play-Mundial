<?php include_once "constants.php"; ?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>League Mundial</title>
    <link rel="icon" href="images/cup.png" type="image/png">
    <link rel="stylesheet" href="styles/themes/theme-mundial.css">
    <script src="scripts/library.js"></script>
    <script src="scripts/constants.js"></script>
    <script src="scripts/football.js"></script>

    <link rel="stylesheet" href="styles/basic-styles.css">
    <link rel="stylesheet" href="styles/logo-styles.css">
    <link rel="stylesheet" href="styles/content-styles.css">

    <link rel="stylesheet" href="styles/pots-styles.css">
    <link rel="stylesheet" href="styles/group-table-styles.css">
    <link rel="stylesheet" href="styles/group-matches-styles.css">
    <link rel="stylesheet" href="styles/knock-matches-styles.css">

    <link rel="stylesheet" href="styles/share-styles.css">
    <link rel="stylesheet" href="styles/user-styles.css">
    <link rel="stylesheet" href="styles/play-offs-styles.css">
</head>
<body>
<img src="images/user.png" id='user-menu-img'>
<div id="container">
    <div id="logo">
        <img src="images/cup.png" id="logo-image">
        <div id="logo-name">League <b>Mundial</b></div>
        <div style="clear: both;"></div>
    </div>
    <div id="content">
        <div id='phase' class='phase phase-pots'>
            <img id='phase-img' class='phase-img' src="images/ball.png">
            <div id='phase-div' class='phase-div'>Koszyki</div>
            <div style="clear: both"></div>
        </div>
        <div id='pots-titles-div'></div>
        <div id="pots-div"></div>
        <button id="start-button" class="button">Zatwierdź</button>
    </div>
</div>
<script src="init-main-page.js" id="init-script"></script>
<script src="prepare-pots.js"></script>
<script src="draw-handler.js"></script>
<script>
    initCustom(<?php echo TYPE_MUNDIAL; ?>);
</script>
</body>
</html>