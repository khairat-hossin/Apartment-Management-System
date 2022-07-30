@extends('apartment-mgmt.base')

@section('action-content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center;">Apartment Information</div>
                <form class="form-horizontal" role="form" method="POST" action="{{ route('apartment-mgmt.store') }}" enctype="multipart/form-data">
                <div class="panel-body">
                    
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('flat_no') ? ' has-error' : '' }}">
                            <label for="flat_no" class="col-md-3 control-label">Flat No</label>

                            <div class="col-md-6">
                                <input id="flat_no" type="text" class="form-control" pattern="[A-Z][0-9]+" maxlength="10" name="flat_no" placeholder="A1" required autofocus>

                                @if ($errors->has('flat_no'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('flat_no') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('flat_size') ? ' has-error' : '' }}">
                            <label for="flat_size" class="col-md-3 control-label">Flat Size</label>

                            <div class="col-md-6">
                                <input id="flat_size" type="number" class="form-control" name="flat_size" placeholder="Sqare ft." value="" required>

                                @if ($errors->has('flat_size'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('flat_size') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('car_park') ? ' has-error' : '' }}">
                            <label for="car_park" class="col-md-3 control-label">Car Park</label>

                            <div class="col-md-6">
                                <input id="car_park" type="text" pattern="[A-Z][0-9]+" maxlength="10"  class="form-control" name="car_park" placeholder="P1" required>

                                @if ($errors->has('car_park'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('car_park') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('note') ? ' has-error' : '' }}">
                            <label for="note" class="col-md-3 control-label">Notes</label>

                            <div class="col-md-6">
                                <textarea id="note" type="text" maxlength="1000" class="form-control" name="note" value="" required></textarea>

                                @if ($errors->has('note'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('note') }}</strong>
                                    </span>
                                @endif
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
