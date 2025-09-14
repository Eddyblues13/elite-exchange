@extends('dashboard.header')

<div class="main-content">
	<div class="page-content">
		<div class="container-fluid">
			<!-- Page Title -->
			<div class="row">
				<div class="col-12">
					<div class="page-title-box d-sm-flex align-items-center justify-content-between">
						<h4 class="mb-sm-0 font-size-15">Update Shipment Details <i class="bx bx-edit"></i></h4>
						<div class="page-title-right">
							<ol class="breadcrumb m-0"></ol>
						</div>
					</div>
				</div>
			</div>

			<!-- Form to Update Package -->
			<div class="col-xl-12">
				<div class="card" style="border-top-left-radius:30px; border-top-right-radius: 30px;">
					<div class="card-body">
						<center>
							<p class="card-title" id="someDiv">Update Shipment Details</p>
						</center>
					</div>

					<div class="card-body">
						@if ($errors->any())
						<div class="alert alert-danger alert-dismissible fade show" role="alert">
							<b>Error!</b>
							<ul class="mb-0">
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>
						@endif

						@if (session('status'))
						<div class="alert alert-success alert-dismissible fade show" role="alert">
							<b>Success!</b> {{ session('status') }}
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>
						@endif

						<form id="update_form" action="{{ route('update.shipment', $package->id) }}" method="POST">
							@csrf
							@method('PUT')

							<div class="row mb-4">
								<label for="sender_name" class="col-sm-3 col-form-label">Sender Name*</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="sender_name" name="sender_name"
										value="{{ old('sender_name', $package->sender_name) }}">
								</div>
							</div>

							<div class="row mb-4">
								<label for="sender_email" class="col-sm-3 col-form-label">Sender Email*</label>
								<div class="col-sm-9">
									<input type="email" class="form-control" id="sender_email" name="sender_email"
										value="{{ old('sender_email', $package->user_email) }}" readonly>
								</div>
							</div>

							<div class="row mb-4">
								<label for="sender_address" class="col-sm-3 col-form-label">Sender Address*</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="sender_address" name="sender_address"
										value="{{ old('sender_address', $package->sender_address) }}" lang="en">
								</div>
							</div>

							<div class="row mb-4">
								<label for="sender_phone" class="col-sm-3 col-form-label">Sender Phone*</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="sender_phone" name="sender_phone"
										value="{{ old('sender_phone', $package->user_phone) }}">
								</div>
							</div>

							<div class="row mb-4">
								<label for="receiver_name" class="col-sm-3 col-form-label">Receiver Name*</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="receiver_name" name="receiver_name"
										value="{{ old('receiver_name', $package->receiver_name) }}">
								</div>
							</div>

							<div class="row mb-4">
								<label for="receiver_phone" class="col-sm-3 col-form-label">Receiver Phone*</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="receiver_phone" name="receiver_phone"
										value="{{ old('receiver_phone', $package->receiver_phone) }}">
								</div>
							</div>

							<div class="row mb-4">
								<label for="receiver_email" class="col-sm-3 col-form-label">Receiver Email*</label>
								<div class="col-sm-9">
									<input type="email" class="form-control" id="receiver_email" name="receiver_email"
										value="{{ old('receiver_email', $package->receiver_email) }}">
								</div>
							</div>

							<div class="row mb-4">
								<label for="receiver_address" class="col-sm-3 col-form-label">Receiver Address*</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="receiver_address"
										name="receiver_address"
										value="{{ old('receiver_address', $package->receiver_address) }}" lang="en">
								</div>
							</div>

							<div class="row mb-4">
								<label for="parcel_description" class="col-sm-3 col-form-label">Parcel
									Description*</label>
								<div class="col-sm-9">
									<textarea class="form-control" id="parcel_description" name="parcel_description"
										rows="3">{{ old('parcel_description', $package->parcel_description) }}</textarea>
								</div>
							</div>

							<div class="row mb-4">
								<label for="locale" class="col-sm-3 col-form-label">Map Location</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="locale" name="locale"
										value="{{ old('locale', $package->locale) }}">
								</div>
							</div>

							<div class="row mb-4">
								<label for="dispatch_location" class="col-sm-3 col-form-label">Dispatch
									Location*</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="dispatch_location"
										name="dispatch_location"
										value="{{ old('dispatch_location', $package->dispatch_location) }}" lang="en">
								</div>
							</div>

							<div class="row mb-4">
								<label for="current_location" class="col-sm-3 col-form-label">Current Location*</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="current_location"
										name="current_location"
										value="{{ old('current_location', $package->current_location) }}" lang="en">
								</div>
							</div>

							<div class="row mb-4">
								<label for="parcel_status" class="col-sm-3 col-form-label">Courier Status</label>
								<div class="col-sm-9">
									<select class="form-control" id="parcel_status" name="parcel_status">
										<option value="In Transit" {{ old('parcel_status', $package->parcel_status) ==
											'In Transit' ? 'selected' : '' }}>In Transit</option>
										<option value="On Hold" {{ old('parcel_status', $package->parcel_status) == 'On
											Hold' ? 'selected' : '' }}>On Hold</option>
										<option value="Delivered" {{ old('parcel_status', $package->parcel_status) ==
											'Delivered' ? 'selected' : '' }}>Delivered</option>
										<option value="Failed" {{ old('parcel_status', $package->parcel_status) ==
											'Failed' ? 'selected' : '' }}>Failed</option>
									</select>
								</div>
							</div>

							<div class="row mb-4">
								<label for="dispatch_date" class="col-sm-3 col-form-label">Dispatch Date*</label>
								<div class="col-sm-9">
									<input type="date" class="form-control" id="dispatch_date" name="dispatch_date"
										value="{{ old('dispatch_date', $package->dispatch_date) }}">
								</div>
							</div>

							<div class="row mb-4">
								<label for="delivery_date" class="col-sm-3 col-form-label">Delivery Date</label>
								<div class="col-sm-9">
									<input type="date" class="form-control" id="delivery_date" name="delivery_date"
										value="{{ old('delivery_date', $package->delivery_date) }}">
								</div>
							</div>

							<div class="row justify-content-end">
								<div class="col-sm-9">
									<button class="btn btn-primary btn-rounded waves-effect waves-light"
										type="submit">Update Shipment</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@include('dashboard.footer')