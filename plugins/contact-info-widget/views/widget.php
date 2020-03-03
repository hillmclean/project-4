<!-- This file is used to markup the public-facing widget. -->
<div class="contact-info-box">
    <i class="fas fa-phone-alt contact-icon"></i>
    <a class="contact-text">
      <?php if (strlen($telNumber) > 0) : ?> 
      <?php echo $telNumber; ?>
      <?php endif; ?> 
      </a>
  </div>

<div class="contact-info-box">
  <i class="fas fa-envelope contact-icon"></i>
  <a class="contact-text">
    <?php if (strlen($email) > 0) : ?> 
    <?php echo $email; ?>
    <?php endif; ?> 
    </a>
</div>

<div class="contact-info-box">
  <i class="fas fa-map-marker-alt contact-icon"></i>
  <p class="contact-text">
    <?php if (strlen($address) > 0) : ?> 
    <?php echo $address; ?>
    <?php endif; ?> 
  </p>
</div>