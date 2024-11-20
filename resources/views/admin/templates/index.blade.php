@extends('layouts.admin')
@section('title','القوالب')

@section('content')

<div class="container">
    <!-- Contextual classes -->
    <div class="card">
      <div class="card-header">
            <div class="row">

                <div class="col-md-6 ">

                    <h2 class="mb-0">القوالب</h2>
                </div>
                <div class="col-md-6 text-end">
                <button type="button" class="btn btn-outline-success rounded-pill p-2">
                                            <i class="ph-circles-three-plus m-1"></i>
                                        </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            Example of contextual classes for table <code>rows</code>. Contextual classes are used to color table rows
            or individual cells. These classes come with Bootstrap by default and have much lighter colors than in
            custom template colors.
        </div>

       <div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>#</th>
										<th>First Name</th>
										<th>Last Name</th>
										<th>Username</th>
                                          <th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Eugene</td>
										<td>Kopyov</td>
										<td>@Kopyov</td>
                                     <td>
											<div class="d-inline-flex">
												<a href="#" class="text-primary">
													<i class="ph-pen"></i>
												</a>
												<a href="#" class="text-danger mx-2">
													<i class="ph-trash"></i>
												</a>
												<a href="#" class="text-teal">
													<i class="ph-gear"></i>
												</a>
											</div>
										</td>
									</tr>
									<tr>
										<td>2</td>
										<td>Victoria</td>
										<td>Baker</td>
										<td>@Vicky</td>
                                       <td>
											<div class="d-inline-flex">
												<a href="#" class="text-primary">
													<i class="ph-pen"></i>
												</a>
												<a href="#" class="text-danger mx-2">
													<i class="ph-trash"></i>
												</a>
												<a href="#" class="text-teal">
													<i class="ph-gear"></i>
												</a>
											</div>
										</td>
									</tr>

								</tbody>
							</table>
						</div>
    </div>
    <!-- /contextual classes -->
</div>
@endsection
