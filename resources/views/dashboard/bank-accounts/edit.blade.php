@extends('layouts.app')
 
@section('title', 'Edit Bank Account')
 
@section('content')
<div class="container-fluid bg">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="form-fields">
                {{ Form::model($bankAccount, ['route' => ['dashboard.bank-accounts.update', $bankAccount->id], 'method' => 'patch', 'class' => 'form-container mt-5 border p-4 bg-light shadow']) }}
                    <h3 class="mb-3 text-secondary">Edit Bank Account</h3>
                    @foreach ($errors->all() as $error)
                        <li class="alert alert-danger">{{ $error }}</li>
                    @endforeach
                    <div class="row">
                        <div class="mb-3 col-md">
                            <label>User ID</label>
                            <input type="text" name="user_id" class="form-control" placeholder="Ex. 69" value="{{ $bankAccount->user_id }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md">
                            <label>Account Number</label>
                            <input type="text" name="account_number" class="form-control" placeholder="Ex. 2022-321123-0" value="{{ $bankAccount->account_number }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md">
                            <label>Balance</label>
                            <input type="number" step="any" name="balance" class="form-control" placeholder="Ex. 200.50" value="{{ $bankAccount->balance }}">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md">
                            <a href="{{ route('dashboard.bank-accounts.index') }}" style="text-decoration:none">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="button">BACK</button>
                                </div>
                            </a>
                        </div>
                        <div class="col-md">
                            <div class="d-grid gap-2">
                                <button class="btn btn-success" type="submit">SAVE</button>
                            </div>
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>

@push('head')
    <link rel="stylesheet" href="{{ asset('css/card.css')}}" />
@endpush

@push('scripts')
@endpush

@endsection