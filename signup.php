<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@500;800&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:wght@600;900&display=swap" rel="stylesheet">
    <title>Hunt - Signup</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: black;
        }

        .poppins {
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            line-height: 16px;
            font-weight: 500;
            color: white;
        }
        #container{
            padding: 20px;
            width:350px;
        }
        .btn1{
            background: #d8000f;
            font-family: 'Poppins', sans-serif;
            font-size: 18px;
            line-height: 18px;
            font-weight: 500;
            color: white;
            margin: auto;
            width: 100%;
            border: none;
            padding: 8px;
            border-radius:5px;
        }
        .a{
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
        .underline{
            margin: auto;
            background: #d8000f;
            height: 2px;
        }
        .or{
            color: white;
            font-family: 'Poppins', sans-serif;
            font-size: 15px;
            font-weight: 600;
            text-align: center;
            margin: 40px;
        }
        .accounts_fg{
            height: 40px;
            background: black;
            color: white;
            /* text-align: center; */
            border: 2px solid #d8000f;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 10px auto;
        }
        .accounts_fg p{
            margin-bottom: 0px;
            font-size: 16px;
        }
        .accounts_fg svg{
            margin-left: 10px;
        }
    </style>
</head>

<body>
    <div id="container">
        <div>
            <div style="margin: auto;width:180px;"><img src="images/hunt_logo.jpg" style="width:100%;"></div>
            <h1 class="poppins" style="text-align: center;">India's Newest OTT King</h1>
        </div>
        <form>
            <h1 class="poppins" style="text-align: center;margin: 40px 0px;font-size:24px;">Sign Up</h1>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label poppins" style="font-weight:300;font-size:20px;">Name</label>
                <input type="text" class="form-control poppins shadow-none" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your name here" style="font-size: 14px;line-height:14px;color:#464646;height:40px;font-weight:600;background:none;border:2px solid #d8000f;">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label poppins" style="font-weight:300;font-size:20px;">Email</label>
                <input type="email" class="form-control poppins shadow-none" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email Id here" style="font-size: 14px;line-height:14px;color:#464646;height:40px;font-weight:600;background:none;border:2px solid #d8000f;">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label poppins" style="font-weight:300;font-size:20px;">Password</label>
                <input type="password" class="form-control poppins shadow-none" id="exampleInputPassword1" placeholder="Enter your Password here" style="font-size: 14px;line-height:14px;color:#464646;height:40px;font-weight:600;background:none;border:2px solid #d8000f;">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label poppins" style="font-weight:300;font-size:20px;">Confirm Password</label>
                <input type="password" class="form-control poppins shadow-none" id="exampleInputPassword1" placeholder="Enter your Confirm Password here" style="font-size: 14px;line-height:14px;color:#464646;height:40px;font-weight:600;background:none;border:2px solid #d8000f;">
            </div>
            <div style="margin:30px auto;width: 220px;border-radius:5px;box-shadow: 2px 2px white;"><button type="submit" class="btn1">Sign up</button></div>
            <a href="login.php"class="a"><p class="a" style="margin-top:15px;">Already have an account?</p></a>
            <div style="width:140px;" class="underline"></div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>