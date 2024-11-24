@extends('layouts.admin')
@section('title','المستخدمين')

@section('content')
<div class="container">
    <!-- Basic datatable -->
    <div class="card">
        <div class="card-header">
            <div class="row">

                <div class="col-md-6 ">

                    <h2 class="mb-0">المستخدمين</h2>
                </div>
                <div class="col-md-6 text-end">
                    <a type="button" href="{{route('users.create')}}"  class="btn btn-outline-success rounded-pill p-2">
                        <i class="ph-circles-three-plus m-1"></i>
                    </a>
                </div>
            </div>
        </div>


         <table class="table datatable-basic">
        <thead>
            <tr>
                <th>الاسم الكامل</th>
                <th>اسم المستخدم</th>
                <th>البريد الإلكتروني</th>
                <th>الدولة</th>
                <th>الحالة</th>
                <th class="text-center">الإجراءات</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->full_name }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->country }}</td>
                    <td>
                        <span class="badge {{ $user->status === 'active' ? 'bg-success bg-opacity-10 text-success' : 'bg-danger bg-opacity-10 text-danger' }}">
                            {{ $user->status === 'active' ? 'نشط' : 'غير نشط' }}
                        </span>
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <div class="dropdown">
                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                    <i class="ph-list"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- Edit action -->
                                    <a href="{{ route('users.edit', $user->id) }}" class="dropdown-item text-info">
                                        <i class="ph-pen me-2"></i>
                                        تعديل
                                    </a>
                                    <!-- Delete action -->
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline-block">
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

