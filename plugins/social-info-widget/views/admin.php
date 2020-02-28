<!-- This file is used to markup the administration form of the widget. -->

<div class="widget-content">
   <p>
      <label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('email'); ?>">Email address:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('email'); ?>" name="<?php echo $this->get_field_name('email'); ?>" type="text" value="<?php echo $email; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('telNumber'); ?>">Telephone number:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('telNumber'); ?>" name="<?php echo $this->get_field_name('telNumber'); ?>" type="text" value="<?php echo $telNumber; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('facebook'); ?>">Facebook link:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" type="text" value="<?php echo $facebook ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('twitter'); ?>">Twitter link:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" type="text" value="<?php echo $twitter ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('google'); ?>">Google link:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('google'); ?>" name="<?php echo $this->get_field_name('google'); ?>" type="text" value="<?php echo $google ?>">
   </p>



</div>
