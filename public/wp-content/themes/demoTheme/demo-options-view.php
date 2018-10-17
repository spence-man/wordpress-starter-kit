<h1>My Awesome Settings Page</h1>

<form method="POST">
    <label for="awesome_text">Awesome Text</label>
    <input type="text" name="awesome_text" id="awesome_text" value="<?php echo $value; ?>">
    <?php wp_nonce_field( 'wpshout_option_page_example_action' ); ?>
    <input type="submit" value="Save" class="button button-primary button-large">
</form>
