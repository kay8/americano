<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>" >
    <div class="form-wrapper">
        <!-- <label for="s" class="screen-reader-text"><?php _e('','html5reset'); ?></label> -->
        <input type="search" id="s" name="s" value="" placeholder="Search..." class="form-input" />

        <input type="submit" value="<?php _e('Go','html5reset'); ?>" id="searchsubmit" class="form-submit" />
    </div>
</form>