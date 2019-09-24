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

			<div class="register-req">
				<p>Please use Register And Checkout to easily get access to your order history, or use Checkout as Guest</p>
			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">
					
					<div class="col-sm-10 clearfix">
						<div class="bill-to">
							<p>Dien Thong Tin Gui Hang</p>
							<div class="form-one">
								<form action="{{URL::to('/save-checkout-customer')}}" method="POST">
									{{csrf_field()}}
									<input type="text" name="shipping_email" placeholder="Email">
									<input type="text" name="shipping_name" placeholder="Hoa va Ten">
									<input type="text" name="shipping_address" placeholder="Dia Chi">
									<input type="text" name="shipping_phone" placeholder="Phone">
									
									<textarea  name="shipping_notes" placeholder="Ghi chu don hang cua ban" rows="16"></textarea>
									<input type="submit" value="Gui" name="send_order" class="btn btn-primary btn-sm">
								</form>

							</div>
							
						</div>
					</div>
								
				</div>
			</div>
			<div class="review-payment">
				<h2>Xem Lai Gio Hang</h2>
			</div>

			
			<div class="payment-options">
					<span>
						<label><input type="checkbox"> Direct Bank Transfer</label>
					</span>
					<span>
						<label><input type="checkbox"> Check Payment</label>
					</span>
					<span>
						<label><input type="checkbox"> Paypal</label>
					</span>
				</div>
		</div>
	</section>
@endsection