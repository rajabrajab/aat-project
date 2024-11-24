@extends('layouts.admin')
@section('title','القوالب')

@section('content')

<div class="container">
    <!-- Contextual classes -->
    <div class="card">
      <div class="card-header">
            <div class="row">

                <div class="col-md-6 ">

                    <h2 class="mb-0">القوالب</h2>
                </div>
                 <div class="col-md-6 text-end">
                    <a type="button" href="{{route('templates.create')}}"  class="btn btn-outline-success rounded-pill p-2">
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
                <th>اسم القالب</th>
                <th>التصنيف</th>
                <th>الحالة</th>
                <th>الإجراءات</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($templates as $index => $template)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $template->name }}</td>
                    <td>{{ $template->category->name ?? 'غير متوفر' }}</td>
                    <td>
                        <span class="badge {{ $template->status === 'active' ? 'bg-success bg-opacity-10 text-success' : 'bg-danger bg-opacity-10 text-danger' }}">
                            {{ $template->status === 'active' ? 'نشط' : 'غير نشط' }}
                        </span>
                    </td>
                    <td>
                        <div class="d-inline-flex">
                            <!-- Edit Action -->
                            <a href="{{ route('templates.edit', $template->id) }}" class="text-primary">
                                <i class="ph-pen"></i>
                            </a>
                            <!-- Delete Action -->
                            <form action="{{ route('templates.destroy', $template->id) }}" method="POST" class="mx-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-danger border-0 bg-transparent" onclick="return confirm('هل أنت متأكد من الحذف؟')">
                                    <i class="ph-trash"></i>
                                </button>
                            </form>
                            <!-- Settings Action -->
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
    <!-- /contextual classes -->
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
