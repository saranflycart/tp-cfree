<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<?php if ($this->countModules('offers')) : ?>
	<!-- NAV HELPER -->
	<div class="wrap t3-offers <?php $this->_c('offers') ?>">
			<jdoc:include type="modules" name="<?php $this->_p('offers') ?>" />
	</div>
	<!-- //NAV HELPER -->
<?php endif ?>
