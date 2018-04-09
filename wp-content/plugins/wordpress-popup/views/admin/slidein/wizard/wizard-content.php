<script id="wpmudev-hustle-slidein-section-content-tpl" type="text/template">

	<?php $this->render( "admin/slidein/wizard/boxes/box-name", array() ); ?>

	<?php $this->render( "admin/slidein/wizard/boxes/box-titles", array() ); ?>

	<?php $this->render( "admin/slidein/wizard/boxes/box-content", array() ); ?>

	<?php $this->render( "admin/slidein/wizard/boxes/box-image", array() ); ?>

	<?php $this->render( "admin/slidein/wizard/boxes/box-cta", array() ); ?>

	<?php $this->render( "admin/slidein/wizard/boxes/box-email", array(
        'is_edit' => $is_edit,
        'module' => $module,
        'providers' => $providers,
        'default_form_fields' => $default_form_fields
    ) ); ?>

</script>
<script type="text/javascript">
	var wph_default_form_elements = '<?php echo json_encode( $default_form_fields ); ?>';
</script>

<div id="wpmudev-hustle-box-section-content"></div>
