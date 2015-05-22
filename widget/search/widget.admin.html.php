<p>
    <img style="width:100%;" class="parku-logo" src="<?php echo plugins_url('img/logo_parku.png', __FILE__); ?>" alt="parku">
</p>
<p>
    <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'parku'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>">
</p>
<p>
    <label for="<?php echo $this->get_field_id('description'); ?>"><?php _e('Description:', 'parku'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('description'); ?>" name="<?php echo $this->get_field_name('description'); ?>" type="text" value="<?php echo esc_attr($description); ?>">
</p>
<p>
    <label for="<?php echo $this->get_field_id('prefilltext'); ?>"><?php _e('Pre-filled location:', 'parku'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('prefilltext'); ?>" name="<?php echo $this->get_field_name('prefilltext'); ?>" type="text" value="<?php echo esc_attr($prefilltext); ?>">
</p>
<p>
    <label for="<?php echo $this->get_field_id('buttontext'); ?>"><?php _e('Submit button text:', 'parku'); ?></label>
    <input class="widefat" id="<?php echo $this->get_field_id('buttontext'); ?>" name="<?php echo $this->get_field_name('buttontext'); ?>" type="text" value="<?php echo esc_attr($buttontext); ?>">
</p>
<p>
    <input id="<?php echo $this->get_field_id('autocomplete'); ?>" name="<?php echo $this->get_field_name('autocomplete'); ?>" type="checkbox" <?php echo $autocomplete == 1 ? 'checked' : '' ?> value="1">
    <label class="widefat" for="<?php echo $this->get_field_id('autocomplete'); ?>"><?php _e('Activate Google Autocomplete', 'parku'); ?></label>
</p>
