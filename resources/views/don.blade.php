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
    <section id="hero" class=" h-screen bg-bg_dark">
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
    <section id="Aboutme" class="w-4/5 mx-auto h-screen">
        <div class="flex items-center justify-center ">
            <div class="w-80">
                <img src="{{ asset('images/main.jpg') }}" alt="">
            </div>
            <div class="pl-4">
                <h2 class="text-3xl font-light text-blue">About Me</h2>
                <p class="w-96 text-dalo">
                    I am currently a fourth year education computer science student at the university of
                    Malawi(Chancellor College). I love building things for the net. I am a team worker and i have good
                    communication skills and am good when it comes to presentations. I believe if technology is utilized
                    efficiently we would solve much more problems in this world.
                </p>
            </div>
        </div>
    </section>


    <!---Ionic icons Link---->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
