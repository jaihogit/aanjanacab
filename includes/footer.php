<footer class="footer">
        <div class="container">
            <div class="row">
                <div class="inner-footer ">
                    <div class="footer-section  col-lg-4 col-md-6 col-12 aboutfoot">
                        <h1>About us</h1>
                        <p> We provide driven A/C and non-A/C Cabs at the best price.
                            Our Drivers are well-mannered and courteous in their interactions
                            and have thorough knowledge of the local routes and travel destinations.
                            We provide a complete and reliable cab services which make your journey enjoyable.We provide
                            services 24*7 for your cab.</p>
                    </div>
                    <div class="footer-section col-lg-4 col-md-6 col-12 link">

                        <h1>Quick links </h1>
                        <ul>
                            <a style="text-decoration: none;" href="../patelcabs/index.php">
                                <li>Home</li>
                            </a>
                            <a style="text-decoration: none;" href="#about">
                                <li>About us</li>
                            </a>
                            <a style="text-decoration: none;" href="#choose">
                                <li>services</li>
                            </a>
                            <a style="text-decoration: none;" href="#contactus">
                                <li>contact us</li>
                            </a>
                            <a style="text-decoration: none;" href="#bookcar">
                                <li>book cab</li>
                            </a>
                        </ul>



                    </div>
                    <div class="footer-section  col-lg-4 col-md-6 col-12 adress">
                        <h1> Address</h1>
                        <ul>

                            <li> <i class="fa fa-map-marker"></i> 25,Khodiyar Nagar,Kheme ka Kua ,Pal Road ,Jodhpur(Rajasthan)</li>
                            <br>
                            <li><i class="fa fa-phone"></i>+919414294262</li>
                            <li><i class="fa fa-envelope"></i>rakeshpatelrp583@gmail.com</li>

                        </ul>
                        <div class="social">
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-instagram"></i></a>
                            <a href=""><i class="fa fa-twitter"></i></a>

                        </div>
                    </div>


                </div>




            </div>
        </div>
        <div class="footer-bottom">
            &copy;2019 Humanrhy-All Rights Reserved
          
        </div>
       


    </footer>
    <script>
        $(document).ready(function () {
            $(".call").click(function () {
                $(".concall").toggle().css("transition", "0.5s", "all");

            });
        });

        $(function () {
            $("#date").datepicker();
        });
      

   $(document).ready(function () {

            $(".para").mouseenter(function () {
                $("#book").css('color', 'red');

            });

            $(".para").mouseleave(function () {
                $("#book").css('color', 'yellow');

            });


        });

        $('nav .navbar-nav a').on('click', function () {
            $('nav .navbar-nav').find('li.active').removeClass('active');
            $(this).parent('li').addClass('active');
        });
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function () {
            var currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
                document.getElementById("navbar").style.top = "0";
            } else {
                document.getElementById("navbar").style.top = "-90px";
            }
            prevScrollpos = currentScrollPos;
        }






    </script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

</body>

</html>