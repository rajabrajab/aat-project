@extends('layouts.admin')

@section('content')
<div class="container">

    <div class="card">
        <div class="card-header">
            <h5 class="mb-0"> إنشاء دعوة جديدة</h5>
        </div>

        <div class="card-body">


    <form action="{{ route('invitations.store') }}" method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
        @csrf


        <div class="row g-3">
            <div class="col-md-6">
                <label for="user_id" class="form-label">المستخدم</label>
                <select name="user_id" id="user_id" class="form-select" required>
                    <option value="" disabled selected>اختر المستخدم</option>
                    {{-- @foreach ($users as $user)
                        <option value="{{ $user->id }}">
                            {{ $user->name }}
                        </option>
                    @endforeach --}}
                </select>
                @error('user_id') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label for="package_id" class="form-label">الباقة</label>
                <select name="package_id" id="package_id" class="form-select" required>
                    <option value="" disabled {{ old('package_id') == '' ? 'selected' : '' }}>اختر الباقة</option>
                    {{-- @foreach ($packages as $package)
                        <option value="{{ $package->id }}">
                            {{ $package->name }}
                        </option>
                    @endforeach --}}
                </select>
                @error('package_id') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label for="category_id" class="form-label">الفئة</label>
                <select name="category_id" id="category_id" class="form-select" required>
                    <option value="" disabled selected>اختر الفئة</option>
                    {{-- @foreach ($categories as $category)
                        <option value="{{ $category->id }}">
                            {{ $category->name }}
                        </option>
                    @endforeach --}}
                </select>
                @error('category_id') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label for="template_id" class="form-label">القالب</label>
                <select name="template_id" id="template_id" class="form-select" required>
                    <option value="" disabled selected>اختر القالب</option>
                    {{-- @foreach ($templates as $template)
                        <option value="{{ $template->id }}">
                            {{ $template->name }}
                        </option>
                    @endforeach --}}
                </select>
                @error('template_id') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label for="invitation_name" class="form-label">اسم الدعوة</label>
                <input type="text" name="invitation_name" id="invitation_name" class="form-control" placeholder="أدخل اسم الدعوة" required>
                @error('invitation_name') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label for="date_type" class="form-label">نوع التاريخ</label>
                <select name="date_type" id="date_type" class="form-select" required>
                    <option value="" disabled selected>اختر نوع التاريخ</option>
                    <option value="gregorian"  >ميلادي</option>
                    <option value="hijri">هجري</option>
                </select>
                @error('date_type') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label for="invitation_date" class="form-label">تاريخ الدعوة</label>
                <input type="date" name="invitation_date" id="invitation_date" class="form-control"  required>
                @error('invitation_date') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label for="invitation_time" class="form-label">وقت الدعوة</label>
                <input type="time" name="invitation_time" id="invitation_time" class="form-control"  required>
                @error('invitation_time') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label for="invitation_image" class="form-label">صورة الدعوة</label>
                <input type="file" name="invitation_image" id="invitation_image" class="form-control" accept="image/*">
                @error('invitation_image') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label for="invitation_video" class="form-label">فيديو الدعوة</label>
                <input type="file" name="invitation_video" id="invitation_video" class="form-control" accept="video/*">
                @error('invitation_video') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label for="city" class="form-label">المدينة</label>
                <input type="text" name="city" id="city" class="form-control" placeholder="أدخل المدينة" required>
                @error('city') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label for="hood" class="form-label">الحي</label>
                <input type="text" name="hood" id="hood" class="form-control" placeholder="أدخل الحي"  required>
                @error('hood') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label for="detailed_address" class="form-label">العنوان التفصيلي</label>
                <textarea name="detailed_address" id="detailed_address" class="form-control" rows="3" placeholder="أدخل العنوان التفصيلي" required></textarea>
                @error('detailed_address') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label for="payment_method" class="form-label">طريقة الدفع</label>
                <select name="payment_method" id="payment_method" class="form-select" required>
                    <option value="" disabled selected>اختر طريقة الدفع</option>
                    <option value="credit_card">بطاقة ائتمان</option>
                    <option value="paypal" >بايبال</option>
                </select>
                @error('payment_method') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label for="payment_status" class="form-label">حالة الدفع</label>
                <select name="payment_status" id="payment_status" class="form-select" required>
                    <option value="" disabled selected>اختر حالة الدفع</option>
                    <option value="pending" >معلق</option>
                    <option value="completed">مكتمل</option>
                </select>
                @error('payment_status') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label for="qr_code" class="form-label">رمز الاستجابة السريع</label>
                <input type="text" name="qr_code" id="qr_code" class="form-control" placeholder="أدخل رمز الاستجابة السريع" required>
                @error('qr_code') <div class="text-danger">{{ $message }}</div> @enderror
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
