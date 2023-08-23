<?php


use function Livewire\Volt\{state,mount,placeholder};

    state([
        'motor_status' ,
        'motor_switch',
        'ug_motor_status' ,
        'ug_motor_switch',
        'fire_motor_status',
        'fire_motor_switch' ,
        'water_level' ,
        'ug_level' ,
        'fire_level' ,
        'auto' ,
        'warning',
        'fire_warning',
        'ug_warning',
        'general_warning',
        'fire_drain' ,
    ]);


    mount( function(){
        $this->motor_status = 'Off';
        $this->motor_switch = 0;

        $this->ug_motor_status = 'Off';
        $this->ug_motor_switch = 0;

        $this->fire_motor_status = 'Off';
        $this->fire_motor_switch = 0;

        $this->water_level = 10;
        $this->ug_level = 90;
        $this->fire_level = 10;
        $this->auto = 0;
        $this->warning;
        $this->fire_warning;
        $this->ug_warning;
        $this->general_warning;

        $this->fire_drain = false;

        $this->count();
    });

    $ohtswitch =  function ()
    {
        $this->motor_switch = !$this->motor_switch;
    };
    $ugtswitch= function ()
    {
        $this->ug_motor_switch = !$this->ug_motor_switch;

    };
    $fireswitch = function ()
    {

       $this->fire_motor_switch = !$this->fire_motor_switch;
    };
    $switchauto = function ()
    {
        $this->auto = !$this->auto;
    };

    $firedrainswitch = function ()
    {
        $this->fire_drain = !$this->fire_drain;
    };

    $count = function ()
    {
        if ($this->motor_switch == 1) {
            $this->motor_status = 'On';

            $this->ugtank_drain();
            $this->ohtank();



            // $this->drain();
        } else {
            $this->motor_status = 'Off';

            $this->drain();
        }


        if ($this->fire_motor_switch == 1) {
            $this->fire_motor_status = 'On';

            $this->ugtank_drain();
            $this->firefill();



            // $this->drain();
        } else {
            $this->fire_motor_status = 'Off';

            // $this->drain();
        }

        if($this->ug_motor_switch == 1) {
            $this->ug_motor_status = 'On';
            $this->ugtank_fill();
        }
        else{
            $this->ug_motor_status = 'Off';
        }

        if($this->fire_drain){
            $this->firedrain();
        }


    };

    $drain = function ()
    {

        for ($i = 0; $i < 5; $i++) {
            $this->water_level =  $this->water_level - $i;

            if ($this->water_level > 5 and $this->water_level < 90) {
                $this->warning = '';
            }
            if ($this->water_level <   30) {

                if ($this->auto) {

                    if($this->ug_level > 12){
                        $this->ug_motor_switch = 1;
                        $this->ug_motor_status = 'On';
                    }
                }
            }
            if ($this->water_level <   12) {
                $this->warning =  'Water low';
                if ($this->auto) {

                    if($this->ug_level > 12){
                        $this->motor_switch = 1;
                        $this->motor_status = 'On';
                    }
                    else{
                        $this->motor_switch = 0;
                        $this->motor_status = 'Off';
                        $this->ug_motor_switch = 1;
                        $this->ug_motor_status = 'On';
                    }
                }
                break;
            }
        }
    };
    $ugtank_drain= function  ()
    {
        for ($i = 0; $i < 5; $i++) {

            $this->ug_level = $this->ug_level - $i;

            if($this->ug_level > 12 and $this->ug_level < 90){

                $this->ug_warning = ' ';
                if($this->auto){
                    $this->motor_switch = 1;
                    $this->ug_motor_status='On';
                }

            }
            if ($this->ug_level < 12) {

                    if($this->auto){
                        $this->ug_motor_switch = 1;
                        $this->ug_motor_status='On';
                    }

                $this->ug_warning = 'Water Low';
                break;

            }

        }
    };
    $ugtank_fill= function  ()
    {
        for ($i = 0; $i < 5; $i++) {

            $this->ug_level = $this->ug_level + $i;


            if($this->ug_level > 12 and $this->ug_level < 90){
                $this->ug_warning = ' ';
                $this->general_warning = '';
            }

            if ($this->ug_level >= 90) {

                    if($this->auto){
                        if($this->water_level < 50)
                        {
                            $this->motor_switch =1;
                            $this->motor_status = "On";
                        }
                        if($this->fire_level <  80){
                            $this->fire_motor_switch = 1;
                            $this->fire_motor_status =  'On';
                        }
                        $this->ug_motor_switch = 0;
                        $this->ug_motor_status='Off';

                    }


            }
            if($this->ug_level > 98){
                $this->ug_warning = 'Over Flow';
                break;
            }



        }
    };
    $ohtank = function ()
    {

            for ($i = 0; $i < 5; $i++) {
                if($this->ug_level <= 10)
                {
                    $this->motor_switch =0;
                    $this->general_warning = 'Under Gruond tank has low was please fill that first';
                    break;
                }

                $this->water_level =  $this->water_level + $i;


                if ($this->water_level >   20 and $this->water_level < 90) {
                    $this->warning = '';
                }

                if ($this->water_level > 90 ) {

                    if ($this->auto) {

                        $this->motor_switch = 0;
                        $this->motor_status = 'Off';

                    }
                    // break;

                }

                if ($this->water_level > 98) {

                    $this->warning = 'Over flowing';

                    break;
                }
            }

    };

    $firefill = function ()
    {

            for ($i = 0; $i < 5; $i++) {
                if($this->ug_level <= 10)
                {
                    $this->fire_motor_switch =0;
                    $this->general_warning = 'Under Gruond tank has low was please fill that first';
                    break;
                }

                $this->fire_level =  $this->fire_level + $i;


                if ($this->fire_level >   20 and $this->fire_level < 90) {
                    $this->fire_warning = '';
                }

                if ($this->fire_level > 90 ) {

                    if ($this->auto) {

                        $this->fire_motor_switch = 0;
                        $this->fire_motor_status = 'Off';

                    }
                    // break;

                }

                if ($this->fire_level > 98) {

                    $this->fire_warning = 'Over flowing';

                    break;
                }
            }

    };
    $firedrain = function ()
    {
        for ($i = 0; $i < 5; $i++) {
            if($this->fire_level > 10 ){
                $this->fire_level =  $this->fire_level - $i;
            }
            else if($this->fire_level <= 10 ){
                if($this->auto){
                    $this->motor_switch = 1;
                    $this->motor_status= 'On';
                }
            }
            if ($this->fire_level > 5 and $this->fire_level < 90) {
                $this->fire_warning = '';
            }
            if ($this->fire_level <   30) {

                if ($this->auto) {

                    if($this->ug_level > 12){
                        $this->ug_motor_switch = 1;
                        $this->ug_motor_status = 'On';
                    }
                }
            }
            if ($this->fire_level <   12) {
                $this->fire_warning =  'Water low';
                if ($this->auto) {

                    if($this->ug_level > 12){
                        $this->fire_motor_switch = 1;
                        $this->fire_motor_status = 'On';
                    }
                    else{
                        $this->fire_motor_switch = 0;
                        $this->fire_motor_status = 'Off';
                        $this->ug_motor_switch = 1;
                        $this->ug_motor_status = 'On';
                    }
                }
                break;
            }
        }
    };

