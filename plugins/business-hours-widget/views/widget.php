<!-- This file is used to markup the public-facing widget. -->

<p>
  <?php if (strlen($weekdays) > 0) : ?> 
  <b> Monday to Friday: </b>
  <?php echo $weekdays; ?>
  <?php endif; ?> 
</p>

<p>
  <?php if (strlen($saturdays) > 0) : ?> 
  <b> Saturday: </b>
  <?php echo $saturdays; ?>
  <?php endif; ?> 
</p>

<p>
  <?php if (strlen($sundays) > 0) : ?> 
  <b> Sunday: </b>
  <?php echo $sundays; ?>
  <?php endif; ?> 
</p>