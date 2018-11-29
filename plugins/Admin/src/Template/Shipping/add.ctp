<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Shipping $shipping
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Shipping'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Order'), ['controller' => 'Order', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Order', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="shipping form large-9 medium-8 columns content">
    <?= $this->Form->create($shipping) ?>
    <fieldset>
        <legend><?= __('Add Shipping') ?></legend>
        <?php
            echo $this->Form->control('status');
            echo $this->Form->control('ship_method');
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('order_id', ['options' => $order, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
