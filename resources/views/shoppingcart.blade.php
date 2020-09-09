 @extends('master')
@section('contact')
        {{-- Subcategory Title --}}
	  	<div class="jumbotron jumbotron-fluid subtitle">
  		<div class="container">
    		<h1 class="text-center text-white"> Your Shopping Cart </h1>
  		</div>
	</div>  
	
	    {{-- Content  --}}
	    <div class="container mt-5">
		
		{{-- Shopping Cart Div  --}}
		<div class="row mt-5 shoppingcart_div">
			<div class="col-12">
				<a href="{{route('homepage')}}" class="btn mainfullbtncolor btn-secondary float-right px-3" > 
					<i class="icofont-shopping-cart"></i>
					Continue Shopping 
				</a>
			</div>
		</div>

		<div class="row mt-5 shoppingcart_div">
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th>No</th>
							<th>Photo</th>
							<th>Name</th>
							<th>Price </th>
							<th>Total </th>
							<th>Discount</th>
							<th>Qty</th>
							<th>Remove</th>
						</tr>
					</thead>
					<tbody id="tbody">
						
					</tbody> 

					<tfoot id="shoppingcart_tfoot">
						<tr>
							<td colspan="8 total">
								<h3 class="text-right"> Total : </h3>
							</td>
						</tr>
						<tr> 
							<td colspan="5"> 
								<textarea class="form-control note" id="notes" placeholder="Any Request..."></textarea>
							</td>
							<td colspan="3">
								@role('Customer')
								<button class="btn btn-secondary btn-block mainfullbtncolor checkoutbtn" type="submit"> 
									Check Out 
								</button>
								@else
								<a href="{{route('loginpage')}}" class="btn btn-secondary btn-block mainfullbtncolor checkoutbtn" type="submit">Login To Check Out</a>
								@endrole

							</td>
						</tr>
					</tfoot>
				</table>
			 {{-- <a href="{{'route(mainpage)'}}" class="btn btn-success">Continue Shopping</a>
				<textarea class="notes" placeholder="Your Note Here!"></textarea>
				<a href="#" class="btn btn-info float-right buy_now">Checkout</a> --}}
			</div>
		</div>

		{{-- No Shopping Cart Div  --}}
		 <div class="row mt-5 noneshoppingcart_div text-center">
			
			<div class="col-12">
				<h5 class="text-center"> There are no items in this cart </h5>
			</div>

			<div class="col-12 mt-5 ">
				<a href="{{route('homepage')}}" class="btn btn-secondary mainfullbtncolor px-3" > 
					<i class="icofont-shopping-cart"></i>
					Continue Shopping 
				</a>
			</div>

		</div>
		

	
	</div> 

	@endsection