<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://www.birdseed.io
 * @since      1.0.0
 *
 * @package    BirdSeed
 * @subpackage BirdSeed/admin/partials
 */
?>

<div class="wrap">

    <h2><?php echo esc_html(get_admin_page_title()); ?></h2>

    <form method="post" name="birdseed_options" action="options.php">

	<?php
		//Grab all options
		$options = get_option($this->plugin_name);

		// Cleanup
		$embed_code = $options['embed_code'];
	?>

	<?php
		settings_fields($this->plugin_name);
		do_settings_sections($this->plugin_name);
	?>

	<!-- Embed Code -->
	<fieldset>
	    <fieldset>
		<p>Copy your widget embed code from the <a href="https://app.birdseed.io/settings" target="_blank">General Settings</a> page in the BirdSeed admin area and paste it below:</p>
		<textarea rows="5" class="regular-text" style="width: 400px;" id="<?php echo $this->plugin_name; ?>-embed_code" name="<?php echo $this->plugin_name; ?>[embed_code]"><?php if(!empty($embed_code)) { echo $embed_code; } ?></textarea>
	    </fieldset>
	</fieldset>

	<?php submit_button('Save all changes', 'primary','submit', TRUE); ?>

    </form>

</div>
