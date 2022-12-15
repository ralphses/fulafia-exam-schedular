@extends('layouts.backend')

@section('content')

    @component('components.dashboard.nav-bar')
    @endcomponent

    @component('components.dashboard.page-header')
    @endcomponent


    <!-- Main Container -->
    <main id="main-container">

        <!-- Page Content -->
        <div class="content">
            <!-- Your Block -->

            <!-- END Your Block -->
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

    @component('components.dashboard.footer')
    @endcomponent

@endsection
