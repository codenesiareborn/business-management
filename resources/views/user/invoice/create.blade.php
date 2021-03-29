@extends('layouts.user_auth.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Invoice') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('invoiceStore') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="company_id" class="col-md-4 col-form-label text-md-right">{{ __('Company') }}</label>
                            <div class="col-md-6">
                                <input id="company_id" type="text" class="form-control @error('company_id') is-invalid @enderror" name="company_id" value="{{ old('company_id') }}" required autocomplete="company_id" autofocus>
                                @error('company_id')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="product_id" class="col-md-4 col-form-label text-md-right">{{ __('Product') }}</label>
                            <div class="col-md-6">
                                <input id="product_id" type="product_id" class="form-control @error('product_id') is-invalid @enderror" name="product_id" value="{{ old('product_id') }}" required autocomplete="product_id">
                                @error('product_id')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mitra_id" class="col-md-4 col-form-label text-md-right">{{ __('Mitra') }}</label>
                            <div class="col-md-6">
                                <input id="mitra_id" type="mitra_id" class="form-control @error('mitra_id') is-invalid @enderror" name="mitra_id" value="{{ old('mitra_id') }}" required autocomplete="mitra_id">
                                @error('mitra_id')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>
                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" autocomplete="phone">
                                @error('phone')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="no" class="col-md-4 col-form-label text-md-right">{{ __('no') }}</label>
                            <div class="col-md-6">
                                <input id="no" type="text" class="form-control @error('no') is-invalid @enderror" name="no" value="{{ old('no') }}" autocomplete="no">
                                @error('no')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date_invoice" class="col-md-4 col-form-label text-md-right">{{ __('date_invoice') }}</label>
                            <div class="col-md-6">
                                <input id="date_invoice" type="text" class="form-control @error('date_invoice') is-invalid @enderror" name="date_invoice" value="{{ old('date_invoice') }}" autocomplete="date_invoice">
                                @error('date_invoice')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sales_person" class="col-md-4 col-form-label text-md-right">{{ __('sales_person') }}</label>
                            <div class="col-md-6">
                                <input id="sales_person" type="text" class="form-control @error('sales_person') is-invalid @enderror" name="sales_person" value="{{ old('sales_person') }}" autocomplete="sales_person">
                                @error('sales_person')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="terms" class="col-md-4 col-form-label text-md-right">{{ __('Terms') }}</label>
                            <div class="col-md-6">
                                <input id="terms" type="text" class="form-control @error('terms') is-invalid @enderror" name="terms" value="{{ old('terms') }}" autocomplete="terms">
                                @error('terms')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="currency" class="col-md-4 col-form-label text-md-right">{{ __('currency') }}</label>
                            <div class="col-md-6">
                                <input id="currency" type="text" class="form-control @error('currency') is-invalid @enderror" name="currency" value="{{ old('currency') }}" autocomplete="currency">
                                @error('currency')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="due_date" class="col-md-4 col-form-label text-md-right">{{ __('due_date') }}</label>
                            <div class="col-md-6">
                                <input id="due_date" type="text" class="form-control @error('due_date') is-invalid @enderror" name="due_date" value="{{ old('due_date') }}" autocomplete="due_date">
                                @error('due_date')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="disccount" class="col-md-4 col-form-label text-md-right">{{ __('disccount') }}</label>
                            <div class="col-md-6">
                                <input id="disccount" type="text" class="form-control @error('disccount') is-invalid @enderror" name="disccount" value="{{ old('disccount') }}" autocomplete="disccount">
                                @error('disccount')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tax" class="col-md-4 col-form-label text-md-right">{{ __('tax') }}</label>
                            <div class="col-md-6">
                                <input id="tax" type="text" class="form-control @error('tax') is-invalid @enderror" name="tax" value="{{ old('tax') }}" autocomplete="tax">
                                @error('tax')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="total" class="col-md-4 col-form-label text-md-right">{{ __('total') }}</label>
                            <div class="col-md-6">
                                <input id="total" type="text" class="form-control @error('total') is-invalid @enderror" name="total" value="{{ old('total') }}" autocomplete="total">
                                @error('total')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('date') }}</label>
                            <div class="col-md-6">
                                <input id="date" type="text" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" autocomplete="date">
                                @error('date')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="information" class="col-md-4 col-form-label text-md-right">{{ __('information') }}</label>
                            <div class="col-md-6">
                                <input id="information" type="text" class="form-control @error('information') is-invalid @enderror" name="information" value="{{ old('information') }}" autocomplete="information">
                                @error('information')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="terms_condition" class="col-md-4 col-form-label text-md-right">{{ __('terms_condition') }}</label>
                            <div class="col-md-6">
                                <input id="terms_condition" type="text" class="form-control @error('terms_condition') is-invalid @enderror" name="terms_condition" value="{{ old('terms_condition') }}" autocomplete="terms_condition">
                                @error('terms_condition')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="termin_invoice" class="col-md-4 col-form-label text-md-right">{{ __('termin_invoice') }}</label>
                            <div class="col-md-6">
                                <input id="termin_invoice" type="text" class="form-control @error('termin_invoice') is-invalid @enderror" name="termin_invoice" value="{{ old('termin_invoice') }}" autocomplete="termin_invoice">
                                @error('termin_invoice')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('status') }}</label>
                            <div class="col-md-6">
                                <input id="status" type="text" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status') }}" autocomplete="status">
                                @error('status')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Insert') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
