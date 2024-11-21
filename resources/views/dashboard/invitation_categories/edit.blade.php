@extends('layouts.admin')

@section('content')
<div class="container">

    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">  تعديل فئة دعوة</h5>
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
    <form action="{{ route('invitation_categories.update',$package_categorie->id ) }}" method="POST" class="needs-validation" novalidate>
        @csrf
        @method('PUT')

        <div class="row g-3">
            <div class="col-md-6">
                <label for="name" class="form-label">اسم الفئة</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="أدخل اسم الفئة" value="{{ old('name') }}" required>
                @error('name') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
        </div>

        <div class="text-end">
            <button type="submit" class="btn btn-primary">حفظ</button>
        </div>
    </form>
</div>
</div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/validation.js') }}"></script>
@endsection
