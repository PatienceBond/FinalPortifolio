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
    <section id="hero" class=" h-screen flex items-center justify-center bg-bg_dark px-4">
        <div class="md:w-4/5 mx-auto flex items-center">

            <div class=" mx-auto flex flex-col justify-center items-center ">

                <img src="{{ asset('images/main.jpg') }}" class="w-72 md:w-80 rounded-full border-8 border-dalo"
                    alt="">


                <h2 class="md:text-4xl text-3xl font-bold md:font-light text-blue py-4">PATIENCE NUMBERCO</h2>
                <p class="text-center w-80 md:w-96 text-dalo">I am a graphic designer and a full stack web developer
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
    <section id="Aboutme" class="md:w-4/5 mx-auto md:h-screen flex items-center justify-center py-8 px-4">
        <div class=" flex flex-wrap-reverse md:justify-center ">
            <div class="md:w-80 w-70 overflow-hidden rounded-md">
                <img src="{{ asset('images/second.jpg') }}" class="" alt="">
            </div>
            <div class="md:pl-4 md:ml-4">
                <h2 class="text-3xl font-bold text-blue">About Me</h2>
                <p class="md:w-96 text-dalo pt-2">
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
    <section id="services" class="md:h-screen flex items-center justify-center bg-bg_dark py-8 px-4">
        <div class="md:w-4/5 flex flex-col items-center justify-center">
            <div>
                <h2 class="text-blue text-center text-2xl md:text-5xl font-bold pb-8">Services I Provide For My Clients
                </h2>
            </div>
            <div class="flex flex-wrap md:space-x-8 space-y-8 pt-8 justify-center items-center ">
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

    <!-------Sample Work------>
    <section id="samplework" class="md:h-screen flex items-center justify-center py-8 px-4">
        <div class="flex flex-col justify-center items-center">
            <h4 class="text-blue text-2xl md:text-5xl font-bold pb-8">Previous Work</h4>
            <div>
                <div class="flex md:space-x-8 md:space-y-0 space-y-8 flex-wrap items-center justify-center">
                    <div class="w-80 md:w-96 md:h-96 h-80 box rounded-lg overflow-hidden relative">
                        <div class="absolute bottom-1.5  p-4 z-10 opacity-0">

                            <p>Helo helo helo helo helo Helo helo helo helo helo Helo helo helo helo helo Helo helo helo
                                helo helo Helo helo helo helo helo</p>
                        </div>
                        <img src="{{ asset('images/News and Events.jpg') }}" alt="">
                    </div>
                    <div class="w-80 md:w-96 md:h-96 h-80 box rounded-lg overflow-hidden relative">
                        <div class="absolute bottom-1.5  p-4 z-10 opacity-0">

                            <p>Helo helo helo helo helo Helo helo helo helo helo Helo helo helo helo helo Helo helo helo
                                helo helo Helo helo helo helo helo</p>
                        </div>
                        <img src="{{ asset('images/News and Events.jpg') }}" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!---Contact Me----->
    <section id="contactme" class=" h-screen bg-bg_dark px-4 py-8 flex items-center ">
        <div class=" w-4/5 mx-auto flex flex-col items-center">

            <h5 class="text-blue font-medium">CONTACT ME</h5>
            <h2 class="text-2xl md:text-5xl font-bold text-color_white">Get In Touch</h2>
            <div class="w-full flex flex-wrap py-8">
                <form class="md:w-4/6 grid grid-cols-2 gap-4 ">
                    <input type="text" placeholder="name"
                        class="w-full border rounded-md bg-bg_dark px-4 py-2 border-dalo text-dalo outline-0">
                    <input type="text" placeholder="email"
                        class="w-full border rounded-md bg-bg_dark px-4 py-2 border-dalo text-dalo outline-0">
                    <input type="text" placeholder="subject/title"
                        class=" md:col-span-2 w-full border rounded-md bg-bg_dark px-4 py-2 border-dalo text-dalo outline-0">
                    <textarea type="text" placeholder="message"
                        class="w-full md:col-span-2 h-56 border rounded-md bg-bg_dark px-4 py-2 border-dalo text-dalo outline-0"></textarea>

                </form>
                <div class="pl-8 space-y-4">
                    <div class="flex items-center space-x-2 ">
                        <div class="h-12 w-12 rounded-full bg-blue flex items-center justify-center">
                            <ion-icon name="call-outline" class="font-bold text-3xl text-bg_dark"></ion-icon>
                        </div>
                        <p class="text-dalo">088 17 44 989 <br> 098 533 58 65</p>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="h-12 w-12 rounded-full bg-blue flex items-center justify-center">
                            <ion-icon name="mail-outline" class="font-bold text-3xl text-bg_dark"></ion-icon>
                        </div>
                        <p class="text-dalo">clemolpatie@gmail.com</p>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="h-12 w-12 rounded-full bg-blue flex items-center justify-center">
                            <ion-icon name="location-outline" class="font-bold text-3xl text-bg_dark"></ion-icon>
                        </div>
                        <p class="text-dalo">Ekwendeni, Mzuzu, Malawi</p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-----footer------>
    <footer class="h-96 flex flex-col items-center justify-center relative"
        style="background-image: url('{{ asset('images/footer.png') }}')">
        <img src="{{asset('images/Logo/Don2.svg')}}" class="w-20 pb-8" alt="">
        <div class="w-2/5 flex flex-col items-center justify-center space-y-8">
            <p class="text-dalo text-center">I am always available for work, i am currently working with no organization and am in my final year at
                the University of Malawi. Send me an email and let’s talk about building a beautiful web experience.</p>
                <div class="flex space-x-4">
                    <div class="w-8 h-8 bg-blue rounded-sm flex items-center justify-center">
                        <ion-icon name="logo-facebook" class="text-bg_dark text-2xl"></ion-icon>
                    </div>
                    <div class="w-8 h-8 bg-blue rounded-sm flex items-center justify-center">
                        <ion-icon name="logo-whatsapp" class="text-bg_dark text-2xl"></ion-icon>
                    </div>
                    <div class="w-8 h-8 bg-blue rounded-sm flex items-center justify-center">
                        <ion-icon name="logo-linkedin" class="text-bg_dark text-2xl"></ion-icon>
                    </div>
                    <div class="w-8 h-8 bg-blue rounded-sm flex items-center justify-center">
                        <ion-icon name="logo-github" class="text-bg_dark text-2xl"></ion-icon>
                    </div>
                </div>
        </div>

        <div class="flex justfy-center absolute bottom-4">
            <p class="text-dalo">All Rights Reserved</p>
        </div>

    </footer>


    <!---Ionic icons Link---->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
