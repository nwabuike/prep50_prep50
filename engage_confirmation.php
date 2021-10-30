<?php $id = $_GET['id']; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description" content="Responsive Marketing Landing Pages" />
    <meta name="author" content="" />
    <meta name="keywords" content="" />
    <title>Prep50 - Child Upbringing</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link href="./css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />

    <!-- <link rel="stylesheet" type="text/css" href="css/order.css" /> -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/style-center.css" />
    <link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600%7CRaleway:300,400,500,600,700,800" rel="stylesheet" />
    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '526494864200837');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=526494864200837&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->

</head>

<body>


    <div class="container mt-5 mb-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="text-left logo p-2 px-5"> <img src="https://i.imgur.com/2zDU056.png" width="50"> </div>
                    <div class="invoice p-5">
                        <h5>Your order Confirmation!</h5> <span class="font-weight-bold d-block mt-4" id="">Hello <b id="fullname"></b> </span>
                        <p>Please confirm your availability to receive the items.</p>
                        <p>If for any reason you will be travelling or will not be around and cannot make plans for the delivery, please come back to the website on a latter date to complete your order.</p>
                        <p>If you are ready to buy now, please proceed to confirm and select a convenient date for the delivery</p>
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="ntPackages justify-content-center">
                                <!-- <div class="ntPackagesSuperTitle">
                                    <h4>Silver Sponsor</h4>
                                    
                                    <h3><i class="fas fa-dollar-sign"></i>25,000</h3>

                                </div> -->
                                <p>Your order details</p>
                                <div class="ntPackagesDetails">

                                    <ul>
                                        <li><b>Email:</b>
                                            <span id="email"></span>
                                        </li>
                                        <li><b>Order No:</b>
                                            <span id="orderId"></span>
                                        </li>
                                        <li><b>Phone No:</b>
                                            <span id="contact"></span>
                                        </li>
                                        <li><b>Address:</b>
                                            <span id="address"></span>
                                        </li>
                                        <li><b>Quantity:</b>
                                            <span id="quantity"></span>
                                        </li>
                                        <li><b>State:</b>
                                            <span id="state">
                                            </span>
                                        </li>
                                    </ul>
                                    <!-- <a href="#0" class="btn btn-ntPrimaryBorder ntMedium">Contact Us</a> -->
                                </div>
                            </div>
                        </div>

                        <div class="ntInnerSection ntRegisterForm" id="register">
                            <div class="container">
                                <h2>Confirm Order</h2>
                                <span class="btm-bar"></span>
                                <div class="col-md-10 ntSubTitle block-center">
                                    <p>Please select a convenient date for delivery below.</p>
                                </div>
                                <form action="" method="" id="deliveryForm">
                                    <div class="row">
                                        <input id="id" type="hidden" name="id" value="">
                                        <div class='col-sm-6 md-form md-outline input-with-post-icon datepicker' inline="true">
                                            <input type='text' placeholder="Select date" class="form-control" name="dateOfdev" id='datetimepicker1' required />
                                        </div>
                                        <div class="col-md-6">
                                            <input type="hidden" value="4" name="type">
                                            <div class="d-flex justify-content-center" style="margin-bottom: 40px;">
                                                <button type="submit" class="btn btn-ntPrimaryFull ntMedium">
                                                    Confirm Now
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <p>We will be sending shipping confirmation email when the item shipped successfully!</p>
                        <p class="font-weight-bold mb-0">Thanks for shopping with us!</p> <span>prep50 child Upbringing Team</span>
                    </div>
                    <div class="d-flex justify-content-between footer p-3"> <span>Need Help? visit our <a href="#"> help center</a></span> <span><?php echo date("d-l"); ?>, <?php echo date("Y"); ?></span> </div>
                </div>
            </div>
        </div>
    </div>


    <script src="./js/jquery-3.3.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js" type="text/javascript"></script>
    <script src="js/jquery.countimator.js"></script>
    <script src="./js/bootstrap-datetimepicker.min.js"></script>
    <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
    <script src="js/clip-text.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script src="js/jquery.form.js"></script>

    <!-- <script src="js/jquery.form.js"></script>
    <script src="js/custom.js"></script> -->
    <script src="js/parallax.js"></script>

    <script>
        $(document).ready(function() {

            $('#datetimepicker1').datetimepicker();
            var id = <?php echo $id; ?>;
            // console.log(id);
            // alert("Hello " + name + " your ID is " + id);
            let user_id = id;
            $('#id').val(user_id);
            // document.getElementById("id").value = user_id;
            $.ajax({
                type: 'POST',
                url: 'php/getData.php',
                dataType: "json",
                data: {
                    user_id: user_id
                },
                success: function(data) {
                    if (data.status == 'ok') {
                        // $('#test').html(data);
                        // $('#id').text(data.result.id);
                        $('#fullname').text(data.result.fullname);
                        $('#orderId').text(data.result.orderId);
                        $('#email').text(data.result.email);
                        $('#contact').text(data.result.contact);
                        $('#created_at').text(data.result.created_at);
                        $('#address').text(data.result.address);
                        $('#state').text(data.result.state);
                        $('#quantity').text(data.result.quantity);
                        $('.user-content').slideDown();
                    } else {
                        $('.user-content').slideUp();
                        alert("User not found...");
                    }
                }
            });
        });
    </script>
    <!-- <script type="text/javascript">
        $(function() {
           
        });
    </script> -->
    <script src="js/custom.js"></script>
    <script src="js/confirm.js"></script>
    <!-- <script src="js/map.js"></script> -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvEEMx3XDpByNzYNn0n62Zsq_sVYPx1zY&amp;callback=myMap"></script> -->
   
</body>

</html>