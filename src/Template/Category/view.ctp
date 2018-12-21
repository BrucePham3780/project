

<div class="col-lg-10">
    <div class="card">
        <div class="card-header">
            <strong><?=$category->name?></strong>
        </div>
        <div class="card-body card-block">
            <div class="form-group">
                <label class=" form-control-label">ID</label>
                <input  class="col-md-7" type="text" style="color:red"  value="<?=$category->id?>" readonly="readonly">
            </div>
            <div class="form-group">
                <label class=" form-control-label">Name</label>
                <input type="text" class="col-sm-10" value="<?=$category->name?>" readonly="readonly">
            </div>

            <div class="form-group">
                <label for="street" class=" form-control-label">Created</label>
                <input type="text" value="<?=$category->created?>" readonly="readonly">
            </div>

            <?php if (!empty($category->modified)): ?>
                <div class="form-group">
                <label for="street" class=" form-control-label">Modified</label>
                <input type="text" value="<?=$category->modified?>" readonly="readonly">
            </div>               
            <?php else: ?>
                                   
            <?php endif; ?>
            
        </div>
    </div>
</div>                            

