<?php

use function Livewire\Volt\{state,mount};

use App\Models\chiller;

state([
    'chiller_id',
    'loading',
    'intial_t',
    'intial',
    'dp',
    'dt',
    'sp',
    'st',
    'ci',
    'co',
    'rt',
    'c_load',
    'status',
    'ld',
    'condensor_switch',
    'condensor_rpm',
    'condensor_speed'
]);

mount(function($id){


    $this->chiller_id = $id;
    $this->loading = true;

    $this->intial = -135;
    $this->intial_t = -115;
    $this->dp =$this->intial + 10;
    $this->dt = -135;
    $this->sp = -135;
    $this->st = -135;
    $this->ci = -135;
    $this->co = -135;
    $this->c = 0;
    $this->c_load =20;
    $this->ld = [0, 20, 40, 60, 80, 100];
    $this->condensor_switch=[];
    $this->condensor_rpm=[];
    $this->condensor_speed=[0,0,0,0];
    $this->status = 1;

    $this->load();
    $this->set();



});

$read =function(){
    $this->load($this->chiller_id);
    $this->set();
    $this->get();
};

$load = function(){

    if($this->status){

        for ($i=0; $i < 4; $i++) {
            array_push($this->condensor_switch ,1);
            array_push( $this->condensor_rpm ,800);
        }
        sleep(2);
        $a = rand(1,5);

        chiller::where('id',1)->update([
            'compresor_load'=>$this->ld[$a],
        ]);
            $this->c_load = $this->ld[$a];
    }
    else{
        for ($i=0; $i < 4; $i++) {
            unset($this->condensor_switch[$i]);
            unset($this->condensor_rpm[$i]);
        }

    }
};
$set = function(){
    $data = chiller::find($this->chiller_id);
    if ($this->status == 1) {


        if ($this->c_load == 0) {

            chiller::where('id',$this->chiller_id)->update([
                'discharge_temp'	    => 32,
                'discharge_pressure'	=> 120,
                'suction_temp'	        => 32,
                'suction_pressure'	    => 120,
                'chw_in_temp'	        => 32,
                'chw_out_temp'	        => 32,
                'room_temp'             => 30,
            ]);



        } elseif ($this->c_load == 20) {

            chiller::where('id',$this->chiller_id)->update([
                    'discharge_temp'	    => 40,
                    'discharge_pressure'	=> 150,
                    'suction_temp'	        => 30,
                    'suction_pressure'	    => 100,
                    'chw_in_temp'	        => 20,
                    'chw_out_temp'	        => 25,
                    'room_temp'             => 27,
            ]);
            for ($i=0; $i < 4; $i++) {
                $this->condensor_speed[$i] = .8;
            }


        } elseif ($this->c_load == 40) {

            chiller::where('id',$this->chiller_id)->update([
                'discharge_temp'	    => 50,
                'discharge_pressure'	=> 150,
                'suction_temp'	        => 28,
                'suction_pressure'	    => 80,
                'chw_in_temp'	        => 15,
                'chw_out_temp'	        => 20,
                'room_temp'             => 24,
            ]);

            for ($i=0; $i < 4; $i++) {
                $this->condensor_speed[$i] = .6;
            }

        } elseif ($this->c_load == 60) {

            chiller::where('id',$this->chiller_id)->update([
                'discharge_temp'	    => 60,
                'discharge_pressure'	=> 180,
                'suction_temp'	        => 26,
                'suction_pressure'	    => 60,
                'chw_in_temp'	        => 12,
                'chw_out_temp'	        => 17,
                'room_temp'             => 22,
            ]);

            for ($i=0; $i < 4; $i++) {
                $this->condensor_speed[$i] = .4;
            }


        } elseif ($this->c_load == 80) {

            chiller::where('id',$this->chiller_id)->update([
                'discharge_temp'	    => 70,
                'discharge_pressure'	=> 230,
                'suction_temp'	        => 24,
                'suction_pressure'	    => 40,
                'chw_in_temp'	        => 10,
                'chw_out_temp'	        => 15,
                'room_temp'             => 19,
            ]);
            for ($i=0; $i < 4; $i++) {
                $this->condensor_speed[$i] = .2;
            }

        } elseif ($this->c_load == 100) {

            chiller::where('id',$this->chiller_id)->update([
                'discharge_temp'	    => 80,
                'discharge_pressure'	=> 260,
                'suction_temp'	        => 22,
                'suction_pressure'	    => 30,
                'chw_in_temp'	        => 8,
                'chw_out_temp'	        => 13,
                'room_temp'             => 17,
            ]);

            for ($i=0; $i < 4; $i++) {
                $this->condensor_speed[$i] = .1;
            }

        }

    }
    else{
        $this->c_load = 0;
        chiller::where('id',$this->chiller_id)->update([
            'compresor_load'        => 0,
            'discharge_temp'	    => 30,
            'discharge_pressure'	=> 80,
            'suction_temp'	        => 30,
            'suction_pressure'	    => 80,
            'chw_in_temp'	        => 30,
            'chw_out_temp'	        => 30,
            'room_temp'             => 30,
        ]);
        // $this->co = $this->intial;

    }
};
$get = function(){
    $data = chiller::find($this->chiller_id);

    $this->dp = $this->intial + $data->discharge_pressure ;
    $this->dt = $this->intial +$data->discharge_temp ;
    $this->st = $this->intial +$data->suction_temp ;
    $this->sp = $this->intial + $data->suction_pressure ;
    $this->ci = $this->intial +$data->chw_in_temp;
    $this->co = $this->intial +   $data->chw_out_temp;
    $this->rt = $data->room_temp;
    $this->status = $data->status;

    $this->loading = false;
};
$chiller_switch = function(){
    $data = chiller::find($this->chiller_id);

        $a = !$data->status;

        if( $a ==1  ){
            for ($i=0; $i < 4; $i++) {
                array_push($this->condensor_switch ,1);
                array_push( $this->condensor_rpm ,800);
            }
            sleep(2);
            chiller::where('id',$this->chiller_id)->update([
                'status'=> $a,
            ]);

        }
        else{
            chiller::where('id',$this->chiller_id)->update([
                'status'=> $a,
            ]);
            sleep(1);
            for ($i=0; $i < 4; $i++) {
                unset($this->condensor_switch[$i]);
                unset($this->condensor_rpm[$i]);
            }
        }


        $this->status = $a;
};





