<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@500;800&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:wght@600;900&display=swap" rel="stylesheet">
    <title>Hunt - Subscription</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            min-height: 100vh;
            background-color: black;
        }

        #outer_container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .poppins {
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            line-height: 16px;
            font-weight: 500;
            color: white;
        }

        #container {
            padding: 20px;
            width: 350px;
            height: 90vh;
        }

        .btn1 {
            background: #d8000f;
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            line-height: 16px;
            font-weight: 500;
            color: white;
            margin: auto;
            width: 100%;
            border: none;
            padding: 5px;
            border-radius: 5px;
        }

        .a {
            color: #9f9f9f;
            text-decoration: none;
            font-family: 'Poppins', sans-serif;
            font-size: 12px;
            line-height: 12px;
            font-weight: 300;
            text-align: center;
            margin-bottom: 5px;
            margin-top: 10px;
        }

        .underline {
            margin: auto;
            background: #d8000f;
            height: 2px;
        }

        #small_logo {
            display: none;
        }

        ul li {
            list-style: none;
            line-height: 70px;
            padding: 0px 10px;
        }

        ul li a {
            text-decoration: none;
            font-family: 'Poppins', sans-serif;
            font-size: 18px;
            /* line-height: 18px; */
            font-weight: 500;
            color: white;
        }
        .dots{
            width: 10px;
            height: 10px;
            border-radius: 5px;
            background: #d8000f;
            margin-right: 20px;
        }
    </style>
</head>

<body>
    <nav>
        <div style="margin: auto;width:1000px;display:flex;justify-content:space-between;height:70px;align-items:center;">
            <div style="display:flex;">
                <div style="width:50px;" id="small_logo">
                    <img src="images/h_logo.jpg" style="width:100%;">
                </div>
                <div style="height:40px;margin:15px 20px;"><img src="images/hunt_logo.jpg" style="height:40px;"></div>
                <ul style="display:flex;color:white;">
                    <li><a>Home</a></li>
                    <li><a>Movies</a></li>
                    <li><a>Tv Shows</a></li>
                    <li><a>Genre</a></li>
                </ul>
            </div>
            <div style="display: flex;">
                <div style="width:25px;margin-right:20px;"><img src="images/search_icon.png" alt="" style="width: 100%;"></div>
                <div style="width: 160px;border-radius:5px;box-shadow: 1px 1px white;"><button type="submit" class="btn1">SIGN UP NOW</button></div>
            </div>
        </div>
    </nav>
    <div>
        <div id="container" style="margin: auto;width:1000px;display:flex;">
            <div>
                <div style="margin: auto;height:110px;"><img src="images/hunt_logo.jpg" style="height:110px;"></div>
                <h1 class="poppins" style="text-align: center;">India's Newest OTT King</h1>
            </div>
            <div style="padding-left:50px;">
                <div style="display:flex;align-items:center;height:50px;">
                    <div class="dots"></div>
                    <div class="poppins">Premium Movies and TV shows</div>
                </div>
                <div style="display:flex;align-items:center;height:50px;">
                    <div class="dots"></div>
                    <div class="poppins">Original Content</div>
                </div>
                <div style="display:flex;align-items:center;height:50px;">
                    <div class="dots"></div>
                    <div class="poppins">Unlimited Screens</div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>