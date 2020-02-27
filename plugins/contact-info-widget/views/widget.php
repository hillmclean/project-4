<!-- This file is used to markup the public-facing widget. -->

<p>
  <?php if (strlen($telNumber) > 0) : ?> 
    <i class="fas fa-phone-alt"></i><?php echo $telNumber; ?>
  <?php endif; ?> 
</p>

<p>
  <?php if (strlen($email) > 0) : ?> 
    <i class="fas fa-envelope"></i><?php echo $email; ?>
  <?php endif; ?> 
</p>

<p>
  <?php if (strlen($address) > 0) : ?> 
    <i class="fas fa-map-marker-alt"></i><?php echo $address; ?>
  <?php endif; ?> 
</p>