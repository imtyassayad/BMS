<?php

use function Livewire\Volt\{computed,state};
use App\Models\chiller;

state(['chillers'=> chiller::all()]);



?>

<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

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

        <div class="row " >
            @foreach ($chillers as $item)

                @livewire('bms.chiller', ['chiller' => $item])

            @endforeach


        </div><!-- end row -->




    </div> <!-- container -->

</div> <!-- content -->
