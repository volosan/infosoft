@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2>Invest to your deposit</h2>
            <form method="POST" action="{{ route('deposit.store') }}">
                @csrf

                <div class="form-group row">
                    <label for="email" class="col-md-4">Amount</label>

                    <div class="col-md-6">
                        <input id="invested" type="number" step="0.01" class="form-control" name="invested" value="{{ old('invested') }}" required autofocus>

                        @error('invested')
                        <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Invest
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
