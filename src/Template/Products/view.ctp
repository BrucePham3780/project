
<div class="col-lg-10">
    <div class="card">
        <div class="card-header">
            <strong><?= $product->name?></strong>
        </div>
        <div class="card-body card-block">
            <div class="form-group">
                <?=$this->Html->image($product->images, array('width'=>'150px', 'height'=>'150px')) ?>
            </div>
            <div class="form-group">
                <label class=" form-control-label">ID</label>
                <input  class="col-md-7" type="text" style="color:red"  value="<?=$product->id?>" readonly="readonly">
            </div>
            <div class="form-group">
                <label class=" form-control-label">Name</label>
                <input type="text" class="col-sm-10" value="<?=$product->name?>" readonly="readonly">
            </div>
            <div class="form-group">
                <label class=" form-control-label ">Category</label>
                <?= $product->has('category') ? $this->Html->link($product->category->name, ['controller' => 'Category', 'action' => 'view', $product->category->id]) : '' ?>            
            </div>
            <div class="form-group">
                <label class=" form-control-label">Price</label>
                <input type="text" value="<?=$product->price?>" readonly="readonly">
            </div>
            
            <?php if (!empty($product->color)): ?>
               <div class="form-group">
                    <label class=" form-control-label">Dimension</label>
                    <input type="text" value="<?=$product->procDimen?>" readonly="readonly">
            </div>                
            <?php else: ?>
                                   
            <?php endif; ?>


            <div class="form-group">
                <label for="street" class=" form-control-label">Vote Star</label>
                <input type="text" value="<?=$product->voteStar?>" readonly="readonly">
            </div>

            <?php if (!empty($product->color)): ?>
                <div class="form-group">
                    <label for="street" class=" form-control-label">Color</label>
                    <input type="text" value="<?=$product->color?>" readonly="readonly">
                </div>                
            <?php else: ?>
                                   
            <?php endif; ?>

            <?php if (!empty($product->descr)): ?>
                <div class="form-group">
                    <label for="street" class=" form-control-label">Description</label>
                    <div class="col-md-10">
                        <textarea rows="7" readonly="readonly" ><?=$product->descr?></textarea>
                    </div>
                </div>                
            <?php else: ?>
                                   
            <?php endif; ?>
            
            <div class="form-group">
                <label for="street" class=" form-control-label">Status</label>
                <input type="text" value="<?=$product->status?>" readonly="readonly">
            </div>
            
            <?php if (!empty($product->voteStar)): ?>
                <div class="form-group">
                    <label for="street" class=" form-control-label">Vote Star</label>
                    <input type="text" value="<?=$product->voteStar?>" readonly="readonly">
                </div>                
            <?php else: ?>
                                   
            <?php endif; ?>

            <div class="form-group">
                <label for="street" class=" form-control-label">Created</label>
                <input type="text" value="<?=$product->created?>" readonly="readonly">
            </div>
            <div class="form-group">
                <label for="street" class=" form-control-label">Modified</label>
                <input type="text" value="<?=$product->modified?>" readonly="readonly">
            </div>
        </div>
    </div>
</div>                            