//

?>

<div>
    <div class="row" wire:poll='read'>
        <div class="col-12 mt-3">
            <div class="card  ">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div style="width: 80%">
                            <div class="chart-item">
                                <label for="">
                                    Compressor Load: {{ $c_load }} %
                                </label>
                                <label for="">
                                Room Temp: {{ $rt }} &deg;C
                                </label>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch1" {{$status ? 'checked': ''}}  wire:change='chiller_switch'>
                                    {{-- <input type="checkbox" data-plugin="switchery" data-color="#1bb99a" data-secondary-color="#ff5d48" /> --}}
                                    <label class="custom-control-label text-{{$status ? 'danger': 'success'}}" for="customSwitch1">{{$status ? 'On': 'Off'}}</label>
                                </div>



                            </div>
                        </div>
                        <a href="{{route('bms.dashboard')}}" wire:navigate class="btn btn-primary btn-sm " style="height: 32px">Back</a>
                    </div>

                </div>

            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-2 mt-3"  >
            <div class="card">
                <div class="card-body" >
                    <div class="text-center" dir="ltr">

                        <div class="guage_holder">
                        <h5>D.P</h5>

                        <div class="guage">
                            <div class="base" style="transform: rotate({{ $dp . 'deg' }});"></div>
                            <img src="{{ asset('web/assets/images/gauge-hi.png') }}" alt="" srcset="">
                        </div>
                        </div>

                        <h6 class="text-muted mt-2">Pressure: {{$dp +135}} psi</h6>
                    </div> <!-- end .text-center -->
                </div>
            </div> <!-- end card -->

        </div><!-- end col-->
        <div class="col-12 col-md-6 col-xl-2 mt-3"  >
            <div class="card">
                <div class="card-body" >
                    <div class="text-center" dir="ltr">

                        <div class="guage_holder">
                        <h5>D.T</h5>

                        <div class="guage">
                            <div class="base" style="transform: rotate({{ $dt . 'deg' }});"></div>
                            <img src="{{ asset('web/assets/images/gauge-hi.png') }}" alt="" srcset="">
                        </div>
                        </div>

                        <h6 class="text-muted mt-2">Temperature: {{$dt +135}} &deg;C</h6>
                    </div> <!-- end .text-center -->
                </div>
            </div> <!-- end card -->

        </div><!-- end col-->
        <div class="col-12 col-md-6 col-xl-2 mt-3"  >
            <div class="card">
                <div class="card-body" >
                    <div class="text-center" dir="ltr">

                        <div class="guage_holder">
                        <h5>S.P</h5>

                        <div class="guage">
                            <div class="base" style="transform: rotate({{ $sp . 'deg' }});"></div>
                            <img src="{{ asset('web/assets/images/gauge-hi.png') }}" alt="" srcset="">
                        </div>
                        </div>

                        <h6 class="text-muted mt-2">Pressure: {{$sp +135}} psi</h6>
                    </div> <!-- end .text-center -->
                </div>
            </div> <!-- end card -->

        </div><!-- end col-->
        <div class="col-12 col-md-6 col-xl-2 mt-3"  >
            <div class="card">
                <div class="card-body" >
                    <div class="text-center" dir="ltr">

                        <div class="guage_holder">
                        <h5>S.T</h5>

                        <div class="guage">
                            <div class="base" style="transform: rotate({{ $st . 'deg' }});"></div>
                            <img src="{{ asset('web/assets/images/gauge-hi.png') }}" alt="" srcset="">
                        </div>
                        </div>

                        <h6 class="text-muted mt-2">Temperature: {{$st +135}} &deg;C</h6>
                    </div> <!-- end .text-center -->
                </div>
            </div> <!-- end card -->

        </div><!-- end col-->
        <div class="col-12 col-md-6 col-xl-2 mt-3"  >
            <div class="card">
                <div class="card-body" >
                    <div class="text-center" dir="ltr">

                        <div class="guage_holder">
                        <h5>C.W.I</h5>

                        <div class="guage">
                            <div class="base" style="transform: rotate({{ $co . 'deg' }});"></div>
                            <img src="{{ asset('web/assets/images/gauge-hi.png') }}" alt="" srcset="">
                        </div>
                        </div>

                        <h6 class="text-muted mt-2">Temperature: {{$co +135}} &deg;C</h6>
                    </div> <!-- end .text-center -->
                </div>
            </div> <!-- end card -->

        </div><!-- end col-->
        <div class="col-12 col-md-6 col-xl-2 mt-3"  >
            <div class="card">
                <div class="card-body" >
                    <div class="text-center" dir="ltr">

                        <div class="guage_holder">
                        <h5>C.W.O</h5>

                        <div class="guage">
                            <div class="base" style="transform: rotate({{ $ci . 'deg' }});"></div>
                            <img src="{{ asset('web/assets/images/gauge-hi.png') }}" alt="" srcset="">
                        </div>
                        </div>

                        <h6 class="text-muted mt-2">Temperature: {{$ci +135}} &deg;C</h6>
                    </div> <!-- end .text-center -->
                </div>
            </div> <!-- end card -->

        </div><!-- end col-->
    </div>

</div>
