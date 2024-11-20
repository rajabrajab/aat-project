@extends('layouts.admin')
@section('title','الدفعات')

@section('content')
<div class="container">
    <!-- Contextual classes -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Contextual and custom colors</h5>
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
                        <th>Product</th>
                        <th>Payment Taken</th>
                        <th>Status</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-primary">
                        <td>1</td>
                        <td>TB - Monthly</td>
                        <td>01/04/2012</td>
                        <td>Approved</td>
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
                        <td>1</td>
                        <td>TB - Monthly</td>
                        <td>01/04/2012</td>
                        <td>Approved</td>
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
                    <tr class="table-secondary">
                        <td>1</td>
                        <td>TB - Monthly</td>
                        <td>01/04/2012</td>
                        <td>Approved</td>
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
                        <td>1</td>
                        <td>TB - Monthly</td>
                        <td>01/04/2012</td>
                        <td>Approved</td>
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
                    <tr class="table-success">
                        <td>1</td>
                        <td>TB - Monthly</td>
                        <td>01/04/2012</td>
                        <td>Approved</td>
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
                        <td>1</td>
                        <td>TB - Monthly</td>
                        <td>01/04/2012</td>
                        <td>Approved</td>
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
                    <tr class="table-danger">
                        <td>2</td>
                        <td>TB - Monthly</td>
                        <td>02/04/2012</td>
                        <td>Declined</td>
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
                        <td>TB - Monthly</td>
                        <td>02/04/2012</td>
                        <td>Declined</td>
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
                    <tr class="table-warning">
                        <td>3</td>
                        <td>TB - Monthly</td>
                        <td>03/04/2012</td>
                        <td>Pending</td>
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
