<?php echo MPT_Shortcode::get_messages(); ?>

<form method="post">
	<label><?php _e( 'Your old password', 'mpt' ) ; ?></label>
	<input required="required" type="password" name="mptchangepwd[old]" value="" />

	<label><?php _e( 'Your new password', 'mpt' ) ; ?> *</label>
	<input required="required" type="password" name="mptchangepwd[new]" value="" />

	<label><?php _e( 'Your new password (confirmation)', 'mpt' ) ; ?></label>
	<input required="required" type="password" name="mptchangepwd[new_confirmation]" />

	<?php wp_nonce_field( 'mptchangepwd' ); ?>
	<input type="submit" value="<?php _e( 'Submit', 'mpt' ) ; ?>" />
</form>