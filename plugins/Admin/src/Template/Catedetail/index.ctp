<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Catedetail[]|\Cake\Collection\CollectionInterface $catedetail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Catedetail'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Category'), ['controller' => 'Category', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Category', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="catedetail index large-9 medium-8 columns content">
    <h3><?= __('Catedetail') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cate_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($catedetail as $catedetail): ?>
            <tr>
                <td><?= $this->Number->format($catedetail->id) ?></td>
                <td><?= h($catedetail->name) ?></td>
                <td><?= $this->Number->format($catedetail->cate_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $catedetail->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $catedetail->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $catedetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $catedetail->id)]) ?>
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
