<?php
/**
 * WCRichmond Theme Options
 *
 * @package WCRichmond
 * @since WCRichmond 1.0
 */

/**
 * Register the form setting for our wcrichmond_options array.
 *
 * This function is attached to the admin_init action hook.
 *
 * This call to register_setting() registers a validation callback, wcrichmond_theme_options_validate(),
 * which is used when the option is saved, to ensure that our option values are properly
 * formatted, and safe.
 *
 * @since WCRichmond 1.0
 */
function wcrichmond_theme_options_init() {
	register_setting(
		'wcrichmond_options', // Options group, see settings_fields() call in wcrichmond_theme_options_render_page()
		'wcrichmond_theme_options', // Database option, see wcrichmond_get_theme_options()
		'wcrichmond_theme_options_validate' // The sanitization callback, see wcrichmond_theme_options_validate()
	);

	// Register our settings field group
	add_settings_section(
		'general', // Unique identifier for the settings section
		'', // Section title (we don't want one)
		'__return_false', // Section callback (we don't want anything)
		'theme_options' // Menu slug, used to uniquely identify the page; see wcrichmond_theme_options_add_page()
	);
  
   add_settings_field( 'avalon_calendar_url', __( 'Avalon Calendar', 'wcrichmond' ), 'wcrichmond_settings_avalon_calendar', 'theme_options', 'general' );
   add_settings_field( 'pavilion_calendar_url', __( 'Pavilion Calendar', 'wcrichmond' ), 'wcrichmond_settings_pavilion_calendar', 'theme_options', 'general' );
   add_settings_field( 'monticello_calendar_url', __( 'Monticello Calendar', 'wcrichmond' ), 'wcrichmond_settings_monticello_calendar', 'theme_options', 'general' ); 
   add_settings_field( 'gables_calendar_url', __( 'Gables Calendar', 'wcrichmond' ), 'wcrichmond_settings_gables_calendar', 'theme_options', 'general' );
   
   add_settings_field( 'shenandoah_calendar_url', __( 'Shenandoah Calendar', 'wcrichmond' ), 'wcrichmond_settings_shenandoah_calendar', 'theme_options', 'general' );
   add_settings_field( 'chesapeake_calendar_url', __( 'Chesapeake Calendar', 'wcrichmond' ), 'wcrichmond_settings_chesapeake_calendar', 'theme_options', 'general' );
   add_settings_field( 'piedmont_calendar_url', __( 'Piedmont Calendar', 'wcrichmond' ), 'wcrichmond_settings_piedmont_calendar', 'theme_options', 'general' );
  /*
	// Register our individual settings fields
	add_settings_field(
		'enable_video_checkbox', // Unique identifier for the field for this section
		__( 'Video Enable', 'wcrichmond' ), // Setting field label
		'wcrichmond_settings_field_enable_video_checkbox_checkbox', // Function that renders the settings field
		'theme_options', // Menu slug, used to uniquely identify the page; see wcrichmond_theme_options_add_page()
		'general' // Settings section. Same as the first argument in the add_settings_section() above
	);
  
  
    // add_settings_field( 'sample_text_input', __( 'Sample Text Input', 'wcrichmond' ), 'wcrichmond_settings_field_sample_text_input', 'theme_options', 'general' );
    add_settings_field( 'video_url', __( 'Video Url', 'wcrichmond' ), 'wcrichmond_settings_field_video_url_input', 'theme_options', 'general' );
    add_settings_field( 'video_title', __( 'Video Title', 'wcrichmond' ), 'wcrichmond_settings_field_video_title_input', 'theme_options', 'general' );
	// add_settings_field( 'sample_select_options', __( 'Sample Select Options', 'wcrichmond' ), 'wcrichmond_settings_field_sample_select_options', 'theme_options', 'general' );
	// add_settings_field( 'sample_radio_buttons', __( 'Sample Radio Buttons', 'wcrichmond' ), 'wcrichmond_settings_field_sample_radio_buttons', 'theme_options', 'general' );
	add_settings_field( 'video_description', __( 'Description of video', 'wcrichmond' ), 'wcrichmond_settings_field_video_description', 'theme_options', 'general' );
	add_settings_field( 'video_link_text', __( 'Link text', 'wcrichmond' ), 'wcrichmond_settings_field_video_link_text', 'theme_options', 'general' );
    add_settings_field( 'video_link_to', __( 'Link to', 'wcrichmond' ), 'wcrichmond_settings_field_video_link_to', 'theme_options', 'general' );
    */
}
add_action( 'admin_init', 'wcrichmond_theme_options_init' );

