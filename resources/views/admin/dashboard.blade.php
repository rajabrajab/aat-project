@extends('layouts.admin')
@section('title','لوحة التحكم')


@section('content')
<div class="container">
<!-- Basic columns -->
<!-- Quick stats boxes -->
							<div class="row">
								<div class="col-lg-4">

									<!-- Members online -->
									<div class="card bg-teal text-white">
										<div class="card-body">
											<div class="d-flex">
												<h3 class="mb-0">3,450</h3>
												<span class="badge bg-black bg-opacity-50 rounded-pill align-self-center ms-auto">+53,6%</span>
						                	</div>

						                	<div>
												Members online
												<div class="fs-sm opacity-75">489 avg</div>
											</div>
										</div>

										<div class="rounded-bottom overflow-hidden mx-3" id="members-online"></div>
									</div>
									<!-- /members online -->

								</div>

								<div class="col-lg-4">

									<!-- Current server load -->
									<div class="card bg-pink text-white">
										<div class="card-body">
											<div class="d-flex align-items-center">
												<h3 class="mb-0">49.4%</h3>
												<div class="dropdown d-inline-flex ms-auto">
													<a href="#" class="text-white d-inline-flex align-items-center dropdown-toggle" data-bs-toggle="dropdown">
														<i class="ph-gear"></i>
													</a>
													<div class="dropdown-menu dropdown-menu-end">
														<a href="#" class="dropdown-item">
															<i class="ph-arrows-clockwise me-2"></i>
															Update data
														</a>
														<a href="#" class="dropdown-item">
															<i class="ph-list-dashes me-2"></i>
															Detailed log
														</a>
														<a href="#" class="dropdown-item">
															<i class="ph-chart-line me-2"></i>
															Statistics
														</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item">
															<i class="ph-eraser me-2"></i>
															Clear list
														</a>
													</div>
						                		</div>
						                	</div>

						                	<div>
												Current server load
												<div class="fs-sm opacity-75">34.6% avg</div>
											</div>
										</div>

										<div class="rounded-bottom overflow-hidden" id="server-load"></div>
									</div>
									<!-- /current server load -->

								</div>

								<div class="col-lg-4">

									<!-- Today's revenue -->
									<div class="card bg-primary text-white">
										<div class="card-body">
											<div class="d-flex align-items-center">
												<h3 class="mb-0">$18,390</h3>
												<div class="ms-auto">
							                		<a class="text-white" data-card-action="reload">
							                			<i class="ph-arrows-clockwise"></i>
							                		</a>
							                	</div>
						                	</div>

						                	<div>
												Today's revenue
												<div class="fs-sm opacity-75">$37,578 avg</div>
											</div>
										</div>

										<div class="rounded-bottom overflow-hidden" id="today-revenue"></div>
									</div>
									<!-- /today's revenue -->

								</div>
							</div>
							<!-- /quick stats boxes -->
</div>

