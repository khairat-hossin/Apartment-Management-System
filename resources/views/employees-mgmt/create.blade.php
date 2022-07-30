@extends('employees-mgmt.base')

@section('action-content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add new employee</div>
                <form class="form-horizontal" role="form" method="POST" action="{{ route('employee-management.store') }}" enctype="multipart/form-data">
                <div class="panel-body">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                            <label for="firstname" class="col-md-3 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required autofocus>

                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label for="lastname" class="col-md-3 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required>

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('middlename') ? ' has-error' : '' }}">
                            <label for="middlename" class="col-md-3 control-label">Middle Name</label>

                            <div class="col-md-6">
                                <input id="middlename" type="text" class="form-control" name="middlename" value="{{ old('middlename') }}" required>

                                @if ($errors->has('middlename'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('middlename') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('nickname') ? ' has-error' : '' }}">
                            <label for="nickname" class="col-md-3 control-label">Nick Name</label>

                            <div class="col-md-6">
                                <input id="nickname" type="text" class="form-control" name="nickname" value="{{ old('nickname') }}" required>

                                @if ($errors->has('nickname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nickname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('fathername') ? ' has-error' : '' }}">
                            <label for="fathername" class="col-md-3 control-label">Father Name</label>

                            <div class="col-md-6">
                                <input id="fathername" type="text" class="form-control" name="fathername" value="{{ old('fathername') }}" required>

                                @if ($errors->has('fathername'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fathername') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('mothername') ? ' has-error' : '' }}">
                            <label for="mothername" class="col-md-3 control-label">Mother Name</label>

                            <div class="col-md-6">
                                <input id="mothername" type="text" class="form-control" name="mothername" value="{{ old('mothername') }}" required>

                                @if ($errors->has('mothername'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mothername') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-3 control-label">Address</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Country</label>
                            <div class="col-md-6">
                                <select class="form-control" name="country_id" required>
                                    <option value="">Please select your country</option>
                                    @foreach ($countries as $country)
                                        <option value="{{$country->id}}">{{$country->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Division</label>
                            <div class="col-md-6">
                                <select class="form-control" name="state_id" required>
                                    <option value="">Please select your Division</option>
                                    {{--  @foreach ($states as $state)
                                        <option value="{{$state->id}}">{{$state->name}}</option>
                                    @endforeach  --}}
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">City</label>
                            <div class="col-md-6">
                                <select class="form-control" name="city_id" required>
                                    <option value="">Please select your city</option>
                                    {{--  @foreach ($cities as $city)
                                        <option value="{{$city->id}}">{{$city->name}}</option>
                                    @endforeach  --}}
                                </select>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('zip') ? ' has-error' : '' }}">
                            <label for="zip" class="col-md-3 control-label">Zip</label>

                            <div class="col-md-6">
                                <input id="zip" type="number" class="form-control" name="zip" value="{{ old('zip') }}" required>

                                @if ($errors->has('zip'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('zip') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-3 control-label">Phone Number(+880)</label>

                            <div class="col-md-6">
                                <input id="phone" type="number" class="form-control" name="phone" value="{{ old('phone') }}" required>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                            <label for="zip" class="col-md-3 control-label">Age</label>

                            <div class="col-md-6">
                                <input id="age" type="number" class="form-control" name="age" value="{{ old('age') }}" required>

                                @if ($errors->has('age'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Birthday</label>
                            <div class="col-md-6">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" value="{{ old('birthdate') }}" name="birthdate" class="form-control pull-right datepicker" id="birthDate" required>
                                </div>
                            </div>
                        </div>
                          <div class="form-group">
                            <label class="col-md-3 control-label">Hired Date</label>
                            <div class="col-md-6">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" value="{{ old('date_hired') }}" name="date_hired" class="form-control pull-right datepicker" id="hiredDate" required>
                                </div>
                            </div>
                        </div>       
                         <div class="form-group{{ $errors->has('refname') ? ' has-error' : '' }}">
                            <label for="refname" class="col-md-3 control-label">Reference Name</label>

                            <div class="col-md-6">
                                <input id="refname" type="text" class="form-control" name="refname" value="{{ old('refname') }}" required>

                                @if ($errors->has('refname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('refname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('refcontact') ? ' has-error' : '' }}">
                            <label for="refcontact" class="col-md-3 control-label">Reference Contact</label>

                            <div class="col-md-6">
                                <input id="refcontact" type="number" class="form-control" name="refcontact" value="{{ old('refcontact') }}" required>

                                @if ($errors->has('refcontact'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('refcontact') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('verification') ? ' has-error' : '' }}">
                            <label for="verification" class="col-md-3 control-label">Verification</label>

                            <div class="col-md-6">
                                <input id="verification" type="text" class="form-control" name="verification" value="{{ old('verification') }}" required>

                                @if ($errors->has('verification'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('verification') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('nid') ? ' has-error' : '' }}">
                            <label for="nid" class="col-md-3 control-label">Natonal ID</label>

                            <div class="col-md-6">
                                <input id="nid" type="number" class="form-control" name="nid" value="{{ old('nid') }}" required>

                                @if ($errors->has('nid'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nid') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('emergencyname') ? ' has-error' : '' }}">
                            <label for="emergencyname" class="col-md-3 control-label">Emergency Name</label>

                            <div class="col-md-6">
                                <input id="emergencyname" type="text" class="form-control" name="emergencyname" value="{{ old('emergencyname') }}" required>

                                @if ($errors->has('emergencyname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('emergencyname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('emergencycontact') ? ' has-error' : '' }}">
                            <label for="emergencycontact" class="col-md-3 control-label">Emergency Contact</label>

                            <div class="col-md-6">
                                <input id="emergencycontact" type="number" class="form-control" name="emergencycontact" value="{{ old('emergencycontact') }}" required>

                                @if ($errors->has('emergencycontact'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('emergencycontact') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="avatar" class="col-md-3 control-label" >Picture</label>
                            <div class="col-md-6">
                                <input type="file" id="picture" name="picture" required >
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <center>
                            <button type="submit" class="btn btn-primary">Create</button>
                            <a href="{{ URL::previous() }}" class="btn btn-danger" style="text-align: right;"><i class="fa fa-arrow-circle-left"></i> Cancel</a>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script  src="{{ asset ("/bower_components/AdminLTE/plugins/daterangepicker/daterangepicker.js") }}" type="text/javascript" ></script>
    <script  src="{{ asset ("/bower_components/AdminLTE/plugins/datepicker/bootstrap-datepicker.js") }}" type="text/javascript" ></script>
<style type="text/css">
    input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
</style>


@endsection
