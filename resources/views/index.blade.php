<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Welcome To My Portfolio!</title>
    <!-- Iconic -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <!-- Header -->
    <header class="header">
        <a href=" " class="logo">Portfolio</a>
        <i class='bx bx-menu' id="menu-icon"></i>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About Me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#skills">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('projects') }}">Projects</a>
                </li>
            </ul>
        </div>
    </nav>
    </header>
    <!-- Home Section -->
    <section class="home" id="home">
        <div class="home-content">
            <h3>Hello, Mate!</h3>
            <h1>Fathiya Aulia Khoirunnisa</h1>
            <h3>And I'm <span>Frontend Developer</span></h3>
            <p>An undergraduate student majoring in Information Technology Education,
                Faculty of Computer Science, Brawijaya University</p>
            <div class="social-media">
                <a href="https://www.instagram.com/pika.pix_/" target="_blank"><i class='bx bxl-instagram'></i></a>
                <a href="https://twitter.com/tihongggiiee"><i class='bx bxl-twitter'></i></a>
                <a href="https://www.linkedin.com/in/fathiya-aulia-0609a71a9/"><i class='bx bxl-linkedin'></i></a>
                <a href="https://wa.me/083853337500"><i class='bx bxl-whatsapp'></i></a>
            </div>
            <a href="https://drive.google.com/file/d/1WAqb0QGxI-6Km5K73tKWh2SRy1RPHquJ/view?usp=sharing" class="btn">Download My CV</a>
        </div>

        <div class="home-img">
            <img src="{{ asset('Asset/Me.jpg') }}" alt="Profile Picture" width="300">
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <div class="about-img">
            <img src="{{ asset('Asset/Me1.jpg') }}" alt="About Me Picture">
        </div>

        <div class="about-content">
            <h2 class="heading">About <span>Me</span></h2>
            <p>Born in Jember, East Java, March 9, 2004.
                [ID/NIM: 225150600111027].
                Still learning and in the process of developing talent in the IT field. Have an interest in becoming a
                front-end developer who creates websites and applications
                using web languages such as HTML, CSS, and JavaScript.
                Sometimes, like to sing some songs and dance to the music when she gets bored or stressed. 
                Also, she likes to read some books and get lost in her imagination while reading.</p>
            <a href="https://www.instagram.com/pika.pix_/" class="btn">Know Me More</a>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="text-center">
        <div class="container">
            <h2>My Skills</h2>
            <div class="row">
                <div class="col-md-4">
                    <h3>HTML</h3>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>CSS</h3>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>JavaScript</h3>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>Laravel</h3>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>Writting</h3>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>Web Design</h3>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @yield('content')
    <!-- JavaScript -->
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>