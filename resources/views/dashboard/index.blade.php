@extends('template.layout2')
@section('title', 'Dashboard')
@section('content')
<!-- Header -->
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Dashboard</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        {{-- {{ Breadcrumbs::render('dashboard') }} --}}
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <!-- Card stats -->
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Total Books Inserted</h5>
                            {{-- <span class="h2 font-weight-bold mb-0">{{ $book->count() }}</span> --}}
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-gray-dark text-white rounded-circle shadow">
                                <i class="fas fa-book"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        {{-- <a href="{{ route('books.index') }}">Click here to see data</a> --}}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Total Publishers Inserted</h5>
                            {{-- <span class="h2 font-weight-bold mb-0">{{ $publisher->count() }}</span> --}}
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                <i class="fas fa-warehouse"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        {{-- <a href="{{ route('publishers.index') }}">Click here to see data</a> --}}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Total Other Books</h5>
                            {{-- <span class="h2 font-weight-bold mb-0">{{ $otherBooks->count() }}</span> --}}
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-indigo text-white rounded-circle shadow">
                                <i class="fas fa-book-open"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        {{-- <a href="{{ route('borrow.index') }}">Click here to see data</a> --}}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Total Person Listed</h5>
                            {{-- <span class="h2 font-weight-bold mb-0">{{ $person->count() }}</span> --}}
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-purple text-white rounded-circle shadow">
                                <i class="fas fa-book-reader"></i>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        {{-- <a href="{{ route('person.index') }}">Click here to see data</a> --}}
                    </p>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-xl-4">
            <!-- Checklist -->
            <div class="card pray-time">
                <!-- Card header -->
                <div class="card-header bg-gradient-success">
                    <!-- Title -->
                    <h5 class="h3 mb-0">Prayer Times</h5>
                </div>
            </div>
        </div>
        <div class="col-xl-4 sticky-top">
            <div class="card widget-calendar">
                <!-- Card header -->
                <div class="card-header bg-gradient-orange">
                    <div class="row">

                        <div class="col-6">

                            <div class="col-12 h4 text-muted mb-1 widget-calendar-year text-gray-dark"></div>
                            <div class="col-12 h3 mb-0 widget-calendar-day"></div>
                        </div>
                        <div class="col-6 text-right">
                            <a href="#" class="fullcalendar-btn-prev btn btn-sm btn-neutral">
                                <i class="fas fa-angle-left"></i>
                            </a>
                            <a href="#" class="fullcalendar-btn-now btn btn-sm btn-neutral">
                                <i class="fas fa-circle"></i>
                            </a>
                            <a href="#" class="fullcalendar-btn-next btn btn-sm btn-neutral">
                                <i class="fas fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Card body -->
                <div class="card-body">
                    <div data-toggle="widget-calendar"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/fullcalendar/dist/fullcalendar.min.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('assets/vendor/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('assets/vendor/fullcalendar/dist/fullcalendar.min.js') }}"></script>
<script src="{{ asset('assets/vendor/fullcalendar/dist/gcal.min.js') }}"></script>
<script src="{{ asset('assets/js/prayer.js') }}"></script>
@endpush
