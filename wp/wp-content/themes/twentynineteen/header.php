<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Raptor Web Solutions</title>

    <!-- <meta http-equiv="refresh" content="9" > -->

    <?php wp_head(); ?>
</head>

<body>

    <header class="app-header">
        <div class="top px-3 pv-1">
            <nav id="main-nav" class="navbar navbar-expand-lg navbar-dark">
                <h1 class="logo">
                    <a class="navbar-brand" href="#">Raptor Web Solutions</a>
                </h1>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" data-scroll="#home" href="#home">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-scroll="#services" href="#services">Our Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-scroll="#recent-work" href="#recent-work">Recent Work</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-scroll="#blog" href="#blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-scroll="#contact" href="#contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <i class="material-icons cubed">search</i>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="bottom">
            <div class="inner px-3">
                <h2 class="title-1"><span>Charlotte, NC</span>We Build Awesome Web Apps</h2>
                <p class="mt-3">
                    Need something developed? The process is easier than you think. All we need is a sit down meeting to discuss your goals and we can begin.
                </p>
                <a href="" data-scroll="#contact" class="btn btn-outline-light mt-3 btn-midsize">Get Started</a>
            </div>
        </div>
    </header>