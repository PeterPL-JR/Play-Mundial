<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>League Mundial</title>
    <script src="scripts/library.js"></script>
    <script src="scripts/styles-handler.js"></script>

    <link rel="icon" href="images/cup.png" type="image/png">
    <link rel="stylesheet" href="styles/css-colors.css">
    <link rel="stylesheet" href="styles/main-page-styles.css">

    <link rel="stylesheet" href="styles/basic-styles.css">
    <link rel="stylesheet" href="styles/game-styles.css">
    <link rel="stylesheet" href="styles/matches-styles.css">

    <link rel="stylesheet" href="styles/group-table-styles.css">
    <link rel="stylesheet" href="styles/matches-table-styles.css">
    <link rel="stylesheet" href="styles/share-styles.css">
    <link rel="stylesheet" href="styles/user-styles.css">
</head>
<body>
<!-- <img src="images/background.png" id="background"> -->
<img src="images/user.png" id='user-menu-img'>
<div id="container">
    <div id="header-div">
        <img src="images/cup.png" id="logo">
        <div id="logo-name">League <b>Mundial</b></div>
        <div style="clear: both;"></div>
    </div>
    <div id="content">
        <div class="pots-round-name round-name">
            <img src="images/ball.png">
            <div class="name-div">Koszyki</div>
            <img src='images/ball2.png' id='qualification-button'>
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
    initCustom();

    const qButton = document.getElementById("qualification-button");
    qButton.onclick = function() {
        openQualification();
    }

    function openQualification() {

    }
</script>
</body>
</html>