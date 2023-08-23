<?php
use function Livewire\Volt\{state,mount,placeholder};

state([
    'motor_switch' ,'motor_status'
])->reactive();
mount(function($motor_switch, $motor_status){
    $this->motor_switch = $motor_switch;
        $this->motor_status = $motor_status;
})
?>
<div>
    <div class="motor_holder">
        <div class="text_holder">

            <h5 style="color:{{ $motor_switch == 1 ? 'red' : 'green' }}">{{ $motor_status }}</h5>
        </div>
        <img src="{{ asset('web/assets/images/WaterMotor.png') }}" alt="">

    </div>
</div>
