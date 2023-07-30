<?php

include "classes/session.class.php";
include "classes/user.class.php";
include "classes/block.class.php";
include "classes/design.class.php";

$User = new User();
$Block = new Block();
$Design = new Design();

if (isset($_GET["u"])) {
    $username = strtolower($_GET["u"]);
    if (preg_match('/^(?=[a-zA-Z_\d]*[a-zA-Z])[a-zA-Z_\d]{0,36}$/', $username)) {
        if ($User->isUserExist($username)) {
            // $designData = $Design->getDesign($username);

            $userData = $User->getUserData($username);

            if ($userData["iscustom"] == "yes") {
                $Design->loadCustomCss($username);
            }

            if (empty($userData["usertitle"])) {
                $profiletitle = $userData["username"];
            } else if (!empty($userData["usertitle"])) {
                $profiletitle = $userData["usertitle"];
            }
        } else {
            header('Location: 404');
            exit();
        }
    } else {
        header('Location: 404');
        exit();
    }
} else {
    header('Location: 404');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title><?php echo $userData["username"]; ?> | RapidLink</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon-32x32.png">

    <!-- General Css -->
    <link rel="stylesheet" href="themes/general.css">

    <?php
    if ($userData["iscustom"] != "yes") {
        $theme = $userData["usertheme"];
        echo "<link rel='stylesheet' href='themes/" . $theme . ".css'>";
    } else {
        echo "<link rel='stylesheet' href='themes/customdesign.css'>";
    }
    ?>

    <!-- Google Font Poppins CDN -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body class="font-family main-bg-color">
    <!-- 1. Arctic (Default) -->
    <!-- 2. Obsidian (White Bg Dark Block) -->
    <!-- 3. Meadow (White BG Green Block) -->
    <!-- 4. Rose (White BG Rose Block) -->
    <!-- 5. Orchid (White Bg Purle Block) -->

    <!-- Sensitive Content Alert -->
    <!-- <div class="sensive-content" style="display: none;">
        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor" class="bi bi-eye-slash" viewBox="0 0 16 16">
            <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z" />
            <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829l.822.822zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829z" />
            <path d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12-.708.708z" />
        </svg>
        <h2>Content Warning</h2>
        <p>This page contain nudity, violence, and sesitive content</p>
        <button>Show</button>
    </div> -->

    <div class="container">

        <div class="userinfo-wrap">

            <?php
            if ($userData["userimg"] == null) {
                echo "<div class='default-userimg'>
                    <span>" . strtoupper(substr($userData['username'], 0, 1)) . "</span>
                  </div>";
            } else {
                echo "<img src='assets/images/" . $userData['userimg'] . "' class='profile-img' alt=''>";
            }
            ?>

            <!-- <img class="userimg" src="Frame 6 (1).svg" alt=""> -->
            <!-- <div class="default-userimg">
                <img src="link.svg" alt="">
            </div> -->

            <h1 class="username font-color"> <?php echo $profiletitle; ?></h1>
            <p class="userbio"><?php echo $userData["userbio"]; ?></p>
        </div>

        <div class="blocks-wrap">
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
            <!-- <a href="" class="link-block">Claim Your RapidLink ⚡</a>
            <p class="header-block">Featured</p>
            <a href="" class="link-block">Checkout New Summer Special Theme</a>
            <a href="" class="link-block">New 5+ Themes</a>
            <p class="header-block">What's new in rapidlink v4</p>
            <a href="" class="link-block">Completely Customizable</a>
         -->

        </div>

        <!-- <div class="socialicon-wrap">
            <a href="" class="social-icon">
                <i class="bi bi-youtube"></i>
            </a>
            <a href="" class="social-icon">
                <i class="bi bi-github"></i>
            </a>
            <a href="" class="social-icon">
                <i class="bi bi-facebook"></i>
            </a>
        </div> -->

        <!-- <div class="card-block">
            <h3>Header Title</h3>
            <p>Lorem ipsum dolor sit, amet Elit.</p>
        </div> -->
    </div>
</body>

</html>