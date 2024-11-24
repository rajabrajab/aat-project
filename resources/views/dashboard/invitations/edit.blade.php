@extends('layouts.admin')

@section('content')
<div class="container">

    <div class="card">
        <div class="card-header">
            <h5 class="mb-0"> دعوة تعديل </h5>
        </div>

        <div class="card-body">


            <form action="{{ route('invitations.update' ,$invitation->id) }}" method="POST" class="needs-validation"
                novalidate enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="user_id" class="form-label">المستخدم</label>
                        <select name="user_id" id="user_id" class="form-select" required>
                            <option value="" disabled {{ old('user_id', $invitation->user_id) == '' ? 'selected' : ''
                                }}>اختر المستخدم</option>
                            @foreach ($users as $user)
                            <option value="{{ $invitation->user->id }}" {{ old('user_id', $invitation->user_id) ==
                                $user->id ?
                                'selected' : '' }}>
                                {{ $invitation->user->username }}
                            </option>
                            @endforeach
                        </select>
                        @error('user_id')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="package_id" class="form-label">الباقة</label>
                        <select name="package_id" id="package_id" class="form-select" required>
                            <option value="" disabled {{ old('package_id')=='' ? 'selected' : '' }}>اختر الباقة</option>
                            @foreach ($packages as $package)
                            <option value="{{ $package->id }}" {{ old('package_id', $invitation->package_id
                                )==$package->id ? 'selected' : '' }}>
                                {{ $package->name }}
                            </option>
                            @endforeach
                        </select>
                        @error('package_id') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="category_id" class="form-label">الفئة</label>
                        <select name="category_id" id="category_id" class="form-select" required>
                            <option value="" disabled {{ old('category_id')=='' ? 'selected' : '' }}>اختر الفئة</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id', $invitation->
                                category_id)==$category->id ? 'selected' : ''
                                }}>
                                {{ $category->name }}
                            </option>
                            @endforeach
                        </select>
                        @error('category_id') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="template_id" class="form-label">القالب</label>
                        <select name="template_id" id="template_id" class="form-select" required>
                            <option value="" disabled {{ old('template_id' , $invitation->template_id)=='' ? 'selected'
                                : '' }}>اختر القالب
                            </option>
                            @foreach ($templates as $template)
                            <option value="{{ $template->id }}" {{ old('template_id',$invitation->
                                template_id)==$template->id ? 'selected' : ''
                                }}>
                                {{ $template->name }}
                            </option>
                            @endforeach
                        </select>
                        @error('template_id') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="invitation_name" class="form-label">اسم الدعوة</label>
                        <input type="text" name="invitation_name" id="invitation_name" class="form-control"
                            placeholder="أدخل اسم الدعوة"
                            value="{{ old('invitation_name',$invitation->invitation_name) }}" required>
                        @error('invitation_name') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="date_type" class="form-label">نوع التاريخ</label>
                        <select name="date_type" id="date_type" class="form-select" required>
                            <option value="" disabled {{ old('date_type', $invitation->date_type)=='' ? 'selected' : ''
                                }}>اختر نوع التاريخ
                            </option>
                            <option value="gregorian" {{ old('date_type' , $invitation->date_type)=='gregorian' ?
                                'selected' : '' }}>ميلادي
                            </option>
                            <option value="hijri" {{ old('date_type' , $invitation->date_type)=='hijri' ? 'selected' :
                                '' }}>هجري</option>
                        </select>
                        @error('date_type') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="invitation_date" class="form-label">تاريخ الدعوة</label>
                        <input type="date" name="invitation_date" id="invitation_date" class="form-control"
                            value="{{ old('invitation_date' , $invitation->invitation_date) }}" required>
                        @error('invitation_date') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="invitation_time" class="form-label">وقت الدعوة</label>
                        <input type="time" name="invitation_time" id="invitation_time" class="form-control"
                            value="{{ old('invitation_time' , $invitation->invitation_time) }}" required>
                        @error('invitation_time') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="invitation_image" class="form-label">صورة الدعوة</label>
                        <input type="file" name="invitation_image" id="invitation_image" class="form-control"
                            accept="image/*">
                        @error('invitation_image') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="invitation_video" class="form-label">فيديو الدعوة</label>
                        <input type="file" name="invitation_video" id="invitation_video" class="form-control"
                            accept="video/*">
                        @error('invitation_video') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="city" class="form-label">المدينة</label>
                        <input type="text" name="city" id="city" class="form-control" placeholder="أدخل المدينة"
                            value="{{ old('city' , $invitation->city) }}" required>
                        @error('city') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="hood" class="form-label">الحي</label>
                        <input type="text" name="hood" id="hood" class="form-control" placeholder="أدخل الحي"
                            value="{{ old('hood' , $invitation->hood) }}" required>
                        @error('hood') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="detailed_address" class="form-label">العنوان التفصيلي</label>
                        <textarea name="detailed_address" id="detailed_address" class="form-control" rows="3"
                            placeholder="أدخل العنوان التفصيلي"
                            required>{{ old('detailed_address' , $invitation->detailed_address) }}</textarea>
                        @error('detailed_address') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="payment_method" class="form-label">طريقة الدفع</label>
                        <select name="payment_method" id="payment_method" class="form-select" required>
                            <option value="" disabled {{ old('payment_method' , $invitation->payment_method)=='' ?
                                'selected' : '' }}>اختر طريقة الدفع
                            </option>
                            <option value="credit_card" {{ old('payment_method' , $invitation->
                                payment_method)=='cash' ? 'selected' : '' }}>
                                بطاقة ائتمان</option>
                            <option value="paypal" {{ old('payment_method' , $invitation->payment_method)=='paypal' ?
                                'selected' : '' }}>بايبال
                            </option>
                            <option value="tamara" {{ old('payment_method' , $invitation->payment_method)=='tamara' ?
                                'selected' : '' }}>تمارا
                            </option>
                            <option value="myfatoorah" {{ old('payment_method' , $invitation->
                                payment_method)=='myfatoorah' ?
                                'selected' : '' }}>مايفاتورا
                            </option>
                        </select>
                        @error('payment_method') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>


                    <div class="col-md-6">
                        <label for="qr_code" class="form-label">رمز الاستجابة السريع</label>
                        <input type="text" name="qr_code" id="qr_code" class="form-control"
                            placeholder="أدخل رمز الاستجابة السريع" value="{{ old('qr_code' , $invitation->qr_code) }}"
                            required>
                        @error('qr_code') <div class="text-danger">{{ $message }}</div> @enderror
                    </div>


                    <div class="text-end">
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