/**
 * Change the capability required to save the 'wcrichmond_options' options group.
 *
 * @see wcrichmond_theme_options_init() First parameter to register_setting() is the name of the options group.
 * @see wcrichmond_theme_options_add_page() The edit_theme_options capability is used for viewing the page.
 *
 * @param string $capability The capability used for the page, which is manage_options by default.
 * @return string The capability to actually use.
 */
function wcrichmond_option_page_capability( $capability ) {
	return 'edit_theme_options';
}
add_filter( 'option_page_capability_wcrichmond_options', 'wcrichmond_option_page_capability' );

/**
 * Add our theme options page to the admin menu.
 *
 * This function is attached to the admin_menu action hook.
 *
 * @since WCRichmond 1.0
 */
function wcrichmond_theme_options_add_page() {
	$theme_page = add_theme_page(
		__( 'Theme Options', 'wcrichmond' ),   // Name of page
		__( 'Theme Options', 'wcrichmond' ),   // Label in menu
		'edit_theme_options',          // Capability required
		'theme_options',               // Menu slug, used to uniquely identify the page
		'wcrichmond_theme_options_render_page' // Function that renders the options page
	);
}
add_action( 'admin_menu', 'wcrichmond_theme_options_add_page' );

/**
 * Returns an array of sample select options registered for WCRichmond.
 *
 * @since WCRichmond 1.0
 */
function wcrichmond_sample_select_options() {
	$sample_select_options = array(
		'0' => array(
			'value' =>	'0',
			'label' => __( 'Zero', 'wcrichmond' )
		),
		'1' => array(
			'value' =>	'1',
			'label' => __( 'One', 'wcrichmond' )
		),
		'2' => array(
			'value' => '2',
			'label' => __( 'Two', 'wcrichmond' )
		),
		'3' => array(
			'value' => '3',
			'label' => __( 'Three', 'wcrichmond' )
		),
		'4' => array(
			'value' => '4',
			'label' => __( 'Four', 'wcrichmond' )
		),
		'5' => array(
			'value' => '5',
			'label' => __( 'Five', 'wcrichmond' )
		)
	);

	return apply_filters( 'wcrichmond_sample_select_options', $sample_select_options );
}

/**
 * Returns an array of sample radio options registered for WCRichmond.
 *
 * @since WCRichmond 1.0
 */
function wcrichmond_sample_radio_buttons() {
	$sample_radio_buttons = array(
		'yes' => array(
			'value' => 'yes',
			'label' => __( 'Yes', 'wcrichmond' )
		),
		'no' => array(
			'value' => 'no',
			'label' => __( 'No', 'wcrichmond' )
		),
		'maybe' => array(
			'value' => 'maybe',
			'label' => __( 'Maybe', 'wcrichmond' )
		)
	);

	return apply_filters( 'wcrichmond_sample_radio_buttons', $sample_radio_buttons );
}

/**
 * Returns the options array for WCRichmond.
 *
 * @since WCRichmond 1.0
 */
