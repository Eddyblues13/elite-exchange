

@include('admin.header')
@include('admin.navbar')
				<!-- Content wrapper scroll start -->
				<div class="content-wrapper-scroll">
				            @if (session('error'))
                              <div class="alert box-bdr-red alert-dismissible fade show text-red" role="alert">
															<b>Error!</b>{{ session('error') }}
											<button type="button" class="btn-close" data-bs-dismiss="alert"
																aria-label="Close"></button>
									</div>
                                    @elseif (session('status'))
									<div class="alert box-bdr-green alert-dismissible fade show text-green" role="alert">
															<b>Success!</b> {{ session('status') }}
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
									</div>
                                  @endif

					<!-- Main header starts -->
					<div class="main-header d-flex align-items-center justify-content-between position-relative">
						<div class="d-flex align-items-center justify-content-center">
							<div class="page-icon">
								<i class="bi bi-house"></i>
							</div>
							<div class="page-title d-none d-md-block">
								<h5>Welcome back, {{Auth::user()->name}}</h5>
							</div>
						</div>
						<!-- Live updates start -->
						
						<!-- Live updates end -->
					</div>
					<!-- Main header ends -->

					<!-- Content wrapper start -->
					<div class="content-wrapper">

						<!-- Row start -->
						
											<div class="col-sm-12 col-12">
												<h4>Users</h4>
								<div class="card">
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered m-0">
												<thead>
												  
													<tr>
														<th>ID</th>
														<th>Full Name</th>
														<th>Email</th>
														<th>Action</th>
														
														
													</tr>

												</thead>
												<tbody>
												     @foreach($result as $users)
													<tr>
												      <th>{{$users->id}}</t>
														<th>{{$users->first_name}}</t>
														<th>{{$users->email}}</t>
														<td><a href="{{url('profile/'.$users->id)}}"><span class="badge shade-blue">View User</span></a></td>
														<td><a href="{{url('delete/'.$users->id)}}"><span class="badge shade-red">Delete User</span></a></td>

														
													</tr>
													@endforeach
													
													
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

					</div>
					<!-- Content wrapper end -->

				</div>
				<!-- Content wrapper scroll end -->
@include('admin.footer')