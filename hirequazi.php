 <?php include "inc/header.php"; ?>
 <!--===============PAGE CONTENT==============-->
 <div id="content" class="site-content ">




     <div class="page_header_default style_one ">
         <div class="parallax_cover">
             <div class="simpleParallax"><img src="assets/images/page-header-default.jpg" alt="bg_image" class="cover-parallax"></div>
         </div>
         <div class="page_header_content">
             <div class="auto-container">
                 <div class="row">
                     <div class="col-md-12">
                         <div class="banner_title_inner">
                             <div class="title_page">
                                 Hire Our Trainers/Consultants
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-12">
                         <div class="breadcrumbs creote">
                             <ul class="breadcrumb m-auto">
                                 <li><a href="index.php">Home</a></li>
                                 <li class="active">Hire</li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>


     <?php
        if (isset($_POST['submit'])) {

            $name = $_POST['name'];
            $designation = $_POST['designation'];
            $organization = $_POST['organization'];
            $phone_no = $_POST['phone_no'];
            $email = $_POST['email'];
            $Yoursubject = $_POST['Yoursubject'];
            $message = $_POST['message'];

            include('inc/function.php');

            $email = email_send("Client Inquiry:Quazi Consultants ", "Client Inquiry", "
            Name: $name <br>
            Designation: $designation <br>
            Organization: $organization <br>
            Phone Number: $phone_no <br>
            Email: $email <br>
            Services: $Yoursubject <br><br>
            <b>Message:</b> $message <br>
            ", "ziko.quaziconsultants@gmail.com");
            if ($email == 'Sent') {
                $mess = "Thank you. We will be in touch shortly!";
            } else {
                $mess = "Please Try Again";
            }
        }
        ?>



     <div id="content" class="site-content ">

         <section class="contact-section">
             <!--===============spacing==============-->
             <div class="pd_top_90"></div>
             <!--===============spacing==============-->
             <div class="container">
                 <div class="row align-items-center">
                     <div class="col-xl-8 col-lg-8 mb-6 mb-lg-6 mb-xl-0">
                         <div class="contact_form_box_all type_one">
                             <div class="contact_form_box_inner">
                                 <div class="contact_form_shortcode">
                                     <form method="post" action=" ">
                                         <?php if (isset($mess)) { ?>
                                             <h3 class="h3 text-success text-center" ><?=$mess; ?></h3>
                                         <?php } else { ?>

                                             <div class="controls">
                                                 <div class="row">
                                                     <div class="col-sm-12">
                                                         <div class="form-group">
                                                             <label> Your Name<br></label>
                                                             <input type="text" name="name" placeholder="Your Name *" required="required" data-error="Enter Your Name">
                                                             <div class="help-block with-errors"></div>
                                                         </div>
                                                     </div>

                                                     <div class="col-sm-12">
                                                         <div class="form-group">
                                                             <label> Your Designation<br></label>
                                                             <input type="text" name="designation" placeholder="Your Designation *" required="required" data-error="Enter Your Designation">
                                                             <div class="help-block with-errors"></div>
                                                         </div>
                                                     </div>

                                                     <div class="col-sm-12">
                                                         <div class="form-group">
                                                             <label> Your Organization<br></label>
                                                             <input type="text" name="organization" placeholder="Your Organization *" required="required" data-error="Enter Your Organization">
                                                             <div class="help-block with-errors"></div>
                                                         </div>
                                                     </div>

                                                     <div class="col-sm-12">
                                                         <div class="form-group">
                                                             <label> Your Phone Number<br></label>
                                                             <input type="text" name="phone_no" placeholder="Your Phone Number *" required="required" data-error="Enter Your Phone Number">
                                                             <div class="help-block with-errors"></div>
                                                         </div>
                                                     </div>


                                                     <div class="col-sm-12">
                                                         <div class="form-group">
                                                             <label> Your Email<br></label>
                                                             <input type="text" name="email" required="required" placeholder="Email *" data-error="Enter Your Email Id">
                                                             <div class="help-block with-errors"></div>
                                                         </div>
                                                     </div>
                                                     <div class="col-sm-12">
                                                         <div class="form-group">
                                                             <label>Select Your Service<br></label>
                                                             <select name="Yoursubject" id="">
                                                                 <option value="">Services</option>
                                                                 <option value="Traning">Traning</option>
                                                                 <option value="Coching">Coching</option>
                                                                 <option value="Consultancy">Consultancy</option>
                                                             </select>
                                                         </div>
                                                     </div>


                                                     <div class="col-sm-12">
                                                         <div class="form-group">
                                                             <label> Your Message<br></label>
                                                             <textarea name="message" placeholder="Additional Information... (Optional) " rows="3" required="required" data-error="Please, leave us a message."></textarea>
                                                             <div class="help-block with-errors"></div>
                                                         </div>
                                                     </div>

                                                     <div class="col-sm-12">
                                                         <div class="form-group mg_top apbtn">
                                                             <input class="theme_btn" type="submit" name="submit" value="Submit" style="pointer-events: all; cursor: pointer;">
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>

                                         <?php } ?>

                                     </form>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-xl-4 col-lg-4 pd_left_30">

                         <!--===============spacing==============-->
                         <div class="pd_bottom_40"></div>
                         <!--===============spacing==============-->

                     </div>
                 </div>
             </div>
             <!--===============spacing==============-->
             <div class="pd_top_70"></div>
             <!--===============spacing==============-->
         </section>
     </div>

     <?php include "inc/footer.php"; ?>