<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Catedetail $catedetail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Catedetail'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Category'), ['controller' => 'Category', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Category', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="catedetail form large-9 medium-8 columns content">
    <?= $this->Form->create($catedetail) ?>
    <fieldset>
        <legend><?= __('Add Catedetail') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('cate_id',array(
                    
                    'options' => $category));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
