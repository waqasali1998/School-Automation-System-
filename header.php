<?php
if($_SESSION['page']  == 'about')
{
    $_SESSION['active1'] = "active";
}
else{
    $_SESSION['active1'] = "";
}
if($_SESSION['page']  == 'index')
{
    $_SESSION['active2'] = "active";
}
else{
    $_SESSION['active2'] = "";
}
if($_SESSION['page']  == 'admission')
{
    $_SESSION['active3'] = "active";
}
else{
    $_SESSION['active3'] = "";
}
if($_SESSION['page']  == 'work')
{
    $_SESSION['active4'] = "active";
}
else{
    $_SESSION['active4'] = "";
}
if($_SESSION['page']  == 'class')
{
    $_SESSION['active5'] = "active";
}
else{
    $_SESSION['active5'] = "";
}
if($_SESSION['page']  == 'gallery')
{
    $_SESSION['active6'] = "active";
}
else{
    $_SESSION['active6'] = "";
}

if($_SESSION['page']  == 'contact')
{
    $_SESSION['active7'] = "active";
}
else{
    $_SESSION['active7'] = "";
}
if($_SESSION['page']  == 'reviews')
{
    $_SESSION['active8'] = "active";
}
else{
    $_SESSION['active8'] = "";
}


?>


<div class="container-fluid bg-light position-relative shadow">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
            <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px;">
                <i class="flaticon-043-teddy-bear"></i>
                <span class="text-primary">School Automation System</span>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav font-weight-bold mx-auto py-0">
                    <a href="index.php" class="nav-item nav-link <?php echo $_SESSION['active2']; ?>">Home</a>
                    <a href="about.php" class="nav-item nav-link <?php echo $_SESSION['active1']; ?>">About</a>
                    <a href="class.php" class="nav-item nav-link <?php echo $_SESSION['active5']; ?>">Classes</a>
                    <a href="workWithUs.php" class="nav-item nav-link <?php echo $_SESSION['active4']; ?>">Work with us</a>
                    <a href="reviews.php" class="nav-item nav-link <?php echo $_SESSION['active8']; ?>">Give a feedback</a>
                    <a href="gallery.php" class="nav-item nav-link <?php echo $_SESSION['active6']; ?>">Gallery</a>
                    <a href="admission.php" class="nav-item nav-link <?php echo $_SESSION['active3']; ?>">Admission</a>
                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="blog.php" class="dropdown-item">Blog Grid</a>
                            <a href="single.php" class="dropdown-item">Blog Detail</a>
                        </div>
                    </div> -->
                    <a href="contact.php" class="nav-item nav-link <?php echo $_SESSION['active7']; ?>">Contact</a>
                </div>
                <a href="admission.php" class="btn btn-primary px-4">Join Class</a>
            </div>
        </nav>
    </div>