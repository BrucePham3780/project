<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Role[]|\Cake\Collection\CollectionInterface $role
 */
?>
<div class="col-md-12">
    <h3 class="title-5 m-b-35">role table</h3>
    <div class="table-data__tool">
        <div class="table-data__tool-left">
            <div class="rs-select2--light rs-select2--md">
                <select class="js-select2" name="property">
                    <option selected="selected">All Properties</option>
                    <option value="">Option 1</option>
                    <option value="">Option 2</option>
                </select>
                <div class="dropDownSelect2"></div>
            </div>
            <div class="rs-select2--light rs-select2--sm">
                <select class="js-select2" name="time">
                    <option selected="selected">Today</option>
                    <option value="">3 Days</option>
                    <option value="">1 Week</option>
                </select>
                <div class="dropDownSelect2"></div>
            </div>
            <button class="au-btn-filter">
                <i class="zmdi zmdi-filter-list"></i>filters</button>
            </div>
            <div class="table-data__tool-right">
                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                 <?= $this->Html->link($this->Html->tag('i', 'Add New', array('class' => 'zmdi zmdi-plus')),
                                            ['controller' => 'role','action' => 'add'],
                                             array('escape' => false)) ?>
                </button>
                
                    <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                        <select class="js-select2" name="type">
                            <option selected="selected">Export</option>
                            <option value="">Option 1</option>
                            <option value="">Option 2</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                </div>
            </div>

            <div class=" role index table-responsive table-responsive-data2 ">
                <table class="table table-data2">
                    <thead>
                        <tr>
                            <th>name</th>
                            <th>description</th>            
                            <th>create</th>
                            <th>update</th>
                            <th></th>            
                        </tr>
                    </thead>            

                    <tbody>
                        <?php foreach ($role as $role1): ?>

                            <tr class="tr-shadow">
                                <td><?= $role1->name ?></td>
                                <td class="desc"><?= $role1->descr ?></td>
                                <td><?= $role1->created ?></td>
                                <td><?= $role1->modified ?></td>
                                <td>
                                    <div class="table-data-feature">
                                        <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                            <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'zmdi zmdi-info-outline')),
                                            ['controller' => 'role','action' => 'view', $role1->id],
                                             array('escape' => false)) ?>
                                        </button>
                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">>
                                            <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'zmdi zmdi-edit')),
                                            ['controller' => 'role','action' => 'edit', $role1->id], 
                                            array('escape' => false)) ?>
                                        </button>
                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">>
                                            <?= $this->Form->postLink($this->Html->tag('i', '', array('class' => 'zmdi zmdi-delete')),
                                            ['action' => 'delete', $role1->id],
                                            array('escape'=>false)) ?>
                                        </button>
                                    </div>
                                </td>

                            </tr>
                            <tr class="spacer"></tr>
                    <?php endforeach; ?>

                </tbody>
            </table>


</div>

</div>
<!-- END DATA TABLE -->


