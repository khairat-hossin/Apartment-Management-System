@extends('apartment-mgmt.base')

@section('action-content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update Apartment</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="post" action="{{ route('apartment-mgmt.update', $apartments->id) }}" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PATCH">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group{{ $errors->has('flat_no') ? ' has-error' : '' }}">
                            <label for="flat_no" class="col-md-4 control-label">Flat No</label>

                            <div class="col-md-6">
                                <input id="flat_no" type="text" class="form-control" name="flat_no" value="{{ $apartments->flat_no }}" required autofocus>

                                @if ($errors->has('flat_no'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('flat_no') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('flat_size') ? ' has-error' : '' }}">
                            <label for="flat_size" class="col-md-4 control-label">Flat Size</label>
                            <div class="col-md-6">
                                <input id="flat_size" type="text" class="form-control" name="flat_size" value="{{ $apartments->flat_size }}" required>

                                @if ($errors->has('flat_size'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('flat_size') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('car_park') ? ' has-error' : '' }}">
                            <label for="car_park" class="col-md-4 control-label">Car Park</label>

                            <div class="col-md-6">
                                <input id="car_park" type="text" class="form-control" name="car_park" value="{{ $apartments->car_park }}" required>

                                @if ($errors->has('car_park'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('car_park') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('note') ? ' has-error' : '' }}">
                            <label for="note" class="col-md-4 control-label">Notes</label>

                            <div class="col-md-6">
                                <input id="note" type="text" class="form-control" name="note" value="{{ $apartments->note }}" required>

                                @if ($errors->has('note'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('note') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ URL::previous() }}" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i> Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
