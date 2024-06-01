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
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ request()->is('/personal') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/personal') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/personal#about') }}">About Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/personal#skills') }}">Skills</a>
                    </li>
                    <li class="nav-item {{ request()->is('projects') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/projects') }}">Projects</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <section class="projects" id="projects">
        <h2 class="heading">My <span>Projects</span></h2>
        <div class="project-container">
            @foreach ($projects as $project)
                <div class="project-card">
                    <h3>{{ $project->title }}</h3>
                    <p>{{ $project->description }}</p>
                    <a href="{{ $project->link }}" class="btn" target="_blank">View Project</a>
                </div>
            @endforeach
        </div>
    </section>
</body>
</html>