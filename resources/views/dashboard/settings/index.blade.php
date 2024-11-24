@extends('layouts.admin')
@section('title','الاعدادات')

@section('content')

<div class="container">

    <div class="card">

        <div class="card-header">
            <h5 class="mb-0">إعدادات الموقع </h5>
        </div>
        <div class="card-body">

            <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data"
                class="needs-validation" novalidate>
                @csrf
                <div class="row mb-3">
                    <label for="logo" class="col-md-3 col-form-label">الشعار</label>
                    <div class="col-md-9">
                        <input type="file" name="logo" id="logo" class="form-control">
                        @if(isset($settings['logo']))
                        <img src="{{ asset('storage/' . $settings['logo']) }}" alt="Logo" class="img-thumbnail mt-2"
                            width="100">
                        @endif
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="favicon" class="col-md-3 col-form-label">ايقونة الموقع</label>
                    <div class="col-md-9">
                        <input type="file" name="favicon" id="favicon" class="form-control">
                        @if(isset($settings['favicon']))
                        <img src="{{ asset('storage/' . $settings['favicon']) }}" alt="Favicon"
                            class="img-thumbnail mt-2" width="50">
                        @endif
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="site_name" class="col-md-3 col-form-label">اسم الموقع</label>
                    <div class="col-md-9">
                        <input type="text" name="site_name" id="site_name" class="form-control"
                            value="{{ $settings['site_name'] ?? '' }}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="description" class="col-md-3 col-form-label">الوصف</label>
                    <div class="col-md-9">
                        <textarea name="description" id="description"
                            class="form-control">{{ $settings['description'] ?? '' }}</textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="phone" class="col-md-3 col-form-label">رقم الهاتف</label>
                    <div class="col-md-9">
                        <input type="text" name="phone" id="phone" class="form-control"
                            value="{{ $settings['phone'] ?? '' }}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="email" class="col-md-3 col-form-label">البريد الإلكتروني</label>
                    <div class="col-md-9">
                        <input type="email" name="email" id="email" class="form-control"
                            value="{{ $settings['email'] ?? '' }}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="google_analytics" class="col-md-3 col-form-label">كود جوجل اناليتيكس</label>
                    <div class="col-md-9">
                        <textarea name="google_analytics" id="google_analytics"
                            class="form-control">{{ $settings['google_analytics'] ?? '' }}</textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="site_status" class="col-md-3 col-form-label">حالة الموقع</label>
                    <div class="col-md-9">
                        <select name="site_status" id="site_status" class="form-control">
                            <option value="active" {{ ($settings['site_status'] ?? '' )==='active' ? 'selected' : '' }}>
                                يعمل
                            </option>
                            <option value="maintenance" {{ ($settings['site_status'] ?? '' )==='maintenance'
                                ? 'selected' : '' }}>حالة الصيانة</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="allow_registration" class="col-md-3 col-form-label">السماح بالتسجيل</label>
                    <div class="col-md-9">
                        <select name="allow_registration" id="allow_registration" class="form-control">
                            <option value="1" {{ ($settings['allow_registration'] ?? '' ) ? 'selected' : '' }}>نعم
                            </option>
                            <option value="0" {{ !($settings['allow_registration'] ?? '' ) ? 'selected' : '' }}>لا
                            </option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="custom_header" class="col-md-3 col-form-label">أكواد الهيدر</label>
                    <div class="col-md-9">
                        <textarea name="custom_header" id="custom_header"
                            class="form-control">{{ $settings['custom_header'] ?? '' }}</textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="custom_footer" class="col-md-3 col-form-label">أكواد الفوتر</label>
                    <div class="col-md-9">
                        <textarea name="custom_footer" id="custom_footer"
                            class="form-control">{{ $settings['custom_footer'] ?? '' }}</textarea>
                    </div>
                </div>

                <div class="text-end mt-3">
                    <button type="submit" class="btn btn-primary">حفظ الإعدادات </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="{{ asset('js/toastrNotification.js') }}"></script>
<script>
    window.addEventListener('DOMContentLoaded', function () {
        @if (session('success'))
            toastr.success("{{ session('success') }}");
        @elseif(session('error'))
        toastr.error("{{ session('error') }}");
        @elseif(session('info'))
        toastr.info("{{ session('info') }}");
        @elseif(session('warning'))
        toastr.warning("{{ session('warning') }}");
        @endif
    });
</script>

<script src="{{ asset('js/validation.js') }}"></script>

@endsection