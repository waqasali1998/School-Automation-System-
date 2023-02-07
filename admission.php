<?php
include("admin/conn.php");
?>
<?php
session_start();
$_SESSION['page'] = 'admission';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kids School</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
    .lebal_register {
        color: white !important;
        font-weight: 600 !important;
    }
    .form-sel {
    display: block;
    width: 100%;
    height: calc(2.1em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 5px;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
    </style>
</head>

<body>
    <!-- Navbar Start -->
    <?php
    include('header.php');
  
  ?>
    <!-- Navbar End -->

    <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-3 font-weight-bold text-white">Admission</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <p class="m-0 px-2">/</p>
                <p class="m-0">Admission</p>
            </div>
        </div>
    </div>
    <!-- Header Start -->
    <!-- <div class="container-fluid bg-primary px-0 px-md-5 mb-5">
        <div class="row align-items-center px-3">
            <div class="col-lg-6 text-center text-lg-left">
                <h4 class="text-white mb-4 mt-5 mt-lg-0">Kids Learning Center</h4>
                <h1 class="display-3 font-weight-bold text-white">New Approach to Kids Education</h1>
                <p class="text-white mb-4">Sea ipsum kasd eirmod kasd magna, est sea et diam ipsum est amet sed sit.
                    Ipsum dolor no justo dolor et, lorem ut dolor erat dolore sed ipsum at ipsum nonumy amet. Clita
                    lorem dolore sed stet et est justo dolore.</p>
                <a href="" class="btn btn-secondary mt-1 py-3 px-5">Learn More</a>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <img class="img-fluid mt-5" src="img/header.png" alt="">
            </div>
        </div>
    </div> -->
    <!-- Header End -->


    <!-- Facilities Start -->
    <!-- <div class="container-fluid pt-5">
        <div class="container pb-3">
            <div class="row">
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                        <i class="flaticon-050-fence h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <h4>Play Ground</h4>
                            <p class="m-0">Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero lorem amet elitr vero...</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                        <i class="flaticon-022-drum h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <h4>Music and Dance</h4>
                            <p class="m-0">Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero lorem amet elitr vero...</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                        <i class="flaticon-030-crayons h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <h4>Arts and Crafts</h4>
                            <p class="m-0">Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero lorem amet elitr vero...</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                        <i class="flaticon-017-toy-car h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <h4>Safe Transportation</h4>
                            <p class="m-0">Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero lorem amet elitr vero...</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                        <i class="flaticon-025-sandwich h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <h4>Healthy food</h4>
                            <p class="m-0">Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero lorem amet elitr vero...</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px;">
                        <i class="flaticon-047-backpack h1 font-weight-normal text-primary mb-3"></i>
                        <div class="pl-4">
                            <h4>Educational Tour</h4>
                            <p class="m-0">Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero lorem amet elitr vero...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Facilities Start -->


    <!-- About Start -->
    <!-- <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-5 mb-lg-0" src="img/about-1.jpg" alt="">
                </div>
                <div class="col-lg-7">
                    <p class="section-title pr-5"><span class="pr-2">Learn About Us</span></p>
                    <h1 class="mb-4">Best School For Your Kids</h1>
                    <p>Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos,
                        ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est
                        dolor</p>
                    <div class="row pt-2 pb-4">
                        <div class="col-6 col-md-4">
                            <img class="img-fluid rounded" src="img/about-2.jpg" alt="">
                        </div>
                        <div class="col-6 col-md-8">
                            <ul class="list-inline m-0">
                                <li class="py-2 border-top border-bottom"><i class="fa fa-check text-primary mr-3"></i>Labore eos amet dolor amet diam</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Etsea et sit dolor amet ipsum</li>
                                <li class="py-2 border-bottom"><i class="fa fa-check text-primary mr-3"></i>Diam dolor diam elitripsum vero.</li>
                            </ul>
                        </div>
                    </div>
                    <a href="" class="btn btn-primary mt-2 py-2 px-4">Learn More</a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- About End -->


    <!-- Class Start -->
    <!-- <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Popular Classes</span></p>
                <h1 class="mb-4">Classes for Your Kids</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-5">
                    <div class="card border-0 bg-light shadow-sm pb-2">
                        <img class="card-img-top mb-2" src="img/class-1.jpg" alt="">
                        <div class="card-body text-center">
                            <h4 class="card-title">Drawing Class</h4>
                            <p class="card-text">Justo ea diam stet diam ipsum no sit, ipsum vero et et diam ipsum duo et no et, ipsum ipsum erat duo amet clita duo</p>
                        </div>
                        <div class="card-footer bg-transparent py-4 px-5">
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right"><strong>Age of Kids</strong></div>
                                <div class="col-6 py-1">3 - 6 Years</div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right"><strong>Total Seats</strong></div>
                                <div class="col-6 py-1">40 Seats</div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right"><strong>Class Time</strong></div>
                                <div class="col-6 py-1">08:00 - 10:00</div>
                            </div>
                            <div class="row">
                                <div class="col-6 py-1 text-right border-right"><strong>Tution Fee</strong></div>
                                <div class="col-6 py-1">$290 / Month</div>
                            </div>
                        </div>
                        <a href="" class="btn btn-primary px-4 mx-auto mb-4">Join Now</a>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="card border-0 bg-light shadow-sm pb-2">
                        <img class="card-img-top mb-2" src="img/class-2.jpg" alt="">
                        <div class="card-body text-center">
                            <h4 class="card-title">Language Learning</h4>
                            <p class="card-text">Justo ea diam stet diam ipsum no sit, ipsum vero et et diam ipsum duo et no et, ipsum ipsum erat duo amet clita duo</p>
                        </div>
                        <div class="card-footer bg-transparent py-4 px-5">
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right"><strong>Age of Kids</strong></div>
                                <div class="col-6 py-1">3 - 6 Years</div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right"><strong>Total Seats</strong></div>
                                <div class="col-6 py-1">40 Seats</div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right"><strong>Class Time</strong></div>
                                <div class="col-6 py-1">08:00 - 10:00</div>
                            </div>
                            <div class="row">
                                <div class="col-6 py-1 text-right border-right"><strong>Tution Fee</strong></div>
                                <div class="col-6 py-1">$290 / Month</div>
                            </div>
                        </div>
                        <a href="" class="btn btn-primary px-4 mx-auto mb-4">Join Now</a>
                    </div>
                </div>
                <div class="col-lg-4 mb-5">
                    <div class="card border-0 bg-light shadow-sm pb-2">
                        <img class="card-img-top mb-2" src="img/class-3.jpg" alt="">
                        <div class="card-body text-center">
                            <h4 class="card-title">Basic Science</h4>
                            <p class="card-text">Justo ea diam stet diam ipsum no sit, ipsum vero et et diam ipsum duo et no et, ipsum ipsum erat duo amet clita duo</p>
                        </div>
                        <div class="card-footer bg-transparent py-4 px-5">
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right"><strong>Age of Kids</strong></div>
                                <div class="col-6 py-1">3 - 6 Years</div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right"><strong>Total Seats</strong></div>
                                <div class="col-6 py-1">40 Seats</div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right"><strong>Class Time</strong></div>
                                <div class="col-6 py-1">08:00 - 10:00</div>
                            </div>
                            <div class="row">
                                <div class="col-6 py-1 text-right border-right"><strong>Tution Fee</strong></div>
                                <div class="col-6 py-1">$290 / Month</div>
                            </div>
                        </div>
                        <a href="" class="btn btn-primary px-4 mx-auto mb-4">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Class End -->


    <!-- Registration Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-5">
                    <p class="section-title pr-5"><span class="pr-2">Book A Seat</span></p>
                    <h1 class="mb-4">Book A Seat For Your Kid</h1>
                    <p>Kids School has always strived for excellence and we are strongly committed to providing ease and comfort to the community. For your safety and convenience, you can apply for an admission online on our website by filling out the form below and our representative shall get in touch with you. You may also like to visit the nearest campus to be able to make a more informed decision with regards to the choice of campus.</p>
                    <ul class="list-inline m-0">
                        <li class="py-2"><i class="fa fa-check text-success mr-3"></i>To create an educational system that would.
                        </li>
                        <li class="py-2"><i class="fa fa-check text-success mr-3"></i>To challenge each child according to his/her ability.</li>
                        <li class="py-2"><i class="fa fa-check text-success mr-3"></i>DTo encourage students to take responsibility for their own behavior and learning.
                        </li>
                    </ul>
                    <a href="" class="btn btn-primary mt-4 py-2 px-4">Book Now</a>
                </div>
                <div class="col-lg-12">
                    <div class="card border-0">
                        <div class="card-header bg-secondary text-center p-4">
                            <h1 class="text-white m-0">Book A Seat</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-primary p-5">
                            <form action="register_student.php" method="POST">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="fname" class="lebal_register">First Name</label>
                                            <input type="text" id="fname" name="fname" class="form-control border-0 p-4"
                                                placeholder="Enter First Name" required="required" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="lname" class="lebal_register">Last Name</label>
                                            <input type="text" id="lname" name="lname" class="form-control border-0 p-4"
                                                placeholder="Enter Last Name" required="required" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="Gardian" class="lebal_register">Gardian's Name</label>
                                            <input type="text" id="Gardian" name="Gardian" class="form-control border-0 p-4"
                                                placeholder="Enter Gardian's Name" required="required" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="Email" class="lebal_register">Email</label>
                                            <input type="text" id="Email" name="Email" class="form-control border-0 p-4"
                                                placeholder="Enter Email" required="required" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="Email" class="lebal_register">Phone</label>
                                            <input type="text" id="Phone" name="Phone" class="form-control border-0 p-4"
                                                placeholder="Enter Phone" required="required" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="dob" class="lebal_register">Date-of-birth</label>
                                            <input type="date" id="dob" name="dob" class="form-control border-0 p-4"
                                                placeholder="Enter Date-of-birth" required="required" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="NIC" class="lebal_register">NIC Number</label>
                                            <input type="text" id="NIC" name="NIC" class="form-control border-0 p-4"
                                                placeholder="Enter NIC Number" required="required" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="Father_nic" class="lebal_register">Father's NIC Number</label>
                                            <input type="text" id="Father_nic" name="Father_nic" class="form-control border-0 p-4"
                                                placeholder="Enter Father's NIC Number" required="required" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="Gender" class="lebal_register">Gender</label>
                                            <input type="text" id="Gender" name="Gender" class="form-control border-0 p-4"
                                                placeholder="Enter Gender" required="required" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="class" class="lebal_register">Class</label>
                                            <br>
                                            <select class="form-sel border-0" id="class" name="class" aria-label="Default select example">
                                                <option selected disabled>Select Any Option</option>
                                                <?php
$sql = 'SELECT * FROM classes';
$result = mysqli_query($conn,$sql);
if($result)
{
    foreach($result as $row)
    {
        echo '<option value="'.$row['class'].'">'.$row['class'].'</option>';
    }
}
                                                        ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="Address" class="lebal_register">Address</label>
                                            <textarea class="form-control" name="Address" id="Address" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" placeholder="Father name"
                                        required="required" />
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" placeholder="Contact Number "
                                        required="required" />
                                </div>



                                <div class="form-group">
                                    <input type="date" class="form-control border-0 p-4" placeholder="Date of Birthday"
                                        required="required" />
                                </div>



                                <div class="form-group">
                                    <input type="email" class="form-control border-0 p-4" placeholder="Your Email"
                                        required="required" />
                                </div>







                                <div class="form-group">
                                    <select class="form-select border-0 px-4" style="height: 47px;">
                                        <option selected>Select A Class</option>
                                        <option value="1">Class 1</option>
                                        <option value="2">Class 1</option>
                                        <option value="3">Class 1</option>
                                    </select>
                                </div> -->
                                <div>
                                    <button class="btn btn-secondary btn-block border-0 py-3" type="submit" name="book">Book
                                        Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration End -->


    <!-- Team Start -->
    <!-- <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Our Teachers</span></p>
                <h1 class="mb-4">Meet Our Teachers</h1>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 text-center team mb-5">
                    <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                        <img class="img-fluid w-100" src="img/team-1.jpg" alt="" >
                        <div
                            class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <h4>Julia Smith</h4>
                    <i>Music Teacher</i>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-5">
                    <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                        <img class="img-fluid w-100" src="img/team-2.jpg" alt="" >
                        <div
                            class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <h4>Jhon Doe</h4>
                    <i>Language Teacher</i>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-5">
                    <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                        <img class="img-fluid w-100" src="img/team-3.jpg" alt="" >
                        <div
                            class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <h4>Mollie Ross</h4>
                    <i>Dance Teacher</i>
                </div>
                <div class="col-md-6 col-lg-3 text-center team mb-5">
                    <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                        <img class="img-fluid w-100" src="img/team-4.jpg" alt="" >
                        <div
                            class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;"
                                href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <h4>Donald John</h4>
                    <i>Art Teacher</i>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Team End -->


    <!-- Testimonial Start -->
    <!-- <div class="container-fluid py-5">
        <div class="container p-0">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Testimonial</span></p>
                <h1 class="mb-4">What Parents Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item px-3">
                    <div class="bg-light shadow-sm rounded mb-4 p-4">
                        <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                        Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor
                        ipsum clita
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle" src="img/testimonial-1.jpg" style="width: 70px; height: 70px;"
                            alt="Image">
                        <div class="pl-3">
                            <h5>Parent Name</h5>
                            <i>Profession</i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item px-3">
                    <div class="bg-light shadow-sm rounded mb-4 p-4">
                        <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                        Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor
                        ipsum clita
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle" src="img/testimonial-2.jpg" style="width: 70px; height: 70px;"
                            alt="Image">
                        <div class="pl-3">
                            <h5>Parent Name</h5>
                            <i>Profession</i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item px-3">
                    <div class="bg-light shadow-sm rounded mb-4 p-4">
                        <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                        Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor
                        ipsum clita
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle" src="img/testimonial-3.jpg" style="width: 70px; height: 70px;"
                            alt="Image">
                        <div class="pl-3">
                            <h5>Parent Name</h5>
                            <i>Profession</i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item px-3">
                    <div class="bg-light shadow-sm rounded mb-4 p-4">
                        <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                        Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor
                        ipsum clita
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle" src="img/testimonial-4.jpg" style="width: 70px; height: 70px;"
                            alt="Image">
                        <div class="pl-3">
                            <h5>Parent Name</h5>
                            <i>Profession</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <!-- <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Latest Blog</span></p>
                <h1 class="mb-4">Latest Articles From Blog</h1>
            </div>
            <div class="row pb-3">
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow-sm mb-2">
                        <img class="card-img-top mb-2" src="img/blog-1.jpg" alt="">
                        <div class="card-body bg-light text-center p-4">
                            <h4 class="">Diam amet eos at no eos</h4>
                            <div class="d-flex justify-content-center mb-3">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                                <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                            </div>
                            <p>Sed kasd sea sed at elitr sed ipsum justo, sit nonumy diam eirmod, duo et sed sit eirmod kasd clita tempor dolor stet lorem. Tempor ipsum justo amet stet...</p>
                            <a href="" class="btn btn-primary px-4 mx-auto my-2">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow-sm mb-2">
                        <img class="card-img-top mb-2" src="img/blog-2.jpg" alt="">
                        <div class="card-body bg-light text-center p-4">
                            <h4 class="">Diam amet eos at no eos</h4>
                            <div class="d-flex justify-content-center mb-3">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                                <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                            </div>
                            <p>Sed kasd sea sed at elitr sed ipsum justo, sit nonumy diam eirmod, duo et sed sit eirmod kasd clita tempor dolor stet lorem. Tempor ipsum justo amet stet...</p>
                            <a href="" class="btn btn-primary px-4 mx-auto my-2">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow-sm mb-2">
                        <img class="card-img-top mb-2" src="img/blog-3.jpg" alt="">
                        <div class="card-body bg-light text-center p-4">
                            <h4 class="">Diam amet eos at no eos</h4>
                            <div class="d-flex justify-content-center mb-3">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                                <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                            </div>
                            <p>Sed kasd sea sed at elitr sed ipsum justo, sit nonumy diam eirmod, duo et sed sit eirmod kasd clita tempor dolor stet lorem. Tempor ipsum justo amet stet...</p>
                            <a href="" class="btn btn-primary px-4 mx-auto my-2">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Blog End -->


    <!-- Footer Start -->
    <?php
    include('footer.php');
  
  ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary p-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>