<!-- My messages -->
							<div class="card">
								<div class="card-header d-flex align-items-center">
									<h5 class="mb-0">My messages</h5>
									<div class="ms-auto">
										<span><i class="ph-clock-counter-clockwise me-1"></i> Jul 7, 10:30</span>
										<span class="badge bg-success ms-3">Online</span>
									</div>
								</div>

								<!-- Numbers -->
								<div class="card-body pb-0">
									<div class="row text-center">
										<div class="col-4">
											<div class="mb-3">
												<h5 class="mb-0">2,345</h5>
												<span class="text-muted fs-sm">this week</span>
											</div>
										</div>

										<div class="col-4">
											<div class="mb-3">
												<h5 class="mb-0">3,568</h5>
												<span class="text-muted fs-sm">this month</span>
											</div>
										</div>

										<div class="col-4">
											<div class="mb-3">
												<h5 class="mb-0">32,693</h5>
												<span class="text-muted fs-sm">all messages</span>
											</div>
										</div>
									</div>
								</div>
								<!-- /numbers -->


								<!-- Area chart -->
								<div id="messages-stats"></div>
								<!-- /area chart -->


								<!-- Tabs -->
			                	<ul class="nav nav-tabs nav-tabs-underline nav-justified">
									<li class="nav-item">
										<a href="#messages-tue" class="nav-link active" data-bs-toggle="tab">
											Tuesday
										</a>
									</li>

									<li class="nav-item">
										<a href="#messages-mon" class="nav-link" data-bs-toggle="tab">
											Monday
										</a>
									</li>

									<li class="nav-item">
										<a href="#messages-fri" class="nav-link" data-bs-toggle="tab">
											Friday
										</a>
									</li>
								</ul>
								<!-- /tabs -->


								<!-- Tabs content -->
								<div class="tab-content card-body">
									<div class="tab-pane active fade show" id="messages-tue">
										<div class="d-flex align-items-start mb-3">
											<div class="status-indicator-container me-3">
												<img src="../../../assets/images/demo/users/face10.jpg" class="rounded-circle" width="40" jeight="40" alt="">
												<span class="status-indicator bg-success"></span>
												<span class="badge bg-yellow text-black position-absolute top-0 start-100 translate-middle rounded-pill">5</span>
											</div>

											<div class="flex-fill">
												<div class="d-flex justify-content-between align-items-center">
													<div class="fw-semibold"><a href="#">James Alexander</a></div>
													<span class="fs-sm text-muted">14:58</span>
												</div>

												Who knows, maybe that would be the best thing for me...
											</div>
										</div>

										<div class="d-flex align-items-start mb-3">
											<div class="status-indicator-container me-3">
												<img src="../../../assets/images/demo/users/face3.jpg" class="rounded-circle" width="40" jeight="40" alt="">
												<span class="status-indicator bg-danger"></span>
												<span class="badge bg-yellow text-black position-absolute top-0 start-100 translate-middle rounded-pill">4</span>
											</div>

											<div class="flex-fill">
												<div class="d-flex justify-content-between align-items-center">
													<div class="fw-semibold"><a href="#">Margo Baker</a></div>
													<span class="fs-sm text-muted">12:16</span>
												</div>

												That was something he was unable to do because...
											</div>
										</div>

										<div class="d-flex align-items-start mb-3">
											<div class="status-indicator-container me-3">
												<img src="../../../assets/images/demo/users/face24.jpg" class="rounded-circle" width="40" jeight="40" alt="">
												<span class="status-indicator bg-danger"></span>
											</div>

											<div class="flex-fill">
												<div class="d-flex justify-content-between align-items-center">
													<div class="fw-semibold"><a href="#">Jeremy Victorino</a></div>
													<span class="fs-sm text-muted">22:48</span>
												</div>

												But that would be extremely strained and suspicious...
											</div>
										</div>

										<div class="d-flex align-items-start mb-3">
											<div class="status-indicator-container me-3">
												<img src="../../../assets/images/demo/users/face4.jpg" class="rounded-circle" width="40" jeight="40" alt="">
												<span class="status-indicator bg-danger"></span>
											</div>

											<div class="flex-fill">
												<div class="d-flex justify-content-between align-items-center">
													<div class="fw-semibold"><a href="#">Beatrix Diaz</a></div>
													<span class="fs-sm text-muted">Tue</span>
												</div>

												What a strenuous career it is that I've chosen...
											</div>
										</div>

										<div class="d-flex align-items-start">
											<div class="status-indicator-container me-3">
												<img src="../../../assets/images/demo/users/face25.jpg" class="rounded-circle" width="40" jeight="40" alt="">
												<span class="status-indicator bg-success"></span>
											</div>

											<div class="flex-fill">
												<div class="d-flex justify-content-between align-items-center">
													<div class="fw-semibold"><a href="#">Beatrix Diaz</a></div>
													<span class="fs-sm text-muted">Tue</span>
												</div>

												Amidst roadrunner distantly pompously where...
											</div>
										</div>
									</div>

									<div class="tab-pane fade" id="messages-mon">
										<div class="d-flex align-items-start mb-3">
											<div class="status-indicator-container me-3">
												<img src="../../../assets/images/demo/users/face2.jpg" class="rounded-circle" width="40" jeight="40" alt="">
												<span class="status-indicator bg-success"></span>
											</div>

											<div class="flex-fill">
												<div class="d-flex justify-content-between align-items-center">
													<div class="fw-semibold"><a href="#">Isak Temes</a></div>
													<span class="fs-sm text-muted">Tue, 19:58</span>
												</div>

												Reasonable palpably rankly expressly grimy...
											</div>
										</div>

										<div class="d-flex align-items-start mb-3">
											<div class="status-indicator-container me-3">
												<img src="../../../assets/images/demo/users/face7.jpg" class="rounded-circle" width="40" jeight="40" alt="">
												<span class="status-indicator bg-warning"></span>
											</div>

											<div class="flex-fill">
												<div class="d-flex justify-content-between align-items-center">
													<div class="fw-semibold"><a href="#">Vittorio Cosgrove</a></div>
													<span class="fs-sm text-muted">Tue, 16:35</span>
												</div>

												Arguably therefore more unexplainable fumed...
											</div>
										</div>

										<div class="d-flex align-items-start mb-3">
											<div class="status-indicator-container me-3">
												<img src="../../../assets/images/demo/users/face18.jpg" class="rounded-circle" width="40" jeight="40" alt="">
												<span class="status-indicator bg-warning"></span>
											</div>

											<div class="flex-fill">
												<div class="d-flex justify-content-between align-items-center">
													<div class="fw-semibold"><a href="#">Hilary Talaugon</a></div>
													<span class="fs-sm text-muted">Tue, 12:16</span>
												</div>

												Nicely unlike porpoise a kookaburra past more...
											</div>
										</div>

										<div class="d-flex align-items-start mb-3">
											<div class="status-indicator-container me-3">
												<img src="../../../assets/images/demo/users/face14.jpg" class="rounded-circle" width="40" jeight="40" alt="">
												<span class="status-indicator bg-success"></span>
											</div>

											<div class="flex-fill">
												<div class="d-flex justify-content-between align-items-center">
													<div class="fw-semibold"><a href="#">Bobbie Seber</a></div>
													<span class="fs-sm text-muted">Tue, 09:20</span>
												</div>

												Before visual vigilantly fortuitous tortoise...
											</div>
										</div>

										<div class="d-flex align-items-start">
											<div class="status-indicator-container me-3">
												<img src="../../../assets/images/demo/users/face8.jpg" class="rounded-circle" width="40" jeight="40" alt="">
												<span class="status-indicator bg-success"></span>
											</div>

											<div class="flex-fill">
												<div class="d-flex justify-content-between align-items-center">
													<div class="fw-semibold"><a href="#">Walther Laws</a></div>
													<span class="fs-sm text-muted">Tue, 03:29</span>
												</div>

												Far affecting more leered unerringly dishonest...
											</div>
										</div>
									</div>

									<div class="tab-pane fade" id="messages-fri">
										<div class="d-flex align-items-start mb-3">
											<div class="status-indicator-container me-3">
												<img src="../../../assets/images/demo/users/face15.jpg" class="rounded-circle" width="40" jeight="40" alt="">
												<span class="status-indicator bg-danger"></span>
											</div>

											<div class="flex-fill">
												<div class="d-flex justify-content-between align-items-center">
													<div class="fw-semibold"><a href="#">Owen Stretch</a></div>
													<span class="fs-sm text-muted">Fri, 18:12</span>
												</div>

												Tardy rattlesnake seal raptly earthworm...
											</div>
										</div>

										<div class="d-flex align-items-start mb-3">
											<div class="status-indicator-container me-3">
												<img src="../../../assets/images/demo/users/face12.jpg" class="rounded-circle" width="40" jeight="40" alt="">
												<span class="status-indicator bg-warning"></span>
											</div>

											<div class="flex-fill">
												<div class="d-flex justify-content-between align-items-center">
													<div class="fw-semibold"><a href="#">Jenilee Mcnair</a></div>
													<span class="fs-sm text-muted">Fri, 14:03</span>
												</div>

												Since hello dear pushed amid darn trite...
											</div>
										</div>

										<div class="d-flex align-items-start mb-3">
											<div class="status-indicator-container me-3">
												<img src="../../../assets/images/demo/users/face22.jpg" class="rounded-circle" width="40" jeight="40" alt="">
												<span class="status-indicator bg-danger"></span>
											</div>

											<div class="flex-fill">
												<div class="d-flex justify-content-between align-items-center">
													<div class="fw-semibold"><a href="#">Alaster Jain</a></div>
													<span class="fs-sm text-muted">Fri, 13:59</span>
												</div>

												Dachshund cardinal dear next jeepers well...
											</div>
										</div>

										<div class="d-flex align-items-start mb-3">
											<div class="status-indicator-container me-3">
												<img src="../../../assets/images/demo/users/face24.jpg" class="rounded-circle" width="40" jeight="40" alt="">
												<span class="status-indicator bg-secondary"></span>
											</div>

											<div class="flex-fill">
												<div class="d-flex justify-content-between align-items-center">
													<div class="fw-semibold"><a href="#">Sigfrid Thisted</a></div>
													<span class="fs-sm text-muted">Fri, 09:26</span>
												</div>

												Lighted wolf yikes less lemur crud grunted...
											</div>
										</div>

										<div class="d-flex align-items-start">
											<div class="status-indicator-container me-3">
												<img src="../../../assets/images/demo/users/face17.jpg" class="rounded-circle" width="40" jeight="40" alt="">
												<span class="status-indicator bg-secondary"></span>
											</div>

											<div class="flex-fill">
												<div class="d-flex justify-content-between align-items-center">
													<div class="fw-semibold"><a href="#">Sherilyn Mckee</a></div>
													<span class="fs-sm text-muted">Fri, 06:38</span>
												</div>

												Less unicorn a however careless husky...
											</div>
										</div>
									</div>
								</div>
								<!-- /tabs content -->

							</div>
							<!-- /my messages -->

					<div class="card">
						<div class="card-header">
							<h5 class="mb-0">Basic columns</h5>
						</div>

						<div class="card-body">
							<div class="chart-container">
								<div class="chart has-fixed-height" id="columns_basic"></div>
							</div>
						</div>
					</div>
					<!-- /basic columns -->
@endsection
