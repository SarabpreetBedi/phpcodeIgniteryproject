<html>
<br/>
    
    <br>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <h2><?= $title ?></h2>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style/reset.css'); ?>"/>
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style/style.css'); ?>"/>
  </head>
<body>      
<p><strong>Welcome to the Sarabpreet Blog </strong></p>
<br>
    <div id="hero-slider">
        <div id="logo" class="mask">
            <span class="logo-text masked">Sarabpreet</span>
        </div>
        <div id="slideshow">
            <div id="slides-main" class="slides">
                <div class="slide" data-index="0">
                    <div class="abs-mask">
                        <div class="slide-image" style="background-image: url(./assets/img/slide-1.jpg)"></div>
                    </div>
                </div>
                <div class="slide" data-index="1">
                    <div class="abs-mask">
                        <div class="slide-image" style="background-image: url(./assets/img/slide-5.jpg)"></div>
                    </div>
                </div>
                <div class="slide" data-index="2">
                    <div class="abs-mask">
                        <div class="slide-image" style="background-image: url(./assets/img/slide-7.jpg)"></div>
                    </div>
                </div>
                <div class="slide" data-index="3">
                    <div class="abs-mask">
                        <div class="slide-image" style="background-image: url(./assets/img/slide-6.jpg)"></div>
                    </div>
                </div>
                <div class="slide" data-index="4">
                    <div class="abs-mask">
                        <div class="slide-image" style="background-image: url(./assets/img/slide-8.jpg)"></div>
                    </div>
                </div>
            </div>
            <div id="slides-aux" class="slides mask">
                <h2 class="slide-title slide" data-index="0"></h2>
                <h2 class="slide-title slide" data-index="1"></h2>
                <h2 class="slide-title slide" data-index="2"></h2>
                <h2 class="slide-title slide" data-index="3"></h2>
                <h2 class="slide-title slide" data-index="4"></h2>
            </div>
        </div>
        <div id="info">
            <div class="slider-title-wrapper">
                <span class="line"></span>
                <h1 class="slider-title">
                    <span>Projects</span>
                </h1>
            </div>
        </div>
        <nav id="slider-nav">
            <span class="current">01</span>
            <span class="sep"></span>
            <span class="total">05</span>
        </nav>
    </div>
    <script src="./assets/js/main.js"></script>

</body>
</html>