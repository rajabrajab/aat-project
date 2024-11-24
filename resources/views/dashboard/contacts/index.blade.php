@extends('layouts.admin')
@section('title','الجهات')

@section('content')
<div class="container">
     <!-- Basic datatable -->
    <div class="card">
        <div class="card-header">
							 <div class="row">

                <div class="col-md-6 ">

                    <h2 class="mb-0">الجهات</h2>
                </div>
               <div class="col-md-6 text-end">
                    <a type="button" href="{{route('contacts.create')}}"  class="btn btn-outline-success rounded-pill p-2">
                        <i class="ph-circles-three-plus m-1"></i>
                    </a>
                </div>
            </div>

      <table class="table datatable-basic">
        <thead>
            <tr>
                <th>الاسم الأول</th>
                <th>الاسم الأخير</th>
                <th>الوظيفة</th>
                <th>تاريخ الميلاد</th>
                <th>الجنس</th>
                <th>رقم الهاتف</th>
                <th>البريد الإلكتروني</th>
                <th class="text-center">الإجراءات</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->first_name }}</td>
                    <td>{{ $contact->last_name }}</td>
                    <td>{{ $contact->position }}</td>
                    <td>{{ $contact->birthdate }}</td>
                    <td>{{ $contact->gender === 'male' ? 'ذكر' : 'أنثى' }}</td>
                    <td>{{ $contact->phone_number }}</td>
                    <td>{{ $contact->email }}</td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- Edit action -->
                                    <a href="{{ route('contacts.edit', $contact->id) }}" class="dropdown-item text-info">
                                        <i class="ph-pen me-2"></i>
                                        تعديل
                                    </a>
                                    <!-- Delete action -->
                                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="dropdown-item text-danger" onclick="return confirm('هل أنت متأكد من الحذف؟')">
                                            <i class="ph-trash me-2"></i>
                                            حذف
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    <!-- /basic datatable -->
</div>

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

