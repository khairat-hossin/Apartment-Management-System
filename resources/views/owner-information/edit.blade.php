@extends('owner-information.base')

@section('action-content')
@if(( Auth::user()->role == 'admin'))
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update Owner Information</div>
                <form class="form-horizontal" role="form"  action="{{ route('owner-information.update', $owner_info->id) }}" method="post">
                <div class="panel-body">
                    
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label for="first_name" class="col-md-3 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control" pattern="[a-zA-Z ]+[a-zA-Z ]+" maxlength="20" name="first_name" value="{{ $owner_info->first_name }}" required autofocus>

                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('mid_name') ? ' has-error' : '' }}">
                            <label for="mid_name" class="col-md-3 control-label">Middle Name</label>

                            <div class="col-md-6">
                                <input id="mid_name" type="text" class="form-control" name="mid_name" value="{{ $owner_info->mid_name }}" required autofocus>

                                @if ($errors->has('mid_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mid_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label for="last_name" class="col-md-3 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control" name="last_name" value="{{ $owner_info->last_name }}" required autofocus>

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('flat_no') ? ' has-error' : '' }}">
                            <label for="flat_no" class="col-md-3 control-label">Flat No</label>

                            <div class="col-md-6">
                                <input id="flat_no" type="text" class="form-control" name="flat_no" value="{{ $owner_info->flat_no }}" required autofocus>

                                @if ($errors->has('flat_no'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('flat_no') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('car_park') ? ' has-error' : '' }}">
                            <label for="car_park" class="col-md-3 control-label">Parking No</label>

                            <div class="col-md-6">
                                <input id="car_park" type="number" class="form-control" pattern="[A-Z][0-9]+" maxlength="10" name="car_park" value="{{ $owner_info->car_park }}" required autofocus>

                                @if ($errors->has('car_park'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('car_park') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('mobile_no') ? ' has-error' : '' }}">
                            <label for="mobile_no" class="col-md-3 control-label">Mobile No</label>

                            <div class="col-md-6">
                                <input id="mobile_no" type="number" class="form-control" placeholder="1751767350" max="999999999" name="mobile_no" value="{{ $owner_info->mobile_no }}" required>

                                @if ($errors->has('mobile_no'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobile_no') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email_id') ? ' has-error' : '' }}">
                            <label for="email_id" class="col-md-3 control-label">Email Address</label>

                            <div class="col-md-6">
                                <input id="email_id" type="email" class="form-control" name="email_id" value="{{ $owner_info->email_id }}" required>

                                @if ($errors->has('email_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('n_id') ? ' has-error' : '' }}">
                            <label for="n_id" class="col-md-3 control-label">National ID</label>

                            <div class="col-md-6">
                                <input id="n_id" type="number" class="form-control" pattern="[0-9]+" maxlength="20" name="n_id" value="{{ $owner_info->n_id }}" required autofocus>

                                @if ($errors->has('n_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('n_id') }}</strong>
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
                                    <input type="text" value="{{ $owner_info->date_of_birth }}" name="birthdate" class="form-control pull-right datepicker" id="birthDate" required>
                                </div>
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('present_add') ? ' has-error' : '' }}">
                            <label for="present_add" class="col-md-3 control-label">Present Address</label>

                            <div class="col-md-6">
                                <input id="present_add" type="text" class="form-control" name="present_add" value="{{ $owner_info->present_add }}" required autofocus>

                                @if ($errors->has('present_add'))
                                    <span class="help-block">present_add
                                        <strong>{{ $errors->first('present_add') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('parmanent_add') ? ' has-error' : '' }}">
                            <label for="parmanent_add" class="col-md-3 control-label">Parmanent Address</label>

                            <div class="col-md-6">
                                <input id="parmanent_add" type="text" class="form-control" name="parmanent_add" value="{{ $owner_info->parmanent_add }}" required>

                                @if ($errors->has('parmanent_add'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('parmanent_add') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('emergency_contact') ? ' has-error' : '' }}">
                            <label for="emergency_contact" class="col-md-3 control-label">Emergency Contact</label>

                            <div class="col-md-6">
                                <input id="emergency_contact" type="text" class="form-control" name="emergency_contact" value="{{ $owner_info->emergency_contact }}" required>

                                @if ($errors->has('emergency_contact'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('emergency_contact') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="avatar" class="col-md-3 control-label" >Picture</label>
                            <div class="col-md-6">
                                <img src="../../{{$owner_info->picture }}" width="100px" height="100px"/>
                                <input type="file" id="picture" name="picture" />
                            </div>
                        </div>
                </div>
                <div class="panel-footer">
                    <center>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ URL::previous() }}" class="btn btn-danger" style="text-align: right;"><i class="fa fa-arrow-circle-left"></i> Cancel</a>
                    </center>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endif

<style type="text/css">
    input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
</style>


@endsection
