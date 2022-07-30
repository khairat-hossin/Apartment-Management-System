@extends('billmanagement.base')
@section('action-content')
<section class="contain">
	<div class="container" id="printAble">
        <form id="mbill" class="form-horizontal" method="POST" action=" {{ route('billmanagement.store') }} " enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="row">
        		<div class="col-xs-12">
                    <div class="panel panel-info">
        				<div class="panel-heading" align="center">Monthly Bill Copy</div>
        				<div class="panel-body">
                            <div class="col-xs-8">
                                <div class="col-xs-6">
                                   <!--Payment Date-->
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Pay date</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="pay_date" class="datepicker" id="pay_date" placeholder="Select Date" required>
                                        </div>
                                    </div>

                                    <!--billing month-->
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Month(s)</label>
                                        <div class="col-sm-6">
                                            <select class="" name="billing_month" id="billing_month" required>
                                                <option value="">Select Month</option>
                                                    @foreach ($months as $months)
                                                    <option value="{{ $months['id'] }}">{{$months['month_name']}}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <!--Billing Year-->
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Year</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="billing_year" placeholder="Select Year" class="yearList" required> 
                                        </div>
                                    </div> 
                                </div> 

                                <div class="col-xs-6" >
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Flat No</label>
                                        <div class="col-sm-6" id="fields" >
                                            <select class="" name="flat_no" id="flat_no" required>
                                                <option value="">Select Flat(s)</option>
                                                @foreach ($flats as $flats)
                                                <option value="{{ $flats['id'] }}">{{ $flats['flat_no'] }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Paid By</label>
                                        <div class="col-sm-6">
                                            <input type="text" placeholder="Paid by" name="paid_by" id="paid_by" class="" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Received By</label>
                                        <div class="col-sm-6">
                                            <select name="received_by" class="" required>
                                                <option value="">Select Receiver</option>
                                                @foreach ($employees as $key => $employee)
                                                <option value="{{ $key }}">{{ $employee }}</option>
                                                @endforeach
                                            </select> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label class="col-md-5 control-label">Service Charge</label>
                                        <div class="col-md-3">
                                            <input type="number" value="0" name="service_charge" id="service_charge" min=0>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-5 control-label">Mosque Purpose</label>
                                        <div class="col-md-3">
                                            <input type="number" value="0" name="mosjid_bill" id="mosjid_bill" min=0>
                                        </div>
                                    </div> 
                                    <div class="form-group">
                                        <label class="col-md-5 control-label">Commercial Space Service Charge</label>
                                        <div class="col-md-3">
                                            <input type="number" value="0" name="com_space_service_charge" id="com_space_service_charge" min=0 disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-5 control-label">Community Center</label>
                                        <div class="col-md-3">
                                            <input type="number" value="0" name="community_charge" id="community_charge" min=0 disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-5 control-label">Emergency Fund</label>
                                        <div class="col-md-3">
                                            <input type="number" value="0" name="emergency_fund" id="emergency_fund" min=0 disabled>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-5 control-label">Development Fund</label>
                                        <div class="col-md-3">
                                            <input type="number" value="0" name="developmet_fund" id="developmet_fund" min=0 disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-5 control-label">Lift Charge</label>
                                        <div class="col-md-3">
                                            <input type="number" value="0" name="lift_charge" id="lift_charge" min=0 disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-5 control-label">Others</label>
                                        <div class="col-md-3">
                                            <input type="number" value="0" name="others" id="others" min=0 disabled>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label class="col-md-5 control-label">Total Amount</label>
                                        <div class="col-md-3">
                                            <input type="number" value="0" name="total_amount" id="total_amount">
                                        </div>
                                    </div>

                                    <!-- <div class="form-group">
                                        <div class="col-md-3 col-md-offset-4" align="right" >
                                            <button type="submit" class="btn btn-primary">Add</button>
                                        </div> 
                                    </div> -->
                                    <div class="form-group">
                                        <center>
                                            <button type="submit" class="btn btn-primary">Add</button>
                                        <a href="{{ URL::previous() }}" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i> Cancel</a>
                                        </center>
                                        
                                        <!-- <div class="col-md-4"></div>
                                        <div class="col-md-6">
                                            <div class="col-md-3" style="text-align: right;">
                                                <button type="submit" class="btn btn-primary">Add</button>
                                            </div>
                                            <div class="col-md-8" style="text-align: left;">
                                                <a href="{{ URL::previous() }}" class="btn btn-danger"><i class="fa fa-arrow-circle-left"></i> Cancel</a>
                                            </div>
                                        </div> -->
                                    </div>

                                </div>
                            </div> 
                        </div>

                    </div>
                </div>
            </div> 
        </form>
    </div> 
</section>

<style type="text/css">
    input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
</style> 

<script type="text/javascript">
 $(document).ready(function () {

    $('.datepicker').datepicker();
    $(".yearList").datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years"
    }).on('changeDate', function(e){
        $(this).datepicker('hide');
    }); 

    var service_charge= parseInt($('#service_charge').val(),10);
    var mosjid_bill= parseInt($('#mosjid_bill').val(),10);
    $('#total_amount').val(total_amount);


    $('#service_charge').change(function(){
        var service_charge= parseInt($('#service_charge').val(),10);
        var mosjid_bill= parseInt($('#mosjid_bill').val(),10);   
        total_amount= service_charge + mosjid_bill;
        $('#total_amount').val(total_amount);
    });
    $('#mosjid_bill').change(function(){
        var service_charge= parseInt($('#service_charge').val(),10);
        var mosjid_bill= parseInt($('#mosjid_bill').val(),10);   
        total_amount= service_charge + mosjid_bill;
        $('#total_amount').val(total_amount);
    });

    $('form input').on('keypress', function(e) {
      return e.which !== 13;
    });

 });

</script> 
@endsection