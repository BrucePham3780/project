
<div class="col-md-12">
    <h3 class="title-5 m-b-35">Order table</h3>
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
                        <th>user</th>
                        <th>total price</th>
                        <th>status</th>
                        <th>created</th>
                        <th>modified</th>
                    </tr>
                </thead>            

                <tbody>

                    <?php foreach ($orders as $orders1): ?>
                        <tr class="tr-shadow">
                            <td>
                                <?= $orders1->has('user') ? $this->Html->link($orders1->user->name, ['controller' => 'Users', 'action' => 'view', $orders1->user->id]) : '' ?>
                            </td>
                            <?php if (!empty($orders1->tt_price)): ?>
                                <td><?= '$'.$orders1->tt_price ?></td>
                            <?php else: ?>
                                <td></td>
                            <?php endif; ?>
                               
                            <?php if (!empty($orders1->status)): ?>
                                <td><?= $orders1->status ?></td>
                            <?php else: ?>
                                <td></td>
                            <?php endif; ?>
                               
                            <?php if (!empty($orders1->created)): ?>
                                <td><?= $orders1->created ?></td>
                            <?php else: ?>
                                <td></td>
                            <?php endif; ?>
                               
                            <?php if (!empty($orders1->modified)): ?>
                                <td><?=$orders1->modified?></td>
                            <?php else: ?>
                                <td></td>
                            <?php endif; ?>
                               
                            <td>
                                <div class="table-data-feature">
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                        <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'zmdi zmdi-info-outline')),
                                            ['controller' => 'orders','action' => 'view', $orders1->id],
                                            array('escape' => false)) ?>
                                    </button>
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">>
                                            <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'zmdi zmdi-edit')),
                                                ['controller' => 'orders','action' => 'edit', $orders1->id], 
                                                array('escape' => false)) ?>
                                    </button>
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <?= $this->Form->postLink('<i class="fa fa-trash"></i> ',
                                                ['action' => 'delete', $orders1->id], 
                                                [
                                                    'escape' => false,
                                                    'confirm' => __('Are you sure, you want to delete this order?')
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
</div>
            

            

      