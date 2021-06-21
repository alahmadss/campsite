<div class="sticky col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                        <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                            <span class="fs-5 d-none d-sm-inline">.</span>
                        </a>
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                            <li class="nav-item">
                                <a href="<?php echo base_url('panel')?>" class="nav-link align-middle px-0" style="color: white;">
                                    <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle" style="color: white;">
                                    <span class="ms-1 d-none d-sm-inline">Booking</span> </a>
                                <ul class="collapse nav flex-column ms-2" id="submenu1" data-bs-parent="#menu">
                                    <li>
                                        <a href="<?php echo base_url('panel/bookingview')?>" class="nav-link px-2" style="color: white;"> <span class="d-none d-sm-inline">Booking list</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle " style="color: white;">
                                    <span class="ms-1 d-none d-sm-inline">Camp-site</span></a>
                                <ul class="collapse nav flex-column ms-2" id="submenu2" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a href="<?php echo base_url('panel/addcampspot')?>" class="nav-link px-2" style="color: white;"> <span class="d-none d-sm-inline">Input camping site</span></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('panel/campspotview')?>" class="nav-link px-2" style="color: white;"> <span class="d-none d-sm-inline">Camping site list</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle" style="color: white;">
                                    <span class="ms-1 d-none d-sm-inline">User</span></a>
                                <ul class="collapse nav flex-column ms-2" id="submenu3" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a href="<?php echo base_url('panel/adduser')?>" class="nav-link px-2" style="color: white;"> <span class="d-none d-sm-inline">Input new user </span></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('panel/userview')?>" class="nav-link px-2" style="color: white;"> <span class="d-none d-sm-inline">User list</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <hr>
                    </div>
                </div>