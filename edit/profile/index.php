<?php 
session_start(); 
if(!isset($_SESSION['user_id'])){
    header("https://localhost/vfl/404.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopper's Spot</title>
    <link rel="stylesheet" href="https://localhost/vfl/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://localhost/jobPrep/css/style.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css"
    />
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.html"><img src="https://localhost/vfl/images/logo.png" width="150px" alt="logo"></a>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="https://localhost/vfl/products/index.php">Products</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                        <?php
                        if(isset($_SESSION['user_id'])){
                            ?>
                        <li><a href="https://localhost/vfl/profile/?shop_id=<?php echo $_SESSION['user_id'] ?>">Account</a></li>
                        <?php
                        }
                        else{
                        ?>
                         <li><a href="https://localhost/vfl/login/">login</a></li>
                         <li><a href="https://localhost/vfl/signup/">signup</a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </nav>
                <a href="cart.html"><img src="https://localhost/vfl/images/shopping-cart.png" width="30px" height="30px"></a>
                <img src="https://localhost/vfl/images/menu_icon.png" class="menu-icon" onclick="menutoggle()">
            </div> 
        </div>
    </div> 
    <section>   
        <div class="container">
          <div class="row justify-content-center">
              <div class="col-12 col-lg-10 col-xl-8 mx-auto">
                  <h2 class="h3 mb-4 page-title">Settings</h2>
                  <div class="my-4">
                      <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                          <li class="nav-item">
                              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Profile</a>
                          </li>
                      </ul>
                      <form method="POST">
                          <div class="row mt-5 align-items-center">
                              <div class="col-md-3 text-center mb-5">
                                  <div class="avatar avatar-xl" style="max-height: 300px; max-width: 150px;">
                                      <img src="https://scontent-bom1-2.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/103389035_397913254436673_6997679116347609785_n.jpg?tp=1&_nc_ht=scontent-bom1-2.cdninstagram.com&_nc_cat=109&_nc_ohc=pTPxFFI3TG4AX9l01-K&ccb=7-4&oh=232a3cc2773f8fa3e0eb7772e0928c5a&oe=608744FB&_nc_sid=83d603" alt="..." class="avatar-img rounded-circle img-fluid" />
                                  </div>
                                  <input type="file" name="image">
                              </div>
                              <div class="col">
                                  <div class="row align-items-center">
                                      <div class="col-md-7">
                                          <h4 class="mb-1">Shop name</h4>
                                          <p class="small mb-3"><span class="badge badge-dark">Mumbai, India</span></p>
                                      </div>
                                  </div>
                                  <div class="row mb-4">
                                      <div class="col-md-7">
                                          <p class="text-muted">
                                              Bio
                                          </p>
                                      </div>                                      
                                  </div>
                              </div>
                          </div>
                          <hr class="my-4" />
                          <div class="form-row row">
                              <div class="form-group col-md-6">
                                  <label for="firstname">Firstname</label>
                                  <input type="text" id="firstname" class="form-control" placeholder="shop name" />
                              </div>
                              <div class="form-group col-md-6">
                                  <label for="lastname">Lastname</label>
                                  <input type="text" id="lastname" class="form-control" placeholder="Nobi" />
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="inputEmail">Email</label>
                              <input type="email" class="form-control" id="inputEmail" placeholder="email name" />
                          </div>
                          <div class="form-group">
                              <label for="inputAddress">Address</label>
                              <input type="text" class="form-control" id="inputAddress"/>
                          </div>
                          <div class="form-row row">
                              <div class="form-group col-md-8">
                                  <label for="inputCompany">Company</label>
                                  <input type="text" class="form-control" id="inputCompany" placeholder="Encoders" />
                              </div>
                              <div class="form-group col-md-4">
                                  <label for="inputCountry">Country</label>
                                  <input type="text" class="form-control" id="inputCountry" placeholder="India"/>
                              </div>
                              <div class="form-group col-md-6">
                                  <label for="inputPhone">Contact Number</label>
                                  <input placeholder="contact" type="numbers" class="form-control" id="inputPhone"/>
                              </div>                                  
                          </div>
                          <div class="form-row row">
                            <div class="mb-3 col-md-8">
                              <label for="formFile" class="form-label">CV</label>
                              <input class="form-control form-control" id="formFile" type="file" name="cv">
                            </div>   
                            <div class="mb-3 col-md-4">
                              <label for="formFileSm" class="form-label">Job Experience</label>
                              <select class="form-select form-select mb-3" aria-label=".form-select-sm example">
                                <option selected>Fresher</option>
                                <option value="1">1 - 3 years</option>
                                <option value="2">3 - 5 years</option>
                                <option value="3">5 + years</option>
                              </select>
                            </div>
                            <div class="mb-3 col-md-12">
                              <label for="formFileSm" class="form-label">Education / Currently Studying </label>
                              <select class="form-select form-select mb-3" aria-label=".form-select-sm example">
                                <option selected>Select</option>
                                <option value="1">10th Grade</option>
                                <option value="2">12th Grade</option>
                                <option value="3">Graduate</option>
                                <option value="4">Masters</option>
                                <option value="5">Ph.D</option>
                              </select>
                            </div>
                          </div>
                          
                          <hr class="my-4" />
                         
                          </div>
                          
                      </form>
                  </div>
              </div>
          </div>
          
          </div>
     <!-----offers----->
    <div class="offer">
         <div class="small-container">
             <div class="row">
                 <div class="col-2">
                     <img src="https://localhost/vfl/images/hoodie.png" class="offer-img">
                 </div>
                 <div class="col-2">
                     <p>Exclusively Available on Shopper's Spot.</p>
                     <h1>Red Hoodie for Women</h1>
                     <small>Comfortable Hoodies. Available in all sizes.</small>
                     <a href="#" class="btn">Buy Now &#10132;</a>
                 </div>
             </div>
         </div>
    </div>
    <!-----testimonial------>
    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                 <i class="fa fa-quote-left"></i>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, error voluptates? Voluptatum eius atque nobis modi accusamus minima amet nisi neque?</p> 
                   <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                   </div>
                   <h3>~Yohan Gupta</h3>
                </div>
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, error voluptates? Voluptatum eius atque nobis modi accusamus minima amet nisi neque?</p>
                      <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-o"></i>
                       <i class="fa fa-star-o"></i>
                    </div>
                    <h3>~Jaden Furtado</h3>
                   </div>
                   <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, error voluptates? Voluptatum eius atque nobis modi accusamus minima amet nisi neque?</p> 
                    <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-o"></i>
                    </div>
                    <h3>~Jash Dharia</h3>
                   </div>
            </div>
        </div>
    </div>
    <!-------js for toggle menu------>  
    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";
        
        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px")
            {
                MenuItems.style.maxHeight = "200px";
            }
            else
            {
                MenuItems.style.maxHeight = "0px";
            }
        }
    </script>
     <script src="https://localhost/jobPrep/js/script.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
      integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
      integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
      crossorigin="anonymous"
    ></script>
</body>
</html>
