<footer class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="widget contact-widget">
          <h3 class="widget-title">Contact</h3>
          <div class="contact-info">
            <address>
              <img src="<?php echo base_url();?>assets/images/icon-map-small.png" class="icon">
              <p><strong>Company name</strong> 563 Avenue Street, New York</p>
            </address>
            <a href="mailto:contact@companyname.com" class="mail"><img src="<?php echo base_url();?>assets/images/icon-envelope-small.png" class="icon">contact@companyname.com</a>
            <a href="tel:(500)942042259" class="phone"><img src="<?php echo base_url();?>assets/images/icon-phone-small.png" class="icon">(500)942042259</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="widget">
          <h3 class="widget-title">Social Media</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident et praesentium </p>
          <div class="social-links">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-pinterest"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="widget">
          <h3 class="widget-title">Newsletter</h3>
          <form action="#" class="subscribe-form">
            <input type="email" placeholder="Enter our email...">
            <input type="submit" value="Sign up">
          </form>
        </div>
      </div>
    </div>

    <div class="colophon">
      <p>Copyright 2016 Click N Style.  All rights reserved.</p>
    </div>
  </div>
</footer>
</div>


<script src="<?php echo base_url();?>assets/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrapValidator.min.js"></script>

<script src="<?php echo base_url();?>assets/js/plugins.js"></script>
<script src="<?php echo base_url();?>assets/js/app.js"></script>
<script type="text/javascript">
  $(function(){
      var validator = $('.contact-form').bootstrapValidator({
          fields : {
             password:{
               validators: {
                 trigger:'focus',
                 notEmpty:{
                   message: "Password is required <br> "
                 },
                 stringLength:{
                   min:6,
                   message: "Password must be 6 characters long <br>"
                 }
               }
             },
             confirmpassword:{
               validators:{
                 notEmpty:{
                   message: "Confirm Password is required <br> "
                 },
                 identical:{
                   field: "password",
                   message: "Password And Confirm Password must match <br> "
                 }
               }
             }

          }
      });
  });
</script>

</body>

</html>
