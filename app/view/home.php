<div id="welcome-section">
  <div class="row">
    <div class="wc-video">
      <video controls>
        <source src="public/videos/about-vid.mp4" type="video/mp4">
      </video>
    </div>
    <div class="wc-content">
      <small>WELCOME</small>
      <h2>Boyet's Saddlery</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
        laborum.
      </p>
    </div>
  </div>
</div>

<div id="product-section">
  <div class="row">
    <h2>Our Products</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
      magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. </p>
    <div class="pr-container">
      <div class="img-container">
        <img src="public/images/content/product-img.jpg" alt="">
        <h4>Ordinary Saddle</h4>
      </div>
      <div class="img-container">
        <img src="public/images/content/product-img.jpg" alt="">
        <h4>Semi-Western Saddle</h4>
      </div>
      <div class="img-container">
        <img src="public/images/content/product-img.jpg" alt="">
        <h4>Western Saddle</h4>
      </div>
      <div class="img-container">
        <img src="public/images/content/product-img.jpg" alt="">
        <h4>Leathercraft</h4>
      </div>
    </div>
    <a href="services.php#content">View More</a>
  </div>
</div>

<div id="tagline-section">
  <div class="row">
    <h2>We Hand Made All Our Products!</h2>
    <a href="#contactus">Contact Us</a>
  </div>
</div>

<div id="gallery-section">
  <div class="row">
    <h2>Our Gallery</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
      magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. </p>
    <div class="gallery-container">
      <img src="public/images/content/product-img.jpg" alt="">
      <img src="public/images/content/product-img.jpg" alt="">
      <img src="public/images/content/product-img.jpg" alt="">
      <img src="public/images/content/product-img.jpg" alt="">
    </div>
    <a href="services.php#content">View More</a>
  </div>
</div>

<div id="contact-section">
  <div class="row">
    <h2>Get in Touch With Us</h2>
    <p>
      We will be glad to answer your questions, feel free to ask a piece of information or a quotation.
    </p>
    <p> We are looking forward to work with you.</p>
    <div class="form-container">
      <form action="sendContactForm" method="post" class="sends-email ctc-form">
        <div class="flex">
          <label><span class="ctc-hide">Name</span>
            <input type="text" name="name" placeholder="Name:">
          </label>
          <label><span class="ctc-hide">Address</span>
            <input type="text" name="address" placeholder="Address:">
          </label>
        </div>
        <div class="flex">
          <label><span class="ctc-hide">Mobile Number</span>
            <input type="text" name="phone" placeholder="Phone:">
          </label>
          <label><span class="ctc-hide">Email</span>
            <input type="text" name="email" placeholder="Email:">
          </label>
        </div>
        <label><span class="ctc-hide">Message</span>
          <textarea name="message" cols="30" rows="10" placeholder="Message:"></textarea>
        </label>
        <div class="g-recaptcha"></div>
        <label>
          <input type="checkbox" name="consent" class="consentBox">I hereby consent to having this website store my
          submitted information so that they can respond to my inquiry.
        </label><br>
        <?php if( $this->siteInfo['policy_link'] ): ?>
        <label>
          <input type="checkbox" name="termsConditions" class="termsBox" /> I hereby confirm that I have read and
          understood this website's <a href="<?php $this->info("policy_link"); ?>" target="_blank">Privacy Policy.</a>
        </label>
        <?php endif ?>
        <button type="submit" class="ctcBtn" disabled>Submit</button>
      </form>
    </div>
  </div>
</div>

<div id="google-map">
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1886.1566759264358!2d120.62126625802034!3d16.41827347000713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3391a6aa8587a9eb%3A0xc29930dc288cbad5!2s13%20Gibraltar%20Rd%2C%20Baguio%2C%20Benguet!5e1!3m2!1sen!2sph!4v1613716809324!5m2!1sen!2sph"
    frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>