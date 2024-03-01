<?php 
include('header.php');

?>

<div class="hero-wrap" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <p class="breadcrumbs mb-2" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Home</a></span> <span class="mr-2"><a href="rooms.php">Room</a></span> <span>Tourism</span></p>
	            <h1 class="mb-4 bread">Tourist Places</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
          <!-- <h5 class="heading pb-5" data-aos="fade-up" style="font-size: 2.5rem;display:flex;justify-content: center;">About Us</h5> -->
            <div class="row g-5" >
                <div class="col-lg-6 wow " data-aos="fade-up" data-wow-delay="0.1s" style="min-height: 400px;" >
                    <div class="position-relative h-100 image-container">
                        <img class="img-fluid position-relative w-100 h-100" src="tourist/r2.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow " data-aos="fade-up" data-wow-delay="0.3s" >
                    <!-- <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6> -->
                    <h1 class="mb-4">Welcome to <span class="text-danger" >Ayodhya</span></h1>
                    <p class="mb-4" style="text-align:justify" > Ayodhya is known as Saket which is an ancient city of India. It is associated with the great epic Ramayana with the birth of Lord Rama and with the rule of his father, Dasharatha.</p>
                    <p class="mb-4" style="text-align:justify" >Ayodhya or Awadhpuri, the birthplace of Lord Rama has been regarded as the first one of the seven most important pilgrimage sites or Mokshdayini Sapt Puris for Hindus.</p>
                    <div class="row gy-2 gx-4 mb-4" >
                        <div class="col-sm-6" >
                            <p class="mb-0"><i class="fa fa-arrow-right text-danger me-2"></i>Shri Ram Janma Bhoomi.</p>
                        </div>
                        <div class="col-sm-6" >
                            <p class="mb-0"><i class="fa fa-arrow-right text-danger me-2"></i>Hanuman Garhi Mandir</p>
                        </div>
                        <div class="col-sm-6" >
                            <p class="mb-0"><i class="fa fa-arrow-right text-danger me-2"></i>Kanak Bhavan Temple. </p>
                        </div>
                        <div class="col-sm-6" >
                            <p class="mb-0"><i class="fa fa-arrow-right text-danger me-2"></i>Nageshwarnath Temple.</p>
                        </div>
                        <div class="col-sm-6" >
                            <p class="mb-0 " ><i class="fa fa-arrow-right text-danger me-2"></i>Naya Ghat</p>
                        </div>
                        <div class="col-sm-6" >
                            <p class="mb-0"><i class="fa fa-arrow-right text-danger me-2"></i>Dashrath Mahal</p>
                        </div>
                    </div>
                    <!-- <a class="btn btn-primary py-3 px-5 mt-2" href="#" >Read More</a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow " data-wow-delay="0.1s" data-aos="fade-up">
                <h6 class="section-title bg-white text-center text-danger px-3">Services</h6>
                <h1 class="mb-5">Our Services</h1>
            </div>
            <style>
              .hover-up-effect{
                border:2px solid #ff0000;
                border-radius:5px;
                transition:all 0.4s ease-in-out;
              }
              .hover-up-effect:hover{
                transform: translateY(-20px);
              }
              .hover-up-effect p{
                text-align:justify;
              }
            </style>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow  " data-wow-delay="0.1s" data-aos="fade-up" >
                    <div class="service-item rounded pt-3 hover-up-effect">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-danger mb-4"></i>
                            <h5>Ayodhya Tours</h5>
                            <p>The countless temples, ghats and the beautiful structures built in the Nawabi era and even after that are notable in the city.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow " data-wow-delay="0.3s" data-aos="fade-up">
                    <div class="service-item rounded pt-3 hover-up-effect">
                        <div class="p-4">
                            <i class="fa fa-3x fa-hotel text-danger mb-4"></i>
                            <h5>Hotel Reservation</h5>
                            <p>Shri Ram Hotel now offers entertainment spaces, restaurants, well appointed accomodation and much more.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow " data-wow-delay="0.5s" data-aos="fade-up">
                    <div class="service-item rounded pt-3 hover-up-effect">
                        <div class="p-4">
                            <i class="fa fa-3x fa-user text-danger mb-4"></i>
                            <h5>Travel Guides</h5>
                            <p>Near places to Ayodhya are Shravasti which is 80 km from Ayodhya, Lucknow which is located 124 km from Ayodhya.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow " data-wow-delay="0.7s" data-aos="fade-up">
                    <div class="service-item rounded pt-3 hover-up-effect">
                        <div class="p-4">
                            <i class="fa fa-3x fa-cog text-danger mb-4"></i>
                            <h5>Event Management</h5>
                            <p>Event planning can be intense, especially for large-scale performance-driven events. With so many details to manage.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

