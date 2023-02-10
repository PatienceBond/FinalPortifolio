<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Don The Developer</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="max-w-screen-2xl bg-body_bg">

    <header>
        <nav class=" py-4 bg-bg_dark">
            <div class=" w-4/5 mx-auto">
                <img src="{{ asset('images/Logo/don2.svg') }}" class="w-16" alt="logo">
            </div>
        </nav>
    </header>
    <!----Hero Section------>
    <section id="hero" class=" h-screen flex items-center justify-center bg-bg_dark">
        <div class="w-4/5 mx-auto flex items-center">

            <div class=" mx-auto flex flex-col justify-center items-center ">

                <img src="{{ asset('images/main.jpg') }}" class="w-80 rounded-full border-8 border-dalo" alt="">


                <h2 class="text-4xl  font-light text-blue py-4">PATIENCE NUMBERCO</h2>
                <p class="text-center w-96 text-dalo">I am a graphic designer and a full stack web developer
                    specializing in
                    building
                    and designing
                    exceptional digital experiences. I design and build beautiful web experiences for my clients all the
                    times.</p>
                <a href="#" class=" font-medium py-2 px-4 mt-8 text-blue border rounded-md">Dowload CV</a>

            </div>
        </div>
    </section>

    <!---About Me------>
    <section id="Aboutme" class="w-4/5 mx-auto h-screen flex items-center justify-center">
        <div class=" flex  justify-center ">
            <div class="w-80 overflow-hidden rounded-md">
                <img src="{{ asset('images/second.jpg') }}" class="" alt="">
            </div>
            <div class="pl-4 ml-4">
                <h2 class="text-3xl font-bold text-blue">About Me</h2>
                <p class="w-96 text-dalo pt-2">
                    I am currently a fourth year education computer science student at the university of
                    Malawi(Chancellor College). I love building things for the net. I am a team worker and i have good
                    communication skills and am good when it comes to presentations.
                </p>
                <div class="text-dalo py-2">
                    <ul>
                        <li class="flex items-center py-2">
                            <ion-icon name="person-outline" class="text-blue"></ion-icon>
                            <span class="px-2">Name</span>
                            <span class="px-2">:</span>
                            <span>Patience Numberco</span>
                        </li>
                        <li class="flex items-center">
                            <ion-icon name="call-outline" class="text-blue"></ion-icon>
                            <span class="px-2">Phone</span>
                            <span class="px-2">:</span>
                            <span>+265 88 17 44 989</span>
                        </li>
                        <li class="flex items-center py-2">
                            <ion-icon name="mail-outline" class="text-blue"></ion-icon>
                            <span class="px-2">Email</span>
                            <span class="px-2">:</span>
                            <span>clemolpatie@gmail.com</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class=" text-blue font-medium">My Interests</h4>
                    <ul class="pt-2 text-dalo">
                        <li class="flex items-center">
                            <ion-icon name="musical-notes-outline" class="text-blue pr-2"></ion-icon>
                            <span>Music</span>
                        </li>
                        <li class="flex items-center">
                            <ion-icon name="barbell-outline" class="text-blue pr-2"></ion-icon>
                            <span>Music</span>
                        </li>
                        <li class="flex items-center">
                            <ion-icon name="videocam-outline" class="text-blue pr-2"></ion-icon>
                            <span>Music</span>
                        </li>
                        <li class="flex items-center">
                            <ion-icon name="globe-outline" class="text-blue pr-2"></ion-icon>
                            <span>Music</span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <!----Services---------->
    <section id="services" class="h-screen flex items-center justify-center bg-bg_dark">
        <div class="w-4/5 flex flex-col items-center justify-center">
            <div>
                <h2 class="text-blue text-5xl font-bold pb-8">Services I Provide For My Clients</h2>
            </div>
            <div class="flex space-x-8 pt-8 ">
                <!-----card---->
                <div class="bg-bg_dark box w-72  h-96 rounded-3xl">
                    <div class="flex justify-center pt-10">

                        <img src="{{ asset('images/web.png') }}" alt="">
                    </div>
                    <h4 class="text-center font-medium text-blue text-xl py-4">WEB DEVELOPMENT</h4>
                    <p class="text-center font-medium  text-dalo px-8">
                        I design and build beautiful people inspired experiences that create positive change in peoples
                        lives.
                    </p>
                </div>
                <!-----card---->
                <div class="bg-bg_dark box w-72  h-96 rounded-3xl">
                    <div class="flex justify-center pt-10">

                        <img src="{{ asset('images/web.png') }}" alt="">
                    </div>
                    <h4 class="text-center font-medium text-blue text-xl py-4">GRAPHIC DESIGN</h4>
                    <p class="text-center font-medium  text-dalo px-8">
                        I design people inspired experiences that create positive change in
                        peoples lives.
                    </p>
                </div>
                <!-----card---->
                <div class="bg-bg_dark box w-72  h-96 rounded-3xl">
                    <div class="flex justify-center pt-10">

                        <img src="{{ asset('images/web.png') }}" alt="">
                    </div>
                    <h4 class="text-center font-medium text-blue text-xl py-4">LOGO DESIGN</h4>
                    <p class="text-center font-medium  text-dalo px-8">
                        I create LOGO designs that suits your brands purpose designs that speaks
                    </p>
                </div>
            </div>
        </div>

    </section>


    <!---Ionic icons Link---->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
