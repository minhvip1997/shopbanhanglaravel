@extends('welcome')
@section('content')

<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{URL::to('/')}}">Trang Chu</a></li>
				  <li class="active">Thanh Toan Gio hang</li>
				</ol>
			</div><!--/breadcrums-->

			<!--/checkout-options-->

			

		
			<div class="review-payment">
				<h2>Xem Lai Gio Hang</h2>
			</div>

			<div class="table-responsive cart_info">
				<?php
				$content = Cart::content();
				
				?>
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">San Pham</td>
							<td class="description">Mo Ta</td>
							<td class="price">Gia</td>
							<td class="quantity">So Luong</td>
							<td class="total">Tong Tien</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						@foreach($content as $v_content)
						<tr>
							<td class="cart_product">
								<a href=""><img src="{{URL::to('public/upload/product/'.$v_content->options->image)}}" width="50" alt="" /></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{$v_content->price}}</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>{{$v_content->price}}</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<form action="{{URL::to('/update-cart-quantity')}}" method="POST" >
										{{csrf_field()}}
									<input class="cart_quantity_input" type="text" name="cart_quantity" value="{{$v_content->qty}}"  >
									<input type="hidden" value="{{$v_content->rowId}}" name="rowId_cart" class="form-control">
									<input type="submit" value="Cap Nhat" name="update_qty" class="btn btn-default btn-sm">
									</form>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">
									<?php
									$subtotal = $v_content->price*$v_content->qty;
									echo $subtotal;
									?>
								</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						@endforeach
						
						</tbody>
				</table>
			</div>
			<h4 style="margin:40px 0;font-weight: 20px;">Chon Hinh Thuc Thanh Toan</h4>
			<form method="POST" action="{{URL::to('/order-place')}}">
				{{csrf_field()}}
			<div class="payment-options">
					<span>
						<label><input name="payment_option" value="1"type="checkbox">Tra Bang the ATM</label>
					</span>
					<span>
						<label><input name="payment_option" value="2"type="checkbox">Nhan Tien Mat</label>
					</span>
					<span>
						<label><input name="payment_option" value="3" type="checkbox">Thanh Toan The Ghi No</label>
					</span>
					<input type="submit" value="Dat Hang" name="send_order_place" class="btn btn-primary btn-sm">
				</div>
				</form>
		</div>
	</section>
@endsection