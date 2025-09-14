@include('dashboard.header')

<div class="main-content">
	<div class="page-content">
		<div class="container-fluid">

			<!-- Page Title Section -->
			<div class="row">
				<div class="col-12">
					<div class="page-title-box d-flex align-items-center justify-content-between">
						<h4 class="mb-0">Create A New Shipment <i class="bx bx-transfer"></i></h4>
					</div>
				</div>
			</div>

			<!-- Card Container Section -->
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="card shadow-sm border-0 rounded-lg">
						<div class="card-header text-center bg-primary text-white py-4">
							<h4 class="mb-0">Shipment Details</h4>
						</div>

						<div class="card-body p-4">
							<!-- Flash Messages Section -->
							@if (session('error'))
							<div class="alert alert-danger alert-dismissible fade show" role="alert">
								<strong>Error!</strong> {{ session('error') }}
								<button type="button" class="btn-close" data-bs-dismiss="alert"
									aria-label="Close"></button>
							</div>
							@elseif (session('status') || session('message'))
							<div class="alert alert-success alert-dismissible fade show" role="alert">
								<strong>Success!</strong> {{ session('status') ?? session('message') }}
								<button type="button" class="btn-close" data-bs-dismiss="alert"
									aria-label="Close"></button>
							</div>
							@endif

							<!-- Display Validation Errors Section -->
							@if ($errors->any())
							<div class="alert alert-danger">
								<ul>
									@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
							@endif

							<!-- Form Start Section -->
							<form action="{{ route('save.shipment') }}" method="POST" onsubmit="showLoadingModal()">
								@csrf

								<!-- Sender Details Section -->
								<h5 class="text-muted mt-4">Sender Information</h5>
								<hr class="mt-0 mb-3">
								<div class="row">
									<div class="col-md-6 mb-3">
										<label for="sender_name" class="control-label">Sender Name</label>
										<input type="text" class="form-control" id="sender_name" name="sender_name"
											placeholder="Sender Name*" value="{{ old('sender_name') }}" required>
									</div>
									<div class="col-md-6 mb-3">
										<label for="sender_phone" class="control-label">Sender Phone</label>
										<input type="text" class="form-control" id="sender_phone" name="sender_phone"
											placeholder="Sender Phone*" value="{{ old('sender_phone') }}" required>
									</div>
									<div class="col-md-6 mb-3">
										<label for="sender_email" class="control-label">Sender Email</label>
										<input type="email" class="form-control" id="sender_email" name="sender_email"
											placeholder="Sender Email*" value="{{ old('sender_email') }}" required>
									</div>
									<div class="col-md-6 mb-3">
										<label for="sender_address" class="control-label">Sender Address</label>
										<input type="text" class="form-control" id="sender_address"
											name="sender_address" placeholder="Sender Address*"
											value="{{ old('sender_address') }}" required>
									</div>
								</div>

								<!-- Receiver Details Section -->
								<h5 class="text-muted mt-4">Receiver Information</h5>
								<hr class="mt-0 mb-3">
								<div class="row">
									<div class="col-md-6 mb-3">
										<label for="receiver_name" class="control-label">Receiver Name</label>
										<input type="text" class="form-control" id="receiver_name" name="receiver_name"
											placeholder="Receiver Name*" value="{{ old('receiver_name') }}" required>
									</div>
									<div class="col-md-6 mb-3">
										<label for="receiver_phone" class="control-label">Receiver Phone</label>
										<input type="text" class="form-control" id="receiver_phone"
											name="receiver_phone" placeholder="Receiver Phone*"
											value="{{ old('receiver_phone') }}" required>
									</div>
									<div class="col-md-6 mb-3">
										<label for="receiver_email" class="control-label">Receiver Email</label>
										<input type="email" class="form-control" id="receiver_email"
											name="receiver_email" placeholder="Receiver Email*"
											value="{{ old('receiver_email') }}" required>
									</div>
									<div class="col-md-6 mb-3">
										<label for="receiver_address" class="control-label">Receiver Address</label>
										<input type="text" class="form-control" id="receiver_address"
											name="receiver_address" placeholder="Receiver Address*"
											value="{{ old('receiver_address') }}" required>
									</div>
									<div class="col-md-6 mb-3">
										<label for="receiver_age" class="control-label">Receiver Age</label>
										<input type="number" class="form-control" id="receiver_age" name="receiver_age"
											placeholder="Receiver Age*" value="{{ old('receiver_age') }}" required>
									</div>
								</div>

								<!-- Parcel Details Section -->
								<h5 class="text-muted mt-4">Parcel Details</h5>
								<hr class="mt-0 mb-3">
								<div class="row">
									<div class="col-md-6 mb-3">
										<label for="parcel_description" class="control-label">Parcel Description</label>
										<input type="text" class="form-control" id="parcel_description"
											name="parcel_description" placeholder="Parcel Description*"
											value="{{ old('parcel_description') }}" required>
									</div>
									<div class="col-md-6 mb-3">
										<label for="dispatch_location" class="control-label">Dispatch Location</label>
										<input type="text" class="form-control" id="dispatch_location"
											name="dispatch_location" placeholder="Dispatch Location*"
											value="{{ old('dispatch_location') }}" required>
									</div>
									<div class="col-md-6 mb-3">
										<label for="current_location" class="control-label">Current Location</label>
										<input type="text" class="form-control" id="current_location"
											name="current_location" placeholder="Current Location*"
											value="{{ old('current_location') }}" required>
									</div>
									<div class="col-md-6 mb-3">
										<label for="locale" class="control-label">Map Location</label>
										<input type="text" class="form-control" id="locale" name="locale"
											placeholder="Map location*" value="{{ old('locale') }}" required>
									</div>
								</div>

								<!-- Status and Dates Section -->
								<h5 class="text-muted mt-4">Additional Information</h5>
								<hr class="mt-0 mb-3">
								<div class="row">
									<div class="col-md-6 mb-3">
										<label for="parcel_status" class="control-label">Parcel Status</label>
										<select class="form-select" id="parcel_status" name="parcel_status">
											<option value="In Transit" {{ old('parcel_status')=='In Transit'
												? 'selected' : '' }}>In Transit</option>
											<option value="On Hold" {{ old('parcel_status')=='On Hold' ? 'selected' : ''
												}}>On Hold</option>
											<option value="Delivered" {{ old('parcel_status')=='Delivered' ? 'selected'
												: '' }}>Delivered</option>
											<option value="Failed" {{ old('parcel_status')=='Failed' ? 'selected' : ''
												}}>Failed</option>
										</select>
									</div>
									<div class="col-md-6 mb-3">
										<label for="dispatch_date" class="control-label">Dispatch Date</label>
										<input type="date" class="form-control" id="dispatch_date" name="dispatch_date"
											value="{{ old('dispatch_date') }}" required>
									</div>
									<div class="col-md-6 mb-3">
										<label for="delivery_date" class="control-label">Delivery Date</label>
										<input type="date" class="form-control" id="delivery_date" name="delivery_date"
											value="{{ old('delivery_date') }}" required>
									</div>
								</div>

								<!-- Submit Button Section -->
								<div class="text-end">
									<button id="send_pin"
										class="btn btn-primary btn-rounded waves-effect waves-light mt-4" type="submit">
										Create Shipment
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- Loading Modal Section -->
	<div id="myModal" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
		aria-hidden="true">
		<div class="modal-dialog modal-sm modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body text-center">
					<div class="spinner-border text-primary" role="status">
						<span class="visually-hidden">Loading...</span>
					</div>
					<p class="mt-2">Processing...</p>
				</div>
			</div>
		</div>
	</div>
</div>

@include('dashboard.footer')

<!-- Custom Scripts Section -->
<script src="assets/js/jquery-3.4.1.min.js"></script>
<script>
	function showLoadingModal() {
        var myModal = new bootstrap.Modal(document.getElementById('myModal'), {});
        myModal.show();
    }
</script>

<!-- Custom Styles Section -->
<style>
	.main-content {
		background-color: #f8f9fa;
	}

	.card {
		border-radius: 15px;
	}

	.form-control,
	.form-select {
		border-radius: 10px;
	}

	.card-header {
		border-top-left-radius: 15px;
		border-top-right-radius: 15px;
	}

	.btn-primary {
		background-color: #007bff;
		border-color: #007bff;
	}
</style>