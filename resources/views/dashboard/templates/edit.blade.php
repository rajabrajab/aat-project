@extends('layouts.admin')

@section('content')
<div class="container">

     <div class="card">
        <div class="card-header">
            <h5 class="mb-0"> تعديل قالب</h5>
        </div>

        <div class="card-body">




    <form action="{{ route('templates.update', $template->id) ) }}" method="POST" class="needs-validation" novalidate>
        @csrf
        @method('PUT')

        <div class="row g-3">
            <div class="col-md-6">
                <label for="name" class="form-label">اسم القالب</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="أدخل اسم القالب" value="{{ old('name') }}" required>
                @error('name') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label for="category_id" class="form-label">الفئة</label>
                <select name="category_id" id="category_id" class="form-select" required>
                    <option value="" disabled {{ old('category_id') == '' ? 'selected' : '' }}>اختر الفئة</option>
                    <!-- Populate categories dynamically -->
                    {{-- @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach --}}
                </select>
                @error('category_id') <div class="text-danger">{{ $message }}</div> @enderror
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
