@extends('layouts.master')

@include('layouts.header')
@section('content')

	<div class="w_content">

		<div class="women">
			<a href="#"><h4>All Watches - <span>20 items</span> </h4></a>
			<ul class="w_nav">
				<li>Sort : </li>
				<li><a class="active" href="#">popular</a></li> |
				<li><a href="#">new </a></li> |
				<li><a href="#">discount</a></li> |
				<li><a href="#">price: Low High </a></li> 
				<div class="clear"></div>	
			</ul>
			<div class="clearfix"></div>	
		</div>

		<!-- grids_of_4 -->
		<div class="grids_of_4">
			<div class="grid1_of_4">
				<div class="content_box">
					<a href="#">
						<img src="#" class="img-responsive" alt="">
					</a>
					<h4><a href="#">Model name</a></h4>
					<p>It is a long established fact that</p>
					<div class="grid_1 simpleCart_shelfItem">
						<div class="item_add"><span class="item_price"><h6>&#8369; P 1200</h6></span></div>
						<p>100 pcs</p>
						<div class="item_add"><span class="item_price"><a href="#">add to cart</a></span></div>
					</div>
				</div>
			</div>
		</div>
		<!-- end grids_of_4 -->

	</div>
		<!-- end content -->


@endsection