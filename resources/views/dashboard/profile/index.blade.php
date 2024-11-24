@extends('layouts.admin')
@section('title', 'الملف الشخصي')

@section('content')
<div class="container">

    <!-- معلومات الملف الشخصي -->
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">معلومات الملف الشخصي</h5>
        </div>

        <div class="card-body">

            <div class="card-img-actions d-inline-block mb-3">
                <img class="img-fluid rounded-circle"
                    src="{{ asset($user->avatar ? 'storage/' . $user->avatar : 'assets/images/demo/users/face1.jpg') }}"
                    height="150" width="150" alt="User Avatar">

                <div class="card-img-actions-overlay card-img rounded-circle">
                    <form action="{{ route('admin.profile.update.avatar') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <label class="btn btn-outline-white btn-icon rounded-pill">
                            <i class="ph-pencil"></i>
                            <input type="file" class="form-control" name="avatar" accept="image/*" hidden
                                onchange="this.form.submit()">
                        </label>
                    </form>
                </div>
            </div>

            <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label">اسم المستخدم</label>
                            <input type="text" name="username" value="{{ old('username', $user->username) }}"
                                class="form-control" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label">الاسم الكامل</label>
                            <input type="text" name="full_name" value="{{ old('full_name', $user->full_name) }}"
                                class="form-control" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label">البريد الإلكتروني</label>
                            <input type="email" name="email" value="{{ old('email', $user->email) }}"
                                class="form-control" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label">كلمة المرور</label>
                            <input type="password" name="password" class="form-control">
                            <small class="text-muted">اتركه فارغًا إذا كنت لا تريد التغيير</small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label">الدولة</label>
                            <input type="text" name="country" value="{{ old('country', $user->country) }}"
                                class="form-control" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label">المدينة</label>
                            <input type="text" name="city" value="{{ old('city', $user->city) }}" class="form-control"
                                required>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">العنوان</label>
                    <input type="text" name="address" value="{{ old('address', $user->address) }}" class="form-control"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label">الجنس</label>
                    <select name="gender" class="form-select" required>
                        <option value="male" {{ old('gender', $user->gender) == 'male' ? 'selected' : '' }}>ذكر</option>
                        <option value="female" {{ old('gender', $user->gender) == 'female' ? 'selected' : '' }}>أنثى
                        </option>
                    </select>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary">حفظ التغييرات</button>
                </div>
            </form>
        </div>
    </div>
    <!-- /معلومات الملف الشخصي -->

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
