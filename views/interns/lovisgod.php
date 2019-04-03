<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ayooluwa Olosunde</title>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Catamaran|Comfortaa');
        *{
            padding: 0;
            margin: 0;
            font-family: 'Catamaran', sans-serif;
        }
        .wrapper {
            margin: 90px auto;
            width: 80%;
            display: grid;
            grid-template-columns: 1fr 3fr;
            /*grid-template: 700px / 1.5fr 4fr;*/
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        .box-a {
            display: inline-grid;
            text-align: center;
            /*grid-template-rows: 50px 100px;*/
            background-color: #EDF5FF;
        }
        .box-b {
            background-color: #fff;
            text-align: center;
            font-size: 1.2rem;
        }
        .profile-div {
            /*text-align: center;*/
            margin: 15px auto;
        }
        .profile-pic {
            width: 200px;
            height: 200px;
            border-radius: 50%;
        }
        .center {
            margin: auto;
            padding: 70px 10%;
        }
        .center>h2,h5 {
            margin-bottom: 3%;
        }
        .icons {
            margin-top: 3%;
        }
        .icon {
            margin-left: 5px;
            width: 30px;
        }
        .icon:hover {
            width: 20px;
        }
        a {
            text-decoration: none;
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        li a {
            display: block;
            color: #000;
            padding: 8px 16px;
            text-decoration: none;
        }
        /* Change the link color on hover */
        li a:hover {
            font-size: 1.3rem
        }
    </style>
</head>

<body>

<div class="wrapper">
    <div class="box-a">
        <div class="profile-div">
            <img src="https://res.cloudinary.com/psirius-eem/image/upload/v1554307982/ayooluwa2.jpg" class="profile-pic">
        </div>
        <ul>
            <li><a href="#home">About</a></li>
            <li><a href="#blogs">Blog</a></li>
            <li><a href="#projects">Projects</a></li>
        </ul>

        <div class="icons">
            <a href="https://www.facebook.com/olosunde.ayo">
                <img src="https://res.cloudinary.com/psirius-eem/image/upload/v1554302758/icons8-facebook-48.png" alt="facebook icon" class="icon">
            </a>
            <a href="https://twitter.com/ayolovisgod">
                <img src="https://res.cloudinary.com/psirius-eem/image/upload/v1554302758/icons8-twitter-48.png" alt="twitter icon" class="icon">
            </a>
            <a href="https://github.com/lovisgod/">
                <img src="https://res.cloudinary.com/psirius-eem/image/upload/v1554302758/icons8-github-50.png" alt="github icon" class="icon">
            </a>
            
        </div>

    </div>

  

    <div class="box-b">

        <div class="center">
            <h2>Hi, I am Ayooluwa</h2>
            <p>I'm a Software Developer who likes building things for the Web.</p>

            <p>Growing Software Developer with a demonstrated history of solving problems with skills in programming languages like Java, Java-script, and a solid knowledge of Geographic Information Systems (GIS). 
              </p>
            
        </div>
    </div>
</div>

</body>

</html>