function wcrichmond_get_theme_options() {
	$saved = (array) get_option( 'wcrichmond_theme_options' );
	$defaults = array(
    'avalon_calendar_url' => '',
		'pavilion_calendar_url'       => '',
		'monticello_calendar_url'     => '',
		'gables_calendar_url' => '',
		'shenandoah_calendar_url' => '',
		'chesapeake_calendar_url'  => '',
		'piedmont_calendar_url'  => ''
	);

	$defaults = apply_filters( 'wcrichmond_default_theme_options', $defaults );

	$options = wp_parse_args( $saved, $defaults );
	$options = array_intersect_key( $options, $defaults );

	return $options;
}

/**
 * Renders the Piedmont Calendar url
 */
function wcrichmond_settings_piedmont_calendar() {
	$options = wcrichmond_get_theme_options();
	?>
	<input type="text" name="wcrichmond_theme_options[piedmont_calendar_url]" id="piedmont_calendar_url" value="<?php echo esc_attr( $options['piedmont_calendar_url'] ); ?>" size="80" />
	<label class="description" for="piedmont_calendar_url"><?php _e( 'Piedmont Calendar URL', 'wcrichmond' ); ?></label>
	<?php
}


/**
 * Renders the Chesapeake Calendar url
 */
function wcrichmond_settings_chesapeake_calendar() {
	$options = wcrichmond_get_theme_options();
	?>
	<input type="text" name="wcrichmond_theme_options[chesapeake_calendar_url]" id="chesapeake_calendar_url" value="<?php echo esc_attr( $options['chesapeake_calendar_url'] ); ?>" size="80" />
	<label class="description" for="chesapeake_calendar_url"><?php _e( 'Chesapeake Calendar URL', 'wcrichmond' ); ?></label>
	<?php
}


/**
 * Renders the Shenandoah Calendar url
 */
function wcrichmond_settings_shenandoah_calendar() {
	$options = wcrichmond_get_theme_options();
	?>
	<input type="text" name="wcrichmond_theme_options[shenandoah_calendar_url]" id="shenandoah_calendar_url" value="<?php echo esc_attr( $options['shenandoah_calendar_url'] ); ?>" size="80" />
	<label class="description" for="shenandoah_calendar_url"><?php _e( 'Shenandoah Calendar URL', 'wcrichmond' ); ?></label>
	<?php
}



/**
 * Renders the Gables Calendar url
 */
function wcrichmond_settings_gables_calendar() {
	$options = wcrichmond_get_theme_options();
	?>
	<input type="text" name="wcrichmond_theme_options[gables_calendar_url]" id="gables_calendar_url" value="<?php echo esc_attr( $options['gables_calendar_url'] ); ?>" size="80" />
	<label class="description" for="gables_calendar_url"><?php _e( 'Gables Calendar URL', 'wcrichmond' ); ?></label>
	<?php
}


/**
 * Renders the Monticello Calendar url
 */
function wcrichmond_settings_monticello_calendar() {
	$options = wcrichmond_get_theme_options();
	?>
	<input type="text" name="wcrichmond_theme_options[monticello_calendar_url]" id="monticello_calendar_url" value="<?php echo esc_attr( $options['monticello_calendar_url'] ); ?>" size="80" />
	<label class="description" for="monticello_calendar_url"><?php _e( 'Monticello Calendar URL', 'wcrichmond' ); ?></label>
	<?php
}


/**
 * Renders the Pavilion Calendar url
 */
function wcrichmond_settings_pavilion_calendar() {
	$options = wcrichmond_get_theme_options();
	?>
	<input type="text" name="wcrichmond_theme_options[pavilion_calendar_url]" id="pavilion_calendar_url" value="<?php echo esc_attr( $options['pavilion_calendar_url'] ); ?>" size="80" />
	<label class="description" for="pavilion_calendar_url"><?php _e( 'Pavilion Calendar URL', 'wcrichmond' ); ?></label>
	<?php
}

/**
 * Renders the Avalon Calendar url
 */
