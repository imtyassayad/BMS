<?php

use function Livewire\Volt\{state,mount};

use App\Models\chiller;
use App\Models\ahu;


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
    'condensor_speed',
    'ahu_speed',
    'ahu_status',
    'ahu_water_in',
    'ahu_air_in',
    'ahu_water_out',
    'ahu_air_out',
]);

mount(function($id){


    $this->chiller_id = $id;
    // $this->loading = 1;

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
    $this->ahu_speed =0;
    $this->ahu_status = 0;
    $this->status = 0;
    $this->ahu_water_in = 30;
    $this->ahu_water_out = 30;
    $this->ahu_air_in = 30;
    $this->ahu_air_out = 30;


    $this->load();
    $this->set();
    $this->get();

    // $a = ahu::where('chiller_id',$this->chiller_id)->first();
    // $this->ahu_status = $a->status;
    // $c = chiller::find($this->chiller_id);
    // $this->status = $c->status;

});

$read =function(){
    $this->load($this->chiller_id);
    $this->set();
    $this->get();
    $this->speed_ahu();

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

    if (!$this->ahu_status ==1) {
        chiller::where('id',$this->chiller_id)->update([
            'status'=> 0,
        ]);
        $this->status = 0;

        for ($i=0; $i < 4; $i++) {

            unset($this->condensor_switch[$i]);
            unset($this->condensor_rpm[$i]);
        }
        return false;
    };
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

            // updating Chiller
            chiller::where('id',$this->chiller_id)->update([
                    'discharge_temp'	    => 40,
                    'discharge_pressure'	=> 150,
                    'suction_temp'	        => 30,
                    'suction_pressure'	    => 100,
                    'chw_in_temp'	        => 20,
                    'chw_out_temp'	        => 25,
                    'room_temp'             => 27,
            ]);


            // updating ahu
            ahu::where('chiller_id', $this->chiller_id)->update([
                'water_in_temp' => 25,
                'water_out_temp' => 30,
                'air_in_temp' => 30,
                'air_out_temp' => 25,
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
            ahu::where('chiller_id', $this->chiller_id)->update([
               'water_in_temp' => 22,
               'water_out_temp' => 27,
               'air_in_temp' => 24,
               'air_out_temp' => 20,
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
            ahu::where('chiller_id', $this->chiller_id)->update([
                'water_in_temp' => 19,
                'water_out_temp' => 24,
                'air_in_temp' => 24,
                'air_out_temp' => 19,
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
            ahu::where('chiller_id', $this->chiller_id)->update([
                'water_in_temp' => 17,
                'water_out_temp' => 22,
                'air_in_temp' => 22,
                'air_out_temp' => 17,
            ]);

            for ($i=0; $i < 4; $i++) {
                $this->condensor_speed[$i] = .8;
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
            ahu::where('chiller_id', $this->chiller_id)->update([
                'water_in_temp' => 15,
                'water_out_temp' => 20,
                'air_in_temp' => 19,
                'air_out_temp' => 14,
            ]);


            for ($i=0; $i < 4; $i++) {
                $this->condensor_speed[$i] = .9;
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

    $ahu =   ahu::where('chiller_id', $this->chiller_id)->first();

    $this->ahu_water_in = $ahu->water_in_temp;
    $this->ahu_water_out = $ahu->water_out_temp;
    $this->ahu_air_in = $ahu->air_in_temp;
    $this->ahu_air_out = $ahu->air_out_temp;

    $this->loading = false;
};
$ahu_switch = function(){


    $ahu = ahu::where('chiller_id', $this->chiller_id)->first();

    $s = !$ahu->status;
    $this->ahu_status = $s;



    if ($s == 1) {
        $this->ahu_speed = .2;

        ahu::where('chiller_id', $this->chiller_id)->update([
            'status' => $s,
        ]);
    }
    else{

        $this->ahu_speed = 0;

        ahu::where('chiller_id', $this->chiller_id)->update([
            'status' => $s,
        ]);

    };


};
$chiller_switch = function(){


        if (!$this->ahu_status) {
            return false;
        };
        $this->loading = 1;
        $data = chiller::find($this->chiller_id);

        $a = !$data->status;
        $this->status = $a;

        if( $a ==1  ){

            for ($i=0; $i < 4; $i++) {
                array_push($this->condensor_switch ,1);
                array_push( $this->condensor_rpm ,800);
            }

            chiller::where('id',$this->chiller_id)->update([
                'status'=> $a,
            ]);

        }
        else{

            chiller::where('id',$this->chiller_id)->update([
                'status'=> $a,
            ]);

            for ($i=0; $i < 4; $i++) {

                unset($this->condensor_switch[$i]);
                unset($this->condensor_rpm[$i]);
            }
        }



        $this->loading = 0;
};
$speed_ahu = function(){
    if ($this->rt > 25 and $this->rt  <= 30) {
       $this->ahu_speed = 10;
    }
    if ($this->rt > 20 and $this->rt  <= 25) {
        $this->ahu_speed = 40;
    }
    if ($this->rt > 15 and $this->rt  <= 20) {
        $this->ahu_speed = 60;
    }
    if ($this->rt > 10 and $this->rt  <= 15) {
        $this->ahu_speed = 90;
    }
};


?>

<div wire:poll.visible = 'read'>
    @if($loading ==1 )
    <div class="loading_state" >
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <div class="spinner-border avatar-lg text-primary m-2" role="status"></div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
    @endif
    <div class="row" >
        <div class="col-12 mt-3">
            <div class="card  ">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div style= "width: 80%" >
                            <div class="d-flex justify-content-around" >
                                <h4 >  Compressor Load: {{ $c_load }} %  </h4>
                                <h4 for=""> Room Temp: {{ $rt }} &deg;C </h4>
                                <div class="button" wire:click='chiller_switch' >
                                    <img src="{{asset('web/assets/images/'. ($status ==1 ?'on':'off').".png")}}" alt="" srcset="">
                                </div>
                                <div class="button" wire:click='ahu_switch' >
                                    <img src="{{asset('web/assets/images/'. ($ahu_status ==1 ?'on':'off').".png")}}" alt="" srcset="">
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
    <div class="row" >
        <div class="col-12 col-md-6 col-xl-2 mt-3"  >
            <div class="card">
                <div class="card-body" >
                    <div class="text-center" dir="ltr">
                        <div class="guage_holder">
                            <h5> Cond. 1</h5>
                            <div class="fan">
                                <img style="animation:{{array_key_exists(0, $condensor_switch) ? 'startfan '.  $condensor_speed[0].'s infinite linear' :''}};" class="fan_img" src="{{ asset('web/assets/images/condensor_fan.png') }}" alt="" srcset="">
                            </div>
                        </div>
                        <h6 class="text-muted mt-2">R.P.M:  {{array_key_exists(0, $condensor_rpm) ? ($condensor_speed[0] == .1 ? '1500':($condensor_speed[0] == .2 ? '1200':($condensor_speed[0] == .4 ?'1000':($condensor_speed[0] == .6 ?'950':($condensor_speed[0] == .6 ?'800':($condensor_speed[0] == .8 ?'750':'')))))) :'0'}} rpm</h6>
                    </div> <!-- end .text-center -->
                </div>
            </div> <!-- end card -->

        </div><!-- end col-->
        <div class="col-12 col-md-6 col-xl-2 mt-3"  >
            <div class="card">
                <div class="card-body" >
                    <div class="text-center" dir="ltr">
                        <div class="guage_holder">
                            <h5> Cond. 1</h5>
                            <div class="fan">
                                <img style="animation:{{array_key_exists(1, $condensor_switch) ? 'startfan '.  $condensor_speed[1].'s infinite linear' :''}};" class="fan_img" src="{{ asset('web/assets/images/condensor_fan.png') }}" alt="" srcset="">
                            </div>
                        </div>
                        <h6 class="text-muted mt-2">R.P.M:  {{array_key_exists(1, $condensor_rpm) ? ($condensor_speed[1] == .1 ? '1500':($condensor_speed[1] == .2 ? '1200':($condensor_speed[1] == .4 ?'1000':($condensor_speed[1] == .6 ?'950':($condensor_speed[1] == .6 ?'800':($condensor_speed[1] == .8 ?'750':'')))))) :'0'}} rpm</h6>
                    </div> <!-- end .text-center -->
                </div>
            </div> <!-- end card -->

        </div><!-- end col-->
        <div class="col-12 col-md-6 col-xl-2 mt-3"  >
            <div class="card">
                <div class="card-body" >
                    <div class="text-center" dir="ltr">
                        <div class="guage_holder">
                            <h5> Cond. 1</h5>
                            <div class="fan">
                                <img style="animation:{{array_key_exists(2, $condensor_switch) ? 'startfan '.  $condensor_speed[2].'s infinite linear' :''}};" class="fan_img" src="{{ asset('web/assets/images/condensor_fan.png') }}" alt="" srcset="">
                            </div>
                        </div>
                        <h6 class="text-muted mt-2">R.P.M:  {{array_key_exists(2, $condensor_rpm) ? ($condensor_speed[2] == .1 ? '1500':($condensor_speed[2] == .2 ? '1200':($condensor_speed[2] == .4 ?'1000':($condensor_speed[2] == .6 ?'950':($condensor_speed[2] == .6 ?'800':($condensor_speed[2] == .8 ?'750':'')))))) :'0'}} rpm</h6>
                    </div> <!-- end .text-center -->
                </div>
            </div> <!-- end card -->

        </div><!-- end col-->
        <div class="col-12 col-md-6 col-xl-2 mt-3"  >
            <div class="card">
                <div class="card-body" >
                    <div class="text-center" dir="ltr">
                        <div class="guage_holder">
                            <h5> Cond. 1</h5>
                            <div class="fan">
                                <img style="animation:{{array_key_exists(3, $condensor_switch) ? 'startfan '.  $condensor_speed[3].'s infinite linear' :''}};" class="fan_img" src="{{ asset('web/assets/images/condensor_fan.png') }}" alt="" srcset="">
                            </div>
                        </div>
                        <h6 class="text-muted mt-2">R.P.M:  {{array_key_exists(3, $condensor_rpm) ? ($condensor_speed[3] == .1 ? '1500':($condensor_speed[3] == .2 ? '1200':($condensor_speed[3] == .4 ?'1000':($condensor_speed[3] == .6 ?'950':($condensor_speed[3] == .6 ?'800':($condensor_speed[3] == .8 ?'750':'')))))) :'0'}} rpm</h6>
                    </div> <!-- end .text-center -->
                </div>
            </div> <!-- end card -->

        </div><!-- end col-->
        <div class="col-12 col-md-6 col-xl-4 mt-3"  >
            <div class="card">
                <div class="card-body" >
                    <div class="text-center" dir="ltr">
                        <h5> AHU. 1</h5>

                        <div class="ahu">
                            <div class="ahu_valve" style="height: {{$ahu_speed}}% !important" > </div>
                            <div class="reading">
                                <p>In</p>
                                <h5>Air: {{$ahu_air_in}}&deg;C</h5>
                                <h5>Water: {{$ahu_water_in}}&deg;C</h5>
                            </div>
                            <div class="fan">
                                <img style="animation:{{ $ahu_status == 1 ? 'startfan': ''}} .1s infinite linear" class="fan_img" src="{{ asset('web/assets/images/condensor_fan.png') }}" alt="" srcset="">
                            </div>
                            <div class="reading">
                                <p>Out</p>
                                <h5>Air: {{$ahu_air_out}}&deg;C</h5>
                                <h5>Water: {{$ahu_water_out}}&deg;C</h5>
                            </div>
                        </div>

                        <p style="margin:4px auto 0px auto ">Room temp: {{$rt}}&deg;C</p>
                    </div> <!-- end .text-center -->
                </div>
            </div> <!-- end card -->

        </div><!-- end col-->

    </div>


</div>
