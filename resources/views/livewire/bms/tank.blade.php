<?php

use function Livewire\Volt\{state,mount,placeholder};

use App\Models\tank ;
use App\Models\motor;

state( [ 'tank_id','tank']);
placeholder('<div>Loading...</div>');


mount(function($tank){
    $this->tank_id = $tank->id;
    $this->gettankdata();

});

$gettankdata = function(){
    $this->tanks = tank::all();
    $this->level();
};

$level = function(){
    foreach($this->tanks as $tank)
    {
        $switch = rand(0,1);


        $level = rand(0,90);
        tank::where('id', $tank->id)->update([
            'level' => $level,
        ]);
        motor::where('tank_id',$tank->id)->update([
            'status' => $switch,
        ]);
    }
};







?>
@push('innerStyle')
<style>
    .card-body .btn{
        height:35px;
    }
</style>
@endpush
<div class="col-12 col-md-4">

    <div class="card">
        <div class="card-body" wire:poll.visible='gettankdata'>
            <div class="d-flex justify-content-between">
                <h2 class="value">{{$tank->tank_name}}</h2>
                <a href="" class="btn btn-primary btn-sm h-2">View</a>
            </div>
            <div class="d-flex justify-content-between">
                <h3 class="value" style="color:blue">{{$tank->capacity.' Lit'}}</h3>
                <span style="height: 24px; padding:5px;" class="badge bg-{{$tank->motor[0]->status == 0 ? 'danger':'success'}}">{{$tank->motor[0]->status == 0 ? 'Motor Off':'Motor On'}}</span>
            </div>
            <div class="w-progress-stats">
                <div class="progress">
                    <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: {{$tank->level}}%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="32">
                    </div>
                </div>

                 <div class="progress-data">{{$tank->level}} <small>%</small></div>

            </div>
        </div>
    </div>
</div>
