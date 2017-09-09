@extends('layouts.app')
@section('content')
	<div style="display: block;height: 80px;"></div>
	<h1 class="text-center page-title">Step 2:  Billing Details</h1>
	<br>
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
			<form class="form-horizontal" method="post" action="{{ route('stepTwoStore') }}">
				{{ csrf_field() }}
				<div class="form-group{{$errors->has('reference_no') ? ' error':''}}">
				    <label for="ReferenceNo" class="col-sm-4 control-label">Cards Accepted</label>
				    <div class="col-sm-8">
				      <p style="font-size: 26px;"><i class="fa fa-cc-visa"></i> <i class="fa fa-cc-mastercard"></i> <i class="fa fa-cc-amex"></i></p>
				    </div>
				</div>
				<div class="form-group{{$errors->has('card_number') ? ' error':''}}">
				    <label for="cardnumber" class="col-sm-4 control-label">Card Number*</label>
				    <div class="col-sm-8">
				      <input type="text" name="card_number" class="form-control" id="cardnumber" value="{{old('card_number')}}">
				    </div>
				</div>
				<div class="form-group{{$errors->has('year') ? ' error':'' || $errors->has('month') ? ' error':''}}">
				    <label for="Lastname" class="col-sm-4 control-label">Expiry Date*</label>
				    <div class="col-sm-4">
				      <select class="form-control" name="year">
				      	<option value="">Year</option>
				      	@for($i=2017; $i<=2030; $i++)
				      	<option value="{{$i}}"{{$i==old('year')? ' selected':''}}>{{$i}}</option>
				      	@endfor
				      </select>
				    </div>
				    <div class="col-sm-4">
				      <select class="form-control" name="month">
				      	<option value="">Month</option>
				      	@for($i=1; $i<=12; $i++)
				      	<option value="{{sprintf("%02d", $i)}}"{{$i==old('month')? ' selected':''}}>{{sprintf("%02d", $i)}}</option>
				      	@endfor
				      </select>
				    </div>
				</div>
				<div class="form-group{{$errors->has('cvv') ? ' error':''}}">
				    <label for="Email" class="col-sm-4 control-label">CVV*</label>
				    <div class="col-sm-8">
				      <input type="text" name="cvv" class="form-control" id="Email">
				    </div>
				</div>
				<div class="form-group{{$errors->has('address_1') ? ' error':''}}">
				    <label for="Phone" class="col-sm-4 control-label">Address 1*</label>
				    <div class="col-sm-8">
				      <input type="text" name="address_1" class="form-control" id="Phone">
				    </div>
				</div>
				<div class="form-group{{$errors->has('phone') ? ' error':''}}">
				    <label for="Phone" class="col-sm-4 control-label">Address 2 (Optional)</label>
				    <div class="col-sm-8">
				      <input type="text" name="phone" class="form-control" id="Phone">
				    </div>
				</div>
				<div class="form-group{{$errors->has('city') ? ' error':''}}">
				    <label for="Phone" class="col-sm-4 control-label">City*</label>
				    <div class="col-sm-8">
				      <input type="text" name="phone" class="form-control" id="Phone">
				    </div>
				</div>
				<div class="form-group{{$errors->has('state') ? ' error':''}}">
				    <label for="Phone" class="col-sm-4 control-label">State*</label>
				    <div class="col-sm-8">
				      <input type="text" name="phone" class="form-control" id="Phone">
				    </div>
				</div>
				<div class="form-group{{$errors->has('zip_code') ? ' error':''}}">
				    <label for="Phone" class="col-sm-4 control-label">Zip Code*</label>
				    <div class="col-sm-8">
				      <input type="text" name="phone" class="form-control" id="Phone">
				    </div>
				</div>
				<div class="form-group{{$errors->has('country') ? ' error':''}}">
				    <label for="Phone" class="col-sm-4 control-label">Country*</label>
				    <div class="col-sm-8">
				      <input type="text" name="phone" class="form-control" id="Phone">
				    </div>
				</div>
				<br>
				<input type="submit" name="" class="btn btn-green pull-right" value="SUBMIT" style="padding-right:30px;padding-left:30px;">
			</form>
			<br>
			<br>
			<br>
			<br>
			<br>
		</div>
	</div>
@endsection

@push('style')
<style type="text/css">
	label{
		color: #126676;
	}
	h1{
		font-family: 'CenturyGothic-Bold';
	}
	.error input[type="text"], .error input[type="email"], .error select{
		border-color: red;
	}
</style>
@endpush