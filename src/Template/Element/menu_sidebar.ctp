


<!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href=" <?php echo $this->URL->build(['controller'=>'Products','action'=>'index']); ?>">
                   <?= $this->Html->image('logo.png') ?>

                </a>
            </div>

            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fas fa-users"></i>Users</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="<?php echo $this->URL->build(['controller'=>'Role','action'=>'index']); ?>">Role</a>
                                </li>
                                <li>
                                    <a href="<?php echo $this->URL->build(['controller'=>'Users','action'=>'index']); ?>">Users</a>
                                </li>
                                
                            </ul>
                        </li>
                        
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-boxes"></i>Item</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="<?php echo $this->URL->build(['controller'=>'Products','action'=>'index']); ?>">Product</a>
                                </li>
                                <li>
                                    <a href="<?php echo $this->URL->build(['controller'=>'Category','action'=>'index']); ?>">Category</a>
                                </li>
                                
                            </ul>
                        </li>
                        
                        <li>
                            <a href="" title="">
                                <i class="fas fa-folder"></i>Gallery
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo $this->URL->build(['controller'=>'Orders','action'=>'index']); ?>">
                                <i class="fas fa-clipboard-list"></i>Orders</a>
                        </li>

                        <li>
                            <a href="<?php echo $this->URL->build(['controller'=>'Shipping','action'=>'index']); ?>">
                                <i class="fas fa-shipping-fast"></i>Shipping</a>
                        </li>

                        
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->