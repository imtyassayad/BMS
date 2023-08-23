<?php
use function Livewire\Volt\{state,mount,placeholder};

state([
    'warning', 'water_level', 'title'
])->reactive();

mount(function($warning, $water_level, $title){
    $this->warning = $warning;
    $this->water_level = $water_level;
    $this->title = $title;
});

?>
    <div class="tank">
        <div class="warning">
            <p style="color:red"> {{ $warning }}</p>
            <h5 style="color: #fff">{{ $water_level . ' Lit' }}</h5>
            <h5>{{ $title }}</h5>
        </div>
        <div class="water" style="height: {{ $water_level }}%"></div>
    </div>
