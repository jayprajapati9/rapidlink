<?php

include "classes/session.class.php";
include "classes/user.class.php";
include "classes/block.class.php";
include "classes/design.class.php";

Session::start();
Session::checkLogin();

$User = new User();
$Block = new Block();
$Design = new Design();

$userData = $User->getUserData(Session::getSessionUser());

if ($userData["iscustom"] == "yes") {
    $Design->loadCustomCss(Session::getSessionUser());
}

if (empty($userData["usertitle"])) {
    $profiletitle = $userData["username"];
} else if (!empty($userData["usertitle"])) {
    $profiletitle = $userData["usertitle"];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/link.svg">

    <!-- Title -->
    <title><?php echo $userData["username"]; ?> | RapidLink</title>

    <!-- General Css -->
    <link rel="stylesheet" href="themes/localgeneral.css">

    <?php
    if ($userData["iscustom"] != "yes") {
        $theme = $userData["usertheme"];
        echo "<link rel='stylesheet' href='themes/" . $theme . ".css'>";
    } else {
        echo "<link rel='stylesheet' href='themes/customdesign.css'>";
    }
    ?>

    <!-- jquery CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Google Font Poppins CDN -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&amp;display=swap" rel="stylesheet" />

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body class="font-family main-bg-color">
    <div class="container">
        <div class="userinfo-wrap">
            <!-- <img class="userimg" src="Frame 6 (1).svg" alt=""> -->
            <!-- <div class="default-userimg">
                <img src="link.svg" alt="">
            </div> -->
            <?php
            if ($userData["userimg"] == null) {
                echo "<div class='default-userimg'>
                    <span>" . strtoupper(substr($userData['username'], 0, 1)) . "</span>
                  </div>";
            } else {
                echo "<img src='assets/images/" . $userData['userimg'] . "' class='userimg' alt=''>";
            }
            ?>
            <!-- <span style="font-family: sans-serif; margin-right: 3px;">@</span> -->
            <h1 class="username font-color"> <?php echo $profiletitle; ?></h1>
            <p class="userbio font-color"><?php echo $userData["userbio"]; ?></p>
        </div>

        <div class="blocks-wrap">
            <!-- https://open.spotify.com/track/6btegcu44HqquqArljhFxu?si=2ccb0b62831f4a9d -->
            <!-- https://open.spotify.com/embed/track/6btegcu44HqquqArljhFxu?utm_source=generator -->
            <?php
            foreach ($Block->getBlocks($userData['username'], "userview") as $link) {
                if ($link->blocktype == "linkblock") {
                    echo "<a href='$link->linkurl' class='link-block btn-corners btn-bg-color btn-txt-color' target='_blank' rel='noopener noreferrer'>$link->linktitle</a>";
                } else if ($link->blocktype == "headerblock") {
                    echo "<h4 class='header-block font-color'>$link->header</h4>";
                } else if ($link->blocktype == "spotifyblock") {
                    echo "<div class='spotify-block'>
                            <div class='spotify-name'>$link->songname <i class='bx bx-chevron-down'></i></div>
                                <div class='spotify-song'>
                                    <iframe src='https://open.spotify.com/embed/track/$link->songid?utm_source=generator&theme=0' frameBorder='0'></iframe>
                                </div>
                            </div>
                        </div>";
                }
            }
            ?>
        </div>
    </div>
    <script>
        var spotifyname = document.querySelectorAll(".spotify-name")
        var spotifysong = document.querySelectorAll(".spotify-song")
        var spotifyblock = document.querySelectorAll(".spotify-block")
        for (let i = 0; i < spotifyname.length; i++) {
            spotifyname[i].addEventListener("click", () => {
                $(spotifyblock[i]).toggleClass("spotify-block-active")
                $(spotifysong[i]).toggleClass("spotify-song-active")
            })
        }
    </script>
</body>

</html>