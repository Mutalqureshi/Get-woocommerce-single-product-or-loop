<?php

global $fdata;

?>

<div class="container"><?php
	if (is_front_page()) {
	echo " ";
	}
	else{

	echo myoutputShortcode(283);

	}


  ?></div>




<?php if (is_product(332)): ?>
	
<div id="sticky_cart_loader">
                <img src="<?php echo get_template_directory_uri() ?>/css/ajax-loader.gif">  
</div>

<div class="cus_sticky_cart">
	<?php 
	global $product;
	$product_id = 332;
	$product = wc_get_product( $product_id );
?>
	<div class="container">
		<div class="row">
			
		<div class="col-md-3">
			<div class="fe_image">
			<?php echo $product->get_image(); ?>
			</div>
					<div class="sticky-rev">
		<div class="tit">
			<?php echo $product->get_name(); ?>
		</div>
					<?php global $product;
					$rating_count = $product->get_rating_count();
					$review_count = $product->get_review_count();
					$average = $product->get_average_rating();

					if ( $rating_count > 0 ) : ?>

					<?php echo wc_get_rating_html( $average, $rating_count); echo "(" . $rating_count . ")";// WPCS: XSS ok. ?>

					<?php endif;  ?>
					</div>
		</div>

		<div class="col-md-5">
			<div class="stic-price">
				<div class="bgk-price">
					<bdi>
				<?php 
				echo "$".$product->get_regular_price();
				?>
				</bdi>
				<?php 
				echo "$".$product->get_sale_price(); ?>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="stic_cart">
				<div class="stic-quantity">
					



					<button onclick="this.parentNode.querySelector('input[name=quantity-sticky]').stepDown()" ></button>
                    
					<input type="number" id="" class="sticky-cart-qty"  min="1" max="10" name="quantity-sticky" value="1" title="Qty" size="4" placeholder="">
                    
                    <button onclick="this.parentNode.querySelector('input[name=quantity-sticky]').stepUp()" class="plus"></button>



				</div>				
				<div class="stic_cart_btn">
				<?php echo apply_filters( 'woocommerce_loop_add_to_cart_link',
				    sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="button %s product_type_%s">%s</a>',
				        esc_url( $product->add_to_cart_url() ),
				        esc_attr( $product->get_id() ),
				        esc_attr( $product->get_sku() ),
				        $product->is_purchasable() ? 'sticky_add_car' : '',
				        esc_attr( $product->get_type() ),
				        esc_html( $product->add_to_cart_text() )
				    ),
					$product );
				 ?>
					
				</div>


			</div>
		</div>
		</div>
	</div>
<?php 
	

 ?></div>
<?php endif ?>

<footer>
		<div class="container">
			<div class="footer-top">
				<div class="row">
					<div class="col-md-4 pd-right">
						<?php if ( is_active_sidebar( 'footer_widget_left' ) ) : ?>
						<?php dynamic_sidebar( 'footer_widget_left' ); ?>
						<?php endif; ?>				
					</div><!-- section top -->
					<div class="col-md-4"></div>
					<div class="col-md-4 newslatter_section">	
						<?php if ( is_active_sidebar( 'footer_widget_right' ) ) : ?>
						<?php dynamic_sidebar( 'footer_widget_right' ); ?>
						<?php endif; ?>	</div>
				</div>

			</div>


			<div class="footer_menu">
			  <?php
		            if ( has_nav_menu( 'footer_menu' )){
			            wp_nav_menu(array( 
			            'container' => false,
			            'menu_class'=> 'footer_menu',
			            'menu_id'=> '',
			            'theme_location' => 'footer_menu'
			            )); 
		            } 
               ?>		
			</div>
		</div>
<div class="foot_last">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="copy_right_t">	
									<?php if($fdata['footer-copyright']){
										$output = do_shortcode($fdata['footer-copyright']);
										echo '<span class="copy-right-text">'.$output.'</span>';
									} ?>

				</div><!--copy right t-->
				<div class="footer_social">

					<ul>
                       	<li class="mg-right">Follow us</li>
  <?php if( $fdata['instagram']) {?><li><a target="_blank" href="<?php echo $fdata['instagram']; ?>"><i class="fab fa-instagram"></i>&nbsp;</a></li><?php } ?>
  <?php if( $fdata['TikTok']) {?><li><a target="_blank" href="<?php echo $fdata['TikTok']; ?>"><i class="fab fa-tiktok"></i>&nbsp;</a></li><?php } ?>

  <?php if( $fdata['linkedin']) {?><li><a target="_blank" href="<?php echo $fdata['linkedin']; ?>"><i class="fab fa-linkedin-in"></i>&nbsp;</a></li><?php } ?>
  <?php if( $fdata['twitter']) {?><li><a target="_blank" href="<?php echo $fdata['twitter']; ?>"><i class="fab fa-twitter"></i>&nbsp;</a></li><?php } ?>
  <?php if( $fdata['youtube']) {?><li><a target="_blank" href="<?php echo $fdata['youtube']; ?>"><i class="fab fa-youtube"></i>&nbsp;</a></li><?php } ?>
  
    <?php if( $fdata['SnapChat']) {?><li><a target="_blank" href="<?php echo $fdata['SnapChat']; ?>"><i class="fab fa-snapchat-ghost"></i>&nbsp;</a></li><?php } ?>
  <?php if( $fdata['facebook']) {?><li><a target="_blank" href="<?php echo $fdata['facebook']; ?>"><i class="fab fa-facebook-f"></i>&nbsp;</a></li><?php } ?>
                        </ul>
                    </div><!-- footer social -->	
			</div>
			<div class="col-md-6 last_footer_right">
				<?php if ( is_active_sidebar( 'last-footer' ) ) : ?>
						<?php dynamic_sidebar( 'last-footer' ); ?>
					<?php endif; ?>
			</div>
		</div>
	</div>
</div>
</footer>
 <?php  wp_footer(); ?>
  </body>
</html>



