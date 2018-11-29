<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */
?>

<!-- Banner -->
<!-- <section class="banner bgwhite p-t-40 p-b-40"> -->
	<div class="container">
		<div class="row">

			<?php foreach ($category as $category1): ?>
				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="/images/banner-02.jpg" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								<?= $category1->name?>
							</a>
						</div>
					</div>

				</div>
			<?php endforeach; ?>
			
			<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">

				<!-- block2 -->
				<div class="block2 wrap-pic-w pos-relative m-b-30">
					<img src="/images/icons/bg-01.jpg" alt="IMG">

					<div class="block2-content sizefull ab-t-l flex-col-c-m">
						<h4 class="m-text4 t-center w-size3 p-b-8">
							Sign up & get 20% off
						</h4>

						<p class="t-center w-size4">
							Be the frist to know about the latest fashion news and get exclu-sive offers
						</p>

						<div class="w-size2 p-t-25">
							<!-- Button -->
							<a href="#" class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
								Sign Up
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- </section> -->
	
	<!-- New Product -->
	<!-- <section class="newproduct bgwhite p-t-45 p-b-105"> -->
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Featured Products
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">

					<?php foreach ($product as $products1): ?>

						<div class="item-slick2 p-l-15 p-r-15">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
								<!-- <img src="/images/item-02.jpg" alt="IMG-PRODUCT" 720px 960px>
								-->								
								<?=$this->Html->image($products1->images) ?>
								<div class="block2-overlay trans-0-4">
									<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a>

									<div class="block2-btn-addcart w-size1 trans-0-4">
										<!-- Button -->
										<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											Add to Cart
										</button>
									</div>
								</div>
							</div>

							<div class="block2-txt p-t-20">
								

								<?= $this->Html->link( $this->Html->tag('',$products1->name, array(
									'class' => 'block2-name dis-block s-text3 p-b-5')),
								['controller' => 'customers','action' => 'product', $products1->id],
								array('escape' => false)) ?>
								
							</div>
							<span class="block2-price m-text6 p-r-5">
								$<?= $products1->price?>
							</span>
						</div>
					</div>
					
				<?php endforeach; ?>



			</div>
		</div>

	</div>
	<!-- 	</section> -->

	