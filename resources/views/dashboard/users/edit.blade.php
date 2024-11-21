@extends('layouts.admin')

@section('content')
<div class="container">
     <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Profile information</h5>
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

    <form action="{{ route('users.update', $user->id)}}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
        @csrf

        @method('PUT')


        <div class="row g-3">
            <div class="col-md-6">
                <label for="email" class="form-label">البريد الإلكتروني</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="أدخل البريد الإلكتروني" value="{{ old('email', $user->email ?? '') }}" required>
                @error('email') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label for="password" class="form-label">كلمة المرور</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="أدخل كلمة المرور" required minlength="8">
                @error('password') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label for="avatar" class="form-label">الصورة الشخصية</label>
                <input type="file" name="avatar" id="avatar" class="form-control" accept="image/*">
                @error('avatar') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label for="source_platform" class="form-label">منصة المصدر</label>
                <select name="source_platform" id="source_platform" class="form-select" required>
                    <option value="" disabled {{ old('source_platform', $user->source_platform ?? '') == '' ? 'selected' : '' }}>اختر المنصة</option>
                    @foreach(['Platform1', 'Platform2', 'Platform3'] as $platform)
                        <option value="{{ $platform }}" {{ old('source_platform', $user->source_platform ?? '') == $platform ? 'selected' : '' }}>
                            {{ $platform }}
                        </option>
                    @endforeach
                </select>
                @error('source_platform') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label for="full_name" class="form-label">الاسم الكامل</label>
                <input type="text" name="full_name" id="full_name" class="form-control" placeholder="أدخل الاسم الكامل" value="{{ old('full_name', $user->full_name ?? '') }}" required>
                @error('full_name') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label for="status" class="form-label">الحالة</label>
                <select name="status" id="status" class="form-select" required>
                    <option value="" disabled {{ old('status', $user->status ?? '') == '' ? 'selected' : '' }}>اختر الحالة</option>
                    <option value="active" {{ old('status', $user->status ?? '') == 'active' ? 'selected' : '' }}>نشط</option>
                    <option value="inactive" {{ old('status', $user->status ?? '') == 'inactive' ? 'selected' : '' }}>غير نشط</option>
                </select>
                @error('status') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label for="role" class="form-label">الدور</label>
                <input type="text" name="role" id="role" class="form-control" placeholder="أدخل الدور" value="{{ old('role', $user->role ?? '') }}" required>
                @error('role') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label for="permissions" class="form-label">الصلاحيات</label>
                <input type="text" name="permissions" id="permissions" class="form-control" placeholder="أدخل الصلاحيات" value="{{ old('permissions', $user->permissions ?? '') }}" required>
                @error('permissions') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label for="username" class="form-label">اسم المستخدم</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="أدخل اسم المستخدم" value="{{ old('username', $user->username ?? '') }}" required>
                @error('username') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label for="country" class="form-label">الدولة</label>
                <input type="text" name="country" id="country" class="form-control" placeholder="أدخل الدولة" value="{{ old('country', $user->country ?? '') }}" required>
                @error('country') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label for="address" class="form-label">العنوان</label>
                <input type="text" name="address" id="address" class="form-control" placeholder="أدخل العنوان" value="{{ old('address', $user->address ?? '') }}" required>
                @error('address') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label for="gender" class="form-label">الجنس</label>
                <select name="gender" id="gender" class="form-select" required>
                    <option value="" disabled {{ old('gender', $user->gender ?? '') == '' ? 'selected' : '' }}>اختر الجنس</option>
                    <option value="male" {{ old('gender', $user->gender ?? '') == 'male' ? 'selected' : '' }}>ذكر</option>
                    <option value="female" {{ old('gender', $user->gender ?? '') == 'female' ? 'selected' : '' }}>أنثى</option>
                </select>
                @error('gender') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label for="city" class="form-label">المدينة</label>
                <input type="text" name="city" id="city" class="form-control" placeholder="أدخل المدينة" value="{{ old('city', $user->city ?? '') }}" required>
                @error('city') <div class="text-danger">{{ $message }}</div> @enderror
            </div>

            <div class="col-md-6">
                <label for="utm" class="form-label">UTM</label>
                <input type="text" name="utm" id="utm" class="form-control" placeholder="أدخل UTM" value="{{ old('utm', $user->utm ?? '') }}">
                @error('utm') <div class="text-danger">{{ $message }}</div> @enderror
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
