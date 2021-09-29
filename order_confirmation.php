<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Prep50 - Books</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="css/style.css" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


</head>

<body>
    <nav class="white" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="#" class="brand-logo red-text text-lighten-2">Prep50</a>
        </div>
    </nav>
    <div class="carousel carousel-slider center" data-indicators="true">
        <div class="carousel-fixed-item center">
            <p class="white-text">Smash Your Jamb With Prep50 Past Questions</p>
        </div>
        <div class="carousel-item red white-text" href="#one!">
            <h2>Prep50 Books</h2>
            <p class="white-text">This is your Where Your success is Assured</p>
        </div>
        <div class="carousel-item amber white-text" href="#two!">
            <h2>Prep50 Books</h2>
            <p class="white-text">This is your Where Your success is Assured</p>
        </div>
        <div class="carousel-item green white-text" href="#three!">
            <h2>Prep50 Books</h2>
            <p class="white-text">This is your Where Your success is Assured</p>
        </div>
        <div class="carousel-item blue white-text" href="#four!">
            <h2>Prep50 Books</h2>
            <p class="white-text">This is your Where Your success is Assured</p>
        </div>
    </div>
    <br>
    <div class="container" style="margin-bottom: 150px;">
        <div class="section">
            <h4 class="red-text text-lighten-2 center">Order Confirmation!!!</h4>
            <p>Please confirm your availability to receive the items here.</p><br />
            <p>If you are travelling or will not be around and cannot make plans for the delivery please come back to the website on another day.</p>
            <p>If you are ready to buy now</p>
        </div>
    </div>
    <h2>Order Now</h2>
    <span class="btm-bar"></span>
    <div class="col-md-10 ntSubTitle block-center">
        Please select the a convenient data for delivery below
    </div>
    <form class="col s12" method="POST" name="genForm" id="genForm">
        <div class="card">
            <p></p>
        </div>
        <div class="input-field col s6">
            <input type="text" class="datepicker">
            <!-- <label for="phone_number">Phone Number</label> -->
        </div>


    </form>

    <footer class="page-footer">

        <div class="footer-copyright">
            <div class="container">
                © 2021 Copyright Prep50Books. Powered by Daecons Educational consult & Data center and Deacons Digital Solutions ltd.
            </div>
        </div>
    </footer>
    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->
    <script type="text/javascript" src="js/jquery_3.6.0.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.carousel.carousel-slider').carousel({
                fullWidth: true
            });

            $('.datepicker').pickadate({
                selectMonths: true, // Creates a dropdown to control month
                selectYears: 15, // Creates a dropdown of 15 years to control year,
                today: 'Today',
                clear: 'Clear',
                close: 'Ok',
                closeOnSelect: false, // Close upon selecting a date,
                container: undefined, // ex. 'body' will append picker to body
            });
        });
    </script>
    <script type="text/javascript">
        $(function() {
            $('#datetimepicker9').datetimepicker({
                viewMode: 'years'
            });
        });
    </script>
</body>

</html>