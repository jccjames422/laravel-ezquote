@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Register a New Dealership</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-row mb-4">
                                <div class="col">
                                    <input id="dealership-name" type="text"
                                                        class="form-control @error('dealership-name') is-invalid @enderror"
                                                        name="dealership-name" value="{{ old('dealership-name') }}"
                                                        required
                                                        autocomplete="dealership-name" placeholder="Dealership Name"
                                                        autofocus>

                                    @error('dealership-name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row mb-4">
                                <div class="col">
                                    <input id="address1" type="text"
                                                        class="form-control @error('address1') is-invalid @enderror"
                                                        name="address1"
                                                        value="{{ old('address1') }}" required autocomplete="address1"
                                                        placeholder="Address Line 1">

                                    @error('address1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row mb-4">
                                <div class="col">
                                    <input id="address2" type="text"
                                           class="form-control @error('address2') is-invalid @enderror"
                                           name="address2"
                                           value="{{ old('address2') }}" required autocomplete="address2"
                                           placeholder="Address Line 2">

                                    @error('address2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row mb-4">
                                <div class="col">
                                    <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="city" placeholder="City">
                                    @error('city')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col">
                                    <input id="state" type="text" class="form-control @error('state') is-invalid @enderror" name="state" value="{{ old('state') }}" required autocomplete="state" placeholder="State">

                                    @error('state')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col">
                                    <input id="zip" type="text" class="form-control @error('zip') is-invalid @enderror" name="zip" value="{{ old('zip') }}" required autocomplete="zip" placeholder="Zip">

                                    @error('zip')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row mb-4">
                                <div class="col">
                                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder="Main Phone">
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col">
                                    <input id="sales-phone" type="text" class="form-control @error('sales-phone') is-invalid @enderror" name="sales-phone" value="{{ old('sales-phone') }}" required autocomplete="sales-phone" placeholder="Sales Phone">

                                    @error('sales-phone')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col">
                                    <input id="fax" type="text" class="form-control @error('fax') is-invalid @enderror" name="fax" value="{{ old('fax') }}" required autocomplete="fax" placeholder="Fax Line">

                                    @error('fax')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row mb-4">
                                <div class="col">
                                    <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') }}" required autocomplete="url" placeholder="Website URL">
                                </div>
                            </div>

                            <div class="form-row mb-4">
                                <div class="col">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="timezone">Time Zone</label>
                                        </div>
                                        <select class="custom-select" name="timezone" id="timezone">
                                            <option value="UTC-04:00 Atlantic">UTC-04:00 Atlantic</option>
                                            <option value="UTC-05:00 Eastern">UTC-05:00 Eastern</option>
                                            <option value="UTC-06:00 Central">UTC-06:00 Central</option>
                                            <option value="UTC-07:00 Mountain">UTC-07:00 Mountain</option>
                                            <option value="UTC-08:00 Pacific">UTC-08:00 Pacific</option>
                                            <option value="UTC-09:00 Alaska">UTC-09:00 Alaska</option>
                                            <option value="UTC-10:00 Hawaii">UTC-10:00 Hawaii</option>
                                            <option value="UTC+10:00 Guam">UTC+10:00 Guam</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" value="" id="daylightSavings" name="daylightSavings">
                                        <label class="custom-control-label" for="daylightSavings">
                                            Observe Daylight Savings Time
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0 mt-4">
                                <div class="col">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
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
