@extends("layouts.app-custome")

@section("title", "Dashboard")

@section("content")
    <div class="content">
        <!-- Top Statistics -->
        <div class="row">
            @include("pages.backEnd.dashboard._statistics")
        </div>

        <div class="row">
            <div class="col-xl-8 col-md-12">
                <!-- Sales Graph -->
                @include("pages.backEnd.dashboard._salesGraph")
            </div>

            <div class="col-xl-4 col-md-12">
                <!-- Doughnut Chart -->
                @include("pages.backEnd.dashboard._doughnut")
            </div>
        </div>
    </div>
@endsection
