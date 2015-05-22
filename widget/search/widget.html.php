<div class="parku-widget-search">
    <form action="https://parku.com/search/" method="get">
        <?php if ($instance['description']) : ?>
        <p class="parku-description"><?php echo $instance['description']; ?></p>
        <?php endif; ?>
        <button class="parku-submit" type="submit"><?php echo $instance['buttontext']; ?></button>
        <div class="parku-location"><input name="location" placeholder="" class="parku-location-input <?php echo $instance['autocomplete'] ? 'autocomplete' : '' ?>" value="<?php echo $instance['prefilltext']; ?>"></div>
    </form>
</div>
