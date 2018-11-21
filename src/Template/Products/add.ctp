<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>

<script src="http://code.jquery.com/jquery-1.4.2.min.js" type="text/javascript" charset="utf-8" async defer></script>
<script type="text/javascript">
    function imageURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#preview_img').attr('src', e.target.result)
                .width('auto')
                .height('auto');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
   
</script>

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Product</strong>
        </div>
        <div class="card-body card-block">
            <?= $this->Form->create($product,['type'=>'file'], array('class'=>'card-horizontal', 'id'=>'form1','runat'=>'server')) ?>
            
            
            <div class="row form-group">
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
            <div class="col col-md-3">
                <?php                
                echo $this->Form->label('Images');
                echo $this->Form->control('images' ,array(
                    'id'=>'imgInp',
                    'type' => 'file',
                    'placeholder'=>'Enter name of images...',
                    'label'=> false,
                    'onchange'=>'imageURL(this)'

                ));
                ?>
            </div>
            <div class="col col-md-3" style="margin-top: 5px; float: left;">
                <?php
                echo $this->Html->image('image_file.png', array(
                    'id'=>'preview_img',
                    'width'=>'80px',
                    'height'=>'80px'
                ));
                ?>    
                
            </div>
        </div>

        <div class="row form-group">
            <div class="col col-md-6">
                <?php
                echo $this->Form->label('Price');
                echo $this->Form->control('price', array(
                    'type'=>'text',
                    'class'=>'form-control',
                    'placeholder'=>'Enter price...',
                    'label'=> false

                ));
                ?>
            </div>
            <div class="col col-md-6">
                <?php
                echo $this->Form->label('Dimension');
                echo $this->Form->control('procDimen', array(
                    'type'=>'text',
                    'class'=>'form-control',
                    'placeholder'=>'Enter description...',
                    'label'=> false

                ));
                ?>
            </div>
        </div>
        
        <div class="row form-group">
            <div class="col col-md-6">
                <?php
                echo $this->Form->label('Color');
                echo $this->Form->control('color', array(

                    'class'=>'form-control',
                    'placeholder'=>'Enter color...',
                    'label'=> false

                ));

                ?>
            </div>
            <div class="col col-md-6">
                <?php    
                echo $this->Form->label('Description');
                echo $this->Form->control('descr', array(
                    'type'=>'text',
                    'class'=>'form-control',
                    'placeholder'=>'Enter detail...',
                    'label'=> false

                ));
                ?>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-6">
                <?php
                echo $this->Form->label('Status');
                echo $this->Form->control('status', array(
                    'type'=>'text',
                    'class'=>'form-control',
                    'placeholder'=>'Enter status...',
                    'label'=> false

                ));
                ?>
            </div>
            <div class="col col-md-6">
                <?php
                echo $this->Form->label('Vote');
                echo $this->Form->control('voteStar', array(
                    'type'=>'text',
                    'class'=>'form-control',
                    'placeholder'=>'Enter vote...',
                    'label'=> false

                ));
                ?>
            </div>
        </div>
        
        <div class="row form-group">
            <div class="col col-md-4">
                <?php
                echo $this->Form->label('Category');
                echo $this->Form->control('cate_id', array(
                    'empty' => true,
                    'id' => "cate_id",
                    'class'=>'category',
                    'name' => 'category',
                    'options' => $category,
                    'label' => false,
                    'class' => 'form-control'


                ));
                ?>
            </div>
            <div class="col col-md-2">

            </div>
            
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