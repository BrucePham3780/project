
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Order</strong>
        </div>
        <div class="card-body card-block">
            <?= $this->Form->create($order, array('class'=>'card-horizontal')) ?>
                <div class="col-lg-6">
                    <?php
                    echo $this->Form->label('Name');
                    echo $this->Form->control('user_id', array(
                        'type'=>'text',
                        'class'=>'form-control',
                        'label'=> false,
                        'readonly' =>'readonly'
                    ))?> 
                </div>
                <div class="col-lg-6">
                    <?php
                        echo $this->Form->label('Total Price');
                        echo $this->Form->control('tt_price', array(
                            'type'=>'text',
                            'class'=>'form-control',
                            'label'=> false,
                            'readonly' => 'readonly'
                    ))?> 
                </div>
                <div class="col-lg-6">
                    <?php
                        echo $this->Form->label('Status');
                        echo $this->Form->select('status', $status,
                        [   'type'=>'text',
                            'class'=>'form-control',
                            'label'=> false
                    ])?> 
                </div>
        </div>
            <div class="card-footer">
                <?= $this->Form->button("<i class='fa fa-dot-circle-o'></i> Submit", array(
                    'type' => 'submit',
                    'class'=>'btn btn-primary btn-sm', 
                     'escape' => false )
                    ) 
                ?>
                <?= $this->Form->button("<i class='fa fa-ban'></i> Cancel", array(
                    'type' => 'reset',
                    'class'=>'btn btn-danger btn-sm', 
                    'controller'=>'orders',
                    'action' =>'index',
                    'escape' => false )) 
                ?>        
            </div>
        <?= $this->Form->end() ?>            
    </div>
</div>