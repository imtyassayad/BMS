<?php

use function Livewire\Volt\{state};

//

?>

<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box page-title-box-alt">
                    <h4 class="page-title">Horizontal</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hms</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Layouts</a></li>
                            <li class="breadcrumb-item active">Horizontal</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5 class="text-muted fw-normal mt-0 text-truncate" title="Campaign Sent">Campaign Sent</h5>
                                <h3 class="my-2 py-1"><span data-plugin="counterup">865</span></h3>
                                <p class="mb-0 text-muted">
                                    <span class="text-success me-2"><span class="mdi mdi-arrow-up-bold"></span> 5.27%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                            <div class="avatar-sm">
                                <span class="avatar-title bg-soft-primary rounded">
                                    <i class="ri-stack-line font-20 text-primary"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->

            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5 class="text-muted fw-normal mt-0 text-truncate" title="New Leads">New Leads</h5>
                                <h3 class="my-2 py-1"><span data-plugin="counterup">384</span></h3>
                                <p class="mb-0 text-muted">
                                    <span class="text-danger me-2"><span class="mdi mdi-arrow-down-bold"></span> 3.27%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                            <div class="avatar-sm">
                                <span class="avatar-title bg-soft-primary rounded">
                                    <i class="ri-slideshow-2-line font-20 text-primary"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->

            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5 class="text-muted fw-normal mt-0 text-truncate" title="Deals">Deals</h5>
                                <h3 class="my-2 py-1"><span data-plugin="counterup">34,521</span></h3>
                                <p class="mb-0 text-muted">
                                    <span class="text-success me-2"><span class="mdi mdi-arrow-up-bold"></span> 8.58%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                            <div class="avatar-sm">
                                <span class="avatar-title bg-soft-primary rounded">
                                    <i class="ri-hand-heart-line font-20 text-primary"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->

            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5 class="text-muted fw-normal mt-0 text-truncate" title="Booked Revenue">Booked Revenue</h5>
                                <h3 class="my-2 py-1">$<span data-plugin="counterup">89,357</span></h3>
                                <p class="mb-0 text-muted">
                                    <span class="text-success me-2"><span class="mdi mdi-arrow-up-bold"></span> 34.61%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                            <div class="avatar-sm">
                                <span class="avatar-title bg-soft-primary rounded">
                                    <i class="ri-money-dollar-box-line font-20 text-primary"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="header-title">Campaigns</h4>
                            <div class="btn-group mb-2">
                                <button type="button" class="btn btn-xs btn-light active">Today</button>
                                <button type="button" class="btn btn-xs btn-light">Weekly</button>
                                <button type="button" class="btn btn-xs btn-light">Monthly</button>
                            </div>
                        </div>
                        <div class="mt-3" dir="ltr">
                            <div id="campaigns-chart" class="apex-charts" data-colors="#f7b84b,#1abc9c,#3bafda"></div>
                        </div>
                        <div class="row text-center mt-2">
                            <div class="col-md-4">
                                <h4 class="fw-normal mt-3">
                                    <span>6,510</span>
                                </h4>
                                <p class="text-muted  mb-2"><i class="mdi mdi-checkbox-blank-circle text-warning"></i> Total Sent</p>
                            </div>
                            <div class="col-md-4">
                                <h4 class="fw-normal mt-3">
                                    <span>3,487</span>
                                </h4>
                                <p class="text-muted  mb-2"><i class="mdi mdi-checkbox-blank-circle text-success"></i> Reached</p>
                            </div>
                            <div class="col-md-4">
                                <h4 class="fw-normal mt-3">
                                    <span>1,568</span>
                                </h4>
                                <p class="text-muted  mb-2"><i class="mdi mdi-checkbox-blank-circle text-primary"></i> Opened</p>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card-->
            </div> <!-- end col -->

            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h4 class="header-title">Revenue</h4>
                            <div class="btn-group mb-2">
                                <button type="button" class="btn btn-xs btn-light active">Today</button>
                                <button type="button" class="btn btn-xs btn-light">Weekly</button>
                                <button type="button" class="btn btn-xs btn-light">Monthly</button>
                            </div>
                        </div>

                        <div class="row mt-4 text-center">
                            <div class="col-4">
                                <p class="text-muted font-15 mb-1 text-truncate">Current Month</p>
                                <h4><i class="fe-arrow-up text-success me-1"></i>$1.4k</h4>
                            </div>
                            <div class="col-4">
                                <p class="text-muted font-15 mb-1 text-truncate">Previous Month</p>
                                <h4><i class="fe-arrow-down text-danger me-1"></i>$15k</h4>
                            </div>
                            <div class="col-4">
                                <p class="text-muted font-15 mb-1 text-truncate">Target</p>
                                <h4><i class="fe-arrow-down text-danger me-1"></i>$7.8k</h4>
                            </div>
                        </div>

                        <div class="mt-3" dir="ltr">
                            <div id="revenue-chart" class="apex-charts" data-colors="#3bafda,#ced4dc"></div>
                        </div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-5">
                <div class="card">
                    <div class="card-body">
                        <div class="dropdown float-end">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                            </div>
                        </div>
                        <h4 class="header-title mb-3">Top Performing</h4>

                        <div class="table-responsive">
                            <table class="table table-striped table-nowrap table-centered mb-0">
                                <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>Leads</th>
                                        <th>Deals</th>
                                        <th>Tasks</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <h5 class="font-14 mt-0 mb-1 fw-normal">Jeremy Young</h5>
                                            <span class="text-muted font-13">Senior Sales Executive</span>
                                        </td>
                                        <td>187</td>
                                        <td>154</td>
                                        <td>49</td>
                                        <td class="table-action">
                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5 class="font-14 mt-0 mb-1 fw-normal">Thomas Krueger</h5>
                                            <span class="text-muted font-13">Senior Sales Executive</span>
                                        </td>
                                        <td>235</td>
                                        <td>127</td>
                                        <td>83</td>
                                        <td class="table-action">
                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5 class="font-14 mt-0 mb-1 fw-normal">Pete Burdine</h5>
                                            <span class="text-muted font-13">Senior Sales Executive</span>
                                        </td>
                                        <td>365</td>
                                        <td>148</td>
                                        <td>62</td>
                                        <td class="table-action">
                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5 class="font-14 mt-0 mb-1 fw-normal">Mary Nelson</h5>
                                            <span class="text-muted font-13">Senior Sales Executive</span>
                                        </td>
                                        <td>753</td>
                                        <td>159</td>
                                        <td>258</td>
                                        <td class="table-action">
                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h5 class="font-14 mt-0 mb-1 fw-normal">Kevin Grove</h5>
                                            <span class="text-muted font-13">Senior Sales Executive</span>
                                        </td>
                                        <td>458</td>
                                        <td>126</td>
                                        <td>73</td>
                                        <td class="table-action">
                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- end table-responsive-->

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div>
            <!-- end col-->

            <div class="col-xl-7">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    </div>
                                </div>
                                <h4 class="header-title mb-4">Recent Leads</h4>

                                <div class="d-flex">
                                    <img class="avatar-sm align-self-center me-3 rounded-circle" src="{{asset('web/assets/images/users/avatar-2.jpg')}}" alt="Generic placeholder image">
                                    <div class="flex-1">
                                        <span class="badge badge-soft-warning float-end">Cold lead</span>
                                        <h5 class="mt-0 mb-1">Risa Pearson</h5>
                                        <span class="text-muted font-13">richard.john@mail.com</span>
                                    </div>
                                </div>

                                <div class="d-flex mt-3">
                                    <img class="avatar-sm align-self-center me-3 rounded-circle" src="{{asset('web/assets/images/users/avatar-3.jpg')}}" alt="Generic placeholder image">
                                    <div class="flex-1">
                                        <span class="badge badge-soft-danger float-end">Lost lead</span>
                                        <h5 class="mt-0 mb-1">Margaret D. Evans</h5>
                                        <span class="text-muted font-13">margaret.evans@rhyta.com</span>
                                    </div>
                                </div>

                                <div class="d-flex mt-3">
                                    <img class="avatar-sm align-self-center me-3 rounded-circle" src="{{asset('web/assets/images/users/avatar-4.jpg')}}" alt="Generic placeholder image">
                                    <div class="flex-1">
                                        <span class="badge badge-soft-success float-end">Won lead</span>
                                        <h5 class="mt-0 mb-1">Bryan J. Luellen</h5>
                                        <span class="text-muted font-13">bryuellen@dayrep.com</span>
                                    </div>
                                </div>

                                <div class="d-flex mt-3">
                                    <img class="avatar-sm align-self-center me-3 rounded-circle" src="{{asset('web/assets/images/users/avatar-5.jpg')}}" alt="Generic placeholder image">
                                    <div class="flex-1">
                                        <span class="badge badge-soft-warning float-end">Cold lead</span>
                                        <h5 class="mt-0 mb-1">Kathryn S. Collier</h5>
                                        <span class="text-muted font-13">collier@jourrapide.com</span>
                                    </div>
                                </div>

                                <div class="d-flex mt-3">
                                    <img class="avatar-sm align-self-center me-3 rounded-circle" src="{{asset('web/assets/images/users/avatar-1.jpg')}}" alt="Generic placeholder image">
                                    <div class="flex-1">
                                        <span class="badge badge-soft-warning float-end">Cold lead</span>
                                        <h5 class="mt-0 mb-1">Timothy Kauper</h5>
                                        <span class="text-muted font-13">thykauper@rhyta.com</span>
                                    </div>
                                </div>

                                <div class="d-flex mt-3">
                                    <img class="avatar-sm align-self-center me-3 rounded-circle" src="{{asset('web/assets/images/users/avatar-6.jpg')}}" alt="Generic placeholder image">
                                    <div class="flex-1">
                                        <span class="badge badge-soft-success float-end">Won lead</span>
                                        <h5 class="mt-0 mb-1">Zara Raws</h5>
                                        <span class="text-muted font-13">austin@dayrep.com</span>
                                    </div>
                                </div>

                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card-->
                    </div>
                    <!-- end col -->

                    <div class="col-lg-6">
                        <!-- Todo-->
                        <div class="card">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    </div>
                                </div>
                                <h4 class="header-title mb-3">Todo</h4>

                                <div class="todoapp">
                                    <div class="row">
                                        <div class="col">
                                            <h5 id="todo-message"><span id="todo-remaining"></span> of <span id="todo-total"></span> remaining</h5>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#" class="float-end btn btn-light btn-sm" id="btn-archive">Archive</a>
                                        </div>
                                    </div>

                                    <div style="max-height: 292px;" data-simplebar>
                                        <ul class="list-group list-group-flush todo-list" id="todo-list"></ul>
                                    </div>

                                    <form name="todo-form" id="todo-form" class="needs-validation mt-3" novalidate>
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" id="todo-input-text" name="todo-input-text" class="form-control"
                                                    placeholder="Add new todo" required>
                                                <div class="invalid-feedback">
                                                    Please enter your task name
                                                </div>
                                            </div>
                                            <div class="col-auto d-grid">
                                                <button class="btn btn-primary btn-md width-sm waves-effect waves-light" type="submit" id="todo-btn-submit">Add</button>
                                            </div>
                                        </div>
                                    </form>
                                </div> <!-- end .todoapp-->

                            </div> <!-- end card-body -->
                        </div> <!-- end card-->

                    </div><!-- end col -->
                </div><!-- end row-->
            </div>
            <!-- end col-->
        </div>
        <!-- end row-->

    </div> <!-- container -->

</div> <!-- content -->
