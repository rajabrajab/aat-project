@extends('layouts.admin')

@section('content')
<div class="container">

     <div class="card">
        <div class="card-header">
            <h5 class="mb-0">تعديل حقل قالب </h5>
        </div>

        <div class="card-body">

    <form action="{{ route('template_fields.update' , $template_field->id) }}" method="POST" class="needs-validation" novalidate>
        @csrf
        @method('PUT')

        <div class="row g-3">
            <div class="col-md-6">
                <label for="name" class="form-label">اسم الحقل</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="أدخل اسم الحقل" value="{{ old('name') }}" required>
                @error('name') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label for="template_id" class="form-label">القالب</label>
                <select name="template_id" id="template_id" class="form-select" required>
                    <option value="" disabled {{ old('template_id') == '' ? 'selected' : '' }}>اختر القالب</option>
                    @foreach ($templates as $template)
                        <option value="{{ $template->id }}" {{ old('template_id') == $template->id ? 'selected' : '' }}>
                            {{ $template->name }}
                        </option>
                    @endforeach
                </select>
                @error('template_id') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label for="field_type" class="form-label">نوع الحقل</label>
                <select name="field_type" id="field_type" class="form-select" required>
                    <option value="" disabled {{ old('field_type') == '' ? 'selected' : '' }}>اختر نوع الحقل</option>
                    <option value="text" {{ old('field_type') == 'text' ? 'selected' : '' }}>نص</option>
                    <option value="textarea" {{ old('field_type') == 'textarea' ? 'selected' : '' }}>منطقة نص</option>
                    <option value="select" {{ old('field_type') == 'select' ? 'selected' : '' }}>قائمة منسدلة</option>
                    <option value="checkbox" {{ old('field_type') == 'checkbox' ? 'selected' : '' }}>مربع اختيار</option>
                    <option value="radio" {{ old('field_type') == 'radio' ? 'selected' : '' }}>زر اختيار</option>
                    <option value="date" {{ old('field_type') == 'date' ? 'selected' : '' }}>تاريخ</option>
                </select>
                @error('field_type') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label for="label" class="form-label">التسمية</label>
                <input type="text" name="label" id="label" class="form-control" placeholder="أدخل التسمية" value="{{ old('label') }}" required>
                @error('label') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
        </div>

        <div class="text-end mt-3">
            <button type="submit" class="btn btn-primary">حفظ</button>
        </div>
    </form>
</div>
</div>
</div>

<script src="{{ asset('js/validation.js') }}"></script>

<script src="{{ asset('js/toastrNotification.js') }}"></script>
<script>
    window.addEventListener('DOMContentLoaded', function() {
        @if (session('success'))
            toastr.success("{{ session('success') }}");
        @elseif (session('error'))
            toastr.error("{{ session('error') }}");
        @elseif (session('info'))
            toastr.info("{{ session('info') }}");
        @elseif (session('warning'))
            toastr.warning("{{ session('warning') }}");
        @endif
    });
</script>

@endsection
