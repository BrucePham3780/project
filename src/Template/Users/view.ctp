<div class="row">
    <div class="col-lg-12">
        <h2 class="title-1 m-b-25">User Details</h2>
        <div class="table-responsive table--no-card m-b-40">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Images</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone Number</th>
                        <th>Role</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php if (!empty($user2->id)): ?>
                            <td><?= $user2->id ?></td>
                        <?php else: ?>
                            <td></td>
                        <?php endif; ?>

                        <?php if (!empty($user2->images)): ?>
                            <td><?=$this->Html->image($user2->images, array('width'=>'80px', 'height'=>'80px')) ?></td>
                        <?php else: ?>
                            <td></td>
                        <?php endif; ?>

                        <?php if (!empty($user2->name)): ?>
                            <td><?= $user2->name ?></td>
                        <?php else: ?>
                            <td></td>
                        <?php endif; ?>

                        <?php if (!empty($user2->email)): ?>
                            <td class="fullname-text1"><?= $user2->email?></td>
                            <input type="hidden" class="fullname-raw1" value="<?=$user2->email?>">
                        <?php else: ?>
                            <td></td>
                        <?php endif; ?>

                        <?php if(!empty($user2->address)): ?>
                            <td class="fullname-text"><?= $user2->address?></td>
                            <input type="hidden" class="fullname-raw" value="<?=$user2->address?>">
                        <?php else: ?>
                            <td></td>
                        <?php endif; ?>

                        <?php if (!empty($user2->phoneNum)): ?>
                            <td><?= $user2->phoneNum?></td>
                        <?php else: ?>
                            <td></td>
                        <?php endif; ?>

                        <?php if (!empty($user2->role->name)): ?>
                            <td><?= $user2->role->name?></td>
                        <?php else: ?>
                            <td></td>
                        <?php endif; ?>

                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>   


<div class="users view large-9 medium-8 columns content">
 

    <div class="related">
        <h4><?= __('Related Cart') ?></h4>
        <?php if (!empty($user2->cart)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Proc Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Qty') ?></th>
                <th scope="col"><?= __('Tt Price') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user2->cart as $cart): ?>
            <tr>
                <td><?= h($cart->id) ?></td>
                <td><?= h($cart->proc_id) ?></td>
                <td><?= h($cart->user_id) ?></td>
                <td><?= h($cart->qty) ?></td>
                <td><?= h($cart->tt_price) ?></td>
                <td><?= h($cart->created) ?></td>
                <td><?= h($cart->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Cart', 'action' => 'view', $cart->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Cart', 'action' => 'edit', $cart->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cart', 'action' => 'delete', $cart->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cart->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Order') ?></h4>
        <?php if (!empty($user2->order)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Ordetail Id') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Tt Price') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user2->order as $order): ?>
            <tr>
                <td><?= h($order->id) ?></td>
                <td><?= h($order->user_id) ?></td>
                <td><?= h($order->ordetail_id) ?></td>
                <td><?= h($order->status) ?></td>
                <td><?= h($order->tt_price) ?></td>
                <td><?= h($order->created) ?></td>
                <td><?= h($order->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Order', 'action' => 'view', $order->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Order', 'action' => 'edit', $order->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Order', 'action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Shipping') ?></h4>
        <?php if (!empty($user2->shipping)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Ship Method') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Order Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user2->shipping as $shipping): ?>
            <tr>
                <td><?= h($shipping->id) ?></td>
                <td><?= h($shipping->status) ?></td>
                <td><?= h($shipping->created) ?></td>
                <td><?= h($shipping->modified) ?></td>
                <td><?= h($shipping->ship_method) ?></td>
                <td><?= h($shipping->user_id) ?></td>
                <td><?= h($shipping->order_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Shipping', 'action' => 'view', $shipping->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Shipping', 'action' => 'edit', $shipping->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Shipping', 'action' => 'delete', $shipping->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shipping->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" charset="utf-8" async defer>
    $(document).ready(function() {
        var text1 =$('.fullname-text1').html();
        if(text1.length>10){
            $('.fullname-text1').html(text1.substring(0,10) + '...');
        }
        $('.fullname-text1').mouseleave(function(){
            var text1 = $('.fullname-text1').html();
            if(text1.length>10){
                $('.fullname-text1').html(text1.substring(0,10) + '...');
            }
        });
        $('.fullname-text1').mouseenter(function(){
            var raw_fullname1 = $('.fullname-raw1').val();
            $(this).html(raw_fullname1);
        });  

        var text =$('.fullname-text').html();
        if(text.length>10){
            $('.fullname-text').html(text.substring(0,10) + '...');
        }
        $('.fullname-text').mouseleave(function(){
            var text = $('.fullname-text').html();
            if(text.length>10){
                $('.fullname-text').html(text.substring(0,10) + '...');
            }
        });
        $('.fullname-text').mouseenter(function(){
            var raw_fullname = $('.fullname-raw').val();
            $(this).html(raw_fullname);
        });  
    });
</script>