?>
<div class="content" >

    <!-- Start Content-->
    <div class="container-fluid" wire:poll.visible='count'>

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">B.M.S</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Minton</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Charts</a></li>
                            <li class="breadcrumb-item active">Jquery knob</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <div class="card d-flex justify-content-between align-items-center flex-row p-2">
                    <h1 class=" d-none d-md-block">Motors </h1>
                    <div class="button_holder">
                        <div class="button_label">
                            <p>O.H.T Motor: </p>
                        </div>
                        <div class="button" wire:click='ohtswitch'>
                            @if ($motor_switch)
                            <img src="{{asset('web/assets/images/on.png')}}" alt="">
                            @else
                            <img src="{{asset('web/assets/images/off.png')}}" alt="">
                            @endif
                        </div>
                    </div>

                    <div class="button_holder">
                        <div class="button_label">
                            <p>U.G.T Motor: </p>
                        </div>
                        <div class="button" wire:click='ugtswitch'>

                            @if ($ug_motor_switch)
                            <img src="{{asset('web/assets/images/on.png')}}" alt="">
                            @else
                            <img src="{{asset('web/assets/images/off.png')}}" alt="">
                            @endif

                        </div>
                    </div>

                    <div class="button_holder">
                        <div class="button_label">
                            <p>Fire Motor: </p>
                        </div>
                        <div class="button" wire:click='fireswitch'>


                            @if ($fire_motor_switch)
                            <img src="{{asset('web/assets/images/on.png')}}" alt="">
                            @else
                            <img src="{{asset('web/assets/images/off.png')}}" alt="">
                            @endif


                        </div>
                    </div>

                    <div class="button_holder">
                        <div class="button_label">
                            <p>Auto Switch: </p>
                        </div>
                        <div class="button" wire:click='switchauto'>

                            @if ($auto)
                            <img src="{{asset('web/assets/images/on.png')}}" alt="">
                            @else
                            <img src="{{asset('web/assets/images/off.png')}}" alt="">
                            @endif


                        </div>
                    </div>
                    <div class="button_holder">
                        <div class="button_label">
                            <p>Fire Drain: </p>
                        </div>
                        <div class="button" wire:click='firedrainswitch'>

                            @if ($fire_drain)
                            <img src="{{asset('web/assets/images/on.png')}}" alt="">
                            @else
                            <img src="{{asset('web/assets/images/off.png')}}" alt="">
                            @endif


                        </div>
                    </div>
                    <a href="{{route('bms.dashboard')}}"  class="btn btn-primary  d-none d-md-block " style="height:40px">Back</a>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="water_tanks">

                <div class="tank_container">
                    @livewire('bms.tank.tank',[ 'warning'=>$warning, 'water_level'=> $water_level, 'title'=>'O.H.T'])
                    @livewire('bms.motor.motor',[ 'motor_switch'=> $motor_switch, 'motor_status'=>$motor_status])
                    @livewire('bms.tank.tank',[ 'warning'=>$ug_warning, 'water_level'=> $ug_level, 'title'=>'U.G.T'])
                    @livewire('bms.motor.motor',[ 'motor_switch'=> $ug_motor_switch, 'motor_status'=>$ug_motor_status])
                    @livewire('bms.tank.tank',[ 'warning'=>$fire_warning, 'water_level'=> $fire_level, 'title'=>'Fire'])
                    @livewire('bms.motor.motor',[ 'motor_switch'=> $fire_motor_switch, 'motor_status'=>$fire_motor_status])

                </div>

            </div>
        </div>

    </div>
</div>