function wcrichmond_settings_avalon_calendar() {
	$options = wcrichmond_get_theme_options();
	?>
	<input type="text" name="wcrichmond_theme_options[avalon_calendar_url]" id="avalon_calendar_url" value="<?php echo esc_attr( $options['avalon_calendar_url'] ); ?>" size="80" />
	<label class="description" for="avalon_calendar_url"><?php _e( 'Avalon Calendar URL', 'wcrichmond' ); ?></label>
	<?php
}






/**
 * Renders the sample checkbox setting field.
 */
function wcrichmond_settings_field_enable_video_checkbox_checkbox() {
	$options = wcrichmond_get_theme_options();
	?>
	<label for="enable-video-checkbox">
		<input type="checkbox" name="wcrichmond_theme_options[enable_video_checkbox]" id="enable-video-checkbox" <?php checked( 'on', $options['enable_video_checkbox'] ); ?> />
		<?php _e( 'Click to enable video overlay', 'wcrichmond' ); ?>
	</label>
	<?php
}

/**
 * Renders the video url text input setting field.
 */
function wcrichmond_settings_field_video_url_input() {
	$options = wcrichmond_get_theme_options();
	?>
	<input type="text" name="wcrichmond_theme_options[video_url]" id="video-url" value="<?php echo esc_attr( $options['video_url'] ); ?>" size="80" />
	<label class="description" for="video-url"><?php _e( '(youtube, vimeo)', 'wcrichmond' ); ?></label>
	<?php
}

/**
 * Renders the video title text input setting field.
 */
function wcrichmond_settings_field_video_title_input() {
    $options = wcrichmond_get_theme_options();
    ?>
    <input type="text" name="wcrichmond_theme_options[video_title]" id="video-title" value="<?php echo esc_attr( $options['video_title'] ); ?>" size="40" />
    <?php
}

/**
 * Renders the video title link to input setting field.
 */
function wcrichmond_settings_field_video_link_to() {
    $options = wcrichmond_get_theme_options();
    ?>
    <input type="text" name="wcrichmond_theme_options[video_link_to]" id="video-link-to" value="<?php echo esc_attr( $options['video_link_to'] ); ?>" size="80" />
    <label class="description" for="video-link-to"><?php _e( 'Where do you want this page to link to?', 'wcrichmond' ); ?></label>
    <?php
}

/**
 * Renders the video link text to input setting field.
 */
function wcrichmond_settings_field_video_link_text() {
    $options = wcrichmond_get_theme_options();
    ?>
    <input type="text" name="wcrichmond_theme_options[video_link_text]" id="video-link-text" value="<?php echo esc_attr( $options['video_link_text'] ); ?>" />
    <label class="description" for="video-link-text"><?php _e( 'Text of the link in the description. Defaults to: Take Action', 'wcrichmond' ); ?></label>
    <?php
}



/**
 * Renders the sample select options setting field.
 */
function wcrichmond_settings_field_sample_select_options() {
	$options = wcrichmond_get_theme_options();
	?>
	<select name="wcrichmond_theme_options[sample_select_options]" id="sample-select-options">
		<?php
			$selected = $options['sample_select_options'];
			$p = '';
			$r = '';

			foreach ( wcrichmond_sample_select_options() as $option ) {
				$label = $option['label'];
				if ( $selected == $option['value'] ) // Make default first in list
					$p = "\n\t<option style=\"padding-right: 10px;\" selected='selected' value='" . esc_attr( $option['value'] ) . "'>$label</option>";
				else
					$r .= "\n\t<option style=\"padding-right: 10px;\" value='" . esc_attr( $option['value'] ) . "'>$label</option>";
			}
			echo $p . $r;
		?>
	</select>
	<label class="description" for="sample_theme_options[selectinput]"><?php _e( 'Sample select input', 'wcrichmond' ); ?></label>
	<?php
}

/**
 * Renders the radio options setting field.
 *
 * @since WCRichmond 1.0
 */
