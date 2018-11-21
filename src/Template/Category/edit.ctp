<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Category</strong>
        </div>
        <div class="card-body card-block">
            <?= $this->Form->create($category, array('class'=>'card-horizontal')) ?>
            <fieldset>
                <div class="col-lg-6">
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
            </fieldset>
        </div>

            <div class="card-footer">
                <?= $this->Form->button("<i class='fa fa-dot-circle-o'></i> Submit", array(
                    'type' => 'submit',
                    'class'=>'btn btn-primary btn-sm', 
                    
                     'escape' => false )
                    ) 
                ?>
                

                <?= $this->Form->end() ?>            
            </div>        
    </div>
</div>
