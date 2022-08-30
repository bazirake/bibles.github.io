

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bible society of Rwanda</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="../header.css"/>
    <link rel="stylesheet" href="../home.css"/>
    <link rel="stylesheet" href="../index.css"/>
    <link rel="stylesheet" href="../footer.css"/>
    <link rel="stylesheet" href="../news.css"/>
    <link rel="stylesheet" href="../bible.css"/>
    <link rel="stylesheet" href="../children.css"/>
    <link rel="stylesheet" href="../youth.css"/>
    <link rel="stylesheet" href="../couple.css"/>
    <link rel="stylesheet" href="../resource.css"/>
    <link rel="stylesheet" href="../register.css"/>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="register.php">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>
<body>

<section>
    <div class="container-fluids">
        <!--start of navigation bar menu-->
        <header>
            <nav class="navbar navbar-expand-lg navbar navbar-light" id="navbar">
                <div class="container-fluid">
                    <a class="navbar-brand" href="../index.php">Scripture Union </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navs">
                        <span class="oi oi-menu"></span> Menu
                    </button>

                    <div class="collapse navbar-collapse justify-content-end" id="navs">
                        <form class="search-form">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <button type="button" class="btn btn-primary "><i class="bi-search"></i></button>
                            </div>
                        </form>
                        <ul class="navbar-nav">
                            <li class="nav-item active"> <a href="../index.php" class=" nav-link" >Home</a></li>
                            <!--<li class="nav-item "><a routerLink="about" class="nav-link">About</a></li>-->
                            <div class="nav-item dropdown">
                                <li class="nav-item "><a href="#" class="nav-link dropdown-toggle"> Ministries </a></li>
                                <div class="dropdown-menu">
                                    <li class="nav-item "><a href="bible.php" class="dropdown-item"> . Bible Ministry </a></li>
                                    <li class="nav-item " style="background-color: blanchedalmond;"><a href="#" class="dropdown-item"> Family Ministry </a></li>
                                    <li class="nav-item "><a href="children.php" class="dropdown-item"> .Children Ministry </a></li>
                                    <li class="nav-item "><a href="youth.php" class="dropdown-item"> .Youth Ministry </a></li>
                                    <li class="nav-item "><a href="couple.php" class="dropdown-item"> .Couple Ministry </a></li>
                                </div>
                            </div>
                            <div class="nav-item dropdown">
                                <li class="nav-item "><a href="#" class="nav-link dropdown-toggle"> Resources</a></li>
                                <div class="dropdown-menu">
                                    <li class="nav-item "><a href="resource.php" class="dropdown-item"> Resources </a></li>
                                    <li class="nav-item "><a href="training.php" class="dropdown-item"> Training Center </a></li>
                                </div>
                            </div>
                            <li class="nav-item"><a href="about.php" class="nav-link"> About Us </a></li>
                            <li class="nav-item"><a href="news_story.php" class="nav-link"> News and Stories </a></li>
                        </ul>
                    </div>
                    <div class="register">
                        <a href="contact.php" class="nav-item nav-link rounded">Contact Us</a>
                    </div>
                </div>
            </nav>
        </header>
        <!--end of navigation bar menu-->
        <!--start of carousel-->
        <!--Start of container-->
        <section>
            <div class="container my-4">
                <div class="card  px-4 w-100 ">
                    <h4 class="text-center p-4">Register your Personal Information </h4>
                    <form id="member-form" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Firstname</label>
                                    <div class="col-sm-8">
                                        <input type="text" placeholder="Firstname" name="fname" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Lastname</label>
                                    <div class="col-sm-8">
                                        <input type="text" placeholder="Lastname" name="lname" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">DateOfBirth</label>
                                    <div class="col-sm-8">
                                        <input type="date" name="dates" class="form-control" required >
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Email</label>
                                    <div class="col-sm-8">
                                        <input type="email" name="email" placeholder="Email" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">LocalCommunity</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="locmunity" class="form-control" placeholder="Rusizi"  required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                 <label class="col-sm-4 col-form-label">CurrentCommunity</label>
                                 <div class="col-sm-8">
                                    <input type="text" name="curcomunity" placeholder="Kigali" class="form-control" required>
                                 </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Phone</label>
                                    <div class="col-sm-8">
                                        <input type="phone" name="phone" class="form-control" id="phone" placeholder="Eg:0787124101" required >
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Country</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="country" placeholder="Eg:Rwanda" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Province</label>
                                    <div class="col-sm-8">
                                       <input type="text" name="province" class="form-control" placeholder="Eg:West" required >
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">District</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="district" placeholder="Eg:Rusizi" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Sector</label>
                                   <div class="col-sm-8">
                                     <input type="text" name="sector" class="form-control" placeholder="Eg:Gitambi" required >
                                   </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Cell</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="cell" placeholder="Eg:Mashesha" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-6">
                              <div class="form-group row">
                               <label class="col-sm-4 col-form-label">Village</label>
                                <div class="col-sm-8">
                                  <input type="text" name="village" placeholder="karama" class="form-control" required>
                                </div>
                               </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                               <div class="col-md-6 r">
                                   <div class="alert alert-warning alert-dismissible fade show" role="alert" id="feedback">
                                        <span id="data-show"></span>
                                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                           <span aria-hidden="true">&times;</span>
                                       </button>
                                   </div>
                                </div>
                                 <div class="col-md-6">
                                     <div class="float-right mb-2">
                                         <button type="submit"  color="accent" class="btn btn-success">Cancel</button>
                                         <button  id=save-id color="primary" type="submit" class="btn btn-primary ml-4 ">
                                             Save
                                         </button>
                                     </div>
                                 </div>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!--end of container-->

        <!--start of footer -->
        <footer class="footer section" >
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md">
                        <div class="footer-widget mb-4">
                            <h2 class="heading-2">Scripture Union.</h2>
                            <p>Ligue pour la Lecture de la Bible, Ligue pour la Lecture de la Bible.</p>
                            <ul class="footer-social list-unstyled mt-5">
                                <li class="animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                                <li class="animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                                <li class="animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="footer-widget mb-4 ml-md-4">
                            <h2 class="heading-2">Information </h2>
                            <ul class="uls list-unstyled">
                                <li class="lis"><a class="as" href="#"><span class="fa spans fa-chevron-right mr-2"></span>Projects</a></li>
                                <li class="lis"><a class="as" href="#"><span class="fa spans fa-chevron-right mr-2"></span>History</a></li>
                                <li class="lis"><a class="as" href="#"><span class="fa spans fa-chevron-right mr-2"></span> Partners </a></li>
                                <li class="lis"><a class="as" href="#"><span class="fa spans fa-chevron-right mr-2"></span>Become a member</a></li>
                                <li class="lis"><a class="as" href="#"><span class="fa spans fa-chevron-right mr-2"></span>Donate</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="footer-widget mb-4 ml-md-4">
                            <h2 class="heading-2">About Us</h2>
                            <ul class="list-unstyled">
                                <li class="lis"><a class="as" href="#"><span class="fa fa-chevron-right mr-2"></span>Our Story</a></li>
                                <li class="lis"><a class="as" href="#"><span class="fa fa-chevron-right mr-2"></span>Meet the team</a></li>
                                <li class="lis"><a class="as" href="#"><span class="fa fa-chevron-right mr-2"></span>Careers</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="footer-widget mb-4">
                            <h2 class="heading-2">Links</h2>
                            <ul class="uls list-unstyled">
                                <li class="lis"><a class="as" href="#"><span class="fa fa-chevron-right mr-2"></span>www.onehope.com</a></li>
                                <li class="lis"><a class="as" href="#"><span class="fa fa-chevron-right mr-2"></span></a></li>
                                <li class="lis"><a class="as" href="#"><span class="fa fa-chevron-right mr-2"></span></a></li>
                                <li class="lis"><a class="as" href="#"><span class="fa fa-chevron-right mr-2"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="footer-widget mb-4">
                            <h2 class="heading-2">Have a Questions?</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved Scripture Union @2021 <i class="icon-heart color-danger" aria-hidden="true"></i><a href="https://colorlib.com" target="_blank"></a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!--end of footer-->
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
    $("#feedback").css({'display':'none'});
    $('#member-form').submit(function(e){
     var path='../database/api/member.php';
      e.preventDefault();
       var fdata= $(this).serialize();
        $.ajax({
        type: "POST",
        data:fdata,
        dataType:'json',
        url:path,
        success:function(response){
          if(response.status===200)
            {
             $("#feedback").css({'display':'block'});
             $('#data-show').html(response.mess);
             document.getElementById("member-form").reset();
            }
            else if(response.status===404){
             $("#feedback").css({'display':'block'});
             $('#data-show').html(response.me);
            }
          }
        });
    });
</script>
</body>
</body>
</html>