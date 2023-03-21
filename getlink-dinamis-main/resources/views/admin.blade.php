@extends('admin.base')
@section('konten')
@if (Auth::check())
@if (Auth::user()->role_id == 2)
<!-- Content Row -->
<div class="row">
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Microsite</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            {{-- {{ kategori::all()->count() }} --}}
                            {{-- {{ $data }} --}}
                            {{ $microsite }} Microsite
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-bars fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Akun User</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            {{-- {{ kategori::all()->count() }} --}}
                            {{-- {{ $data }} --}}
                            {{ $user }} User
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-bars fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Microsite Slot</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            {{ $m_slot }} Paket
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-bars fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Budget</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            @if ($budget_all == 0)
                                0
                            @else
                                {{ $budget->value }}
                            @endif
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-bars fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@else
<script>
    window.location.href = "login"
</script>
@endif
@endsection