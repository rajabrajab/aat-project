@php
$css = 'signup';
@endphp


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-gray text-black text-center py-3">
                    <h4 class="mb-0">{{ __('Register') }}</h4>
                </div>
                <div class="card-body px-4 py-3">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row">
                            <!-- Full Name -->
                            <div class="col-md-6 mb-4">
                                <label for="full_name" class="form-label">{{ __('الاسم الكامل') }}</label>
                                <input id="full_name" type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" value="{{ old('full_name') }}" placeholder="{{ __(' الاسم الكامل') }}" required autofocus>
                                @error('full_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Username -->
                            <div class="col-md-6 mb-4">
                                <label for="username" class="form-label">{{ __('اسم المستخدم') }}</label>
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" placeholder="{{ __(' اسم المستخدم') }}" required>
                                @error('username')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <!-- Email -->
                            <div class="col-md-6 mb-4">
                                <label for="email" class="form-label">{{ __('البريد الالكتروني') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ __(' البريد الالكتروني') }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div class="col-md-6 mb-4">
                                <label for="password" class="form-label">{{ __('كلمة المرور') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __('كلمة المرور') }}" required>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <!-- Confirm Password -->
                            <div class="col-md-6 mb-4">
                                <label for="password-confirm" class="form-label">{{ __('تاكيد كلمة المرور') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="{{ __('تاكيد كلمة المرور') }}" required>
                            </div>

                            <!-- Country -->
                            <div class="col-md-6 mb-4">
                                <label for="country" class="form-label">{{ __('البلد') }}</label>
                                <input id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" placeholder="{{ __('البلد') }}" required>
                                @error('country')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <!-- Address -->
                            <div class="col-md-6 mb-4">
                                <label for="address" class="form-label">{{ __('العنوان') }}</label>
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" placeholder="{{ __('العنوان') }}" required>
                                @error('address')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Gender -->
                            <div class="col-md-6 mb-4">
                                <label for="gender" class="form-label">{{ __('الجنس') }}</label>
                                <select id="gender" class="form-select @error('gender') is-invalid @enderror" name="gender" required>
                                    <option value="" disabled selected>{{ __('الجنس') }}</option>
                                    <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>{{ __('ذكر') }}</option>
                                    <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>{{ __('انثى') }}</option>
                                </select>
                                @error('gender')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <!-- City -->
                            <div class="col-md-6 mb-4">
                                <label for="city" class="form-label">{{ __('المدينة') }}</label>
                                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" placeholder="{{ __('المدينة') }}" required>
                                @error('city')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg w-100 mt-4">{{ __('Register') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



    {{-- <div class="sginup-section">
        <div class="row justify-content-center">
            <div class="col-md-6 image-col">
                <img src="./media/imgs/login.png" class="img-fluid" alt="Login Image">
            </div>
            <div class="col-md-6 text-end pt-2">
                <a class="home" href="#">الرئيسية</a> <span>/</span> <a>إنشاء حساب جديد</a>
                <div class="login-form">
                    <h3 class="mb-4">إنشاء حساب جديد</h3>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="اسم المستخدم">
                        </div>

                        <div class="form-group phone-group">
                            <select class="form-control country-code-select">
                                <option value="+966">+966</option>
                                <option value="+959">+959</option>
                                <option value="+20">+20</option>
                            </select>
                            <input type="text" class="form-control phone-input" placeholder="رقم الهاتف">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="البريد الإلكتروني">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="passwordInput" placeholder="كلمة المرور">
                            <i class="fa fa-eye position-absolute" id="toggleIcon"
                                onclick="togglePasswordVisibility()"></i>
                        </div>
                        <button type="submit" class="log-btn">انشاء حساب</button>

                        <div class="separator">
                            <div class="line"></div>
                            <span>أو التسجيل عن طريق</span>
                            <div class="line"></div>
                        </div>

                        <div class="gmail-logo">


                            <a href="">
                                <svg width="39" height="38" viewBox="0 0 39 38" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="19.5" cy="19" r="19" fill="#757575" />
                                    <path
                                        d="M14.3119 21.2576L13.6346 23.7858L11.1593 23.8382C10.4196 22.4661 10 20.8963 10 19.2281C10 17.615 10.3923 16.0937 11.0877 14.7543H11.0882L13.2919 15.1583L14.2573 17.3488C14.0552 17.9378 13.9451 18.5701 13.9451 19.2281C13.9452 19.9422 14.0745 20.6264 14.3119 21.2576Z"
                                        fill="white" />
                                    <path
                                        d="M29.2851 17.4107C29.3968 17.9992 29.4551 18.6069 29.4551 19.228C29.4551 19.9245 29.3818 20.6038 29.2423 21.2592C28.7688 23.4891 27.5314 25.4363 25.8172 26.8143L25.8167 26.8137L23.041 26.6721L22.6482 24.2198C23.7856 23.5527 24.6745 22.5088 25.1427 21.2592H19.9409V17.4107H25.2186H29.2851Z"
                                        fill="white" />
                                    <path
                                        d="M25.8175 26.8137L25.818 26.8142C24.1509 28.1542 22.0331 28.956 19.7278 28.956C16.0232 28.956 12.8023 26.8853 11.1592 23.8381L14.3117 21.2575C15.1332 23.45 17.2483 25.0108 19.7278 25.0108C20.7936 25.0108 21.7921 24.7227 22.6489 24.2197L25.8175 26.8137Z"
                                        fill="white" />
                                    <path
                                        d="M25.938 11.7396L22.7866 14.3196C21.8998 13.7653 20.8516 13.4452 19.7287 13.4452C17.193 13.4452 15.0384 15.0775 14.258 17.3487L11.0889 14.7542H11.0884C12.7074 11.6327 15.9689 9.5 19.7287 9.5C22.089 9.5 24.2533 10.3408 25.938 11.7396Z"
                                        fill="white" />
                                </svg>

                            </a>

                        </div>


                        <div class="mt-3 login">
                            لديك حساب ؟ <a href="#">تسجيل الدخول</a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div> --}}


@endsection