<!-- Destination Start -->
<div class="container-xxl py-5 destination">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s" data-aos="fade-up">
                <h6 class="section-title bg-white text-center text-danger px-3">Destination</h6>
                <h1 class="mb-5">Popular Destination</h1>
            </div>
            <style>
              #naya-Ghat,#hanuman-Ghadhi,#kanak-Bhavan,#company-Garden,#dogra-Regiment,#tulsi-Udhayan,#makbara,#dasharath-Mahal{
                position:absolute;
                top:-5px;
              }
            </style>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn mb-4" data-wow-delay="0.1s" data-aos="fade-up">
                            <a class="position-relative d-block overflow-hidden image-container" href="">
                                <img class="img-fluid" src="tourist/naya.jpg" alt="">
                                <!-- <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">30% OFF</div> -->
                                <div class="bg-white text-danger fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2 " id="naya-Ghat">Naya Ghat</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s" data-aos="fade-up">
                            <a class="image-container" href="">
                                <img class="img-fluid" style="height:34vh;" src="tourist/hanuman.jpg" alt="">
                                <!-- <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">25% OFF</div> -->
                                <div class="bg-white text-danger fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2" id="hanuman-Ghadhi">hanuman ghadhi</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s" data-aos="fade-up">
                            <a class="image-container" href="">
                                <img class="img-fluid" src="tourist/kanak.jpg" alt="">
                                <!-- <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">35% OFF</div> -->
                                <div class="bg-white text-danger fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2" id="kanak-Bhavan">Kanak Bhavan</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s"  data-aos="fade-up" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="">
                        <img class="img-fluid w-100 h-100 position-relative " src="tourist/d1.jpg" alt="" style="object-fit: cover;">
                        <!-- <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">20% OFF</div> -->
                        <div class="bg-white text-danger fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2" id="dasharath-Mahal">Dasharath Mahal</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
	
	
	
	
	<div class="container-xxl py-5 destination">
        <div class="container">
            
            <div class="row g-3">
				<div class="col-12  col-md-6 col-lg-5 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;" data-aos="fade-up">
                    <a class="position-relative d-block h-100 overflow-hidden" href="" >
                        <img class="img-fluid position-absolute w-100 h-100"  style="object-fit:cover;" src="tourist/tulsi1.webp" alt="" style="object-fit:cover;"   />
                        <!-- <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">20% OFF</div> -->
                        <div class="bg-white text-danger fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2"  id="tulsi-Udhayan">Tulsi Udhyan</div>
                    </a>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn mb-4" data-wow-delay="0.1s" data-aos="fade-up">
                            <a class="image-container" href="" >
                                <img class="img-fluid" style="object-fit:cover; "  src="tourist/dd1.webp" alt=""/>
                                <!-- <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">30% OFF</div> -->
                                <div class="bg-white text-danger fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2"  id="dogra-Regiment">Dogra Regiment</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12" data-wow-delay="0.3s" data-aos="fade-up">
                            <a class="image-container" href="" >
                                <img class="img-fluid" style="width:100%;height:34vh;object-fit:cover;" src="tourist/mak.png" alt=""  />
                                <!-- <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">25% OFF</div> -->
                                <div class="bg-white text-danger fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2"  id="makbara" >Makbara</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 " data-wow-delay="0.5s" data-aos="fade-up">
                          <a class="image-container" href="" >
                              <img class="img-fluid " src="tourist/c1.webp" alt=""  />
                              <!-- <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">35% OFF</div> -->
                              <div class="bg-white text-danger fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2"  id="company-Garden">Company Garden</div>
                          </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Destination End here -->


    <!-- Package Start -->
    <div class="container-xxl py-5" data-aos="fade-up">
        <div class="container" >
            <div class="text-center wow " data-wow-delay="0.1s" >
                <h6 class="section-title bg-white text-center text-danger px-3" >Packages</h6>
                <h1 class="mb-5" >Awesome Packages</h1>
            </div>
            <div class="row g-4 justify-content-center" >
                <div class="col-lg-4 col-md-6 wow "  data-wow-delay="0.1s" >
                    <div class="package-item"  data-aos="fade-up">
                        <div class="image-container" >
                            <img class="img-fluid" style="object-fit:cover;" src="tourist/saryu.jpg" alt=""  />
                        </div>
                        <div class="d-flex border-bottom" >
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2" ></i><span class="lead">Saryu</span></small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2" ></i><span class="lead">3 days</span></small>
                            <small class="flex-fill text-center py-2" ><i class="fa fa-user text-danger me-2 " style="font-size: 1.2rem;"></i><span class="lead p-1">2 Person</span></small>
                        </div>
                        <div class="text-center p-4" >
                            <!-- <h3 class="mb-0" >Rupees </h3>
                            <div class="mb-3" >
                                <small class="fa fa-star text-primary" ></small>
                                <small class="fa fa-star text-primary" ></small>
                                <small class="fa fa-star text-primary" ></small>
                                <small class="fa fa-star text-primary" ></small>
                                <small class="fa fa-star text-primary" ></small>
                            </div> -->
                            <p data-aos="fade-up" class="text-justify">The river is mentioned various times in the ancient Indian epic of Ramayana. Sarayu refers to Lower Ghaghara.</p>
                            <div class="d-flex justify-content-center mb-2" data-aos="fade-up" >
                                <!-- <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;" >Read More</a>
                                <a href="#" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;" >Book Now</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow " data-wow-delay="0.3s" data-aos="fade-up">
                    <div class="package-item" >
                        <div class="image-container" >
                            <img class="img-fluid"  style="object-fit:cover;" src="tourist/guptar.jpg" alt="" >
                        </div>
                        <div class="d-flex border-bottom" >
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2" ></i><span class="lead">Guptar Ghat</span></small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2" ></i><span class="lead">3 days</span></small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-danger me-2" style="font-size: 1.2rem;"></i ><span class="lead p-1">2 Person</span></small>
                        </div>
                        <div class="text-center p-4">
                            <!-- <h3 class="mb-0">Rupees</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"  ></small>
                                <small class="fa fa-star text-primary"  ></small>
                                <small class="fa fa-star text-primary"  ></small>
                                <small class="fa fa-star text-primary"  ></small>
                                <small class="fa fa-star text-primary"  ></small>
                            </div> -->
                            <p data-aos="fade-up" class="text-justify">This place is said to be the place where the Hindu deity Lord Ram meditated and undertook the 'Jal Samadhi' in the river.</p>
                            <div class="d-flex justify-content-center mb-2" data-aos="fade-up">
                                <!-- <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;" >Read More</a>
                                <a href="#" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;" >Book Now</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow " data-wow-delay="0.5s" data-aos="fade-up">
                    <div class="package-item">
                        <div class="image-container">
                            <img class="img-fluid" src="tourist/gulab.jpg" alt="" >
                        </div>
                        <div class="d-flex border-bottom" >
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2" ></i><span class="lead">Gulab Badi</span></small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2" ></i><span class="lead">3 days</span></small>
                            <small class="flex-fill text-center py-2" ><i class="fa fa-user text-danger me-2" style="font-size: 1.2rem;"></i><span class="lead p-1">2 Person</span></small>
                        </div>
                   
   				   <div class="text-center p-4">
                            <!-- <h3 class="mb-0">Rupees</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"  ></small>
                                <small class="fa fa-star text-primary"  ></small>
                                <small class="fa fa-star text-primary"  ></small>
                                <small class="fa fa-star text-primary"  ></small>
                                <small class="fa fa-star text-primary"  ></small>
                            </div> -->
                            <p data-aos="fade-up" class="text-justify">The monument is connected to a boali in Lucknow and used to be hiding place for  successors of  Nawab Shuja-ud-daula.</p>
                            <div class="d-flex justify-content-center mb-2" data-aos="fade-up">
                                <!-- <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;" >Read More</a>
                                <a href="#" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;" >Book Now</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Package End -->

    <section class="section bg-image overlay" style="background-image: url('images/hero_4.jpg');">
      <div class="container" >
        <div class="row align-items-center">
          <div class="col-12 col-md-12 text-center mb-4 mb-md-0 text-md-left" data-aos="fade-up">
            <h2 class="text-white font-weight-bold text-center ">A Best Place To Stay !</h2>
          </div>
          <!-- <div class="col-12 col-md-6 text-center text-md-right" data-aos="fade-up" data-aos-delay="200"> -->
            <!-- Extra large modal -->
            <!-- <a href="#" class="btn btn-outline-white-primary py-3 text-white px-5" data-toggle="modal" data-target="#reservation-form">Reserve Now</a> -->
          </div>
        </div>
      </div>
    </section>

      <?php 
         include('footer.php');
      ?>
    
      <!-- Modal -->
      <!-- <div class="modal fade " id="reservation-form" tabindex="-1" role="dialog" aria-labelledby="reservationFormTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            
            <div class="modal-body">
              <div class="row">
                <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">
                  
                  <form action="index.php"  method="post" class="bg-white p-4">
                    <div class="row mb-4"><div class="col-12"><h2>Reservation</h2></div></div>
                    <div class="row">
                      <div class="col-md-6 form-group">
                        <label class="text-black font-weight-bold" for="name">Name</label>
                        <input type="text" id="name" class="form-control ">
                      </div>
                      <div class="col-md-6 form-group">
                        <label class="text-black font-weight-bold" for="phone">Phone</label>
                        <input type="text" id="phone" class="form-control ">
                      </div>
                    </div>
                
                    <div class="row">
                      <div class="col-md-12 form-group">
                        <label class="text-black font-weight-bold" for="email">Email</label>
                        <input type="email" id="email" class="form-control ">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6 form-group">
                        <label class="text-black font-weight-bold" for="checkin_date">Date Check In</label>
                        <input type="text" id="checkin_date" class="form-control">
                      </div>
                      <div class="col-md-6 form-group">
                        <label class="text-black font-weight-bold" for="checkout_date">Date Check Out</label>
                        <input type="text" id="checkout_date" class="form-control">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6 form-group">
                        <label for="adults" class="font-weight-bold text-black">Adults</label>
                        <div class="field-icon-wrap">
                          <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                          <select name="" id="adults" class="form-control">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4+</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 form-group">
                        <label for="children" class="font-weight-bold text-black">Children</label>
                        <div class="field-icon-wrap">
                          <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                          <select name="" id="children" class="form-control">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4+</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row mb-4">
                      <div class="col-md-12 form-group">
                        <label class="text-black font-weight-bold" for="message">Notes</label>
                        <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 form-group">
                        <input type="submit" value="Reserve Now" class="btn btn-primary text-white py-3 px-5 font-weight-bold">
                      </div>
                    </div>
                  </form>

                </div>
                
              </div>
            </div>
           
          </div>
        </div>
      </div> -->
      
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/jquery-migrate-3.0.1.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/jquery.stellar.min.js"></script>
      <script src="js/jquery.fancybox.min.js"></script>
      <script src="js/jquery.easing.1.3.js"></script>
      
      
      
      <script src="js/aos.js"></script>
      
      <script src="js/bootstrap-datepicker.js"></script> 
      <script src="js/jquery.timepicker.min.js"></script> 

      <script src="js/main.js"></script>
</body>

</html>