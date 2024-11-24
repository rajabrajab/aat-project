@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">إضافة مستخدم </h5>
        </div>

        <div class="card-body">
            <!-- Image Upload Section -->
            <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data"
                class="needs-validation" novalidate>
                @csrf


                <div class="card-img-actions d-inline-block position-relative">
                    <!-- Profile Image -->
                    <img id="profileImagePreview" class="img-fluid rounded-circle"
                        src="../../../assets/images/demo/users/face11.jpg" width="150" height="150" alt="User Avatar">
                    <!-- Overlay with Icon -->
                    <div class="card-img-actions-overlay card-img rounded-circle">
                        <label for="avatarInput" class="btn btn-outline-white btn-icon rounded-pill">
                            <i class="ph-pencil"></i>
                            <input type="file" name="avatar" id="avatarInput" class="form-control d-none"
                                accept="image/*">
                        </label>
                    </div>
                </div>
                <!-- Display Selected File Name -->
                <div id="fileNameDisplay" class="text-muted mt-2"></div>


                <!-- Form Fields -->
                <div class="row g-3">
                    <!-- Email -->
                    <div class="col-md-6">
                        <label for="email" class="form-label">البريد الإلكتروني</label>
                        <input type="email" name="email" id="email" class="form-control"
                            placeholder="أدخل البريد الإلكتروني" required>
                        @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <!-- Password -->
                    <div class="col-md-6">
                        <label for="password" class="form-label">كلمة المرور</label>
                        <input type="password" name="password" id="password" class="form-control"
                            placeholder="أدخل كلمة المرور" required minlength="8">
                        @error('password') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>


                    <div class="col-md-6">
                        <label for="source_platform" class="form-label">منصة المصدر</label>
                        <select name="source_platform" id="source_platform" class="form-select" required>
                            <option value="" disabled selected>اختر المنصة</option>
                            @foreach(['facebook', 'Instagram','x','snapchat'] as $platform)
                            <option value="{{ $platform }}" {{ old('source_platform', $user->source_platform ?? '') ==
                                $platform ? 'selected' : '' }}>
                                {{ $platform }}
                            </option>
                            @endforeach
                        </select>
                        @error('source_platform') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="full_name" class="form-label">الاسم الكامل</label>
                        <input type="text" name="full_name" id="full_name" class="form-control"
                            placeholder="أدخل الاسم الكامل" required>
                        @error('full_name') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="status" class="form-label">الحالة</label>
                        <select name="status" id="status" class="form-select" required>
                            <option value="" disabled>اختر الحالة</option>
                            <option value="active">نشط</option>
                            <option value="inactive">غير نشط</option>
                        </select>
                        @error('status') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="role" class="form-label">الدور</label>
                        <input type="text" name="role" id="role" class="form-control" placeholder="أدخل الدور" required>
                        @error('role') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="permissions" class="form-label">الصلاحيات</label>
                        <input type="text" name="permissions" id="permissions" class="form-control"
                            placeholder="أدخل الصلاحيات" required>
                        @error('permissions') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="username" class="form-label">اسم المستخدم</label>
                        <input type="text" name="username" id="username" class="form-control"
                            placeholder="أدخل اسم المستخدم" required>
                        @error('username') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="country" class="form-label">الدولة</label>
                        <input type="text" name="country" id="country" class="form-control" placeholder="أدخل الدولة"
                            required>
                        @error('country') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="address" class="form-label">العنوان</label>
                        <input type="text" name="address" id="address" class="form-control" placeholder="أدخل العنوان"
                            required>
                        @error('address') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="gender" class="form-label">الجنس</label>
                        <select name="gender" id="gender" class="form-select" required>
                            <option value="" disabled>اختر الجنس</option>
                            <option value="male">ذكر</option>
                            <option value="female">أنثى</option>
                        </select>
                        @error('gender') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="city" class="form-label">المدينة</label>
                        <input type="text" name="city" id="city" class="form-control" placeholder="أدخل المدينة"
                            value="{{ old('city', $user->city ?? '') }}" required>
                        @error('city') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="utm" class="form-label">UTM</label>
                        <input type="text" name="utm" id="utm" class="form-control" placeholder="أدخل UTM"
                            value="{{ old('utm', $user->utm ?? '') }}">
                        @error('utm') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>

                <div class="text-end mt-3">
                    <button type="submit" class="btn btn-primary">اضافة </button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="{{ asset('js/validation.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const avatarInput = document.getElementById('avatarInput');
        const profileImagePreview = document.getElementById('profileImagePreview');
        const fileNameDisplay = document.getElementById('fileNameDisplay');

        if (avatarInput) {
            avatarInput.addEventListener('change', function (event) {
                const file = event.target.files[0];

                if (file) {
                    // Update image preview
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        if (profileImagePreview) {
                            profileImagePreview.src = e.target.result;
                        }
                    };
                    reader.readAsDataURL(file);

                    // Show file name
                    if (fileNameDisplay) {
                        fileNameDisplay.textContent = file.name;
                    }
                } else {
                    // Clear file name display
                    if (fileNameDisplay) {
                        fileNameDisplay.textContent = '';
                    }
                }
            });
        }
    });
</script>


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
