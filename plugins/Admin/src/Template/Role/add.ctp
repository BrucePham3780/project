<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Role $role
 */
?>


<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Role</strong>
        </div>
        <div class="card-body card-block">
            <?= $this->Form->create($role,['type'=>'file'], array('class'=>'card-horizontal', 'id'=>'form1','runat'=>'server')) ?>
            <div class="col col-md-6">
             <?php
             echo $this->Form->label('Name');
             echo $this->Form->control('name', array(
                'type'=>'text',
                'class'=>'form-control',
                'placeholder'=>'Enter name...',
                'label'=> false

            ));
            ?>  
        </div>
        
        <div class="col col-md-6">
            <?php                
            echo $this->Form->label('Description');
            echo $this->Form->control('descr' ,array(
                'type' => 'text',
                'placeholder'=>'Enter description...',
                'class'=>'form-control',
                'label'=> false

            ));
            ?>
        </div>      
    </div>
    <div class="card-footer">
        <?= $this->Form->button("<i class='fa fa-dot-circle-o'></i> Submit", array(
            'type' => 'submit',
            'class'=>'btn btn-primary btn-sm', 

            'escape' => false )) 
            ?>
            <?= $this->Form->button("<i class='fa fa-ban'></i> Reset", array(
                'type' => 'reset',
                'class'=>'btn btn-danger btn-sm', 

                'escape' => false )) 
                ?>


                <?= $this->Form->end() ?>            
            </div>        


        </div>
    </div>
</div>



