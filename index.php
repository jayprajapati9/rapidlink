<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Viewport -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Share multiple links at once & Connect audiences to all of your content with just one link.">

    <!-- Title -->
    <title>RapidLink | One page for all your links</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/link.svg">

    <!-- Tailwind Css -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Poppins Font CDN -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Local CSS -->
    <link rel="stylesheet" href="style/index.css">

    <!-- Jquery CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- OwlCarousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

</head>

<body>
    <div class="h-full w-full pb-12" style="background-image: url(assets/images/BG.png); background-repeat: no-repeat; background-size: cover;">
        <header class="w-full max-w-4xl mx-auto flex items-center justify-between pt-8 px-6">
            <div class="flex items-center flex-row gap-x-2">
                <svg width="35" height="35" class="hidden sm:block w-7 h-7 sm:w-9 sm:h-9" viewBox="0 0 60 60" fill="none" cxmlns="http://www.w3.org/2000/svg">
                    <path d="M8.175 30C6.12417 27.5454 5.00046 24.4486 5 21.25C5 13.7 11.175 7.5 18.75 7.5H31.25C38.8 7.5 45 13.7 45 21.25C45 28.8 38.825 35 31.25 35H25" class="stroke-blue-500" stroke-width="4.1" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M51.825 30C53.8758 32.4546 54.9995 35.5514 55 38.75C55 46.3 48.825 52.5 41.25 52.5H28.75C21.2 52.5 15 46.3 15 38.75C15 31.2 21.175 25 28.75 25H35" class="stroke-blue-500" stroke-width="4.1" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <img src="assets/images/brandicon.svg" class="w-8 h-8 block sm:hidden" alt="">
                <p class="hidden sm:block text-lg font-medium text-slate-900">RapidLink</p>
            </div>
            <div>
                <a href="" class="font-medium mr-3 sm:mr-4 text-slate-900">Login</a>
                <a href="" class="bg-blue-500 text-white px-3 py-1.5 font-medium rounded-lg">SIGNUP FREE</a>
            </div>
        </header>

        <div class="w-full max-w-5xl h-full lg:h-[28rem] mx-auto flex items-center justify-center flex-col lg:flex-row mt-14 mb-4 lg:mb-0 lg:mt-10 px-6 lg:px-0 gap-x-28">
            <div class="flex flex-col items-start justify-center">
                <p class="text-[18px] text-blue-500 font-medium">CREATE YOUR</p>
                <p class="font-bold text-slate-900 text-[35px] lg:text-[40px] leading-[2.5rem] lg:leading-[3.5rem] my-2 lg:my-0">One Link For Everything</p>
                <p class="w-full max-w-md text-[#474747] text-[18px] leading-6">Share multiple links at once & connect audiences to all of your content with just one link</p>
                <a href="" class="bg-blue-500 text-white text-md font-semibold px-5 py-2.5 mt-6 rounded-md">Get Started For Free</a>
            </div>
            <div class="flex hidden lg:block">
                <div class="w-80 h-80 relative top-1/2 rounded-full bg-blue-100 flex items-center justify-center">
                    <div class="w-64 h-64 absolute bg-blue-200 rounded-full"></div>
                    <img src="assets/images/Rectangle.png" class="w-full max-w-[230px] -rotate-6 z-10" alt="">
                </div>
            </div>
        </div>

    </div>
    <div class="carouselContainer w-full bg-blue-100 p-1 flex items-center justify-center flex-row gap-x-4 relative z-20">
        <div class="owl-carousel SocialIconOwlCarousel">
            <div class="item bg-white mx-3 p-2 shadow-md rounded-md">
                <img src="assets/socialicons/Discord svg.svg" class="w-7 h-7" alt="">
            </div>
            <div class="item bg-white mx-3 p-2 shadow-md rounded-md">
                <img src="assets/socialicons/Facebook svg.svg" class="w-7 h-7" alt="">
            </div>
            <div class="item bg-white mx-3 p-2 shadow-md rounded-md">
                <img src="assets/socialicons/Instagram svg.svg" class="w-7 h-7" alt="">
            </div>
            <div class="item bg-white mx-3 p-2 shadow-md rounded-md">
                <img src="assets/socialicons/LinkedIn svg.svg" class="w-7 h-7" alt="">
            </div>
            <div class="item bg-white mx-3 p-2 shadow-md rounded-md">
                <img src="assets/socialicons/Medium svg.svg" class="w-7 h-7" alt="">
            </div>
            <div class="item bg-white mx-3 p-2 shadow-md rounded-md">
                <img src="assets/socialicons/Patreon svg.svg" class="w-7 h-7" alt="">
            </div>
            <div class="item bg-white mx-3 p-2 shadow-md rounded-md">
                <img src="assets/socialicons/Reddit svg.svg" class="w-7 h-7" alt="">
            </div>
            <div class="item bg-white mx-3 p-2 shadow-md rounded-md">
                <img src="assets/socialicons/Snapchat svg.svg" class="w-7 h-7" alt="">
            </div>
            <div class="item bg-white mx-3 p-2 shadow-md rounded-md">
                <img src="assets/socialicons/Spotify svg.svg" class="w-7 h-7" alt="">
            </div>
            <div class="item bg-white mx-3 p-2 shadow-md rounded-md">
                <img src="assets/socialicons/Twitter  svg.svg" class="w-7 h-7" alt="">
            </div>
            <div class="item bg-white mx-3 p-2 shadow-md rounded-md">
                <img src="assets/socialicons/Twitch svg.svg" class="w-7 h-7" alt="">
            </div>
            <div class="item bg-white mx-3 p-2 shadow-md rounded-md">
                <img src="assets/socialicons/YouTube svg.svg" class="w-7 h-7" alt="">
            </div>
            <div class="item bg-white mx-3 p-2 shadow-md rounded-md">
                <img src="assets/socialicons/Behance svg.svg" class="w-7 h-7" alt="">
            </div>
            <div class="item bg-white mx-3 p-2 shadow-md rounded-md">
                <img src="assets/socialicons/Clubhouse svg.svg" class="w-7 h-7" alt="">
            </div>
            <div class="item bg-white mx-3 p-2 shadow-md rounded-md">
                <img src="assets/socialicons/Dribbble svg.svg" class="w-7 h-7" alt="">
            </div>
            <div class="item bg-white mx-3 p-2 shadow-md rounded-md">
                <img src="assets/socialicons/Github svg.svg" class="w-7 h-7" alt="">
            </div>
            <div class="item bg-white mx-3 p-2 shadow-md rounded-md">
                <img src="assets/socialicons/Slack svg.svg" class="w-7 h-7" alt="">
            </div>
            <div class="item bg-white mx-3 p-2 shadow-md rounded-md">
                <img src="assets/socialicons/TikTok svg.svg" class="w-7 h-7" alt="">
            </div>
            <div class="item bg-white mx-3 p-2 shadow-md rounded-md">
                <img src="assets/socialicons/Tumblr svg.svg" class="w-7 h-7" alt="">
            </div>
            <div class="item bg-white mx-3 p-2 shadow-md rounded-md">
                <img src="assets/socialicons/Telegram svg.svg" class="w-7 h-7" alt="">
            </div>
        </div>
    </div>

    <div class="text-center mt-14">
        <h1 class="txt-primary-color text-[1.45rem] font-medium px-6 sm:px-0">Create Customize Engage</h1>
        <p class="max-w-lg mx-auto txt-secondary-color text-base sm:text-lg mt-2 px-6 sm:px-0">Drive traffic to all of your content, boost engagement and sales. Are you ready ?</p>
        <div class="flex items-center justify-center flex-wrap mt-3 px-20">
            <img src="assets/images/mycard1.webp" alt="" class="w-full max-w-[12rem] shadow-xl rounded-xl border border-gray-100 md:mx-7 mx-5 mt-8" />
            <img src="assets/images/mycard2.webp" alt="" class="w-full max-w-[12rem] shadow-xl rounded-xl border border-gray-100 md:mx-7 mx-5 mt-8" />
            <img src="assets/images/mycard3.webp" alt="" class="w-full max-w-[12rem] shadow-xl rounded-xl border border-gray-100 md:mx-7 mx-5 mt-8" />
        </div>
    </div>

    <div class="w-full max-w-7xl mx-auto mt-24">
        <div class="max-w-4xl mx-auto flex items-center justify-center flex-col-reverse sm:flex-row px-10">
            <img src="assets/images/social-cards-img.webp" alt="" class="w-full h-auto mx-auto min-w-[240px] max-w-[295px] mt-5 sm:mt-0" />
            <div class="text-center sm:text-left sm:ml-6 ml-0 md:ml-12 ">
                <h1 class="txt-primary-color text-2xl font-medium">One link for everything</h1>
                <p class="txt-secondary-color my-3">Combine all your content into one link and Share multiple links at once in a beautiful way and track its performance.</p>
                <a href="#" target="_blank" rel="noopener noreferrer" class="txt-main-color inline-flex items-center font-medium">Add your first link
                    <svg xmlns="http://www.w3.org/2000/svg" class="mx-2" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h13M12 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="max-w-4xl mx-auto flex items-center justify-center flex-col sm:flex-row px-10 mt-12 sm:mt-6">
            <div class="sm:ml-6 md:ml-12 ml-0 text-center sm:text-left">
                <h1 class="txt-primary-color font-medium text-2xl">How it work</h1>
                <p class="txt-secondary-color my-3">RapidLink is a free tool for optimising your Instagram traffic, whether you're a blogger, an artist or run a content platform.</p>
                <p class="txt-secondary-color my-3">You'll get one bio link to house all the content you're driving followers to.</p>
                <a href="#" target="_blank" rel="noopener noreferrer" class="bg-mainlight-color text-sm font-bold text-white rounded-full py-1.5 px-4">SIGNUP FREE</a>
            </div>
            <img src="assets/images/WhiteForestBGMockup.webp" alt="" class="w-full h-auto mx-auto min-w-[220px] max-w-[235px] sm:mt-0" />
        </div>
    </div>

    <div class="flex flex-col items-center text-center px-4">
        <div class="bg-[#E6EEFC] px-3.5 py-1.5 font-medium rounded">
            <p class="txt-main-color">TRY IT NOW !!</p>
        </div>
        <h1 class="txt-primary-color text-2xl sm:text-3xl font-medium mt-2">Get started with rapidlink</h1>
        <p class="txt-secondary-color mt-4">RapidLink provides you 15+ themes and custom designs.</p>
    </div>

    <div class="ThemeCarouselContainer mt-10">
        <div class="owl-carousel ThemeOwlCarousel">
            <div class="item2">
                <img src="assets/images/DesignFrame1.webp" alt="" />
            </div>
            <div class="item2">
                <img src="assets/images/DesignFrame2.webp" alt="" />
            </div>
            <div class="item2">
                <img src="assets/images/DesignFrame3.webp" alt="" />
            </div>
            <div class="item2">
                <img src="assets/images/DesignFrame4.webp" alt="" />
            </div>
            <div class="item2">
                <img src="assets/images/DesignFrame5.webp" alt="" />
            </div>
            <div class="item2">
                <img src="assets/images/DesignFrame6.webp" alt="" />
            </div>
        </div>
    </div>

    <br><br>

    <script>
        $(document).ready(function() {
            $(".SocialIconOwlCarousel").owlCarousel({
                margin: 0,
                nav: false,
                loop: true,
                autoplay: true,
                mouseDrag: false,
                touchDrag: false,
                autoWidth: true,
                dots: false,
                autoPlaySpeed: 5000,
                autoplayTimeout: 2000,
                autoplayHoverPause: false,
                // responsive: {
                //     900: {
                //         loop: false,
                //         autoplay: false,
                //         mouseDrag: false,
                //         touchDrag: false
                //     }
                // }
            })

            $(".ThemeOwlCarousel").owlCarousel({
                margin: 0,
                nav: false,
                loop: true,
                autoplay: true,
                mouseDrag: false,
                touchDrag: false,
                autoWidth: true,
                dots: false,
                autoPlaySpeed: 4000,
                autoplayTimeout: 1500,
                autoplayHoverPause: false,
                responsive: {
                    900: {
                        loop: false,
                        autoplay: false,
                        mouseDrag: false,
                        touchDrag: false
                    }
                }
            })
        })
    </script>
</body>

</html>