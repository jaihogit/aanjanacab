 <!-- book part  -->

 <section class="bookcars text-center" id="bookcar">
        <div class="container bookcar">
            <h1 id="book">BOOK cab online</h1>
            <p>easy and fast booking</p>
        </div>
        <form action="../patelcabs/bookcab.php" name="form" onsubmit="return bookvalidation()"   method="POST">
            <div class="container">
                <div class="row">
                    <div class=" form-group col-lg-4 col-md-4 col-sm-10 col-10 offset-1 p-1 d-block m-auto">

                        <input type="text" name="Name" class="form-control" id="user" placeholder="Name"  autocomplete="off">

                    </div>
                    <div class=" form-group col-lg-4 col-md-4 col-sm-10 col-10  offset-1 p-1 d-block m-auto">
                        <fieldset>
                            <input type="email" name="email"class="form-control" id="mail" placeholder="Email" autocomplete="off">
                        </fieldset>
                    </div>
                    <div class=" form-group col-lg-4 col-md-4 col-sm-10 col-10  offset-1 p-1 d-block m-auto">
                        <fieldset>
                            <input type="text" name="pmobile" id="phone" placeholder="Mobile number">
                            
                        </fieldset>

                    </div>




                </div>
                <div class="row">

                    <div class=" form-group col-lg-4 col-md-4 col-sm-10 col-10  offset-1  p-1 d-block m-auto">
                        <fieldset>
                            <input type="text" name="pickup" id="pickup" placeholder="Pickup Point">
                        </fieldset>

                    </div>
                    <div class=" form-group col-lg-4 col-md-4 col-sm-10 col-10   offset-1 p-1 d-block m-auto">
                        <fieldset>
                            <input type="text" name="date" id="date" placeholder="Date" >
                        </fieldset>
                    </div>
                    <div class=" form-group col-lg-4 col-md-4 col-sm-10 col-10  offset-1 p-1  d-block m-auto">
                      
                        <fieldset>
                            <input type="time" name="time" placeholder=" Time" id="time" class="timepicker">
                        </fieldset>

                    </div>




                </div>
                <div class="row">

                    <div class=" form-group col-lg-4 col-md-4 col-sm-10 col-10 offset-1  p-1 d-block m-auto">
                       
                        <fieldset>
                            <input type="number" name="passage" id="passage" placeholder="Total Passanger">
                        </fieldset>
                    </div>
                    <div class=" form-group col-lg-4 col-md-4 col-sm-10 col-10 offset-1  p-1 d-block m-auto">
                        <fieldset>
                            <select name="cars" id="cars">
                                <option value="select"> Select Car<i></option>
                                <option value="Swift Dzire">Swift Dzire</option>
                                <option value="Toyota Etios">Toyota Etios</option>

                                <option value="Innova">Innova</option>
                                <option value="Crysta">Crysta</option>
                                <option value="Tovera">Tovera</option>
                                <option value="Tempo Travellor">Tempo Travellor</option>



                            </select>
                        </fieldset>


                    </div>
                    <div class=" form-group col-lg-4 col-md-4 col-sm-10 col-10 offset-1 p-1 d-block m-auto">
                        <fieldset>
                            <select name="req" id="req">
                                <option value="required Car"> Required Car</option>
                                <option value="1">1</option>
                                <option value="2">2</option>

                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5"> 5</option>
                                <option value="More Then 5">More Then 5</option>



                            </select>
                        </fieldset>

                    </div>




                </div>
                <div class="row">
                    <div class=" form-group col-lg-4 col-md-4 col-sm-10 col-10 offset-1 p-1 d-block m-auto">

                    <fieldset>
                        <select name="trip" id="trip">
                            <option value="Trip"> Select Trip</option>
                            <option value="One Way">One Way</option>
                            <option value="Two Way">Two Way</option>

                            <option value=" Tour Package"> Tour Package</option>
                           



                        </select>
                    </fieldset>
                </div>

                 
                    <div class=" form-group col-lg-8 col-md-8 col-sm-10 col-10 offset-1 p-1 d-block m-auto">
                        
                    
                        <fieldset>
                            <textarea type="textarea" name="message" placeholder="Message"></textarea>
                        </fieldset>



                    </div>
                    <div class="text-center col-sm-12 col-12">
                        <input type="submit" name="submit" class="bookcabs btn" value="Book now">
                    </div>



                </div>

            </div>
        </form>
    </section>
    <!-- book part end  -->