<div class="col-lg-8">
    <div class="card">
        <div class="card-header">
            <strong>Order<?=$order->id?></strong>
        </div>
        <div class="card-body card-block">
            <div class="form-group">
                <label class=" form-control-label">ID</label>
                <input  class="col-md-7" type="text" style="color:red"  value="<?=$order->id?>" readonly="readonly">
            </div>
            <div class="form-group">
                <label class=" form-control-label ">User</label>
                <?= $order->has('user') ? $this->Html->link($order->user->name, ['controller' => 'Users', 'action' => 'view', $order->user->id]) : '' ?>          
            </div>
            <div class="form-group">
                <label class=" form-control-label">Status</label>
                <input type="text" value="<?=$order->status?>" readonly="readonly">
            </div>
            
            <?php if (!empty($order->tt_price)): ?>
               <div class="form-group">
                    <label class=" form-control-label">Total Price</label>
                    <input type="text" value="<?=$order->tt_price?>" readonly="readonly">
            </div>                
            <?php else: ?>
                                   
            <?php endif; ?>

            <div class="form-group">
                <label class=" form-control-label">Created</label>
                <input type="text" value="<?=$order->created?>" readonly="readonly">
            </div>
  
            <?php if (!empty($order->modified)): ?>
                <div class="form-group">
                    <label class=" form-control-label">Modified</label>
                    <input type="text" value="<?=$order->modified?>" readonly="readonly">
                </div>          
            <?php else: ?>
                                   
            <?php endif; ?>
        </div>
    </div>
</div>                            

    <div class="col-lg-8">
        <h5 class="title-1 m-b-25">Related Order Detail</h5>
        <div class="table-responsive table--no-card m-b-40">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                 <?php foreach ($order->orderdetail as $orderdetail1): ?>    
                    <tr>
                        <?php if (!empty($orderdetail1->id)): ?>
                            <td><?= $orderdetail1->id ?></td>
                        <?php else: ?>
                            <td></td>
                        <?php endif; ?>

                        <?php if (!empty($orderdetail1->proc_id)): ?>
                            <td align="center"><?= $orderdetail1->proc_id?></td>
                        <?php else: ?>
                            <td></td>
                        <?php endif; ?>

                        <?php if (!empty($orderdetail1->num_product)): ?>
                            <td align="center"><?= $orderdetail1->num_product ?></td>
                        <?php else: ?>
                            <td></td>
                        <?php endif; ?>

                        <?php if (!empty($orderdetail1->t_price)): ?>
                            <td align="center"><?= $orderdetail1->t_price ?></td>
                        <?php else: ?>
                            <td></td>
                        <?php endif; ?>
                        
                        <td> 
                            <div class="table-data-feature">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                    <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'zmdi zmdi-info-outline')),
                                        ['controller' => 'orderdetail','action' => 'view', $orderdetail1->id],
                                        array('escape' => false)) ?>
                                </button>
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">>
                                    <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'zmdi zmdi-edit')),
                                        ['controller' => 'orderdetail','action' => 'edit', $orderdetail1->id], 
                                        array('escape' => false)) ?>
                                </button>
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                    <?= $this->Form->postLink('<i class="fa fa-trash"></i> ',
                                        [   'controller' => 'orderdetail',
                                            'action' => 'delete', $orderdetail1->id], 
                                        [
                                            'escape' => false,
                                            'confirm' => __('Are you sure, you want to delete this order?')
                                        ]
                                    )?>
                                </button>
                            </div>
                        </td>   
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>