function wcrichmond_settings_field_sample_radio_buttons() {
	$options = wcrichmond_get_theme_options();

	foreach ( wcrichmond_sample_radio_buttons() as $button ) {
	?>
	<div class="layout">
		<label class="description">
			<input type="radio" name="wcrichmond_theme_options[sample_radio_buttons]" value="<?php echo esc_attr( $button['value'] ); ?>" <?php checked( $options['sample_radio_buttons'], $button['value'] ); ?> />
			<?php echo $button['label']; ?>
		</label>
	</div>
	<?php
	}
}

/**
 * Renders the sample textarea setting field.
 */
function wcrichmond_settings_field_video_description() {
	$options = wcrichmond_get_theme_options();
	?>
	<textarea class="large-text" type="text" name="wcrichmond_theme_options[video_description]" id="video-description" cols="50" rows="5" /><?php echo esc_textarea( $options['video_description'] ); ?></textarea>
	<?php
}

/**
 * Renders the Theme Options administration screen.
 *
 * @since WCRichmond 1.0
 */
function wcrichmond_theme_options_render_page() {
	?>
	<div class="wrap">
		<?php screen_icon(); ?>
		<?php $theme_name = function_exists( 'wp_get_theme' ) ? wp_get_theme() : get_current_theme(); ?>
		<h2><?php printf( __( '%s Theme Options', 'wcrichmond' ), $theme_name ); ?></h2>
		<?php settings_errors(); ?>

		<form method="post" action="options.php">
		  <h1>Calendar Links</h1>
			<?php
				settings_fields( 'wcrichmond_options' );
				do_settings_sections( 'theme_options' );
				submit_button();
			?>
		</form>
	</div>
	<?php
}

/**
 * Sanitize and validate form input. Accepts an array, return a sanitized array.
 *
 * @see wcrichmond_theme_options_init()
 * @todo set up Reset Options action
 *
 * @param array $input Unknown values.
 * @return array Sanitized theme options ready to be stored in the database.
 *
 * @since WCRichmond 1.0
 */
function wcrichmond_theme_options_validate( $input ) {
	$output = array();

	// Checkboxes will only be present if checked.
	if ( isset( $input['enable_video_checkbox'] ) )
		$output['enable_video_checkbox'] = 'on';

	// The sample text input must be safe text with no HTML tags
	if ( isset( $input['video_url'] ) && ! empty( $input['video_url'] ) )
		$output['video_url'] = wp_filter_nohtml_kses( $input['video_url'] );

    if ( isset( $input['video_title'] ) && ! empty( $input['video_title'] ) )
        $output['video_title'] = wp_filter_nohtml_kses( $input['video_title'] );

    if ( isset( $input['video_link_text'] ) && ! empty( $input['video_link_text'] ) )
        $output['video_link_text'] = wp_filter_nohtml_kses( $input['video_link_text'] );  
      
    if ( isset( $input['video_link_to'] ) && ! empty( $input['video_link_to'] ) )
        $output['video_link_to'] = wp_filter_nohtml_kses( $input['video_link_to'] );

	// The sample select option must actually be in the array of select options
	if ( isset( $input['sample_select_options'] ) && array_key_exists( $input['sample_select_options'], wcrichmond_sample_select_options() ) )
		$output['sample_select_options'] = $input['sample_select_options'];

	// The sample radio button value must be in our array of radio button values
	if ( isset( $input['sample_radio_buttons'] ) && array_key_exists( $input['sample_radio_buttons'], wcrichmond_sample_radio_buttons() ) )
		$output['sample_radio_buttons'] = $input['sample_radio_buttons'];

	// The sample textarea must be safe text with the allowed tags for posts
	if ( isset( $input['video_description'] ) && ! empty( $input['video_description'] ) )
		$output['video_description'] = wp_filter_post_kses( $input['video_description'] );

	return apply_filters( 'wcrichmond_theme_options_validate', $output, $input );
}
