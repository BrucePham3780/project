<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
        echo $this->Form->control('images');
        echo $this->Form->control('name');
        echo $this->Form->control('email');
        echo $this->Form->control('password');
        echo $this->Form->control('address');
        echo $this->Form->control('phoneNum');
        echo $this->Form->control('role_id', ['options' => $role, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

