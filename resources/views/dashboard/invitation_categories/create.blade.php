@extends('layouts.admin')

@section('content')
<div class="container">

    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">إنشاء فئة دعوة جديدة</h5>
        </div>

        <div class="card-body">


    <form action="{{ route('invitation_categories.store') }}" method="POST" class="needs-validation" novalidate>
        @csrf

        <div class="row g-3">
            <div class="col-md-6">
                <label for="name" class="form-label">اسم الفئة</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="أدخل اسم الفئة"  required>
                @error('name') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
        </div>

        <div class="text-end mt-3">
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
