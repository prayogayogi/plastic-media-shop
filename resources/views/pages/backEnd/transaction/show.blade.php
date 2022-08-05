@extends("layouts.app-custome")

@section("title", "Show Transaction")

@section("content")
    <div class="content">
        <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
            <div>
                <h1>Show Transaction</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb p-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route("transaction.index") }}">
                                <span class="mdi mdi-home"></span>
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            Transaction
                        </li>
                        <li class="breadcrumb-item" aria-current="page">Show Transaction</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="card card-default">
                    <div class="card-body">

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th class="col-md-2">Name Product</th>
                                    <th class="col-md-2">Price</th>
                                    <th class="col-md-1">Quantity</th>
                                    <th>Description</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($transactions->TransactionItem as $transaction)
                                    <tr>
                                        <td scope="row">{{ $loop->iteration }}</td>
                                        <td>{{ $transaction->product[0]->name }}</td>
                                        <td>@currency($transaction->product[0]->price)</td>
                                        <td>{{ $transaction->quantity }}</td>
                                        <td>{{ $transaction->product[0]->description }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->
@endsection
