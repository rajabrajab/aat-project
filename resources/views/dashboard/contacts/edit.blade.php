@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit Contact</h1>

    <div class="card">
        <div class="card-header">
            <h5 class="mb-0"> تعديل حهة اتصال</h5>
        </div>

        <div class="card-body">


    <form action="{{ route('contacts.update', $contact->id) }}" method="POST" class="needs-validation" novalidate>
        @csrf
        @method('PUT')

        <div class="row g-3">
            <div class="col-md-6">
                <label for="first_name" class="form-label">الاسم الأول</label>
                <input type="text" name="first_name" id="first_name" class="form-control" placeholder="أدخل الاسم الأول" value="{{ old('first_name', $contact->first_name) }}" required>
                @error('first_name') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

             <div class="col-md-6">
                <label for="last_name" class="form-label">الاسم الأخير</label>
                <input type="text" name="last_name" id="last_name" class="form-control" placeholder="أدخل الاسم الأخير" value="{{ old('last_name' ,$contact->last_name ) }}" required>
                @error('last_name') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label for="position" class="form-label">الوظيفة</label>
                <input type="text" name="position" id="position" class="form-control" placeholder="أدخل الوظيفة" value="{{ old('position'),$contact->position  }}">
                @error('position') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label for="birth_date" class="form-label">تاريخ الميلاد</label>
                <input type="date" name="birth_date" id="birth_date" class="form-control" value="{{ old('birth_date'), $contact->birth_date }}">
                @error('birth_date') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label for="gender" class="form-label">الجنس</label>
                <select name="gender" id="gender" class="form-select" required>
                    <option value="" disabled {{ old('gender') == '' ? 'selected' : '' }}>اختر الجنس</option>
                    <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>ذكر</option>
                    <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>أنثى</option>
                </select>
                @error('gender') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label for="phone_number" class="form-label">رقم الهاتف</label>
                <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder="أدخل رقم الهاتف" value="{{ old('phone_number' $contact->phone_number) }}" required>
                @error('phone_number') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label for="whatsapp_number" class="form-label">رقم الواتساب</label>
                <input type="text" name="whatsapp_number" id="whatsapp_number" class="form-control" placeholder="أدخل رقم الواتساب" value="{{ old('whatsapp_number', $contact->whatsapp_number) }}">
                @error('whatsapp_number') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label for="email" class="form-label">البريد الإلكتروني</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="أدخل البريد الإلكتروني" value="{{ old('email' ,$contact->email) }}" required>
                @error('email') <div class="text-danger">{{ $message }}</div> @enderror
            </div>
        </div>

        </div>

       <div class="text-end mt-3">
            <button type="submit" class="btn btn-primary">حفظ </button>
        </div>
    </form>
</div>
</div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/validation.js') }}"></script>
@endsection
