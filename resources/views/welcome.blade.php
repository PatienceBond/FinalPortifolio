<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Don</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


</head>

<body class="bg-body_bg max-w-screen-2xl">
    <div class="h-screen w-full bg-body_bg fixed z-40 hidden">
        <img src="{{ asset('images/Logo/loader.gif') }}" class="w-24 absolute top-1/2 right-1/2" alt="">
    </div>

    <header class="h-screen min-h-screen">
        <nav class="fixed flex justify-between items-center w-full  bg-body_bg z-50 px-4 md:px-20 shaa">
            <div class=" w-16"><img src="{{ asset('images/Logo/don2.svg') }}" alt="">
            </div>
            <!---Nav Links------>
            <div class="hidden md:flex space-x-8 text-gray2 items-center">
                <a href="#about" class="hover:text-main_text delay-200">About</a>
                <a href="#work" class="hover:text-main_text delay-200">Work</a>
                <a href="#services" class="hover:text-main_text delay-200">Services</a>
                <a href="#contact " class="hover:text-main_text delay-200 pr-8">Contact</a>
                <a href="#"
                    class="text-main_text px-6 py-2 border rounded-md hover:bg-light_gray delay-200">Download CV</a>
            </div>
            <!---End Nav Links------>
            <!---Email------>
            <p class="text-xs hidden absolute top-16 md:top-28 lg:top-8 left-16 md:left-48 text-gray2 clemol">
                clemolpatie@gmail.com</p>
            <!---hambaga--->
            <div class=" sm:hidden ">
                <button href="">
                    <ion-icon class="text-4xl text-main_text" name="menu"></ion-icon>
                </button>
                <a href="" class="text-4xl text-main_text hidden">
                    <ion-icon name="chevron-forward"></ion-icon>
                </a>

            </div>

        </nav>
        <section class="relative hero w-11/12 mx-auto">
            <!--Socials--->
            <div class="hidden md:fixed md:flex flex-col space-y-4 text-gray2 top-1/3">
                <a href="#" class="hover:text-main_text transition duration-300 hover:scale-[1.5]">
                    <ion-icon name="logo-github" class="text-lg"></ion-icon>
                </a>
                <a href="#" class="hover:text-main_text transition duration-300 hover:scale-[1.5]">
                    <ion-icon name="logo-facebook" class="text-lg"></ion-icon>
                </a>
                <a href="#" class="hover:text-main_text transition duration-300 hover:scale-[1.5]">
                    <ion-icon name="logo-whatsapp" class="text-lg"></ion-icon>
                </a>
            </div>
            <!--End Socials--->
            <!----Scroll down----->
            <p class=" fixed bottom-8 md:bottom-24 vertical text-gray2 right-6 md:right-12 hie items-center flex">scroll
                down <ion-icon name="arrow-down-outline" class="pt-2 animate-bounce"></ion-icon>
            </p>
            <!----End Scroll down----->
            <!----main content container----->
            <div class="pl-2 md:pl-0 md:w-10/12 mx-auto flex justify-center flex-col items-start min-h-screen h-screen">
                <!--Welcome--->
                <p class="text-main_text  text-sm hie px-1 md:px-2 mb-3">Hie!, I'm</p>
                <h2 class="text-4xl lg:text-6xl md:text-5xl font-bold text-color_white">Patience <br> Bond</h2>
                <p class="text-gray2 max-w-lg mt-5">
                    I’m a computer scientist specializing in designing and building exceptional and beautiful web
                    experiences. Currently, I’m focused on building websites/apps and occassionary android apps. </p>
                <a href="#"
                    class="text-main_text px-6 py-3 mt-12 border rounded-md hover:bg-light_gray delay-200">Send me an
                    email</a>
            </div>


        </section>
    </header>


    <!----About Section----->
    <section id="about"
        class="md:w-9/12 mx-auto  flex flex-wrap  gap-x-4 justify-center md:justify-start items-center md:h-screen px-8 md:px-4">
        <div class=" md:w-7/12  ">
            <h2 class="text-color_white text-2xl font-bold">About me</h2>
            <p class="text-gray2 pt-8">
                I am a Malawian young man named Patience Isaiah Clement, a fourth year Education Computer Science
                student at the University of Malawi Chancellor College. I am a hard working man, a team player and am
                always flexible to learning new skills.
            </p>
            <p class="text-gray2 pt-4">
                I have good communication skills that makes me an asset when it comes to marketing and motivating. I
                previously serve in UNIMA students union from the year 2019 to 2021. Currently i am the UNIMA Computer
                Science Society Project Coordinator. It is a one year position which means by 2023 someone is going to
                take over
            </p>
            <p class="text-gray2 pt-4">
                I 100% involve my stakeholders and users in the development process of their system. This makes me at
                the end deliver a product that is more like what my stakeholders expect
            </p>


        </div>
        <div class="md:w-4/12 border border-main_text p-4">
            <img src="{{ asset('images/ine5flipped 1.png') }}" class="" alt="">
        </div>


    </section>
    <!----End About Section----->

    <!----School Section----->
    <section id="school" class="md:w-9/12 mx-auto pt-24 flex flex-wrap  justify-center min-h-screen px-8">

        <div>
            <h2 class="text-color_white font-bold text-4xl text-center">My School History</h2>
            <p class="text-gray2 pt-8 text-center">
                Hello! My name is Brittany and I enjoy creating things that live on the internet. My interest in web
                development started back in 2012 when I decided to try editing custom Tumblr themes — turns out hacking
                together a custom reblog button taught me a lot about HTML & CSS!
            </p>
            <p class="text-gray2 pt-2 text-center">
                Fast-forward to today, and I’ve had the privilege of working at an advertising agency, a start-up, a
                huge corporation, and a student-led design studio. My main focus these days is building accessible,
                inclusive products and digital experiences at Upstatement for a variety of clients.
            </p>
            <p class="text-gray2 pt-2 text-center">
                I also recently launched a course that covers everything you need to build a web app with the Spotify
                API using Node & React.
            </p>
            <p class="text-gray2 pt-2 text-center">
                Here are a few technologies I’ve been working with recently:
            </p>
        </div>



    </section>
    <!----End School Section----->


    <!----Skill Section--->
    <section id="services" class="  w-9/12 gap-y-4 gap-x-8 mx-auto flex flex-wrap  justify-center items-center mb-32">
        <div class="w-full flex justify-center ">
            <h4 class="text-color_white font-bold text-4xl pt-24 pb-4">Knowledge/Skills</h4>
        </div>
        <div class="skill-box rounded-md  flex justify-center flex-col items-center p-4">
            <h4 class="text-main_text text-xl">WEB DEVELOPMENT</h4>
            <p class="text-gray2 pt-2">
                HTML5 and CSS <br> Laravel Framework <br> React Js <br>php and javascript <br>Bootstrap and tailwind
                <br>Mysql DATABASE
            </p>
        </div>
        <div class="skill-box rounded-md flex justify-center flex-col items-center  p-4">
            <h4 class="text-main_text text-xl">UI/UX DESIGN</h4>
            <p class="text-gray2 pt-2">
                Figma <br> LOGO Design <br>Adobe Photoshop <br>Adobe Illustrator <br> Adobe InDesign
            </p>
        </div>
        <div class="skill-box rounded-md  flex justify-center flex-col items-center  p-4">
            <h4 class="text-main_text text-xl">ANDROID DEVELOPMENT</h4>
            <div class=" pt-4">
                <img src="{{ asset('images/Android.png') }}" class="w-40" alt="">
            </div>
            <p class="text-gray2 pt-2">JAVA</p>
        </div>


    </section>
    <!----End Skill Section----->


    <!----Contact Section----->
    <section id="contact" class="  items-center flex flex-col justify-center max-w-screen-lg mx-auto">
        <h4 class="text-color_white font-bold text-4xl pt-24">Want To Hire Me</h4>
        <div class="w-4/5 md:box-600 text-center pt-4 text-gray2">
            <p>I am always available for work, i am currently working with no organisation and am in my final year at
                the University of Malawi. Send me an email below and let’s talk about building a beautiful
                web experience.
            </p>
        </div>
        <div class="w-full box-600 px-8 pt-24">
            <form action="" class="rounded-md grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
                <input type="text" placeholder="name" name="name"
                    class="rounded-md px-4 bg-body_bg py-3 border border-main_text">
                <input type="text" placeholder="email" name="email"
                    class="rounded-md px-4 bg-body_bg py-3 border border-main_text">
                <input type="text" placeholder="title"
                    class="rounded-md md:col-span-2 px-4 bg-body_bg py-3 border border-main_text">
                <textarea name="" placeholder="Message"
                    class="rounded-md md:col-span-2 px-4 h-36 bg-body_bg py-3 border border-main_text"></textarea>
                <div>
                    <button
                        class="px-6 rounded-md delay-200  py-3  bg-main_text font-medium text-body_bg hover:bg-light_gray hover:text-color_white">Send
                        Email</button>
                </div>
            </form>


            <p class="text-gray2 clemol text-xs text-center py-24">Built and Designed <br>
                by <br>
                Patience Bond <br>0881744989 </p>
        </div>

    </section>
    <!----End Contact Section----->


    <!---Ionic icons Link---->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
