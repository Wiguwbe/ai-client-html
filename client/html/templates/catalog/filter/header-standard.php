<?php

/**
 * @license LGPLv3, http://opensource.org/licenses/LGPL-3.0
 * @copyright Metaways Infosystems GmbH, 2012
 * @copyright Aimeos (aimeos.org), 2015-2017
 */

$enc = $this->encoder();

?>
<?php if( ( $url = $this->get( 'filterCountUrl' ) ) != null ) : ?>
	<script type="text/javascript" defer="defer" src="<?= $enc->attr( $url ); ?>"></script>
<?php endif; ?>

<script>
	function cat_toggle() {
		var tc = $('#filter-toggle-control');
		if(tc.hasClass('ft-closed'))
		{
			$('#filter-more').show();
			tc.children('span')[0].innerHTML='&lsaquo;&lsaquo;';
		}
		else
		{
			$('#filter-more').hide();
			tc.children('span')[0].innerHTML='&rsaquo;&rsaquo;';
		}
		tc.toggleClass('ft-closed');
	}
</script>

<?= $this->get( 'filterHeader' ); ?>
