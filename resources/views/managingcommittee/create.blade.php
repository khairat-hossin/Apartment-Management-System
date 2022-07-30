@extends('managingcommittee.base')

@section('action-content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add new Member</div>
                <form class="form-horizontal" role="form" method="POST" action="{{ route('managingcommittee.store') }}" enctype="multipart/form-data">
                <div class="panel-body">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="col-md-3 control-label">Flat No</label>
                            <div class="col-md-6">
                                <select class="form-control js-flat_no" name="flat_no" required autofocus>
                                    <option value="">Please select your flat no</option>
                                    @foreach ($flats as $flats)
                                        <option style="align-content: center;" value="{{ $flats['id'] }}">{{ $flats['flat_no'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-3 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" pattern="[a-zA-Z ]+[a-zA-Z ]+" maxlength="50" class="form-control" name="name" value="{{ old('name') }}" required>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 
                        <div class="form-group{{ $errors->has('designation') ? ' has-error' : '' }}">
                            <label for="designation" class="col-md-3 control-label">Designation</label>

                            <div class="col-md-6">
                                <input id="designation" type="text" pattern="[a-zA-Z ]+[a-zA-Z ]+" maxlength="50" class="form-control" name="designation" value="{{ old('designation') }}" required>

                                @if ($errors->has('designation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('designation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('voter_id') ? ' has-error' : '' }}">
                            <label for="voter_id" class="col-md-3 control-label">Voter no</label>

                            <div class="col-md-6">
                                <input id="voter_id" type="text" placeholder="199728640003" pattern="[0-9]+" maxlength="20" class="form-control" name="voter_id" value="{{ old('voter_id') }}" required>

                                @if ($errors->has('voter_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('voter_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('mobile_no') ? ' has-error' : '' }}">
                            <label for="mobile_no" class="col-md-3 control-label">Mobile</label>

                            <div class="col-md-6">
                                <input id="mobile_no" type="number" class="form-control" name="mobile_no" placeholder="1751767350" max="9999999999" value="{{ old('mobile_no') }}" required>

                                @if ($errors->has('mobile_no'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobile_no') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email_id') ? ' has-error' : '' }}">
                            <label for="email_id" class="col-md-3 control-label">Email Id</label>

                            <div class="col-md-6">
                                <input id="email_id" type="email" class="form-control" name="email_id" value="{{ old('email_id') }}" required>

                                @if ($errors->has('email_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                       <div class="form-group{{ $errors->has('present_add') ? ' has-error' : '' }}">
                            <label for="present_add" class="col-md-3 control-label">Address</label>

                            <div class="col-md-6">
                                <input id="present_add" type="text" class="form-control" name="present_add" value="{{ old('present_add') }}" required>

                                @if ($errors->has('present_add'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('present_add') }}</strong>
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
