        <nav class="sidebar-nav">
            <ul class="metismenu">
                <li class="title">
                    MAIN NAVIGATION
                </li>
                <li class="<?php echo e((Request::segment(1) == 'home') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route('home')); ?>">
                        <i class="material-icons">dashboard</i>
                        <span class="nav-label">Dashboards</span>
                    </a>
                </li>

                <li class="<?php echo e((Request::segment(1) == 'division') ? 'active' : ''); ?>">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">home</i>
                        <span class="nav-label">Division</span>
                    </a>
                    <ul>
                        <li>
                            <a href="<?php echo e(route('division.create')); ?>">Add Division </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('division.index')); ?>">All Division</a>
                        </li>
                    </ul>
                </li>


                <li class="<?php echo e((Request::segment(1) == 'area') ? 'active' : ''); ?>">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">home</i>
                        <span class="nav-label">Area </span>
                    </a>
                    <ul>
                        <li>
                            <a href="<?php echo e(route('area.create')); ?>">Add Area </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('area.index')); ?>">All Area</a>
                        </li>

                    </ul>
                </li>

                <li class="<?php echo e((Request::segment(1) == 'zone') ? 'active' : ''); ?>">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">home</i>
                        <span class="nav-label">Zone </span>
                    </a>
                    <ul>
                        <li>
                            <a href="<?php echo e(route('zone.create')); ?>">Add Zone </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('zone.index')); ?>">All Zone</a>
                        </li>

                    </ul>
                </li>


                <li class="<?php echo e((Request::segment(1) == 'district') ? 'active' : ''); ?>">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">home</i>
                        <span class="nav-label">District </span>
                    </a>
                    <ul>
                        <li>
                            <a href="<?php echo e(route('district.create')); ?>">Add District </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('district.index')); ?>">All District</a>
                        </li>

                    </ul>
                </li>

                <li class="<?php echo e((Request::segment(1) == 'thana') ? 'active' : ''); ?>">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">home</i>
                        <span class="nav-label">Thana </span>
                    </a>
                    <ul>
                        <li>
                            <a href="<?php echo e(route('thana.create')); ?>">Add Thana</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('thana.index')); ?>">All Thana</a>
                        </li>

                    </ul>
                </li>

                <li class="<?php echo e((Request::segment(1) == 'fari') ? 'active' : ''); ?>">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">home</i>
                        <span class="nav-label">Fari </span>
                    </a>
                    <ul>
                        <li>
                            <a href="<?php echo e(route('fari.create')); ?>">Add Fari </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('fari.index')); ?>">All Fari</a>
                        </li>


                    </ul>
                </li>

                <li class="<?php echo e((Request::segment(1) == 'complain') ? 'active' : ''); ?>">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">picture_in_picture</i>
                        <span class="nav-label">Complain</span>
                    </a>
                    <ul>

                        <li>
                            <a href="<?php echo e(route('complain.create')); ?>">Add Complain</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('complain.index')); ?>">All Complain</a>
                        </li>

                        <li>
                            <a href="<?php echo e(route('complain.thana')); ?>">Thana Complain</a>
                        </li>

                        <li>
                            <a href="<?php echo e(route('complain.fari')); ?>">Fari Complain</a>
                        </li>


                    </ul>
                </li>

                <li class="<?php echo e(((Request::segment(1) == 'expense') || (Request::segment(1)) == 'expense-head') ? 'active' : ''); ?>">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">account_box</i>
                        <span class="nav-label">Users</span>
                    </a>
                    <ul>
                        <li>
                            <a href="#"> List Users</a>
                        </li>
                        <li>
                            <a href="#">Update Users</a>
                        </li>
                        <li>
                            <a href="#">Entry New Users </a>
                        </li>


                    </ul>
                </li>




            </ul>
        </nav>