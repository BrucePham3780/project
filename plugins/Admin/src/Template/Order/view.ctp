<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Order'), ['action' => 'edit', $order->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Order'), ['action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Order'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orderdetail'), ['controller' => 'Orderdetail', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Orderdetail'), ['controller' => 'Orderdetail', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Shipping'), ['controller' => 'Shipping', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Shipping'), ['controller' => 'Shipping', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="order view large-9 medium-8 columns content">
    <h3><?= h($order->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $order->has('user') ? $this->Html->link($order->user->name, ['controller' => 'Users', 'action' => 'view', $order->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($order->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($order->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tt Price') ?></th>
            <td><?= $this->Number->format($order->tt_price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($order->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($order->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Orderdetail') ?></h4>
        <?php if (!empty($order->orderdetail)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Proc Id') ?></th>
                <th scope="col"><?= __('Qty') ?></th>
                <th scope="col"><?= __('Tt Price') ?></th>
                <th scope="col"><?= __('Order Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($order->orderdetail as $orderdetail): ?>
            <tr>
                <td><?= h($orderdetail->id) ?></td>
                <td><?= h($orderdetail->proc_id) ?></td>
                <td><?= h($orderdetail->qty) ?></td>
                <td><?= h($orderdetail->tt_price) ?></td>
                <td><?= h($orderdetail->order_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Orderdetail', 'action' => 'view', $orderdetail->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Orderdetail', 'action' => 'edit', $orderdetail->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Orderdetail', 'action' => 'delete', $orderdetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderdetail->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Shipping') ?></h4>
        <?php if (!empty($order->shipping)): ?>
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
            <?php foreach ($order->shipping as $shipping): ?>
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
