<?php

if ( ! class_exists( 'GFForms' ) ) {
	die();
}

/**
 * Class GFHelp
 * Displays the Gravity Forms Help page
 */
class GFHelp {

	/**
	 * Displays the Gravity Forms Help page
	 *
	 * @since  Unknown
	 * @access public
	 */
	public static function help_page() {
		if ( ! GFCommon::ensure_wp_version() ) {
			return;
		}

		echo GFCommon::get_remote_message();

		$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG || isset( $_GET['gform_debug'] ) ? '' : '.min';

		?>
		<link rel="stylesheet" href="<?php echo GFCommon::get_base_url() ?>/css/admin<?php echo $min; ?>.css" />
		<div class="wrap <?php echo GFCommon::get_browser_class() ?>">
			<h2><?php esc_html_e( 'Gravity Forms Help', 'gravityforms' ); ?></h2>

			<?php GFCommon::display_dismissible_message(); ?>

			<div style="margin-top:10px;">

				<div class="gf_admin_notice"><?php printf( esc_html__( '%sIMPORTANT NOTICE:%s We do not provide support via telephone or e-mail. Please %sopen a support ticket%s.', 'gravityforms' ), '<strong>', '</strong>', '<a href="https://www.edconcept24.fr/support/" target="_blank">', '</a>' )  ?></div>

				<div class="gf_help_content"><p><?php printf( esc_html__( "Please review the plugin documentation and %sfrequently asked questions (FAQ)%s first. If you still can't find the answer %sopen a support ticket%s and we will be happy to answer your questions and assist you with any problems. %sPlease note:%s If you have not %spurchased a license%s from us, you will not have access to these help resources.", 'gravityforms' ), '<a href="https://docs.edconcept24.fr/category/knowledge-base/faqs/">', '</a>', '<a href="https://www.edconcept24.fr/support/" target="_blank">', '</a>', '<strong>', '</strong>', '<a href="https://www.edconcept24.fr/pricing/">', '</a>' ); ?></p></div>


				<div class="hr-divider"></div>

                <h3><?php esc_html_e( 'User Documentation', 'gravityforms' ); ?></h3>

                <div class="gforms_helpbox" style="margin:15px 0;">
                    <ul class="resource_list">
                        <li>
                            <i class="fa fa-book"></i> <a href="https://docs.edconcept24.fr/creating-a-form/">
                                <?php esc_html_e( 'Creating a Form', 'gravityforms' ); ?>
                            </a>
                        </li>
                        <li>
                            <i class="fa fa-book"></i> <a target="_blank" href="https://docs.edconcept24.fr/embedding-a-form/">
                                <?php esc_html_e( 'Embedding a Form', 'gravityforms' ); ?>
                            </a>
                        </li>
                        <li>
                            <i class="fa fa-book"></i> <a target="_blank" href="https://docs.edconcept24.fr/reviewing-form-submissions/">
                                <?php esc_html_e( 'Reviewing Form Submissions', 'gravityforms' ); ?>
                            </a>
                        </li>
                        <li>
                            <i class="fa fa-book"></i> <a target="_blank" href="https://docs.edconcept24.fr/configuring-confirmations-in-gravity-forms/">
                                <?php esc_html_e( 'Configuring Confirmations', 'gravityforms' ); ?>
                            </a>
                        </li>
                        <li>
                            <i class="fa fa-book"></i> <a target="_blank" href="https://docs.edconcept24.fr/configuring-notifications-in-gravity-forms/">
                                <?php esc_html_e( 'Configuring Notifications', 'gravityforms' ); ?>
                            </a>
                        </li>
                    </ul>

                </div>

				<div class="hr-divider"></div>

                <h3><?php esc_html_e( 'Developer Documentation', 'gravityforms' ); ?></h3>

                <div class="gforms_helpbox" style="margin:15px 0;">
                    <ul class="resource_list">
                        <li>
                            <i class="fa fa-book"></i> <a href="https://docs.edconcept24.fr/getting-started-with-the-gravity-forms-api-gfapi/">
                                <?php esc_html_e( 'Getting Started with the Gravity Forms API', 'gravityforms' ); ?>
                            </a>
                        </li>
                        <li>
                            <i class="fa fa-book"></i> <a target="_blank" href="https://docs.edconcept24.fr/api-functions/">
                                <?php esc_html_e( 'API Functions', 'gravityforms' ); ?>
                            </a>
                        </li>
                        <li>
                            <i class="fa fa-book"></i> <a target="_blank" href="https://docs.edconcept24.fr/web-api/">
                                <?php esc_html_e( 'Web API', 'gravityforms' ); ?>
                            </a>
                        </li>
                        <li>
                            <i class="fa fa-book"></i> <a target="_blank" href="https://docs.edconcept24.fr/add-on-framework/">
                                <?php esc_html_e( 'Add-On Framework', 'gravityforms' ); ?>
                            </a>
                        </li>
                        <li>
                            <i class="fa fa-book"></i> <a target="_blank" href="https://docs.edconcept24.fr/gfaddon/">
                                <?php esc_html_e( 'GFAddOn', 'gravityforms' ); ?>
                            </a>
                        </li>
                    </ul>

                </div>

				<div class="hr-divider"></div>

                <h3><?php esc_html_e( 'Designer Documentation', 'gravityforms' ); ?></h3>

                <div class="gforms_helpbox" style="margin:15px 0;">
                    <ul class="resource_list">
                        <li>
                            <i class="fa fa-book"></i> <a href="https://docs.edconcept24.fr/category/user-guides/design-and-layout/css-selectors/">
                                <?php esc_html_e( 'CSS Selectors', 'gravityforms' ); ?>
                            </a>
                        </li>
                        <li>
                            <i class="fa fa-book"></i> <a target="_blank" href="https://docs.edconcept24.fr/css-targeting-examples/">
                                <?php esc_html_e( 'CSS Targeting Examples', 'gravityforms' ); ?>
                            </a>
                        </li>
                        <li>
                            <i class="fa fa-book"></i> <a target="_blank" href="https://docs.edconcept24.fr/css-ready-classes/">
                                <?php esc_html_e( 'CSS Ready Classes', 'gravityforms' ); ?>
                            </a>
                        </li>
                        <li>
                            <i class="fa fa-book"></i> <a target="_blank" href="https://docs.edconcept24.fr/gform_field_css_class/">
                                <?php esc_html_e( 'gform_field_css_class', 'gravityforms' ); ?>
                            </a>
                        </li>
                        <li>
                            <i class="fa fa-book"></i> <a target="_blank" href="https://docs.edconcept24.fr/gform_noconflict_styles/">
                                <?php esc_html_e( 'gform_noconflict_styles', 'gravityforms' ); ?>
                            </a>
                        </li>
                    </ul>

                </div>

			</div>
		</div>


	<?php
	}
}
