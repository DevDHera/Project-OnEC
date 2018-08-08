@extends('layouts.userApp')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Student Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('institute') ? ' has-error' : '' }}">
                            <label for="institute" class="col-md-4 control-label">Institute</label>

                            <div class="col-md-6">
                                <!--<input id="institute" type="text" class="form-control" name="institute" value="{{ old('institute') }}" required autofocus>-->
                                <select name="institute" id="institute" class="form-control" required autofocus>
                                    <option value="">--Select an Institute--</option>
                                    <option value="None">None @if(old('institute') == "None"){{'selected'}}@endif</option>
                                    <option value="NIBM">NIBM @if(old('institute') == "NIBM"){{'selected'}}@endif</option>
                                    <option value="UCSC">UCSC @if(old('institute') == "UCSC"){{'selected'}}@endif</option>
                                    <option value="SLIIT">SLIIT @if(old('institute') == "SLIIT"){{'selected'}}@endif</option>
                                    <option value="ESOFT">ESOFT @if(old('institute') == "ESOFT"){{'selected'}}@endif</option>
                                    <option value="IIT">IIT @if(old('institute') == "IIT"){{'selected'}}@endif</option>
                                    <option value="ICBT">ICBT @if(old('institute') == "ICBT"){{'selected'}}@endif</option>                                    
                                </select>
                                @if ($errors->has('institute'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('institute') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('gradYear') ? ' has-error' : '' }}">
                            <label for="gradYear" class="col-md-4 control-label">Paper Year</label>

                            <div class="col-md-6">
                                <!--<input id="institute" type="text" class="form-control" name="institute" value="{{ old('institute') }}" required autofocus>-->
                                <select name="gradYear" id="gradYear" class="form-control" required autofocus>
                                    <option value="">--Select Your Ungrad Year--</option>
                                    <option value="1">1 @if(old('gradYear') == "1"){{'selected'}}@endif</option>                                   
                                    <option value="2">2 @if(old('gradYear') == "2"){{'selected'}}@endif</option>
                                    <option value="3">3 @if(old('gradYear') == "3"){{'selected'}}@endif</option>
                                    <option value="4">4 @if(old('gradYear') == "4"){{'selected'}}@endif</option>                                    
                                </select>
                                @if ($errors->has('gradYear'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gradYear') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
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
