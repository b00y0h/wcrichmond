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

	  // The sample text input must be safe text with no HTML tags
 	  if ( isset( $input['avalon_calendar_url'] ) && ! empty( $input['avalon_calendar_url'] ) )
		$output['avalon_calendar_url'] = wp_filter_nohtml_kses( $input['avalon_calendar_url'] );

    // The sample text input must be safe text with no HTML tags
 	  if ( isset( $input['pavilion_calendar_url'] ) && ! empty( $input['pavilion_calendar_url'] ) )
		$output['pavilion_calendar_url'] = wp_filter_nohtml_kses( $input['pavilion_calendar_url'] );
		
		// The sample text input must be safe text with no HTML tags
 	  if ( isset( $input['monticello_calendar_url'] ) && ! empty( $input['monticello_calendar_url'] ) )
		$output['monticello_calendar_url'] = wp_filter_nohtml_kses( $input['monticello_calendar_url'] );
		
		// The sample text input must be safe text with no HTML tags
 	  if ( isset( $input['gables_calendar_url'] ) && ! empty( $input['gables_calendar_url'] ) )
		$output['gables_calendar_url'] = wp_filter_nohtml_kses( $input['gables_calendar_url'] );
		
		// The sample text input must be safe text with no HTML tags
 	  if ( isset( $input['shenandoah_calendar_url'] ) && ! empty( $input['shenandoah_calendar_url'] ) )
		$output['shenandoah_calendar_url'] = wp_filter_nohtml_kses( $input['shenandoah_calendar_url'] );
		
		// The sample text input must be safe text with no HTML tags
 	  if ( isset( $input['chesapeake_calendar_url'] ) && ! empty( $input['chesapeake_calendar_url'] ) )
		$output['chesapeake_calendar_url'] = wp_filter_nohtml_kses( $input['chesapeake_calendar_url'] );
		
		// The sample text input must be safe text with no HTML tags
 	  if ( isset( $input['piedmont_calendar_url'] ) && ! empty( $input['piedmont_calendar_url'] ) )
		$output['piedmont_calendar_url'] = wp_filter_nohtml_kses( $input['piedmont_calendar_url'] );



	return apply_filters( 'wcrichmond_theme_options_validate', $output, $input );
}
