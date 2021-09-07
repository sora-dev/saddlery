<footer>
  <div id="footer">
    <div class="ft-top">
      <div class="row">

      </div>
    </div>
    <div class="ft-mid">
      <div class="row">

      </div>
    </div>
    <div class="ft-bot">
      <div class="row">
        <p class="copy">
          © <?php echo date("Y"); ?>. <?php $this->info("company_name"); ?> All Rights Reserved.
          <?php if( $this->siteInfo['policy_link'] ): ?>
          <a href="<?php $this->info("policy_link"); ?>">Privacy Policy</a>.
          <?php endif ?>
        </p>

      </div>
    </div>
  </div>
</footer>

<a href="tel:<?php $this->info("phone") ?>" class="cta"><?php $this->info("phone") ?></a>

<label for="g-recaptcha-response"> <span class="ctc-hide">Recaptcha</span>
  <textarea id="g-recaptcha-response" class="destroy-on-load"></textarea>
</label>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo URL; ?>/public/scripts/sendform.js" data-view="<?php echo $view; ?>" id="sendform"></script>
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>  -->
<script src="<?php echo URL; ?>public/scripts/responsive-menu.js"></script>
<script src="https://unpkg.com/sweetalert2@7.20.10/dist/sweetalert2.all.js"></script>
<script>
window.onscroll = function() {
  myFunction()
};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
<?php if( $this->siteInfo['cookie'] ): ?>
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
<script src="<?php echo URL; ?>public/scripts/cookie-script.js"></script>
<?php endif ?>

<?php if(in_array($view,["home","contact"])): ?>
<script src='//www.google.com/recaptcha/api.js?onload=captchaCallBack&render=explicit' async defer></script>
<script>
var captchaCallBack = function() {
  $('.g-recaptcha').each(function(index, el) {
    grecaptcha.render(el, {
      'sitekey': '<?php $this->info("site_key");?>'
    });
  });
};

$('.consentBox').click(function() {
  if ($(this).is(':checked')) {
    if ($('.termsBox').length) {
      if ($('.termsBox').is(':checked')) {
        $('.ctcBtn').removeAttr('disabled');
      }
    } else {
      $('.ctcBtn').removeAttr('disabled');
    }
  } else {
    $('.ctcBtn').attr('disabled', true);
  }
});

$('.termsBox').click(function() {
  if ($(this).is(':checked')) {
    if ($('.consentBox').is(':checked')) {
      $('.ctcBtn').removeAttr('disabled');
    }
  } else {
    $('.ctcBtn').attr('disabled', true);
  }
});
</script>

<?php endif; ?>


<?php if ($view == "gallery"): ?>
<script type="text/javascript" src="<?php echo URL; ?>public/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
<script type="text/javascript" src="<?php echo URL; ?>public/scripts/jquery.pajinate.js"></script>
<script>
$('#gall1').pajinate({
  num_page_links_to_display: 3,
  items_per_page: 10
});
$('.fancy').fancybox({
  helpers: {
    title: {
      type: 'over'
    }
  }
});
</script>
<?php endif; ?>

<?php $this->checkSuspensionFooter(); ?>
</body>

</html>