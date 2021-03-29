@extends('layouts.user_auth.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Invoice') }}</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Invoice</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data['invoice'] as $invoice)
                            <tr>
                                <td>{{ $invoice->id }}</td>
                                <td><a href="{{ route('invoiceEdit', ['id' => $invoice->id]) }}" class='btn btn-primary btn-sm'>Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection