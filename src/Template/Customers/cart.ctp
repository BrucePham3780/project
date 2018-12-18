<!-- Cart -->

<div class="container">
	<!-- Cart item -->
	<?php echo $this->Form->create(null,['id' => 'form1'])?>

	<div class="container-table-cart pos-relative">
		<div class="wrap-table-shopping-cart bgwhite">
			<table class="table-shopping-cart">
				<tr class="table-head">
					<th class="column-1"></th>
					<th class="column-2">Product</th>
					<th class="column-3">Price</th>
					<th class="column-4 p-l-70">Quantity</th>
					<th class="column-5">Total</th>
					<th class="column-5"></th>
				</tr>
				<?php foreach ($cartList as $key => $cartList1): ?>
					<?= $this->Form->control('OrderDetail.'.$key.'.user_id', ['value'=> $cartList1['user']['id'], 'type' => 'hidden'])?>
					<?= $this->Form->control('OrderDetail.'.$key.'.proc_id', ['value'=> $cartList1['product']['id'], 'type' => 'hidden'])?>
					<?= $this->Form->control('OrderDetail.'.$key.'.id', ['value'=> $cartList1['id'], 'type' => 'hidden'])?>
					<tr class="table-row order">
						<td class="column-1">
							<div class="cart-img-product b-rad-4 o-f-hidden">
								<?=$this->Html->image($cartList1['product']['images'])?>
							</div>
						</td>
						<td class="column-2"><?= $cartList1['product']['name']?></td>
						<td class="column-3 ">
							<?='$'.$cartList1['product']['price']?> 					
							<input type="hidden" name="" value="<?=$cartList1['product']['price']?>" class="price">
						</td>
						<td class="column-4">
							<div class="flex-w bo5 of-hidden w-size17">
								<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2 minus">
									<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
								</button>

								<?=$this->Form->control('OrderDetail.'.$key.'.num_product',
									['class' => 'size8 m-text18 t-center num-product12 count',
									'type'=>'number',
									'value' => $cartList1->num_product,
									'id' => false,
									'label'=>false,
									'escape'=> false,
									'readonly' => 'readonly'

								])?>

								<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2 plus">
									<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
								</button>
							</div>
						</td>
						<td class="column-5">
							<?php echo $this->Form->control('OrderDetail.'.$key.'.t_price', [
								'templates' => [
									'inputContainer' => '<div style="display:inline-flex">${{content}}</div>'
								],
								'class' => 'tprice',
								'value' => $cartList1->tt_price,
								'label' => false,
								'id' => false,
								'readonly' =>'readonly'
							]);?>
							<!-- <input  name="" value="<?=$cartList1->tt_price?>" class="tprice"> -->

						</td>
						<td class="column-5">
							<button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
								<?= $this->Form->postLink('<i class="fa fa-trash"></i> ',
									['controller'=>'Cart','action' => 'delete', $cartList1->id], 
									[
										'escape' => false,
										'confirm' => __('Are you sure, you want to delete {0}?', $cartList1['product']['name'])
									])?>
								</button>
							</td>
						</tr>
					<?php endforeach ?>

					<tr class="table-row">
						<td class="column-1"></td>
						<td class="column-2"></td>
						<td class="column-3"></td>
						<td class="column-4"></td>
						<td class="column-5">$<?=$this->Html->tag('input','',['id'=>'money','class'=>'money'])?></td>
						<td class="column-5"></td>
					</tr>
				</table>
			</div>
		</div>

		<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
			<div class="flex-w flex-m w-full-sm">
				<div class="size11 bo4 m-r-10">
					<input class="sizefull s-text7 p-l-22 p-r-22" type="text" placeholder="Coupon Code">
				</div>

				<div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
					<!-- Button -->
					<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" >
						Apply coupon
					</button>
					
				</div>
			</div>

			<div class="size10 trans-0-4 m-t-10 m-b-10">
				<!-- Button -->
				<?=$this->Form->button('Update Cart',[
					'class'=>'flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4',
					'id' => 'update_cart'
				])?>
				</div>
			</div>

			<!-- Total -->			
			<div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
				<h5 class="m-text20 p-b-24">
					Cart Totals
				</h5>

				<div class="flex-w flex-sb-m p-t-26 p-b-30">
					<span class="m-text22 w-size19 w-full-sm">
						Total:
					</span>
					<span class="m-text21 w-size20 w-full-sm">
							<?= $this->Form->control('OrderDetail.status', ['value'=> 'New', 'type' => 'hidden'])?>
							<?= $this->Form->control('OrderDetail.user_id', ['value'=> $user1['id'], 'type' => 'hidden'])?>
							<?php echo $this->Form->control('OrderDetail.tt_price', [
								'templates' => [
									'inputContainer' => '<div style="display:inline-flex">${{content}}</div>'
								],
								'class' => 'money',
								'value' => $cartList1->tt_price,
								'label' => false,
								'id' => false,
								'readonly' =>'readonly'
							]);?>					
					</span>

				</div>

				<div class="size15 trans-0-4">
					<?=$this->Form->button('Proceed to Checkout',[
						'class'=>'flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4',
						'id'=>'check_out',
					])?>
				</div>
			</div>
			<?= $this->Form->end() ?>            
		</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){
	var sum = 0;
	var money = $(this).parents('.order').find('#money').val();
	

	$('.tprice').each(function(money, tprice){
		var tprice = $(this).val();
		sum += parseFloat(tprice);
	});
	
	$('.money').val(sum.toFixed(2));

	function total_money(){
		var sum = 0;
		var money = $(this).parents('.order').find('#money').val();
		$('.tprice').each(function(money, tprice){
			var tprice = $(this).val();
			sum += parseFloat(tprice);
		});
		$('.money').val(sum.toFixed(2));
		}	

	$('.minus').click(function(){
		var price = $(this).parents('.order').find('.price').val();
		var count = $(this).parents('.order').find('.count').val();
		var tprice = $(this).parents('.order').find('.tprice').val();
		var value;
			value = parseInt(count) - 1;
			if(value == 0 ){
				$(this).parents('.order').find('.count').val(1);

			}
			else{
				$(this).parents('.order').find('.count').val(value);
				tprice = parseFloat(price) * parseInt(value);
				$(this).parents('.order').find('.tprice').val(tprice.toFixed(2)); 
			}
			total_money();
		});
	
	$('.plus').click(function(){
		var price = $(this).parents('.order').find('.price').val();
		var count = $(this).parents('.order').find('.count').val();
		var tprice;
		var value;
		value = parseInt(count) + 1;
		$(this).parents('.order').find('.count').val(value);
		tprice = parseFloat(price) * parseInt(value);
		$(this).parents('.order').find('.tprice').val(tprice.toFixed(2)); 

		total_money();	
		});

	$('#update_cart').on("click", function(e){
    	e.preventDefault();
    	$('#form1').attr('action', "/cart/update").submit();
	});

	$('#check_out').on("click", function(e){
    	e.preventDefault();
    	$('#form1').attr('action', "/orders/add").submit();
	});

});

</script>
