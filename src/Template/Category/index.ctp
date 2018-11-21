<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category[]|\Cake\Collection\CollectionInterface $category
 */
?>



<div class="col-md-12">
    <h3 class="title-5 m-b-35">Category</h3>
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
                                            ['controller' => 'category','action' => 'add'],
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
                            <th>create</th>
                            <th>update</th>
                            <th></th>            
                        </tr>
                    </thead>            

                    <tbody>
                        <?php foreach ($category as $category1): ?>

                            <tr class="tr-shadow">
                                <td><?= $category1->name ?></td>
                                <td><?= $category1->created ?></td>
                                <td><?= $category1->modified ?></td>
                                <td>
                                    <div class="table-data-feature">
                                        <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                            <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'zmdi zmdi-info-outline')),
                                            ['controller' => 'role','action' => 'view', $category1->id],
                                             array('escape' => false)) ?>
                                        </button>
                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">>
                                            <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'zmdi zmdi-edit')),
                                            ['controller' => 'role','action' => 'edit', $category1->id], 
                                            array('escape' => false)) ?>
                                        </button>
                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <?= $this->Form->postLink('<i class="fa fa-trash"></i> ',
                                                    ['action' => 'delete', $category1->id], 
                                                    [
                                                        'escape' => false,
                                                        'confirm' => __('Are you sure, you want to delete {0}?', $category1->name)
                                                    ]
                                                ) ?>
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