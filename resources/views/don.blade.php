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


                <h2 class="md:text-4xl text-3xl font-bold md:font-light text-blue py-4">PATIENCE ISAIAH NYIRENDA</h2>
                <p class="text-center w-80 md:w-96 text-dalo">
                    A passionate IT professional and educator with a Bachelor of Education in Computer Science from Chancellor College,
                    University of Malawi. Experienced in full-stack development, IT instruction, and creating impactful digital solutions
                    for education and community engagement.
                </p>
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
                    I am a graduate of Chancellor College, University of Malawi, with a Bachelor of Education in Computer Science.
                    My expertise includes full-stack web development, IT instruction, and leadership in software projects.
                    I have developed systems such as a student society website with an election voting system, promoting digital democracy.
                </p>
                <div class="text-dalo py-2">
                    <ul>
                        <li class="flex items-center py-2">
                            <ion-icon name="person-outline" class="text-blue"></ion-icon>
                            <span class="px-2">Name</span>
                            <span class="px-2">:</span>
                            <span>Patience Isaiah Nyirenda</span>
                        </li>
                        <li class="flex items-center">
                            <ion-icon name="call-outline" class="text-blue"></ion-icon>
                            <span class="px-2">Phone</span>
                            <span class="px-2">:</span>
                            <span>+265 88 17 44 989 / +265 98 533 58 65</span>
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
                    <p class="text-center font-medium text-dalo px-8">
                        Developed and maintained full-stack systems, including NGO management platforms and school management systems.
                        Key projects include <a href="https://www.mferacdss.com" class="text-blue">Mfera CDSS</a>,
                        <a href="https://nayorg.org/" class="text-blue">Nayorg</a>, and <a href="https://facemalawi.org/" class="text-blue">FACE Malawi</a>.
                    </p>
                </div>
                <!-----card---->
                <div class="bg-bg_dark box w-72  h-96 rounded-3xl">
                    <div class="flex justify-center pt-10">

                        <img src="{{ asset('images/web.png') }}" alt="">
                    </div>
                    <h4 class="text-center font-medium text-blue text-xl py-4">GRAPHIC DESIGN</h4>
                    <p class="text-center font-medium text-dalo px-8">
                        Designed user-friendly interfaces and digital experiences for educational and civic engagement platforms,
                        ensuring accessibility and usability.
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

    <section id="previous-works" class="bg-gray-100 py-16 px-4">
        <div class="md:w-4/5 mx-auto">
            <h2 class="text-blue text-center text-2xl md:text-5xl font-bold pb-8">Previous Works</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Feexid -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="{{ asset('images/feexid.jpg') }}" alt="Feexid" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-blue">Feexid</h3>
                        <p class="text-dalo mt-2">
                            Developed and maintained a full-stack system for Feexid, showcasing technical proficiency in system development.
                        </p>
                        <a href="https://feexid.com/" target="_blank" class="text-blue underline mt-4 block">Visit Feexid</a>
                    </div>
                </div>
                <!-- Nayorg -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="{{ asset('images/nayorg.jpg') }}" alt="Nayorg" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-blue">Nayorg</h3>
                        <p class="text-dalo mt-2">
                            Built a comprehensive NGO management platform for Nayorg, enabling efficient operations and transparency.
                        </p>
                        <a href="https://nayorg.org/" target="_blank" class="text-blue underline mt-4 block">Visit Nayorg</a>
                    </div>
                </div>
                <!-- Mfera CDSS -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="{{ asset('images/mferacdss.jpg') }}" alt="Mfera CDSS" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-blue">Mfera CDSS</h3>
                        <p class="text-dalo mt-2">
                            Developed a school management system for Mfera CDSS, including features like grade calculation and finance management.
                        </p>
                        <a href="https://www.mferacdss.com/" target="_blank" class="text-blue underline mt-4 block">Visit Mfera CDSS</a>
                    </div>
                </div>
                <!-- FACE Malawi -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="{{ asset('images/facemalawi.jpg') }}" alt="FACE Malawi" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-blue">FACE Malawi</h3>
                        <p class="text-dalo mt-2">
                            Designed and implemented a management platform for FACE Malawi, enhancing their operational efficiency.
                        </p>
                        <a href="https://facemalawi.org/" target="_blank" class="text-blue underline mt-4 block">Visit FACE Malawi</a>
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
                    <div>
                        <button class="text-color_white px-8 py-2 bg-blue rounded-md">SEND</button>
                    </div>
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
            <p class="text-dalo text-center">
                I am a graduate of Chancellor College and currently available for work. I specialize in IT solutions,
                including full-stack development and digital transformation. Let’s collaborate to create impactful digital experiences.
            </p>
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
