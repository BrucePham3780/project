<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Catedetail $catedetail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Catedetail'), ['action' => 'edit', $catedetail->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Catedetail'), ['action' => 'delete', $catedetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $catedetail->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Catedetail'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Catedetail'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Category'), ['controller' => 'Category', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Category', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="catedetail view large-9 medium-8 columns content">
    <h3><?= h($catedetail->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($catedetail->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($catedetail->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cate Id') ?></th>
            <td><?= $this->Number->format($catedetail->cate_id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Category') ?></h4>
        <?php if (!empty($catedetail->category)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($catedetail->category as $category): ?>
            <tr>
                <td><?= h($category->id) ?></td>
                <td><?= h($category->name) ?></td>
                <td><?= h($category->created) ?></td>
                <td><?= h($category->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Category', 'action' => 'view', $category->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Category', 'action' => 'edit', $category->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Category', 'action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
