@extends('voter-information.base')
@section('action-content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" align="center">Voter Information</div>

                <form class="form-horizontal" role="form" method="POST" action="{{ route('voter-information.store') }}" enctype="multipart/form-data">
                <div class="panel-body">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('voter_id') ? ' has-error' : '' }}">
                            <label for="voter_id" class="col-md-3 control-label">Voter ID</label>

                            <div class="col-md-6">
                                <input id="voter_id" type="number" class="form-control" name="voter_id" value="{{ old('voter_id') }}" required autofocus>

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
                                <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus>

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
                                <input id="mid_name" type="text" class="form-control" name="mid_name" value="{{ old('mid_name') }}" required autofocus>

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
                                <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required>

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
                                <select class="form-control" name="flat_no" required>
                                    <option value="">Please select your flat no</option>
                                    @foreach ($flats as $flats)
                                        <option style="align-content: center;" value="{{ $flats['id'] }}">{{ $flats['flat_no'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('relationship') ? ' has-error' : '' }}">
                            <label for="relationship" class="col-md-3 control-label">Relationship</label>

                            <div class="col-md-6">
                                <input id="relationship" type="text" class="form-control" name="relationship" value="{{ old('relationship') }}" required>

                                @if ($errors->has('relationship'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('relationship') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                       
                        <div class="form-group{{ $errors->has('n_id') ? ' has-error' : '' }}">
                            <label for="n_id" class="col-md-3 control-label">National Id</label>

                            <div class="col-md-6">
                                <input id="n_id" type="number" class="form-control" name="n_id" value="{{ old('n_id') }}" required>

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
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" value="{{ old('birthdate') }}" name="birthdate" class="form-control pull-right datepicker" id="birthDate" required>
                                </div>
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
                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-3 control-label">Mobile(+880)</label>

                            <div class="col-md-6">
                                <input id="phone" type="number" class="form-control" name="phone" value="{{ old('phone') }}" required>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-3 control-label">Email Id</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

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