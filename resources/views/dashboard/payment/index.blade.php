@extends('layouts.admin')
@section('title','الدفعات')

@section('content')
<div class="container">
    <!-- Contextual classes -->

    <div class="card">
        <div class="card-header">
            <div class="row">

                <div class="col-md-6 ">

                    <h2 class="mb-0">الدفعات </h2>
                </div>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>المستخدم</th>
                                <th>الدعوة</th>
                                <th>طريقة الدفع</th>
                                <th>المبلغ</th>
                                <th>الحالة</th>
                                <th class="text-center">الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($payments as $index => $payment)
                            <tr
                                class="{{ $payment->status === 'approved' ? 'table-success' : ($payment->status === 'declined' ? 'table-danger' : ($payment->status === 'pending' ? 'table-warning' : '')) }}">
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $payment->user->name ?? 'غير متوفر' }}</td>
                                <td>{{ $payment->invitation->invitation_name ?? 'غير متوفر' }}</td>
                                <td>{{ $payment->method }}</td>
                                <td>{{ $payment->amount }} {{ $payment->currency }}</td>
                                <td>
                                    <span
                                        class="badge {{ $payment->status === 'approved' ? 'bg-success bg-opacity-10 text-success' : ($payment->status === 'declined' ? 'bg-danger bg-opacity-10 text-danger' : 'bg-warning bg-opacity-10 text-warning') }}">
                                        {{ ucfirst($payment->status) }}
                                    </span>
                                </td>
                                <td class="text-center">
                                    <div class="d-inline-flex">
                                        <!-- Edit Action -->
                                        <a href="{{ route('payments.edit', $payment->id) }}" class="text-primary">
                                            <i class="ph-pen"></i>
                                        </a>
                                        <!-- Delete Action -->
                                        <form action="{{ route('payments.destroy', $payment->id) }}" method="POST"
                                            class="mx-2">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-danger border-0 bg-transparent"
                                                onclick="return confirm('هل أنت متأكد من الحذف؟')">
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
