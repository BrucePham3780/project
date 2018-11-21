<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Orderdetail $orderdetail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Orderdetail'), ['action' => 'edit', $orderdetail->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Orderdetail'), ['action' => 'delete', $orderdetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderdetail->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Orderdetail'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Orderdetail'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Order'), ['controller' => 'Order', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Order', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="orderdetail view large-9 medium-8 columns content">
    <h3><?= h($orderdetail->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Order') ?></th>
            <td><?= $orderdetail->has('order') ? $this->Html->link($orderdetail->order->id, ['controller' => 'Order', 'action' => 'view', $orderdetail->order->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($orderdetail->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Proc Id') ?></th>
            <td><?= $this->Number->format($orderdetail->proc_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Qty') ?></th>
            <td><?= $this->Number->format($orderdetail->qty) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tt Price') ?></th>
            <td><?= $this->Number->format($orderdetail->tt_price) ?></td>
        </tr>
    </table>
</div>
