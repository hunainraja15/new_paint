@extends('layouts.app')
@section('body')
<style>
    table td{
        padding: 10px 2px !important;
    }
    .date-submit-btn{
        justify-content: space-between;
    }
</style>
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">
                    Blast Board
                </h2>
            </div>
        </div>
    </div>
</div>
<div class="page-body">
    <div class="container-xl">
        <div class="card">
            <div class="card-body">
                <div id="table-default" class="table-responsive">
                    <form action="{{url('bosrd/blast/create')}}" method="post">
                        @csrf
                        <table class="table">
                            <thead>
                                <tr>
                                    <div class="d-flex date-submit-btn">
                                        <input type="date" class="form-control w-auto">
                                        <button type="submit" class="btn btn-primary date-submit-btn">Add Blast Board</button>
                                    </div>
                                </tr>
                                <tr>
                                    <th style="width:10%;"><button class="table-sort"  data-sort="sort-name">Employee</button></th>
                                    <th style="width:15%;"><button class="table-sort" data-sort="sort-city">Job</button></th>
                                    <th style="width:20%;"><button class="table-sort" data-sort="sort-type">Task</button></th>
                                    <th style="width:5%;"><button class="table-sort" data-sort="sort-score">Manual Hour</button></th>
                                    <th style="width:5%;"><button class="table-sort" data-sort="sort-score">Manual Min</button></th>
                                    <th style="width:7%;"><button class="table-sort" data-sort="sort-score">Start Hour</button></th>
                                    <th style="width:7%;"><button class="table-sort" data-sort="sort-date">Start Min</button></th>
                                    <th style="width:7%;"><button class="table-sort" data-sort="sort-quantity">Stop Hour</button></th>
                                    <th style="width:7%;"><button class="table-sort" data-sort="sort-progress">Stop Min</button></th>
                                    <th style="width:7%;"><button class="table-sort" data-sort="sort-progress">Time Total</button></th>
                                    <th style="width:7%;"><button class="table-sort" data-sort="sort-progress">Finished</button></th>
                                </tr>
                            </thead>
                            <tbody class="table-tbody">
                                <tr>
                                    <td class="sort-name">
                                        <select name="employee" id="" class="form-control"> 
                                            <option value="">Select Employee</option>
                                            <option value="Hunain Raja">Hunain Raja</option>
                                            <option value="Raja Hunain">Raja Hunain</option>
                                            <option value="Hunain Hmza">Hunain Hmza</option>
                                        </select>
                                    </td>
                                    <td class="sort-city">
                                        <select name="job" id="" class="form-control">
                                            <option value="VC-123">VC-123</option>
                                            <option value="VC-124">VC-124</option>
                                            <option value="VC-125">VC-125</option>
                                            <option value="VC-125">VC-125</option>
                                        </select>
                                    </td>
                                    <td class="sort-type">
                                        <select name="task" id="" class="form-control">
                                            <option value="MOVE / MOVER">MOVE / MOVER</option>
                                            <option value="DISASSEMBLE / QUITA PIESAS">DISASSEMBLE / QUITA PIESAS</option>
                                            <option value="WASH">WASH</option>
                                            <option value="SAND / LIJAR">SAND / LIJAR</option>
                                            <option value="BLAST">BLAST</option>
                                            <option value="TAPE / TAPAR">TAPE / TAPAR</option>
                                            <option value="COVER">COVER</option>
                                            <option value="BONDO">BONDO</option>
                                            <option value="PRIME">PRIME</option>
                                            <option value="SEAM">SEAM SEALER</option>
                                            <option value="PAINT">PAINT</option>
                                            <option value="TOUCH-UP">TOUCH-UP</option>
                                            <option value="UNMASK">UNMASK</option>
                                            <option value="REASSEMBLE / PONE PIESAS">REASSEMBLE / PONE PIESAS</option>
                                        </select>
                                    </td>
                                    
                                    <td class="sort-score"> 
                                        <select name="start_hour" id="" class="form-control manual_input start_hour" >
                                            <option value="">Select time</option>
                                            <option value="00">01:00</option>
                                            <option value="00">02:00</option>
                                            <option value="00">03:00</option>
                                            <option value="00">04:00</option>
                                            <option value="00">05:00</option>
                                            <option value="00">06:00</option>
                                            <option value="00">07:00</option>
                                            <option value="00">08:00</option>
                                            <option value="00">09:00</option>
                                            <option value="00">10:00</option>
                                            <option value="00">11:00</option>
                                            <option value="00">12:00</option>
                                        </select>
                                    </td>
                                    <td class="sort-date" data-date="1628122643">
                                        <select name="start_mins" id="" class="form-control manual_input start_minutes" >
                                            <option value="">Select time</option>
                                            <option value="00">0:00</option>
                                            <option value="15">0:15</option>
                                            <option value="30">0:30</option>
                                            <option value="45">0:45</option>
                                        </select>
                                    </td>
                                    <td class="sort-score"> 
                                        <select name="start_hour" id="" class="form-control time_inputs start_hour" >
                                            <option value="">Select time</option>
                                            <option value="01">01:00</option>
                                            <option value="02">02:00</option>
                                            <option value="03">03:00</option>
                                            <option value="04">04:00</option>
                                            <option value="05">05:00</option>
                                            <option value="06">06:00</option>
                                            <option value="07">07:00</option>
                                            <option value="08">08:00</option>
                                            <option value="09">09:00</option>
                                            <option value="10">10:00</option>
                                            <option value="11">11:00</option>
                                            <option value="12">12:00</option>
                                        </select>
                                    </td>
                                    <td class="sort-date" data-date="1628122643">
                                        <select name="start_mins" id="" class="form-control time_inputs start_minutes" >
                                            <option value="">Select time</option>
                                            <option value="00">0:00</option>
                                            <option value="15">0:15</option>
                                            <option value="30">0:30</option>
                                            <option value="45">0:45</option>
                                        </select>
                                    </td>
                                    <td class="sort-date" data-date="">
                                        <select name="stop_hour" id="" class="form-control stop_hour">
                                            <option value="01">01:00</option>
                                            <option value="02">02:00</option>
                                            <option value="03">03:00</option>
                                            <option value="04">04:00</option>
                                            <option value="05">05:00</option>
                                            <option value="06">06:00</option>
                                            <option value="07">07:00</option>
                                            <option value="08">08:00</option>
                                            <option value="09">09:00</option>
                                            <option value="10">10:00</option>
                                            <option value="11">11:00</option>
                                            <option value="12">12:00</option>
                                        </select>
                                    </td>
                                    <td class="sort-date calculate_time" data-date="">
                                        <select name="stop_mins" id="" class="form-control stop_minutes">
                                            <option value="00">0:00</option>
                                            <option value="15">0:15</option>
                                            <option value="30">0:30</option>
                                            <option value="45">0:45</option>
                                        </select>
                                    </td>
                                    <td class="sort-quantity">
                                        <input type="text" name="total_time" placeholder="Total time" readonly="" style="width: 100px" class="form-control total_time">
                                    </td>
                                    <td class="sort-progress">
                                        <select name="finished" id="" class="form-control">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('.manual_input').on('input', function(){
        var hasText = $(this).val().trim().length > 0;
        $('.time_inputs').each(function(index, element){
            $('.time_inputs').prop('disabled', hasText);
            
        });
    });
    $('.time_inputs').change(function(){
        var selectedValue = $(this).val();
        if(selectedValue != ""){
            $('.manual_input').each(function(index, element){
                $('.manual_input').prop('disabled', true);
                
            });
        }else{
            $('.manual_input').each(function(index, element){
                $('.manual_input').prop('disabled', false);
                
            });
        }
    });

    $('.calculate_time').change(function(){
        var startHour = $('.start_hour').val();
        var startMinutes = $('.start_minutes').val();
        var stopHour = $('.stop_hour').val();
        var stopMinutes = $('.stop_minutes').val();
        
        if (stopHour < startHour || (stopHour === startHour && stopMinutes < startMinutes)) {
            stopHour += 12; // Add 12 hours to stopHour
        }
        
        var start = new Date(0, 0, 0, startHour, startMinutes);
        var stop = new Date(0, 0, 0, stopHour, stopMinutes);
        var diff = stop - start;
        
        var hours = Math.floor(diff / 1000 / 60 / 60);
        diff -= hours * 1000 * 60 * 60;
        var minutes = Math.floor(diff / 1000 / 60);
        
        var time = hours + ':' + (minutes < 10 ? '0' : '') + minutes;
        
        $('.total_time').val(time)
        
        
        // console.log('Time Difference:', hours,minutes);
    })
</script>
@endsection
