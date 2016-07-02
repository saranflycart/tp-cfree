<?php
/**
 * @package J2Store
 * @copyright Copyright (c)2014-17 Ramesh Elamathi / J2Store.org
 * @license GNU GPL v3 or later
 */
/** ensure this file is being included by a parent file */
defined('_JEXEC') or die('Restricted access');
?>

		<div class="product-compare">
				 <?php if(isset($vars->compare_list[$vars->product->variant->j2store_variant_id]) &&  $vars->compare_list[$vars->product->variant->j2store_variant_id] == $vars->product->j2store_product_id ):?>
				 	   <a
					    title="Product compare" href="<?php echo JRoute::_('index.php?option=com_j2store&view=products&task=compare&layout=compare'); ?>"
					    class="j2store-compare-links product-view-compare-list"
						data-compare-product-id="<?php echo $vars->product->j2store_product_id ?>"
						data-compare-variant-id="<?php echo $vars->product->variant->j2store_variant_id ?>"
						data-compare-id="<?php echo $vars->aid; ?>"
						data-compare-show-messgage="<?php // echo $vars->params->get('show_message_after_item_added',0);?>"
						data-compare-show-messgage-text="<?php echo JText::_($vars->params->get('message_after_item_added','J2STORE_ITEM_ADDED_TO_COMPARE_LIST'));?>"
					    >
					    <?php if($vars->params->get('display_icon_after_add','fa-retweet')):?>
					    <i class="md_pic fa <?php echo $vars->params->get('display_icon_after_add','fa-retweet');?>"></i>
					    <?php endif; ?>
				   </a>
				  <?php else:?>
				  	   <a title="Product compare"
					    href="javascript:void(0);"
					    class="j2store-compare-links product-compare-link"
						data-compare-action-done=""
						data-compare-link="<?php echo JRoute::_('index.php?option=com_j2store&view=products&task=compare&layout=compare'); ?>"
						data-compare-action-timeout="1000"
						data-compare-product-id="<?php echo $vars->product->j2store_product_id ?>"
						data-compare-variant-id="<?php echo $vars->product->variant->j2store_variant_id ?>"
						data-compare-id="<?php echo $vars->aid; ?>"
						data-compare-show-messgage="<?php // echo $vars->params->get('show_message_after_item_added',0);?>"
						data-compare-show-messgage-text="<?php echo JText::_($vars->params->get('message_after_item_added','J2STORE_ITEM_ADDED_TO_COMPARE_LIST'));?>"
						data-icon-after-add="<?php echo $vars->params->get('display_icon_after_add','fa-retweet');?>"
					    onclick="addToCompare(this);" >

					   <?php if($vars->params->get('display_icon_before_add','fa-list')):?>
					    <i class="fa <?php echo $vars->params->get('display_icon_before_add','fa-list');?>"></i>
					    <?php endif; ?>
				   </a>
				 <?php endif;?>


			</div>
