@extends("layouts.app-custome")

@section("title", "Profit")

@section("content")
<div class="content">
    <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
        <div>
            <h1>Profit</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb p-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route("profit.index") }}">
                        <span class="mdi mdi-home"></span>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        Profit
                    </li>
                    <li class="breadcrumb-item" aria-current="page">List Profit</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            @include('components.alert')
            <div class="card card-default">
                <div class="card-body">
                    <table id="myTable" class="table table-hover nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Price Modal</th>
                                <th>Isi</th>
                                <th>Price Jual</th>
                                <th>Terjual</th>
                                <th>Keuntunga</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($profits as $profit)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $profit->name }}</td>
                                    <td>@currency($profit->price_modal) / Pack</td>
                                    <td>{{ $profit->quantity }}  {{ $profit->unit }}</td>
                                    <td>@currency($profit->price) / Pics</td>
                                    <td>
                                        @php
                                            $sum = 0;
                                        @endphp
                                        @foreach ($profit->TransactionItems as $item)
                                            @php
                                                $sum += $item->quantity;
                                            @endphp
                                        @endforeach
                                        {{ $sum }} pics
                                    </td>
                                    <td>
                                        @php
                                            $sum = 0;
                                        @endphp
                                        @foreach ($profit->TransactionItems as $item)
                                            @php
                                                $sum += $item->quantity;
                                            @endphp
                                        @endforeach

                                        <!-- Rumus untuk menghitung profit  -->
                                        @php
                                            $result = ($sum * $profit->price) - $profit->price_modal;
                                        @endphp
                                        @currency($result)
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <p>Data tidak ada.</p>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Content -->

@endsection

@push('after-style')
    <link href="{{ asset("assets-backEnd/plugins/data-tables/datatables.bootstrap4.min.css") }}" rel="stylesheet">
@endpush

@push('after-script')
<script src="{{ asset("assets-backEnd/plugins/data-tables/jquery.datatables.min.js") }}"></script>
<script src="{{ asset("assets-backEnd/plugins/data-tables/datatables.bootstrap4.min.js") }}"></script>
<script>
    $(document).ready( function () {
        $('#myTable').DataTable({
            "dom": '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">'
        });
    } );
</script>

@endpush
