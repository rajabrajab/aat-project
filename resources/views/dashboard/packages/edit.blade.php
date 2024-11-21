@extends('layouts.admin')

@section('content')
<div class="container">


     <div class="card">
        <div class="card-header">
            <h5 class="mb-0">تعديل باقة  </h5>
        </div>

        <div class="card-body">



    <form action="{{ route('packages.update' $package->id) }}" method="POST" class="needs-validation" novalidate>
        @csrf
        @method('PUT')

        <div class="row g-3">
            <div class="col-md-6">
                <label for="category_id" class="form-label">الفئة</label>
                <select name="category_id" id="category_id" class="form-select" required>
                    <option value="" disabled {{ old('category_id') == '' ? 'selected' : '' }}>اختر الفئة</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label for="name" class="form-label">اسم الباقة</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="أدخل اسم الباقة" value="{{ old('name') }}" required>
                @error('name') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label for="price" class="form-label">السعر</label>
                <input type="number" name="price" id="price" class="form-control" placeholder="أدخل السعر" value="{{ old('price') }}" required min="0" step="0.01">
                @error('price') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label for="invitees_count" class="form-label">عدد المدعوين</label>
                <input type="number" name="invitees_count" id="invitees_count" class="form-control" placeholder="أدخل عدد المدعوين" value="{{ old('invitees_count') }}" required min="1">
                @error('invitees_count') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label for="status" class="form-label">الحالة</label>
                <select name="status" id="status" class="form-select" required>
                    <option value="" disabled {{ old('status') == '' ? 'selected' : '' }}>اختر الحالة</option>
                    <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>نشط</option>
                    <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>غير نشط</option>
                </select>
                @error('status') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label for="description" class="form-label">الوصف</label>
                <textarea name="description" id="description" class="form-control" rows="3" placeholder="أدخل وصف الباقة">{{ old('description') }}</textarea>
                @error('description') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label for="recommended" class="form-label">موصى بها</label>
                <select name="recommended" id="recommended" class="form-select" required>
                    <option value="" disabled {{ old('recommended') == '' ? 'selected' : '' }}>اختر الحالة</option>
                    <option value="1" {{ old('recommended') == '1' ? 'selected' : '' }}>نعم</option>
                    <option value="0" {{ old('recommended') == '0' ? 'selected' : '' }}>لا</option>
                </select>
                @error('recommended') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label for="accept_coupon" class="form-label">قبول الكوبونات</label>
                <select name="accept_coupon" id="accept_coupon" class="form-select" required>
                    <option value="" disabled {{ old('accept_coupon') == '' ? 'selected' : '' }}>اختر الحالة</option>
                    <option value="1" {{ old('accept_coupon') == '1' ? 'selected' : '' }}>نعم</option>
                    <option value="0" {{ old('accept_coupon') == '0' ? 'selected' : '' }}>لا</option>
                </select>
                @error('accept_coupon') <div class="text-danger">{{ $message }}</div> @enderror
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
