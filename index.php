<?php
include "config.php";
include "header.php";
?>

<!-- Navbar -->
<nav id="naviBar" class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="https://www.shipengine.com/signup">
        <img id="se-logo" src="/assets/images/se-logo.png" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">

        </ul>
        <a class="fullLogo" href="https://www.shipengine.com/">
            <img id="logoImg" class="Logo" src="./assets/images/ShipEngine-white.svg" alt="">
        </a>
    </div>
</nav>


<div id="indexContainer">
    <!-- Option UI -->
    <div id="optionContainer" class="optionPosition">
        <a class="optionLink" href="/useMyOwnBoxes.php">
            <div id="option1" class="optionBacking">
                <h2 id="optionText"><strong>Use your own boxes and items</strong></h2>
                <img style="width: 25%; height: 25%; margin-top: 25px;" src="/assets/images/box.png">
            </div>

        </a>
        <a class="optionLink" href="/useTestBoxes.php">
            <div id="option2" class="optionBacking">
                <h2 id="optionText"><strong>Test with preset boxes and items</strong></h2>
                <img style="width: 25%; height: 25%; margin-top: 25px;" src="/assets/images/chkList.png">
            </div>
        </a>
    </div>

    <img id="moonMode" src="/assets/images/colorMoon.png" alt="">

</div>

<?php include "footer.php" ?>