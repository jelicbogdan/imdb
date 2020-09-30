<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" type="image/png" href="Images/Logo.png" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet'>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#menuOpener").click(function() {
                if ($(".navbar-menu").hasClass("active")) {
                    $(".navbar-menu").removeClass("active");
                } else {
                    $(".navbar-menu").addClass("active");
                }

            });
        });
    </script>


    <script type="text/javascript">
        function validate() {


            if (document.myForm.ime.value == "") {
                alert("Name is a required field!");
                document.myForm.ime.focus();
                return false;
            }

            if (document.myForm.prezime.value == "") {
                alert("Last name is a required field!");
                document.myForm.prezime.focus();
                return false;
            }


            if (document.myForm.email.value == '') {
                alert("Email is a required field!");
                document.myForm.email.focus();
                return false;
            }

            if (document.myForm.email.value.indexOf('@') == -1) {
                alert("Error!");
                document.myForm.email.focus();
                return false;

            }


            return confirm("Successful!")
            return (true);
        }
    </script>

    <title>IMDB</title>
</head>

<body class="index">
    <div class="page-content-wrapper">
        <div class="navbar" id="index-nav">
            <div>
                <ul id="list-navbar">

                <li><a href="index.html">Home</a></li>
                    <li><a href="kontakt.html">Grade</a></li>
                    <li><a class="active" href="comment.html">See comments</a></li>
                    <li><a href="galerija.html">Gallery</a></li>

                    <span id="menuOpener"><i class="fa fa-bars"></i></span>
                </ul>
            </div>
        </div>

        <div class="mobile-nav">
            <nav class="navbar-menu">

                <ul class="menu-listing">

                <<li><a href="index.html">Home</a></li>
                    <li><a href="kontakt.html">Grade</a></li>
                    <li><a href="comment.html">See comments</a></li>
                    <li><a href="galerija.html">Gallery</a></li>

                </ul>
            </nav>
        </div>


        <div id="telo">

            <?php

            $obj->name = $_GET['name'];
            $obj->lastname =  $_GET['lastname'];
            $obj->email =  $_GET['email'];
            $obj->phone =  $_GET['phone'];
            $obj->movie =  $_GET['movie'];
            $obj->comment =  $_GET['comment'];

            $json = json_encode($obj);
            file_put_contents('koment.json', $json);
            ?>
            <div class="kontakt query">
                <div class="bg_shadow">
                    <p>Name: <?php echo $obj->name; ?></p>
                    <p>Last name: <?php echo $obj->lastname; ?></p>
                    <p>E-mail: <?php echo $obj->email; ?></p>
                    <p>Phone number: <?php echo $obj->phone; ?></p>
                    <p>Movie: <?php echo $obj->movie; ?></p>
                    <p>Comment: <?php echo $obj->comment; ?></p>
                </div>
            </div>
        </div>


        <div class="footer">
            <div class="telo red ">
                
                <div>
                    <p>
                        Contact us: 
                    <a href="mailto:imdb@gmail.com">imdb@gmail.com</a>
                    </p>

                    
                    <p>
                       Social media: 
                    </p>
                    <div>
                        <a href="https://www.facebook.com/"><i class="fa fa-facebook-official"></i></a>
                        <a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
                        <a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>