

<div class="row">
    <div class="col-lg-12">
        <h2 class="title-1 m-b-25">Role Details</h2>
        <div class="table-responsive table--no-card m-b-40">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th class="text-right">created</th>
                        <th class="text-right">modified</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php if (!empty($role->id)): ?>
                            <td><?= $role->id ?></td>
                        <?php else: ?>
                            <td></td>
                        <?php endif; ?>

                        <?php if (!empty($role->name)): ?>
                            <td><?= $role->name ?></td>
                        <?php else: ?>
                            <td></td>
                        <?php endif; ?>

                        <?php if (!empty($role->descr)): ?>
                            <td><?= $role->descr ?></td>
                        <?php else: ?>
                            <td></td>
                        <?php endif; ?>

                        <?php if (!empty($role->created)): ?>
                            <td><?= $role->created ?></td>
                        <?php else: ?>
                            <td></td>
                        <?php endif; ?>

                        <?php if (!empty($role->modified)): ?>
                            <td><?= $role->modified ?></td>
                        <?php else: ?>
                            <td></td>
                        <?php endif; ?>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>    


<?php if (!empty($role->users)): ?>
<div class=" role index table-responsive table-responsive-data2 ">
    <h2 class="title-1 m-b-25">Relate Users</h2>
    <table class="table table-data2">
        <thead>
            <tr>
                <th>name</th>
                <th>avatar</th>
                <th>email</th>
                <th>address</th>
                <th>contact</th>            
                <th></th>                                
            </tr>
        </thead>            

        <tbody>
            <?php foreach ($role->users as $users2): ?>
                <tr class="tr-shadow">
                    <td><?= $users2->name ?></td>

                    <?php if (!empty($users2->images)): ?>
                        <td><?=$this->Html->image($users2->images, array('width'=>'80px', 'height'=>'80px')) ?></td>
                    <?php else: ?>
                        <td></td>
                    <?php endif; ?>
                    <td><?= $users2->email ?></td>
                    <td><?= $users2->address ?></td>
                    <td><?= $users2->phoneNum ?></td>
                    <td>
                        <div class="table-data-feature">
                            <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                            <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'zmdi zmdi-info-outline')),
                                                        ['controller' => 'users','action' => 'view', $users2->id],
                                                        array('escape' => false)) ?>
                            </button>
                            
                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">>
                            <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'zmdi zmdi-edit')),
                                ['controller' => 'users','action' => 'edit', $users2->id], 
                                array('escape' => false)) ?>
                            </button>
                            
                            <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">>
                                <?= $this->Form->postLink('<i class="fa fa-trash"></i> ',
                                    ['action' => 'delete', $users2->id], 
                                    [
                                        'escape' => false,
                                        'confirm' => __('Are you sure, you want to delete {0}?', $users2->name)
                                    ]
                                )?>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr class="spacer"></tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php endif; ?>
             
