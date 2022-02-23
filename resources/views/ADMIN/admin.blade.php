@extends('ADMIN.layout.layout')


@section('dash')





@php
	
	$x= \App\Models\Catagorie::count();
	$y= \App\Models\Post::count();
	$z= \App\Models\Tag::count();
	$u= \App\Models\user::count();



@endphp


					 <div class="row">
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon text-primary border-primary">
											<i class="fe fe-users"></i>
										</span>
										<div class="dash-count">
											<h3>{{ $u }}</h3>
										</div>
									</div>
									<div class="dash-widget-info">
										<h6 class="text-muted">User</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-primary w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon text-success">
											<i class="fe fe-credit-card"></i>
										</span>
										<div class="dash-count">
											<h3>{{ $y }}</h3>
										</div>
									</div>
									<div class="dash-widget-info">
										
										<h6 class="text-muted">Post</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-success w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon text-danger border-danger">
											<i class="fe fe-money"></i>
										</span>
										<div class="dash-count">
											<h3>{{ $z }}</h3>
										</div>
									</div>
									<div class="dash-widget-info">
										
										<h6 class="text-muted">Tags</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-danger w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-sm-6 col-12">
							<div class="card">
								<div class="card-body">
									<div class="dash-widget-header">
										<span class="dash-widget-icon text-warning border-warning">
											<i class="fe fe-folder"></i>
										</span>
										<div class="dash-count">
											<h3>{{ $x }}</h3>
										</div>
									</div>
									<div class="dash-widget-info">
										
										<h6 class="text-muted">Catagories</h6>
										<div class="progress progress-sm">
											<div class="progress-bar bg-warning w-50"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> 


		@endsection
					
