<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="notification.css">
    <link rel="stylesheet" href="utility.css">
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="./assets/images/bvec.jpg" type="image/x-icon">
    <title>Document</title>
</head>
<!-- 
<body>
    <div class="col-lg-6">
        <h2> Signin form </h2>
        <form action="registration.php" method="post">
            <div class="form-group">
                <label> username </label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label> Password </label>
                <input type="Password" name="password" class="form-control">
            </div>
            <button class="btn btn-primary" type="submit"> Login </button>
        </form>
    </div>
</body> -->

<body>
    <!-- All href will open in new tab -->
    <!-- <base href="" target="_blank"> -->

    <div id="show"><i class="fas fa-solid fa-bars basic_mrgn" id="s" onclick="show()"></i></div>
    <div class="container">

        <header class="">
            <nav id="navbar">
                <ul id="ul">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="notification.html">Notification</a></li>
                    <li><a href="internship.html">Internship</a></li>
                    <li><a href="JavaScript:void(0)">For Students <i class="fas fa-caret-down"></i></a>
                        <div class="dropdown_menu">
                            <ul><a href="#"><i class="fa-solid fa-right-to-bracket"></i>&nbsp Student Login</a></ul>
                            <ul><a href="#"><i class="fa-regular fa-message"></i>&nbsp Forum</a></ul>
                            <ul><a href="#">Resume Generator</a></ul>
                            <ul><a href="#">Placement Policies</a></ul>
                        </div>
                    </li>
                    <li><a href="JavaScript:void(0)">For Recruiters <i class="fas fa-caret-down"></i></a>
                        <div class="dropdown_menu">
                            <ul><a href="record.html">Placement Record</a></ul>
                            <ul><a href="#">Reaching BVEC</a></ul>
                            <ul><a href="#">Facilities</a></ul>
                        </div>
                    </li>
                    <li><a href="JavaScript:void(0)">Co-ordinator <i class="fas fa-caret-down"></i></a>
                        <div class="dropdown_menu">
                            <ul><a href="slogin.html">Co-ordinator Login</a></ul>
                        </div>
                    </li>
                    <li><a href="JavaScript:void(0)">Alumni <i class="fas fa-caret-down"></i></a>
                        <div class="dropdown_menu">
                            <ul><a href="#"><i class="fa-solid fa-right-to-bracket"></i>&nbsp Alumni Login</a></ul>
                            <ul><a href="#"><i class="fa-solid fa-magnifying-glass"></i>&nbsp Alumni Search</a></ul>
                        </div>
                    </li>
                    <li><a href="JavaScript:void(0)">Contact Us</i></a>

                    </li>
                    <li><a href="https://www.linkedin.com/company/training-and-placement-cell-barak-valley-engineering-college/about/"
                            target="_blank">
                            <i class="fa fa-linkedin" aria-hidden="true"
                                style="background-color: blue;padding: 5px;border-radius: 30%;"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>
        <br><br><br><br>
        <!-- Everything must be done under section class, add class or id  -->
        <section id="create-account">
            <div class="container-form">
                <div class="login-left">
                    <div class="login-header"><br>
                        <h1>Welcome to T&P Cell BVEC</h1>
                        <p class="error-msg">Account already exists. Please Login.</p><br>
                    </div>

                    <form class="login-form" id="form" action="coordinator-database.php" method="post">

                        <div class="signup-form-content">
                            <div class="input-control">
                                <label>Full Name</label>
                                <input type="text" name="name" id="username" required>
                                <div class="error"></div>
                                <br>
                            </div>
                            <div class="input-control">
                                <label>Enter Email</label>
                                <input type="email" name="email" id="email" required>
                                <div class="error"></div>
                            </div>
                            <div class="input-control" id="pass">
                                <label>Enter Password</label>
                                <input type="password" name="password" id="password" required>
                                <!-- <div class="error"></div> -->
                                <div id="password-error" class="error"></div>
                            </div>
                            <!-- <div>
                         <label for="photo">Upload Photo</label>
                         <input type="file" name="photo" id="photo">
                      </div> -->
                            <div class="upload">
                                <button type="button" class="btn-warning">
                                    <i class="fa fa-upload"></i> Upload Photo
                                    <input type="file" id="photo-upload">
                                </button>
                            </div>
                            <p id="upload-message"></p>
                            <button class="btn-sign-up1" type="submit" id="submit">Sign up</button>
                        </div>

                    </form>
                    <br>
                    <h4>Already have an account?</h4><br>
                    <div class="sign-in">
                        <a href="slogin.html"> <button class="btn-sign-in1">Sign In</button></a>
                    </div>
                </div>
            </div>
        </section>
        <br>


        <!-- Footer section -->
        <hr>
        <footer class="">
            <div class="left">
                <h4>&copy;2023, Centre for Career Development</h4>
                <h5>Barak Valley Engineering College</h5>
            </div>
            <div class="right">
                <h4>Developed & maintained By <a href="https://github.com/MiniProjectTeam12/EPlacement">Team-12</a>
                </h4>
            </div>
        </footer>



        <!-- Javascript section -->
        <script src="https://kit.fontawesome.com/c5009e06c9.js" crossorigin="anonymous"></script>
        <script src="script.js"></script>
        <script>
            const marquee = document.getElementById('myMarquee');
            const h3Elements = marquee.getElementsByTagName('h3');
            for (let i = 0; i < h3Elements.length; i++) {
                h3Elements[i].addEventListener('mouseover', function () {
                    marquee.stop();
                });
                h3Elements[i].addEventListener('mouseout', function () {
                    marquee.start();
                });
            }
        </script>
</body>
<script src="createacc.js"></script>

</html>