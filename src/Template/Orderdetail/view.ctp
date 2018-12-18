
<div class="col-lg-8">
    <div class="card">
        <div class="card-header">
            <strong>Order Detail</strong>
        </div>
        <div class="card-body card-block">
            <div class="form-group">
                <label class=" form-control-label">ID</label>
                <input  class="col-md-7" type="text" style="color:red"  value="<?=$orderdetail->id?>" readonly="readonly">
            </div>
            
            <div class="form-group">
                <label class=" form-control-label ">Product</label>
                <?= $orderdetail->has('product') ? $this->Html->link($orderdetail->product->name, ['controller' => 'product', 'action' => 'view', $orderdetail->product->id]) : '' ?>            
            </div>

            <div class="form-group">
                <label class=" form-control-label">Quantity</label>
                <input type="text" value="<?=$orderdetail->num_product?>" readonly="readonly">
            </div>
            
            <div class="form-group">
                <label for="street" class=" form-control-label">Total Price</label>
                <input type="text" value="<?=$orderdetail->t_price?>" readonly="readonly">
            </div>
        </div>
    </div>
</div>                            

