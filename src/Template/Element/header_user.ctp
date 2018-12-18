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
				<?php if($loggedIn) : ?>    
					<span class="topbar-email">
						<?php  echo $user1['name']; ?>
					</span>
					<?php else: ?>
						<span class="topbar-email"></span>
					<?php endif; ?>

				</div>

			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<?= $this->Html->link(
					$this->Html->image('logo2.jpg'),
					array(
						'controller' => 'customers', 
						'action' => 'index'
					), array('class'=>'logo','escape' => false)
				)	
				?>


				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<?php echo $this->Html->link('Home',['controller'=>'Customers','action'=>'index']); ?>
							</li>

							<li>
								<?php echo $this->Html->link('Shop',['controller'=>'Customers','action'=>'many_product']); ?>
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

						<?php if($loggedIn) : ?>    
							<?= $this->HTML-> link('Logout', ['controller'=>'customers', 'action' => 'logout'])?>
						<?php else: ?>
							<a href="#" class="header-wrapicon1 dis-block" data-toggle="modal" data-target="#myModal2">
								<img src="/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
							</a>
						<?php endif; ?>

						<span class="linedivide1"></span>

						<div class="header-wrapicon2">
							<?= $this->Html->image('icon-header-02.png', array('class' => 'header-icon1 js-show-header-dropdown'),array('escape' => false))?>
							<?php if($loggedIn) : ?>    
								<span class="header-icons-noti"><?=$count?></span>
							<?php else: ?>
								<span class="header-icons-noti">0</span>
							<?php endif; ?>
	
							<!-- Header cart -->
							<div class="header-cart header-dropdown">
								<?php if($loggedIn) : ?>  
								<ul class="header-cart-wrapitem">  
										<?php foreach ($cartList as $cartList1): ?>
											<li class="header-cart-item">
												<div class="header-cart-item-img">
													<?=$this->Html->image($cartList1['product']['images'])?>
												</div>

												<div class="header-cart-item-txt">
													<a href="#" class="header-cart-item-name">
														<?= $cartList1['product']['name']?>
													</a>

													<span class="header-cart-item-info">
														<?=$cartList1->num_product?> x $<?= $cartList1['product']['price']?>
													</span>
												</div>
											</li>
										<?php endforeach ?>
								</ul>
								
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
								<?php else: ?>
										<?php echo "Cart empty" ?>
								<?php endif; ?>
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
						<div class="modal-content" style=" /*background-color: #d2d7f6*/background-image: url(/img/login_background.jpg) ;padding-top: 10px; padding-bottom: 20px; padding-left: 20px; padding-right: 20px; border-radius: 15px; border-color:#d2d2d2; border-width: 5px; box-shadow:0 1px 20px #cfcfcf;" >
							<div class="modal-header">
								<strong><h4 class="modal-title" style="font-size: 30px; font-family:Montserrat-Regular, serif; color: #fcfcfc">Login</h4></strong>
								<button type="button" class="close"  style="color: #fcfcfc" data-dismiss="modal">&times;</button>

							</div>
							<div class="modal-body">
								<?= $this->Form->create('',['controller' => 'customers', 'action'=>'login'])?>

								<div class="row">
									<div class="col-md-offset-12 col-md-12">

										<label style="color: #fcfcfc; font-size: 20px" >Email</label>
										<?php echo $this->Form->input('email', 
											[
												'label'=>false,
												'class'=>'form-control input-sm chat-input',
												'type'=>'email',
												'placeholder'=>'Email'
											]);
											?>
										</br>
										<label style="color: #fcfcfc;  font-size: 20px">Passwords</label>
										<?php echo $this->Form->input('password', 
											[
												'label'=>false,
												'class'=>'form-control input-sm chat-input',
												'type'=>'password',
												'placeholder'=>'Passwords'
											]);
											?>
										</br>
										<div style="text-align: center;">

											<?= $this->Form->button($this->Html->tag('i', ' Login', array(
												'class' => 'fa fa-sign-in btn btn-primary btn-md group-btn',
												'style'=>['background-color : gray']
											)),
											array('escape' => false)) ?>

										</div>

									</div>
								</div>	

								<?= $this->Form->end() ?>

							</div>
							<div style="text-align: center;">

								<?= $this->Html->link('<span style="font-size: 18px; color: #fcfcfc; font-family:Time New Roman, serif;"> Don\'t have account! Register here</span>',
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
					['controller' => 'customers','action' => 'index'],
					array('class'=> 'logo-mobile', 'escape' => false)) ?>

					<!-- Button show menu -->
					<div class="btn-show-menu">
						<!-- Header Icon mobile -->
						<div class="header-icons-mobile">
							<?php if($loggedIn) : ?>    
								<?= $this->HTML-> link('Logout', ['controller'=>'customers', 'action' => 'logout'])?>
								<?php else: ?>
									<a href="#" class="header-wrapicon1 dis-block" data-toggle="modal" data-target="#myModal2">
										<img src="/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
									</a>
								<?php endif; ?>

								<span class="linedivide2"></span>

								<div class="header-wrapicon2">
									<?= $this->Html->image('icon-header-02.png', array('class' => 'header-icon1 js-show-header-dropdown'),array('escape' => false))?>
									<?php if($loggedIn) :?>
										<span class="header-icons-noti"><?=$count?></span>
									<?php else: ?>
										<span class="header-icons-noti">0</span>
									<?php endif;?>

									<!-- Header cart noti -->
									<div class="header-cart header-dropdown">
										<?php if($loggedIn) : ?> 
										<ul class="header-cart-wrapitem">
											<?php foreach ($cartList as $cartList1): ?>
											<li class="header-cart-item">
												<div class="header-cart-item-img">
													<?=$this->Html->image($cartList1['product']['images'])?>
												</div>

												<div class="header-cart-item-txt">
													<a href="#" class="header-cart-item-name">
														<?= $cartList1['product']['name']?>
													</a>

													<span class="header-cart-item-info">
														<?= $cartList1->num_product?> x $<?= $cartList1['product']['price']?>
													</span>
												</div>
											</li>
										<?php endforeach ?>
										</ul>


										<div class="header-cart-buttons">
											<div class="header-cart-wrapbtn">
												<!-- Button -->
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
									<?php else: ?>
										<?php echo "Cart empty" ?>
									<?php endif; ?>
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
										<?php if($loggedIn) : ?>    
											<span class="topbar-email">
												<?php  echo $user1['name']; ?>
											</span>
											<?php else: ?>
												<span class="topbar-email"></span>
											<?php endif; ?>
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
										<?php echo $this->Html->link('Home',['controller'=>'Customers','action'=>'index']); ?>
									</li>

									<li class="item-menu-mobile">
										<?php echo $this->Html->link('Shop',['controller'=>'Customers','action'=>'many_product']); ?>
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
