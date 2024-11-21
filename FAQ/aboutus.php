<?php include 'header.php'?>
<!DOCTYPE html>
<head>
    <title>Default-AboutUs</title>
    <style>
        .image {
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            height: 1000px;
            width: 1600px;
            padding-left: 50px;
            padding-right: 50px;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(lukeblackwhite.jpg);
            filter: blur(5px);
            transition: filter 0.5s ease-in-out;
        }
        
        .image:hover {
            filter: blur(0px);
        }
        
        .text {
            text-align: center;
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        
        h1 {
            font-size: 100px;
            letter-spacing: 20px;
            font-family: 'Times New Roman', Times, serif;
            color:white;
            padding-bottom:60px;
        }
        
        p {
            font-size: 20px;
            line-height: 1.5;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            color:white;
            opacity:0.8;
        }
    </style>
</head>

<body>
    <div class="image">
        <div class="text">
            <h1>OUR STORY</h1>
            <p>
                In 2019, we started <b>DEFAULT</b> to disrupt the overpriced and outdated models of the fashion industry.
                Empowered by the people through crowdfunding, our original clothing line set us apart by bringing you quality,
                minimalist design and radically fair price. Through social media we grew far beyond our Los Angeles home,
                becoming a global community of 1.5 million DEFAULT owners (and counting). We're inspired by the go-getters,
                the innovators, the dreamers, and our designs embody this very spirit. They're built for adventuring,
                creating and daring to disrupt the norm. Above all else we create with the dream of enlivening our
                ultimate mission to inspire you to live life on your own terms.
            </p>
        </div>
    </div>
</body>
</html>
<?php include 'footer.php'?>

