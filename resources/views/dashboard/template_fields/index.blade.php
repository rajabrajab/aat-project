@extends('layouts.admin')
@section('title','حقول القوالب')

@section('content')

<div class="container">
    <!-- Contextual classes -->
    <div class="card">
      <div class="card-header">
            <div class="row">

                <div class="col-md-6 ">

                    <h2 class="mb-0">حقول القوالب</h2>
                </div>
                  <div class="col-md-6 text-end">
                    <a type="button" href="{{route('template_fields.create')}}"  class="btn btn-outline-success rounded-pill p-2">
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
                <th>اسم الحقل</th>
                <th>اسم القالب</th>
                <th>نوع الحقل</th>
                <th>التسمية</th>
                <th>الإجراءات</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($templateFields as $index => $field)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $field->name }}</td>
                    <td>{{ $field->template->name ?? 'غير متوفر' }}</td>
                    <td>{{ ucfirst($field->field_type) }}</td>
                    <td>{{ $field->label }}</td>
                    <td>
                        <div class="d-inline-flex">
                            <!-- Edit Action -->
                            <a href="{{ route('template_fields.edit', $field->id) }}" class="text-primary">
                                <i class="ph-pen"></i>
                            </a>
                            <!-- Delete Action -->
                            <form action="{{ route('template_fields.destroy', $field->id) }}" method="POST" class="mx-2">
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
