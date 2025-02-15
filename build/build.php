<?php

const RELATIVE_IMAGE_DIRECTORY = '/images/photos/';
const RELATIVE_IMAGE_DIRECTORY_RESUME = '/images/resume/';
const IMAGE_DIRECTORY = __DIR__ . '/..' . RELATIVE_IMAGE_DIRECTORY;
const OUTPUT_DIRECTORY = __DIR__ . '/../';

$resume_image = RELATIVE_IMAGE_DIRECTORY_RESUME . 'me.jpeg';

$images = array_values(array_diff(
    scandir(IMAGE_DIRECTORY),
    ['.','..']
));
$html = <<<HTML
<!DOCTYPE html>
<html lang="en" id="html" class="bg-gray-600">
<head>
    <meta charset="UTF-8">
    <title>Louietje</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<script src="/js/index.js"></script>
    <!-- In part inspired by https://css-tricks.com/how-to-make-a-css-only-carousel/ -->
</head>
<body class="babyBackground text-gray-200">

<div class="hidden" id="resume">
    <button id="togglePageButtonWork" class="togglePageButton">
        <i class="fa-solid fa-baby fa-3x"></i>
    </button>
    <div id="resumeWrapper" class="bg-grey-700 max-w-4xl flex items-center h-auto flex-wrap mx-auto my-32">
    <!--Main Col-->
    <div id="profile" class="w-full shadow-2xl bg-gray-900 opacity-75 mx-6 ">
        <div class="relative top-0 right-0 h-12 w-18 p-4">
            <button id="themeChanger" class="focus:outline-none">☀️</button>
        </div>
        <div class="p-4 md:p-12 text-center ">
            <!-- Pin to top right corner -->
            <!-- Image for mobile view-->
            <div class="block rounded-full shadow-xl mx-auto -mt-16 h-48 w-48 bg-cover bg-center"
                 style="background-image: url('$resume_image')"></div>

            <h1 class="text-3xl font-bold pt-8 ">P. De Bleye</h1>
            <div class="mx-auto  w-4/5 pt-3 border-b-2 border-green-500 opacity-25"></div>
            <p class="pt-4 text-base font-bold flex items-center justify-center ">
                <svg class="h-4 fill-current text-green-700 pr-4" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 20 20">
                    <path d="M9 12H1v6a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-6h-8v2H9v-2zm0-1H0V5c0-1.1.9-2 2-2h4V2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v1h4a2 2 0 0 1 2 2v6h-9V9H9v2zm3-8V2H8v1h4z"/>
                </svg>
                Dev ops & back-end developer
            </p>
            <p class="pt-2 text-gray-600 text-xs flex items-center justify-center ">
                <svg class="h-4 fill-current text-green-700 pr-4" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 20 20">
                    <path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm7.75-8a8.01 8.01 0 0 0 0-4h-3.82a28.81 28.81 0 0 1 0 4h3.82zm-.82 2h-3.22a14.44 14.44 0 0 1-.95 3.51A8.03 8.03 0 0 0 16.93 14zm-8.85-2h3.84a24.61 24.61 0 0 0 0-4H8.08a24.61 24.61 0 0 0 0 4zm.25 2c.41 2.4 1.13 4 1.67 4s1.26-1.6 1.67-4H8.33zm-6.08-2h3.82a28.81 28.81 0 0 1 0-4H2.25a8.01 8.01 0 0 0 0 4zm.82 2a8.03 8.03 0 0 0 4.17 3.51c-.42-.96-.74-2.16-.95-3.51H3.07zm13.86-8a8.03 8.03 0 0 0-4.17-3.51c.42.96.74 2.16.95 3.51h3.22zm-8.6 0h3.34c-.41-2.4-1.13-4-1.67-4S8.74 3.6 8.33 6zM3.07 6h3.22c.2-1.35.53-2.55.95-3.51A8.03 8.03 0 0 0 3.07 6z"/>
                </svg>
                Belgium & China
            </p>
            <div class="grid grid-cols-3">
                <div class="pt-8 text-sm">
                    <p class="pt-3 text-base font-bold flex items-center justify-center">
                        <i class="fa-solid fa-toolbox"></i>&nbsp;Toolbox
                    </p>
                    <p class="w-full">
                        <a title="AWS" href="https://aws.amazon.com/" target="_blank"><i
                                class="fa-brands fa-aws"></i></a>
                    </p>
                    <p class="w-full">
                        <a title="Ubuntu" href="https://ubuntu.com/" target="_blank"><i
                                class="fa-brands fa-ubuntu"></i></a>
                    </p>
                    <p class="w-full">
                        <a title="Docker" href="https://www.docker.com/" target="_blank"><i
                                class="fa-brands fa-docker"></i></a>
                    </p>
                    <p class="w-full">
                        <a title="MySql" href="https://www.mysql.com/" target="_blank">MySql</a>
                    </p>
                    <p class="w-full">
                        <a title="Redis" href="https://redis.io/" target="_blank">Redis</a>
                    </p>
                </div>
                <div class="pt-8 text-sm">
                    <p class="pt-3 text-base font-bold flex items-center justify-center">
                        <i class="fa-solid fa-language"></i>&nbsp;Language
                    </p>
                    <p class="w-full">
                        <a title="php" href="https://www.php.net/" target="_blank"><i class="fa-brands fa-php"></i></a>
                    </p>
                    <p class="w-full">
                        <i title="Html5" class="fa-brands fa-html5"></i>
                    </p>
                    <p class="w-full">
                        <i title="Javascript" class="fa-brands fa-js"></i>
                    </p>
                    <p class="w-full">
                        <i title="css3" class="fa-brands fa-css3-alt"></i>
                    </p>
                </div>
                <div class="pt-8 text-sm">
                    <p class="pt-3 text-base font-bold flex items-center justify-center">
                        <i class="fa-solid fa-trowel-bricks"></i>&nbsp;Building blocks
                    </p>
                    <p class="w-full">
                        <i title="Laravel" class="fa-brands fa-laravel"></i>
                    </p>
                    <p class="w-full">
                        <i title="VueJs" class="fa-brands fa-vuejs"></i>
                    </p>
                    <p class="w-full">
                        <i title="Symfony" class="fa-brands fa-symfony"></i>
                    </p>
                    <p class="w-full">
                        <i title="Angular" class="fa-brands fa-angular"></i>
                    </p>
                    <p class="w-full">
                        <i title="ReactJs" class="fa-brands fa-react"></i>
                    </p>
                </div>
            </div>
            <div class="pt-12 pb-8">
                <a href="https://www.linkedin.com/in/peterdebleye/"
                   class="bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded-full">
                    Get In Touch
                </a>
            </div>

            <div class="mt-6 pb-16 w-4/5 mx-auto flex flex-wrap items-center justify-end">
                <a target="_blank" class="link p-3" href="https://github.com/smoggert"
                   data-tippy-content="@smoggert"><i class="fa-brands fa-github"></i></a>
                <a target="_blank" class="link p-3" href="https://www.linkedin.com/in/peterdebleye/"
                   data-tippy-content="@peterdebleye"><i class="fa-brands fa-linkedin"></i></a>
            </div>
        </div>
    </div>
</div>

</div>
<div class="wrapper" id="photos">
    <button id="togglePageButtonBaby" class="togglePageButton">
        <i class="fa-solid fa-toolbox fa-3x"></i>
    </button>
    <nav class="lil-nav">
HTML;

foreach ($images as $i => $image) {
    $src = RELATIVE_IMAGE_DIRECTORY . $image;
    $html .= "\n";
    $html .= <<<HTML
        <a href="#image-{$i}"><img class="lil-nav__img" src="$src" alt="Louie {$i}" /></a>
HTML;
$html .= "\n";
}
$html .= <<<HTML
    </nav>
    <div class="gallery">
HTML;
foreach ($images as $i => $image) {
    $src = RELATIVE_IMAGE_DIRECTORY . $image;
    $html .= "\n";
    $html .= <<<HTML
        <img class="gallery__img" id="image-{$i}" src="$src" alt="Louie {$i}" />
HTML;
$html .= "\n";
}
$html .= <<<HTML
    </div>
</div>
</body>
</html>
HTML;

$target = OUTPUT_DIRECTORY . 'index.html';
touch($target);
file_put_contents($target, $html);
shell_exec("sass style.scss ./../style.css");