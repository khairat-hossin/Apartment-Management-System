@extends('expences.base')
@section('action-content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" align="center">Expences</div>
                <form class="form-horizontal" role="form" method="POST" action="{{ route('expences.store') }}" enctype="multipart/form-data">
                <div class="panel-body">
                    
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exp_date" class="col-md-3 control-label">Expence Date</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                <input type="text" name="exp_date" class="form-control datepicker" id="exp_date" required>
                                </div>
                        </div>
                    </div>
                        <div class="form-group{{ $errors->has('exp_amount') ? ' has-error' : '' }}">
                            <label for="exp_amount" class="col-md-3 control-label">Amount</label>

                            <div class="col-md-6">
                                <input id="exp_amount" type="number" class="form-control" name="exp_amount" value="{{ old('exp_amount') }}" required/>

                                @if ($errors->has('exp_amount'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('exp_amount') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                       <div class="form-group{{ $errors->has('exp_details') ? ' has-error' : '' }}">
                            <label for="exp_details" class="col-md-3 control-label">Details</label>

                            <div class="col-lg-6">
                                <textarea id="exp_details" rows="5" cols="50" class="form-control" name="exp_details" value="{{ old('exp_amount') }}" required></textarea>

                                @if ($errors->has('exp_details'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('exp_details') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 
                        <div class="form-group{{ $errors->has('expence_receiver') ? ' has-error' : '' }}"">
                            <label class="col-md-3 control-label">Expenced By</label>
                            <div class="col-md-6">
                                <select class="form-control " name="expence_receiver" id="expence_receiver" required>
                                    <option value="">Select Receiver</option>
                                    @foreach ($employees as $employee)
                                        <option value="{{ $employee['id'] }}">{{$employee['firstname']}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('exp_auth_by') ? ' has-error' : '' }}">
                            <label for="exp_auth_by" class="col-md-3 control-label">Authorized By</label>

                            <div class="col-md-6">
                                 <select class="form-control " name="expence_auth" id="expence_auth" required>
                                    <option value="">Select Authorizer</option>
                                    @foreach ($committee as $committee)
                                        <option value="{{ $committee['id'] }}">{{$committee['name']}}</option>
                                    @endforeach
                                </select>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>

<style type="text/css">
    input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
</style>

@endsection

