<!-- Header -->
<header class="header1">
	<!-- Header desktop -->
	<div class="container-menu-header">
		<div class="topbar">
			<div class="topbar-social">
				<a href="#" class="topbar-social-item fa fa-facebook"></a>
				<a href="#" class="topbar-social-item fa fa-instagram"></a>
				<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
				<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
				<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
			</div>

			<span class="topbar-child1">
				Free shipping for standard order over $100
			</span>

			<div class="topbar-child2">
				<span class="topbar-email">
					fashe@example.com
				</span>
			</div>
		</div>

		<div class="wrap_header">
			<!-- Logo -->
			<?= $this->Html->link($this->Html->image('logo2.jpg'),
				['controller' => 'customers','action' => 'index'],
				array('class'=> 'logo', 'escape' => false)) ?>


				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<?php echo $this->Html->link('Home',['controller'=>'Customers','action'=>'index']); ?>
							</li>

							<li>
								<a href="product.html">Shop</a>
							</li>

							<li class="sale-noti">
								<a href="product.html">Sale</a>
							</li>

							<li>
								<a href="cart.html">Features</a>
							</li>

							<li>
								<a href="blog.html">Blog</a>
							</li>

							<li>
								<a href="about.html">About</a>
							</li>

							<li>
								<a href="contact.html">Contact</a>
							</li>
						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">
					<a href="#" class="header-wrapicon1 dis-block" data-toggle="modal" data-target="#myModal2">
						<img src="/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide1"></span>

					<div class="header-wrapicon2">
						<?= $this->Html->image('icon-header-02.png', array('class' => 'header-icon1 js-show-header-dropdown'),array('escape' => false))?>
						<span class="header-icons-noti">0</span>

						<!-- Header cart -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="/images/item-cart-03.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Nixon Porter Leather Watch In Tan
										</a>

										<span class="header-cart-item-info">
											1 x $17.00
										</span>
									</div>
								</li>
								

							</ul>

							<div class="header-cart-total">
								Total: $75.00
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									
									<?= $this->Html->link( $this->Html->tag('button','View Cart', array(
										'class' => 'flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4')),
									['controller' => 'customers','action' => 'cart'],
									array('escape' => false)) ?>

									
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<?= $this->Html->link( $this->Html->tag('button','Check Out', array(
										'class' => 'flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4')),
									['controller' => 'customers','action' => 'cart'],
									array('escape' => false)) ?>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Trigger the modal with a button -->

		<div class="container">
			<!-- Modal -->
			<div id="myModal2" class="modal fade" role="dialog">
				<div class="modal-dialog">

					<!-- Modal content-->
					<div class="modal-content" style=" background-color: #d2d7f6;padding-top: 10px; padding-bottom: 20px; padding-left: 20px; padding-right: 20px; border-radius: 15px; border-color:#d2d2d2; border-width: 5px; box-shadow:0 1px 0 #cfcfcf;" >
						<div class="modal-header">
							<h4 class="modal-title" style="font-size: 30px; font-family:Time New Roman, serif;">Login</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>

						</div>
						<div class="modal-body">
							<from>
								<div class="row">
									<div class="col-md-offset-12 col-md-12">

										<input type="email" id="email" class="form-control input-sm chat-input" placeholder="Email" />

									</br>
									<input type="password" id="password" class="form-control input-sm chat-input" placeholder="Password" />
								</br>

								<div style="text-align: center;">
									<span class="group-btn" >     
										<a href="#" class="btn btn-primary btn-md">Login <i class="fas fa-sign-in-alt"></i></a>
									</span>
								</div>

							</div>
						</div>	
					</form>
				</div>
				<div style="text-align: center;">
					
						<?= $this->Html->link('<span style="font-size: 18px; font-family:Time New Roman, serif;">Don not have account! Register here</span>',
						['controller' => 'customers','action' => 'register'],
						array('escape'=>false)
						) ?>
					
				</div>
			</div>

		</div>
	</div>


</div>

<!-- Header Mobile -->
<div class="wrap_header_mobile">
	<!-- Logo moblie -->
	<?= $this->Html->link($this->Html->image('logo2.jpg'),
		['controller' => 'customers','action' => 'cart'],
		array('class'=> 'logo', 'escape' => false)) ?>

		<!-- Button show menu -->
		<div class="btn-show-menu">
			<!-- Header Icon mobile -->
			<div class="header-icons-mobile">
				<a href="#" class="header-wrapicon1 dis-block" data-toggle="modal" data-target="#myModal2">
					<img src="/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
				</a>

				<span class="linedivide2"></span>

				<div class="header-wrapicon2">
					<?= $this->Html->image('icon-header-02.png', array('class' => 'header-icon1 js-show-header-dropdown'),array('escape' => false))?>
					<span class="header-icons-noti">0</span>

					<!-- Header cart noti -->
					<div class="header-cart header-dropdown">
						<ul class="header-cart-wrapitem">
							<li class="header-cart-item">
								<div class="header-cart-item-img">
									<img src="/images/item-cart-01.jpg" alt="IMG">
								</div>

								<div class="header-cart-item-txt">
									<a href="#" class="header-cart-item-name">
										White Shirt With Pleat Detail Back
									</a>

									<span class="header-cart-item-info">
										1 x $19.00
									</span>
								</div>
							</li>
						</ul>

						<div class="header-cart-total">
							Total: $75.00
						</div>

						<div class="header-cart-buttons">
							<div class="header-cart-wrapbtn">
								<!-- Button -->
								<a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
									View Cart
								</a>
							</div>

							<div class="header-cart-wrapbtn">
								<!-- Button -->
								<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
									Check Out
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>
	</div>

	<!-- Menu Mobile -->
	<div class="wrap-side-menu" >
		<nav class="side-menu">
			<ul class="main-menu">
				<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
					<span class="topbar-child1">
						Free shipping for standard order over $100
					</span>
				</li>

				<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
					<div class="topbar-child2-mobile">
						<span class="topbar-email">
							fashe@example.com
						</span>

						<div class="topbar-language rs1-select2">
							<select class="selection-1" name="time">
								<option>USD</option>
								<option>EUR</option>
							</select>
						</div>
					</div>
				</li>

				<li class="item-topbar-mobile p-l-10">
					<div class="topbar-social-mobile">
						<a href="#" class="topbar-social-item fa fa-facebook"></a>
						<a href="#" class="topbar-social-item fa fa-instagram"></a>
						<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
						<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
						<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
					</div>
				</li>

				<li class="item-menu-mobile">
					<a href="index.html">Home</a>
					<ul class="sub-menu">
						<li><a href="index.html">Homepage V1</a></li>
						<li><a href="home-02.html">Homepage V2</a></li>
						<li><a href="home-03.html">Homepage V3</a></li>
					</ul>
					<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
				</li>

				<li class="item-menu-mobile">
					<a href="product.html">Shop</a>
				</li>

				<li class="item-menu-mobile">
					<a href="product.html">Sale</a>
				</li>

				<li class="item-menu-mobile">
					<a href="cart.html">Features</a>
				</li>

				<li class="item-menu-mobile">
					<a href="blog.html">Blog</a>
				</li>

				<li class="item-menu-mobile">
					<a href="about.html">About</a>
				</li>

				<li class="item-menu-mobile">
					<a href="contact.html">Contact</a>
				</li>
			</ul>
		</nav>
	</div>

</header>