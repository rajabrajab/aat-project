@extends('layouts.admin')
@section('title','الدعوات')

@section('content')
<div class="container">
    <!-- Basic datatable -->
    <div class="card">
      <div class="card-header">
            <div class="row">

                <div class="col-md-6 ">

                    <h2 class="mb-0">الدعوات</h2>
                </div>
                <div class="col-md-6 text-end">
                <button type="button" class="btn btn-outline-success rounded-pill p-2">
                                            <i class="ph-circles-three-plus m-1"></i>
                                        </button>
                </div>
            </div>
        </div>

        <div class="card-body">
            The <code>DataTables</code> is a highly flexible tool, based upon the foundations of progressive
            enhancement, and will add advanced interaction controls to any HTML table. DataTables has most features
            enabled by default, so all you need to do to use it with your own tables is to call the construction
            function. Searching, ordering, paging etc goodness will be immediately added to the table, as shown in this
            example. <span class="fw-semibold">Datatables support all available table styling.</span>
        </div>

       <table class="table datatable-basic">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Job Title</th>
                    <th>DOB</th>
                    <th>Status</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Marth</td>
                    <td><a href="#">Enright</a></td>
                    <td>Traffic Court Referee</td>
                    <td>22 Jun 1972</td>
                    <td><span class="badge bg-success bg-opacity-10 text-success">Active</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item bg-opacity-10 text-info">
                                        <i class="ph-pen me-2 "></i>
                                        Edit
                                    </a>
                                    <a href="#" class="dropdown-item  text-danger">
                                        <i class="ph-trash me-2 "></i>
                                        Delete
                                    </a>

                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Jackelyn</td>
                    <td>Weible</td>
                    <td><a href="#">Airline Transport Pilot</a></td>
                    <td>3 Oct 1981</td>
                    <td><span class="badge bg-secondary bg-opacity-10 text-secondary">Inactive</span></td>
                     <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item bg-opacity-10 text-info">
                                        <i class="ph-pen me-2 "></i>
                                        Edit
                                    </a>
                                    <a href="#" class="dropdown-item  text-danger">
                                        <i class="ph-trash me-2 "></i>
                                        Delete
                                    </a>

                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Aura</td>
                    <td>Hard</td>
                    <td>Business Services Sales Representative</td>
                    <td>19 Apr 1969</td>
                    <td><span class="badge bg-danger bg-opacity-10 text-danger">Suspended</span></td>
                   <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item bg-opacity-10 text-info">
                                        <i class="ph-pen me-2 "></i>
                                        Edit
                                    </a>
                                    <a href="#" class="dropdown-item  text-danger">
                                        <i class="ph-trash me-2 "></i>
                                        Delete
                                    </a>

                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Nathalie</td>
                    <td><a href="#">Pretty</a></td>
                    <td>Drywall Stripper</td>
                    <td>13 Dec 1977</td>
                    <td><span class="badge bg-info bg-opacity-10 text-info">Pending</span></td>
                        <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item bg-opacity-10 text-info">
                                        <i class="ph-pen me-2 "></i>
                                        Edit
                                    </a>
                                    <a href="#" class="dropdown-item  text-danger">
                                        <i class="ph-trash me-2 "></i>
                                        Delete
                                    </a>

                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Sharan</td>
                    <td>Leland</td>
                    <td>Aviation Tactical Readiness Officer</td>
                    <td>30 Dec 1991</td>
                    <td><span class="badge bg-secondary bg-opacity-10 text-secondary">Inactive</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item bg-opacity-10 text-info">
                                        <i class="ph-pen me-2 "></i>
                                        Edit
                                    </a>
                                    <a href="#" class="dropdown-item  text-danger">
                                        <i class="ph-trash me-2 "></i>
                                        Delete
                                    </a>

                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Maxine</td>
                    <td><a href="#">Woldt</a></td>
                    <td><a href="#">Business Services Sales Representative</a></td>
                    <td>17 Oct 1987</td>
                    <td><span class="badge bg-info bg-opacity-10 text-info">Pending</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item bg-opacity-10 text-info">
                                        <i class="ph-pen me-2 "></i>
                                        Edit
                                    </a>
                                    <a href="#" class="dropdown-item  text-danger">
                                        <i class="ph-trash me-2 "></i>
                                        Delete
                                    </a>

                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Sylvia</td>
                    <td><a href="#">Mcgaughy</a></td>
                    <td>Hemodialysis Technician</td>
                    <td>11 Nov 1983</td>
                    <td><span class="badge bg-danger bg-opacity-10 text-danger">Suspended</span></td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item bg-opacity-10 text-info">
                                        <i class="ph-pen me-2 "></i>
                                        Edit
                                    </a>
                                    <a href="#" class="dropdown-item  text-danger">
                                        <i class="ph-trash me-2 "></i>
                                        Delete
                                    </a>

                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Lizzee</td>
                    <td><a href="#">Goodlow</a></td>
                    <td>Technical Services Librarian</td>
                    <td>1 Nov 1961</td>
                    <td><span class="badge bg-danger bg-opacity-10 text-danger">Suspended</span></td>
                     <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item bg-opacity-10 text-info">
                                        <i class="ph-pen me-2 "></i>
                                        Edit
                                    </a>
                                    <a href="#" class="dropdown-item  text-danger">
                                        <i class="ph-trash me-2 "></i>
                                        Delete
                                    </a>

                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Kennedy</td>
                    <td>Haley</td>
                    <td>Senior Marketing Designer</td>
                    <td>18 Dec 1960</td>
                    <td><span class="badge bg-success bg-opacity-10 text-success">Active</span></td>
                     <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item bg-opacity-10 text-info">
                                        <i class="ph-pen me-2 "></i>
                                        Edit
                                    </a>
                                    <a href="#" class="dropdown-item  text-danger">
                                        <i class="ph-trash me-2 "></i>
                                        Delete
                                    </a>

                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>Cicely</td>
                    <td>Sigler</td>
                    <td><a href="#">Senior Research Officer</a></td>
                    <td>15 Mar 1960</td>
                    <td><span class="badge bg-info bg-opacity-10 text-info">Pending</span></td>
                   <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item bg-opacity-10 text-info">
                                        <i class="ph-pen me-2 "></i>
                                        Edit
                                    </a>
                                    <a href="#" class="dropdown-item  text-danger">
                                        <i class="ph-trash me-2 "></i>
                                        Delete
                                    </a>

                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- /basic datatable -->
</div>
@endsection
