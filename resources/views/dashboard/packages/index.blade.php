@extends('layouts.admin')
@section('title','الباقات')

@section('content')
<div class="container">
    <!-- Bordered striped table -->
    <div class="card">
        <div class="card-header">
            <div class="row">

                <div class="col-md-6 ">

                    <h2 class="mb-0">الباقات</h2>
                </div>
              <div class="col-md-6 text-end">
                    <a type="button" href="{{route('packages.create')}}"  class="btn btn-outline-success rounded-pill p-2">
                        <i class="ph-circles-three-plus m-1"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>اسم الباقة</th>
                <th>التصنيف</th>
                <th>السعر</th>
                <th>عدد المدعوين</th>
                <th>الحالة</th>
                <th>الإجراءات</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($packages as $index => $package)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $package->name }}</td>
                    <td>{{ $package->category->name ?? 'غير متوفر' }}</td>
                    <td>{{ $package->price }} ريال</td>
                    <td>{{ $package->invitees_count }}</td>
                    <td>
                        <span class="badge {{ $package->status === 'active' ? 'bg-success bg-opacity-10 text-success' : 'bg-danger bg-opacity-10 text-danger' }}">
                            {{ $package->status === 'active' ? 'نشط' : 'غير نشط' }}
                        </span>
                    </td>
                    <td>
                        <div class="d-inline-flex">
                            <!-- Edit Action -->
                            <a href="{{ route('packages.edit', $package->id) }}" class="text-primary">
                                <i class="ph-pen"></i>
                            </a>
                            <!-- Delete Action -->
                            <form action="{{ route('packages.destroy', $package->id) }}" method="POST" class="mx-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-danger border-0 bg-transparent" onclick="return confirm('هل أنت متأكد من الحذف؟')">
                                    <i class="ph-trash"></i>
                                </button>
                            </form>
                            <!-- Additional Action Placeholder -->
                            <a href="#" class="text-teal">
                                <i class="ph-gear"></i>
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
        </div>
    </div>
    <!-- /bordered striped table -->
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

