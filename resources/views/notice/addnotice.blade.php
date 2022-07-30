@extends('notice.base')

@section('action-content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add new Member</div>
                <form class="form-horizontal" role="form" method="POST" action="{{ route('notice.store') }}" enctype="multipart/form-data">
                <div class="panel-body">
                    
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label class="col-md-3 control-label">Date</label>
                            <div class="col-md-6">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" value="{{ old('date') }}" name="date" class="form-control pull-right datepicker" id="date" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-3 control-label">Description</label>

                            <div class="col-md-6">
                                <textarea id="title" type="text" style="width: 100%;" name="title" placeholder="Write Short Description Here..." value="{{ old('title') }}" required></textarea>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="file" class="col-md-3 control-label" >Upload File</label>
                            <div class="col-md-6">
                                <input type="file" id="file" name="file" required >
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
