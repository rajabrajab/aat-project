@extends('layouts.admin')
@section('title','لوحة التحكم')


@section('content')

	<!-- Content area -->
				<div class="content">

					<!-- Main charts -->
					<div class="row">
						<div class="col-xl-7">

							<!-- Traffic sources -->
							<div class="card">


								<div class="card-body pb-0">
									<div class="row">
										<div class="col-sm-4">
											<div class="d-flex align-items-center justify-content-center mb-2">
												<a href="#"
													class="bg-success bg-opacity-10 text-success lh-1 rounded-pill p-2 me-3">
													<i class="ph-plus"></i>
												</a>
												<div>
													<div class="fw-semibold">المستحدمين الجدد</div>
													<span class="text-muted">2,349 avg</span>
												</div>
											</div>
											<div class="w-75 mx-auto mb-3" id="new-visitors"></div>
										</div>

										<div class="col-sm-4">
											<div class="d-flex align-items-center justify-content-center mb-2">
												<a href="#"
													class="bg-warning bg-opacity-10 text-warning lh-1 rounded-pill p-2 me-3">
													<i class="ph-clock"></i>
												</a>
												<div>
													<div class="fw-semibold">عدد الزيارات</div>
													<span class="text-muted">08:20 avg</span>
												</div>
											</div>
											<div class="w-75 mx-auto mb-3" id="new-sessions"></div>
										</div>

										<div class="col-sm-4">
											<div class="d-flex align-items-center justify-content-center mb-2">
												<a href="#"
													class="bg-indigo bg-opacity-10 text-indigo lh-1 rounded-pill p-2 me-3">
													<i class="ph-users-three"></i>
												</a>
												<div>
													<div class="fw-semibold">الدعوات الجديدة</div>
													<span class="text-muted">5,378 avg</span>
												</div>
											</div>
											<div class="w-75 mx-auto mb-3" id="total-online"></div>
										</div>
									</div>
								</div>

								<div class="chart position-relative" id="traffic-sources"></div>
							</div>
							<!-- /traffic sources -->

						</div>

						<div class="col-xl-5">

							<!-- Sales stats -->
							<div class="card">
								<div class="card-header d-sm-flex align-items-sm-center py-sm-0">
									<h5 class="py-sm-2 my-sm-1">احصائيات المبيعات</h5>
									<div class="mt-2 mt-sm-0 ms-sm-auto">
										<select class="form-select" id="select_date">
											<option value="val1">June, 29 - July, 5</option>
											<option value="val2">June, 22 - June 28</option>
											<option value="val3" selected>June, 15 - June, 21</option>
											<option value="val4">June, 8 - June, 14</option>
										</select>
									</div>
								</div>

								<div class="card-body pb-0">
									<div class="row text-center">
										<div class="col-4">
											<div class="mb-3">
												<h5 class="mb-0">5,689</h5>
												<div class="text-muted fs-sm">طلبات جديدة</div>
											</div>
										</div>

										<div class="col-4">
											<div class="mb-3">
												<h5 class="mb-0">32,568</h5>
												<div class="text-muted fs-sm">هذا الشهر</div>
											</div>
										</div>

										<div class="col-4">
											<div class="mb-3">
												<h5 class="mb-0">$23,464</h5>
												<div class="text-muted fs-sm">الارباح</div>
											</div>
										</div>
									</div>
								</div>

								<div class="chart mb-2" id="app_sales"></div>
								<div class="chart" id="monthly-sales-stats"></div>
							</div>
							<!-- /sales stats -->

						</div>
					</div>
					<!-- /main charts -->


					<!-- Dashboard content -->
					<div class="row">
						<div class="col-xl-8">

                            	<!-- Marketing campaigns -->
							<div class="card">
								<div class="card-header d-flex align-items-center">
									<h5 class="mb-0">منصات التواصل</h5>


								</div>


								<div class="table-responsive">
									<table class="table text-nowrap">
										<thead>
											<tr>
												<th>المنصة</th>

												<th>Changes</th>
												<th>Budget</th>
												<th>Status</th>
												<th class="text-center" style="width: 20px;">
													<i class="ph-dots-three"></i>
												</th>
											</tr>
										</thead>
										<tbody>
											<tr class="table-light">
												<td colspan="5">Today</td>

											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<a href="#" class="d-block me-3">
															<img src="../../../assets/images/brands/facebook.svg"
																class="rounded-circle" width="36" height="36" alt="">
														</a>
														<div>
															<a href="#" class="text-body fw-semibold">Facebook</a>
															<div class="text-muted fs-sm">
																<span
																	class="d-inline-block bg-primary rounded-pill p-1 me-1"></span>
																02:00 - 03:00
															</div>
														</div>
													</div>
												</td>

												<td><span class="text-success"><i class="ph-trend-up me-2"></i>
														2.43%</span></td>
												<td>
													<h6 class="mb-0">$5,489</h6>
												</td>
												<td><span
														class="badge bg-primary bg-opacity-10 text-primary">Active</span>
												</td>
												<td class="text-center">
													<div class="dropdown">
														<a href="#" class="text-body" data-bs-toggle="dropdown">
															<i class="ph-list"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-end">
															<a href="#" class="dropdown-item">
																<i class="ph-chart-line me-2"></i>
																View statement
															</a>
															<a href="#" class="dropdown-item">
																<i class="ph-pencil me-2"></i>
																Edit campaign
															</a>
															<a href="#" class="dropdown-item">
																<i class="ph-lock-key me-2"></i>
																Disable campaign
															</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item">
																<i class="ph-gear me-2"></i>
																Settings
															</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<a href="#" class="d-block me-3">
															<img src="../../../assets/images/brands/youtube.svg"
																class="rounded-circle" width="36" height="36" alt="">
														</a>
														<div>
															<a href="#" class="text-body fw-semibold">Youtube videos</a>
															<div class="text-muted fs-sm">
																<span
																	class="d-inline-block bg-danger rounded-pill p-1 me-1"></span>
																13:00 - 14:00
															</div>
														</div>
													</div>
												</td>

												<td><span class="text-success"><i class="ph-trend-up me-2"></i>
														3.12%</span></td>
												<td>
													<h6 class="mb-0">$2,592</h6>
												</td>
												<td><span
														class="badge bg-danger bg-opacity-10 text-danger">Closed</span>
												</td>
												<td class="text-center">
													<div class="dropdown">
														<a href="#" class="text-body" data-bs-toggle="dropdown">
															<i class="ph-list"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-end">
															<a href="#" class="dropdown-item">
																<i class="ph-chart-line me-2"></i>
																View statement
															</a>
															<a href="#" class="dropdown-item">
																<i class="ph-pencil me-2"></i>
																Edit campaign
															</a>
															<a href="#" class="dropdown-item">
																<i class="ph-lock-key me-2"></i>
																Disable campaign
															</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item">
																<i class="ph-gear me-2"></i>
																Settings
															</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<a href="#" class="d-block me-3">
															<img src="../../../assets/images/brands/spotify.svg"
																class="rounded-circle" width="36" height="36" alt="">
														</a>
														<div>
															<a href="#" class="text-body fw-semibold">Spotify ads</a>
															<div class="text-muted fs-sm">
																<span
																	class="d-inline-block bg-secondary rounded-pill p-1 me-1"></span>
																10:00 - 11:00
															</div>
														</div>
													</div>
												</td>

												<td><span class="text-danger"><i class="ph-trend-down me-2"></i>
														8.02%</span></td>
												<td>
													<h6 class="mb-0">$1,268</h6>
												</td>
												<td><span class="badge bg-secondary bg-opacity-10 text-secondary">On
														hold</span></td>
												<td class="text-center">
													<div class="dropdown">
														<a href="#" class="text-body" data-bs-toggle="dropdown">
															<i class="ph-list"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-end">
															<a href="#" class="dropdown-item">
																<i class="ph-chart-line me-2"></i>
																View statement
															</a>
															<a href="#" class="dropdown-item">
																<i class="ph-pencil me-2"></i>
																Edit campaign
															</a>
															<a href="#" class="dropdown-item">
																<i class="ph-lock-key me-2"></i>
																Disable campaign
															</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item">
																<i class="ph-gear me-2"></i>
																Settings
															</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<a href="#" class="d-block me-3">
															<img src="../../../assets/images/brands/twitter.svg"
																class="rounded-circle" width="36" height="36" alt="">
														</a>
														<div>
															<a href="#" class="text-body fw-semibold">Twitter ads</a>
															<div class="text-muted fs-sm">
																<span
																	class="d-inline-block bg-secondary rounded-pill p-1 me-1"></span>
																04:00 - 05:00
															</div>
														</div>
													</div>
												</td>

												<td><span class="text-success"><i class="ph-trend-up me-2"></i>
														2.78%</span></td>
												<td>
													<h6 class="mb-0">$7,467</h6>
												</td>
												<td><span class="badge bg-secondary bg-opacity-10 text-secondary">On
														hold</span></td>
												<td class="text-center">
													<div class="dropdown">
														<a href="#" class="text-body" data-bs-toggle="dropdown">
															<i class="ph-list"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-end">
															<a href="#" class="dropdown-item">
																<i class="ph-chart-line me-2"></i>
																View statement
															</a>
															<a href="#" class="dropdown-item">
																<i class="ph-pencil me-2"></i>
																Edit campaign
															</a>
															<a href="#" class="dropdown-item">
																<i class="ph-lock-key me-2"></i>
																Disable campaign
															</a>
															<div class="dropdown-divider"></div>
															<a href="#" class="dropdown-item">
																<i class="ph-gear me-2"></i>
																Settings
															</a>
														</div>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- /marketing campaigns -->

							<!-- Quick stats boxes -->
							<div class="row">
								<div class="col-lg-4">

									<!-- Members online -->
									<div class="card bg-teal text-white">
										<div class="card-body">
											<div class="d-flex">
												<h3 class="mb-0">3,450</h3>
												<span
													class="badge bg-black bg-opacity-50 rounded-pill align-self-center ms-auto">+53,6%</span>
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
													<a href="#"
														class="text-white d-inline-flex align-items-center dropdown-toggle"
														data-bs-toggle="dropdown">
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

						<div class="col-xl-4">

							<!-- Progress counters -->
							<div class="row">
								<div class="col-sm-6">

									<!-- Available hours -->
									<div class="card text-center">
										<div class="card-body">

											<!-- Progress counter -->
											<div class="svg-center" id="hours-available-progress"></div>
											<!-- /progress counter -->


											<!-- Bars -->
											<div id="hours-available-bars"></div>
											<!-- /bars -->

										</div>
									</div>
									<!-- /available hours -->

								</div>

								<div class="col-sm-6">

									<!-- Productivity goal -->
									<div class="card text-center">
										<div class="card-body">

											<!-- Progress counter -->
											<div class="svg-center" id="goal-progress"></div>
											<!-- /progress counter -->

											<!-- Bars -->
											<div id="goal-bars"></div>
											<!-- /bars -->

										</div>
									</div>
									<!-- /productivity goal -->

								</div>
							</div>
							<!-- /progress counters -->

							<!-- Daily financials -->
							<div class="card">
								<div class="card-header d-flex align-items-center">
									<h5 class="mb-0">احصائيات عامة</h5>
								</div>

								<div class="card-body">
									<div class="chart mb-3" id="bullets"></div>
								</div>
							</div>
							<!-- /daily financials -->

						</div>
					</div>
					<!-- /dashboard content -->

				</div>
				<!-- /content area -->
@endsection
