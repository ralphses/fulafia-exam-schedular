@extends('layouts.backend')

@section('content')

    @component('components.dashboard.nav-bar')
    @endcomponent

    @component('components.dashboard.page-header')
    @endcomponent

    @component('components.dashboard.generate_timetable')
    @endcomponent

    @component('components.dashboard.footer')
    @endcomponent

@endsection
