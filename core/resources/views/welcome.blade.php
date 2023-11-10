<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ali Ace Portfolio</title>
    <!--linked favicon file-->
    <link rel="icon" type="image/x-icon" href="{{ url('assets/images/favicon.ico') }}">
    <!--linked css file-->
    <link href="{{ url("assets/css/style.css") }}" type="text/css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!--linked css file-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">
    <!--linked josefin sans font-->
    <link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>

    <!--linked cdnjs font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
<div class="container-fluid">
    <div class="hero">
        <nav>
            <h2 class="logo">Ali<span>Ace</span></h2>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#about-me">About me</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact-me">Contact me</a></li>
            </ul>
            <a href="#" class="btn">github</a>
        </nav>

        <div class="content">
            <h4>welcome to my portfolio <span id="emoji">:)</span> i'm</h4>
            <h1>Ali <span>Mehdizadeh</span></h1>
            <h3>a backend web developer with passion</h3>
            <h3> for learning more each day.</h3>

            <div class="newsletter py-3">
                <form>
                    <input type="email" name="email" id="email" placeholder="enter your email here:">
                    <input id="submit" type="submit" name="submit" value="enter">
                </form>
            </div>
        </div>

    </div>

    <section id="about-me" class="about">
        <div class="main">
            <img src=" {{ url("assets/images/astronaut_radio.jpg") }} " alt="music-lover-astronaut">
            <div class="about-text">
                <h2>About Me</h2>
                <h5><span>Web Developer</span> and Designer</h5>
                <p>Hey there,i'm Ali an iranian Backend web developer.
                    i study software engineering in Chamran university in Guilan province.
                    always eager to learn more. i can also write php/c#/Html&Css code </p>
            </div>
        </div>
    </section>

    <div class="skill-progress-bar" id="skills">
        <div class="row">
            <div class="col-md-12">
                <div class="progress-title">
                    <h3>html</h3>
                    <div class="progress h-25">
                        <div class="progress-bar" style="width: 80%;background-color:#ef2d56">
                            <div class="progress-value">80%</div>
                        </div>
                    </div>
                </div>

                <div class="progress-title">
                    <h3>css</h3>
                    <div class="progress h-25">
                        <div class="progress-bar" style="width: 75%; background-color:#ff00ff">
                            <div class="progress-value">75%</div>
                        </div>
                    </div>
                </div>

                <div class="progress-title">
                    <h3>JS</h3>
                    <div class="progress h-25">
                        <div class="progress-bar" style="width: 65%; background-color:#bfff00">
                            <div class="progress-value">65%</div>
                        </div>
                    </div>
                </div>

                <div class="progress-title">
                    <h3>Python</h3>
                    <div class="progress h-25">
                        <div class="progress-bar" style="width: 60%; background-color:#8400ff">
                            <div class="progress-value">60%</div>
                        </div>
                    </div>
                </div>

                <div class="progress-title">
                    <h3>PHP</h3>
                    <div class="progress h-25">
                        <div class="progress-bar" style="width: 75%; background-color:#0080ff">
                            <div class="progress-value">75%</div>
                        </div>
                    </div>
                </div>

                <div class="progress-title">
                    <h3>SQL</h3>
                    <div class="progress h-25">
                        <div class="progress-bar" style="width: 70%; background-color:#ff9900">
                            <div class="progress-value">70%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="services" class="service">
        <div class="title">
            <h2>services</h2>
        </div>
        <div class="box">
            <div class="card">
                <i class="fa fa-globe"></i>
                <h5>Web Development</h5>
                <div class="pra">
                    <p id="webdev">Web development, also known as website development, refers to the tasks associated
                        with creating,
                        building, and maintaining websites and web applications that run online on a browser.
                        It may, however, also include web design, web programming,
                        and database management.</p>
                    <p style="text-align:center;">
                        <a class="button" href="#">read more</a>
                    </p>
                </div>
            </div>

            <div class="card">
                <i class="fa fa-desktop"></i>
                <h5>Web Design</h5>
                <div class="pra">
                    <p id="wd">The web design process involves creating a site's architecture,
                        designing its layout and user interface,
                        and coding it to work correctly.</p>
                    <p style="text-align:center;">
                        <a class="button" href="#">read more</a>
                    </p>
                </div>


            </div>

            <div class="card">
                <i class="fa fa-rocket"></i>
                <h5 id="support">support and maintenance</h5>
                <div class="pra">
                    <p id="sam">Website maintenance is the process of keeping a website up-to-date and running smoothly
                        as well as performing optimally.
                        Website maintenance includes tasks like ensuring all the links on your site are working,
                        regularly updating content,
                        and fixing any broken links.</p>
                    <p style="text-align:center;">
                        <a class="button" href="#">read more</a>
                    </p>
                </div>
            </div>

        </div>

    </div>

    <div id="contact-me" class="contact-me">
        <p>so what do you think? if you liked anything so far i would be happy to get connected with you on GitHub or LinkedIn. </p>
        <a href="https://github.com/Aliac8888" target="_blank" class="button-2">my github account <i class="fa fa-github px-2"></i></a>
        <a href="https://linkedin.com/in/ali-mehdizadeh-ac" target="_blank" class="button-2">my LinkedIn account <i class="fa fa-linkedin px-2 text-info"></i></a>

    </div>

    <footer class="justify-center d-flex">
        <p class="end">&copy; copyright by Ali Mehdizadeh</p>
    </footer>
</div>
</body>
</html>
