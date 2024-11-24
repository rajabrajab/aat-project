@extends('layouts.admin')
@section('title','الدعوات')

@section('content')
<div class="container">
    <!-- Basic datatable -->
    <div class="card">
      <div class="card-header">
            <div class="row">

                <div class="col-md-6 ">

                    <h2 class="mb-0">الدعوات</h2>
                </div>
                <div class="col-md-6 text-end">
                    <a type="button" href="{{route('invitations.create')}}"  class="btn btn-outline-success rounded-pill p-2">
                        <i class="ph-circles-three-plus m-1"></i>
                    </a>
                </div>
            </div>
        </div>

       <table class="table datatable-basic">
        <thead>
            <tr>
                <th>اسم المستخدم</th>
                <th>اسم الدعوة</th>
                <th>تاريخ الدعوة</th>
                <th>وقت الدعوة</th>
                <th>المدينة</th>
                <th>عدد المدعوين</th>
                <th>الحالة</th>
                <th class="text-center">الإجراءات</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($invitations as $invitation)
                <tr>
                    <td>{{ $invitation->user->name ?? 'غير متوفر' }}</td>
                    <td>{{ $invitation->invitation_name }}</td>
                    <td>{{ $invitation->invitation_date }}</td>
                    <td>{{ $invitation->invitation_time }}</td>
                    <td>{{ $invitation->city }}</td>
                    <td>{{ $invitation->invitees_count }}</td>
                    <td>
                        <span class="badge {{ $invitation->invitation_status === 'active' ? 'bg-success bg-opacity-10 text-success' : 'bg-danger bg-opacity-10 text-danger' }}">
                            {{ $invitation->invitation_status === 'active' ? 'نشط' : 'غير نشط' }}
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
                                    <a href="{{ route('invitations.edit', $invitation->id) }}" class="dropdown-item text-info">
                                        <i class="ph-pen me-2"></i>
                                        تعديل
                                    </a>
                                    <!-- Delete action -->
                                    <form action="{{ route('invitations.destroy', $invitation->id) }}" method="POST" class="d-inline-block">
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

