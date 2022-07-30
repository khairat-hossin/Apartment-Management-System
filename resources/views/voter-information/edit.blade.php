@extends('voter-information.base')

@section('action-content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update Voter Information</div>

                <form class="form-horizontal" role="form"  action="{{ route('voter-information.update', $voter->id) }}" method="post">
                <div class="panel-body">
                    
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group{{ $errors->has('voter_id') ? ' has-error' : '' }}">
                            <label for="voter_id" class="col-md-3 control-label">Voter ID</label>

                            <div class="col-md-6">
                                <input id="voter_id" type="number" class="form-control" name="voter_id" value="{{ $voter->voter_id }}" required autofocus>

                                @if ($errors->has('voter_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('voter_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label for="first_name" class="col-md-3 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control" name="first_name" value="{{ $voter->first_name }}" required autofocus>

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
                                <input id="mid_name" type="text" class="form-control" name="mid_name" value="{{ $voter->mid_name }}" required autofocus>

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
                                <input id="last_name" type="text" class="form-control" name="last_name" value="{{ $voter->last_name }}" required autofocus>

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
                                <input id="flat_no" type="text" class="form-control" name="flat_no" value="{{ $voter->flat_no }}" required autofocus>

                                @if ($errors->has('flat_no'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('flat_no') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('relationship') ? ' has-error' : '' }}">
                            <label for="relationship" class="col-md-3 control-label">Relationship</label>

                            <div class="col-md-6">
                                <input id="relationship" type="text" class="form-control" name="relationship" value="{{ $voter->relationship }}" required autofocus>

                                @if ($errors->has('relationship'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('relationship') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('n_id') ? ' has-error' : '' }}">
                            <label for="n_id" class="col-md-3 control-label">National ID</label>

                            <div class="col-md-6">
                                <input id="n_id" type="number" class="form-control" name="n_id" value="{{ $voter->n_id }}" required autofocus>

                                @if ($errors->has('n_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('n_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                            <label for="dob" class="col-md-3 control-label">Date of Birth</label>

                            <div class="col-md-6">
                                <div class="input-group">
                                <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                <input id="dob" type="text" class="form-control datepicker" name="dob" value="{{ $voter->dob }}" required >
                            </div>
                                @if ($errors->has('dob'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-3 control-label">Present Address</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{ $voter->address }}" required>

                                @if ($errors->has('address'))
                                    <span class="help-block">address
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-3 control-label">Phone No</label>

                            <div class="col-md-6">
                                <input id="phone" type="number" class="form-control" name="phone" value="{{ $voter->phone }}" required>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-3 control-label">Email Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $voter->email }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="avatar" class="col-md-3 control-label" >Picture</label>
                            <div class="col-md-6">
                                <img src="../../{{$voter->picture }}" width="100px" height="100px"/>
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

<style type="text/css">
    input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
</style>

@endsection
