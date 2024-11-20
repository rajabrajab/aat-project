@extends('layouts.admin')
@section('title','الملف الشخصي')


@section('content')
<div class="container">

    <!-- Profile info -->

    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Profile information</h5>
        </div>

        <div class="card-body">

            <div class="card-img-actions d-inline-block mb-3">
                <img class="img-fluid rounded-circle" src="../../../assets/images/demo/users/face11.jpg" width="150"
                    height="150" alt="">
                <div class="card-img-actions-overlay card-img rounded-circle">
                    <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                        <i class="ph-pencil"></i>
                    </a>
                </div>
            </div>


            <form action="#">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" value="Victoria" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label">Full name</label>
                            <input type="text" value="Smith" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label">Address line 1</label>
                            <input type="text" value="Ring street 12" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label">Address line 2</label>
                            <input type="text" value="building D, flat #67" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label class="form-label">City</label>
                            <input type="text" value="Munich" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label class="form-label">State/Province</label>
                            <input type="text" value="Bayern" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mb-3">
                            <label class="form-label">ZIP code</label>
                            <input type="text" value="1031" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="text" readonly="readonly" value="victoria@smith.com" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label">Your country</label>
                            <select class="form-select">
                                <option value="germany" selected>Germany</option>
                                <option value="france">France</option>
                                <option value="spain">Spain</option>
                                <option value="netherlands">Netherlands</option>
                                <option value="other">...</option>
                                <option value="uk">United Kingdom</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label">Phone #</label>
                            <input type="text" value="+99-99-9999-9999" class="form-control">
                            <div class="form-text text-muted">+99-99-9999-9999</div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label">Upload profile image</label>
                            <input type="file" class="form-control">
                            <div class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</div>
                        </div>
                    </div>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
    <!-- /profile info -->

</div>
@endsection