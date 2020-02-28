<!-- This file is used to markup the public-facing widget. -->

<p>
  <?php if (strlen($email) > 0) : ?> 
    <i class="fas fa-envelope"></i><?php echo $email; ?>
  <?php endif; ?> 
</p>

<p>
  <?php if (strlen($telNumber) > 0) : ?> 
    <i class="fas fa-phone-alt"></i><?php echo $telNumber; ?>
  <?php endif; ?> 
</p>

<ul class="social-icons">
  <li>
    <a href="<?php echo $facebook; ?>">
      <?php if (strlen($facebook) > 0) : ?> 
        <i class="fab fa-facebook-square"></i>
      <?php endif; ?> 
    </a>
  </li>

  <li>
    <a href="<?php echo $twitter; ?>">
      <?php if (strlen($twitter) > 0) : ?> 
        <i class="fab fa-twitter-square"></i>
      <?php endif; ?> 
    </a>
  </li>

  <li>      
    <a href="<?php echo $google; ?>">
      <?php if (strlen($google) > 0) : ?> 
        <i class="fab fa-google-plus-square"></i>
      <?php endif; ?> 
    </a>
  </li>

</ul>



