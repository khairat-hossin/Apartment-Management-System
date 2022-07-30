@extends('owner-information.base')
@section('action-content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" align="center">Owner Information</div>

                <form class="form-horizontal" role="form" method="POST" action="{{ route('owner-information.store') }}" enctype="multipart/form-data">
                <div class="panel-body">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label for="first_name" class="col-md-3 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" pattern="[a-zA-Z ]+[a-zA-Z ]+" maxlength="20" class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus>

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
                                <input id="mid_name" type="text" class="form-control" pattern="[a-zA-Z ]+[a-zA-Z ]+" maxlength="20" name="mid_name" value="{{ old('mid_name') }}" required autofocus>

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
                                <input id="last_name" type="text" class="form-control" pattern="[a-zA-Z ]+[a-zA-Z ]+" maxlength="20" name="last_name" value="{{ old('last_name') }}" required>

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Flat No</label>
                            <div class="col-md-6">
                                <select class="form-control js-flat_no" name="flat_no" required>
                                    <option value="">Please select your flat no</option>
                                    @foreach ($flats as $flats)
                                        <option style="align-content: center;" value="{{ $flats['id'] }}">{{ $flats['flat_no'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('car_park') ? ' has-error' : '' }}">
                            <label for="car_park" class="col-md-3 control-label">Parking No</label>

                            <div class="col-md-6">
                                <input id="car_park" type="text" class="form-control" pattern="[A-Z][0-9]+" maxlength="10" name="car_park" value="{{ old('car_park') }}" required>

                                @if ($errors->has('car_park'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('car_park') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                       
                        <div class="form-group{{ $errors->has('mobile_no') ? ' has-error' : '' }}">
                            <label for="mobile_no" class="col-md-3 control-label">Mobile</label>

                            <div class="col-md-6">
                                <input id="mobile_no" type="number" class="form-control" name="mobile_no" placeholder="1751767350" max="999999999" name="mobile_no" value="{{ old('mobile_no') }}" required>

                                @if ($errors->has('mobile_no'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobile_no') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('n_id') ? ' has-error' : '' }}">
                            <label for="n_id" class="col-md-3 control-label">National Id</label>

                            <div class="col-md-6">
                                <input id="n_id" type="text" class="form-control" pattern="[0-9]+" maxlength="20" name="n_id" value="{{ old('n_id') }}" required>

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
                                    <input type="text" value="{{ old('birthDate') }}" name="birthDate" class="form-control pull-right datepicker" id="birthDate" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('present_add') ? ' has-error' : '' }}">
                            <label for="present_add" class="col-md-3 control-label">Present Address</label>

                            <div class="col-md-6">
                                <input id="present_add" type="text" class="form-control" name="present_add" value="{{ old('present_add') }}" required>

                                @if ($errors->has('present_add'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('present_add') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('parmanent_add') ? ' has-error' : '' }}">
                            <label for="parmanent_add" class="col-md-3 control-label">Parmanent Address</label>

                            <div class="col-md-6">
                                <input id="parmanent_add" type="text" class="form-control" name="parmanent_add" value="{{ old('parmanent_add') }}" required>

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
                                <input id="emergency_contact" type="text" class="form-control"  name="emergency_contact" value="{{ old('emergency_contact') }}" required>

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

<style type="text/css">
    input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
</style>

@endsection