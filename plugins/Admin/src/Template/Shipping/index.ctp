<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Shipping[]|\Cake\Collection\CollectionInterface $shipping
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Shipping'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Order'), ['controller' => 'Order', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Order', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="shipping index large-9 medium-8 columns content">
    <h3><?= __('Shipping') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ship_method') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('order_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($shipping as $shipping): ?>
            <tr>
                <td><?= $this->Number->format($shipping->id) ?></td>
                <td><?= h($shipping->status) ?></td>
                <td><?= h($shipping->created) ?></td>
                <td><?= h($shipping->modified) ?></td>
                <td><?= h($shipping->ship_method) ?></td>
                <td><?= $shipping->has('user') ? $this->Html->link($shipping->user->name, ['controller' => 'Users', 'action' => 'view', $shipping->user->id]) : '' ?></td>
                <td><?= $shipping->has('order') ? $this->Html->link($shipping->order->id, ['controller' => 'Order', 'action' => 'view', $shipping->order->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $shipping->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $shipping->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $shipping->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shipping->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
