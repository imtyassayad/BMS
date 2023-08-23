<?php

use function Livewire\Volt\{state,mount,placeholder};

use App\Models\chiller ;

state( [ 'chiller','id','status','c_load','ld']);
placeholder('<div>Loading...</div>');


mount(function($chiller){
   $this->chiiler = $chiller;
   $this->id = $chiller->id;
   $this->c_load =20;
   $this->ld = [0, 20, 40, 60, 80, 100];
    // dd($this->ld);

});

$load = function(){
    $a = rand(1,5);

    chiller::where('id',$this->id)->update([
        'compresor_load'=> $this->ld[$a],
    ]);
    $this->c_load = $this->ld[$a];
};

$set = function(){
    if ($this->chiller->status == 1) {

        if ($this->c_load == 0) {


            chiller::where('id',$this->id)->update([
                'discharge_temp'	    => 32,
                'discharge_pressure'	=> 120,
                'suction_temp'	        => 32,
                'suction_pressure'	    => 120,
                'chw_in_temp'	        => 32,
                'chw_out_temp'	        => 32,
                'room_temp'             => 30,
            ]);

        } elseif ($this->c_load == 20) {


            chiller::where('id',$this->id)->update([
                    'discharge_temp'	    => 110,
                    'discharge_pressure'	=> 150,
                    'suction_temp'	        => 30,
                    'suction_pressure'	    => 100,
                    'chw_in_temp'	        => 20,
                    'chw_out_temp'	        => 25,
                    'room_temp'             => 27,
            ]);
            // dd('here');


        } elseif ($this->c_load == 40) {


            chiller::where('id',$this->id)->update([
                'discharge_temp'	    => 130,
                'discharge_pressure'	=> 150,
                'suction_temp'	        => 28,
                'suction_pressure'	    => 80,
                'chw_in_temp'	        => 15,
                'chw_out_temp'	        => 20,
                'room_temp'             => 24,
            ]);



        } elseif ($this->c_load == 60) {


            chiller::where('id',$this->id)->update([
                'discharge_temp'	    => 180,
                'discharge_pressure'	=> 180,
                'suction_temp'	        => 26,
                'suction_pressure'	    => 60,
                'chw_in_temp'	        => 12,
                'chw_out_temp'	        => 17,
                'room_temp'             => 22,
            ]);




        } elseif ($this->c_load == 80) {


            chiller::where('id',$this->id)->update([
                'discharge_temp'	    => 200,
                'discharge_pressure'	=> 230,
                'suction_temp'	        => 24,
                'suction_pressure'	    => 40,
                'chw_in_temp'	        => 10,
                'chw_out_temp'	        => 15,
                'room_temp'             => 19,
            ]);


        } elseif ($this->c_load == 100) {


            chiller::where('id',$this->id)->update([
                'discharge_temp'	    => 250,
                'discharge_pressure'	=> 260,
                'suction_temp'	        => 22,
                'suction_pressure'	    => 30,
                'chw_in_temp'	        => 8,
                'chw_out_temp'	        => 13,
                'room_temp'             => 17,
            ]);


        }

    }
    else{
        $this->c_load = 0;

        chiller::where('id',$this->id)->update([
            'compresor_load'        => 0,
            'discharge_temp'	    => 30,
            'discharge_pressure'	=> 80,
            'suction_temp'	        => 30,
            'suction_pressure'	    => 80,
            'chw_in_temp'	        => 30,
            'chw_out_temp'	        => 30,
            'room_temp'             => 30,
        ]);
    }
};




$getdata = function(){
    $this->load();
    $this->set();
    $this->chiller = chiller::find($this->id);
}

?>

<div class="col-md-6 col-xl-3">
    <a href="{{route('bms.chiller',$chiller->id)}}">
    <div class="card">
        <div class="card-body" wire:poll.visible='getdata' >
            <div class="text-center" dir="ltr">
                <h5>{{$chiller->chiller_no}}</h5>

                    <h3 class="mb-3 text-{{$chiller->status == 1?'success':'danger'}}" ><i class="mdi mdi-arrow-{{$chiller->status == 1?'up':'down'}}-bold-circle-outline text-{{$chiller->status == 1?'success':'danger'}}"></i> {{$chiller->status == 1?'On':'Off'}} </h3>
                    <div class="progress mb-0" style="height: 1rem">
                        <div  class="progress-bar" role="progressbar" style="height:1rem;width: {{$chiller->room_temp}}%; background-color: {{$chiller->room_temp > 20 ?'green':'lightgreen' }};color: {{$chiller->room_temp > 20 ?'white':'black' }}; padding:2px 2px;" aria-valuenow="{{$chiller->room_temp}}" aria-valuemin="0" aria-valuemax="100">{{$chiller->room_temp}}&deg;C</div>
                    </div>

                <h6 class="text-muted mt-2">Compressor Load: {{$c_load}}%</h6>
            </div> <!-- end .text-center -->
        </div>
    </div> <!-- end card -->
</a>
</div><!-- end col-->
