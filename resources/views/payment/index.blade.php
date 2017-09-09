@extends('layouts.app')

@section('content')
	<div style="display: block;height: 80px;"></div>
	<h1 class="text-center page-title">Step 1:  Payment Details</h1>
	<br>
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
			<p>Online facility to make payments to Georgia Brown LLC. To use this service, <a href="#">contact</a> Customer Service for a Reference Number.</p>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
			<form class="form-horizontal" method="post" action="{{ route('stepOneStore') }}">
				{{ csrf_field() }}
				<div class="form-group{{$errors->has('reference_no') ? ' error':''}}">
				    <label for="ReferenceNo" class="col-sm-4 control-label">Reference No.*</label>
				    <div class="col-sm-8">
				      <input type="text" name="reference_no" class="form-control" id="ReferenceNo">
				    </div>
				</div>
				<div class="form-group{{$errors->has('firstname') ? ' error':''}}">
				    <label for="Firstname" class="col-sm-4 control-label">First Name*</label>
				    <div class="col-sm-8">
				      <input type="text" name="firstname" class="form-control" id="Firstname">
				    </div>
				</div>
				<div class="form-group{{$errors->has('lastname') ? ' error':''}}">
				    <label for="Lastname" class="col-sm-4 control-label">Last Name*</label>
				    <div class="col-sm-8">
				      <input type="text" name="lastname" class="form-control" id="Lastname">
				    </div>
				</div>
				<div class="form-group{{$errors->has('email') ? ' error':''}}">
				    <label for="Email" class="col-sm-4 control-label">Email*</label>
				    <div class="col-sm-8">
				      <input type="email" name="email" class="form-control" id="Email">
				    </div>
				</div>
				<div class="form-group{{$errors->has('phone') ? ' error':''}}">
				    <label for="Phone" class="col-sm-4 control-label">Phone*</label>
				    <div class="col-sm-8">
				      <input type="text" name="phone" class="form-control" id="Phone">
				    </div>
				</div>
				<div class="form-group">
				    <label for="Comments" class="col-sm-4 control-label">Comments</label>
				    <div class="col-sm-8">
				      <textarea class="form-control" rows="5" id="Comments" name="comments"></textarea>
				    </div>
				</div>
				<br>
				<input type="submit" name="" class="btn btn-green pull-right" value="NEXT" style="padding-right:30px;padding-left:30px;">
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
	.error input[type="text"], .error input[type="email"]{
		border-color: red;
	}
</style>
@endpush