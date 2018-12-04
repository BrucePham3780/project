<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user2->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Role'), ['controller' => 'Role', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Role', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cart'), ['controller' => 'Cart', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cart'), ['controller' => 'Cart', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Order'), ['controller' => 'Order', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Order', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Shipping'), ['controller' => 'Shipping', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Shipping'), ['controller' => 'Shipping', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user2->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Images') ?></th>
            <td><?= h($user2->images) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($user2->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user2->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user2->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($user2->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PhoneNum') ?></th>
            <td><?= h($user2->phoneNum) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= $user2->has('role') ? $this->Html->link($user2->role->name, ['controller' => 'Role', 'action' => 'view', $user2->role->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user2->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user2->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user2->modified) ?></td>
        </tr>
    </table>
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
