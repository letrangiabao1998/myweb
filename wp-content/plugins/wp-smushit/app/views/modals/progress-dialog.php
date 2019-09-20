<?php
/**
 * Output the progress dialog for the Directory smush list dialog
 *
 * @package WP_Smush
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

?>

<div class="sui-dialog wp-smush-progress-dialog" aria-hidden="true" id="wp-smush-progress-dialog">
	<div class="sui-dialog-overlay sui-fade-in" tabindex="0"></div>
	<div class="sui-dialog-content sui-bounce-in" role="dialog">
		<div class="sui-box" role="document">
			<div class="sui-box-header">
				<h3 class="sui-box-title"><?php esc_html_e( 'Choose Directory', 'wp-smushit' ); ?></h3>
				<div class="sui-actions-right">
					<button class="sui-dialog-close" aria-label="<?php esc_attr_e( 'Close', 'wp-smushit' ); ?>" data-a11y-dialog-hide></button>
				</div>
			</div>

			<div class="sui-box-body">
				<p>
					<?php
					esc_html_e(
						'Bulk smushing is in progress, you need to leave this tab open until the process completes.',
						'wp-smushit'
					);
					?>
				</p>

				<div class="sui-notice sui-hidden">
					<p>
						<?php
						$upgrade_url = add_query_arg(
							array(
								'utm_source'   => 'smush',
								'utm_medium'   => 'plugin',
								'utm_campaign' => 'smush_bulksmush_limit_reached_notice',
							),
							esc_url( 'https://premium.wpmudev.org/project/wp-smush-pro/' )
						);

						printf(
							/* translators: %s1$d - bulk smush limit, %2$s - upgrade link, %3$s - </a>, %4$s - <strong>, $5$s - </strong> */
							esc_html__( 'The free version of Smush allows you to compress %1$d images at a time. You can easily click %4$sResume%5$s to optimize another %1$d images, or %2$sUpgrade to Pro%3$s to compress unlimited images at once.', 'wp-smushit' ),
							absint( WP_Smush_Core::$max_free_bulk ),
							'<a href="' . esc_url( $upgrade_url ) . '" target="_blank">',
							'</a>',
							'<strong>',
							'</strong>'
						)
						?>
					</p>

					<div class="sui-notice-buttons">
						<a class="sui-button wp-smush-resume-scan">
							<i class="sui-icon-play" aria-hidden="true"></i>
							<?php esc_html_e( 'Resume', 'wp-smushit' ); ?>
						</a>
					</div>
				</div>

				<div class="sui-progress-block sui-progress-can-close">
					<div class="sui-progress">
						<span class="sui-progress-icon" aria-hidden="true">
							<i class="sui-icon-loader sui-loading"></i>
						</span>
						<div class="sui-progress-text">
							<span>0%</span>
						</div>
						<div class="sui-progress-bar" aria-hidden="true">
							<span style="width: 0"></span>
						</div>
					</div>
					<button class="sui-button-icon sui-tooltip" id="cancel-directory-smush" type="button" data-tooltip="<?php esc_attr_e( 'Cancel', 'wp-smushit' ); ?>">
						<i class="sui-icon-close"></i>
					</button>
				</div>

				<div class="sui-progress-state">
					<span class="sui-progress-state-text">
						<?php esc_html_e( '-/- images optimized', 'wp-smushit' ); ?>
					</span>
				</div>
			</div>

			<div class="sui-box-footer">
				<div class="sui-actions-right">
					<span class="add-dir-loader"></span>
					<button class="sui-modal-close sui-button wp-smush-cancel-dir" data-a11y-dialog-hide>
						<?php esc_html_e( 'CANCEL', 'wp-smushit' ); ?>
					</button>
				</div>

				<div class="sui-actions-right sui-hidden">
					<button class="sui-button wp-smush-resume-scan">
						<?php esc_html_e( 'RESUME', 'wp-smushit' ); ?>
					</button>
				</div>
			</div>
		</div>
	</div>
</div>
