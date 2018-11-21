<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Orderdetail $orderdetail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $orderdetail->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $orderdetail->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Orderdetail'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Order'), ['controller' => 'Order', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Order', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="orderdetail form large-9 medium-8 columns content">
    <?= $this->Form->create($orderdetail) ?>
    <fieldset>
        <legend><?= __('Edit Orderdetail') ?></legend>
        <?php
            echo $this->Form->control('proc_id');
            echo $this->Form->control('qty');
            echo $this->Form->control('tt_price');
            echo $this->Form->control('order_id', ['options' => $order, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
