<nav class="navbar navbar-default">


    <div class="container-fluid">
        <div class="navbar-header">

            <a href="javascript:void(0);" class="left-toggle-left-sidebar js-left-toggle-left-sidebar">
                <i class="material-icons">menu</i>
            </a>

            <a class="navbar-brand" href="javascript:void(0);">
                <span class="logo-minimized"><i class="material-icons">fullscreen</i></span>
                <span class="logo"><?php echo e(config('app.name', 'Laravel')); ?></span>
            </a>

        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="javascript:void(0);" class="toggle-left-sidebar js-toggle-left-sidebar">
                        <i class="material-icons">menu</i>
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">

                <li>
                    <a href="javascript:void(0);" class="fullscreen js-fullscreen">
                        <i class="material-icons">fullscreen</i>
                    </a>
                </li>


                <li class="dropdown notification-menu">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="material-icons">notifications</i>
                        <span class="label-count">7</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">NOTIFICATIONS</li>
                        <li class="body">
                            <ul class="menu">
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="icon-circle bg-success">
                                            <i class="material-icons">person_add</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4>12 new members joined</h4>
                                            <p>
                                                <i class="material-icons">access_time</i> 14 mins ago
                                            </p>
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="footer">
                            <a href="javascript:void(0);">View All Notifications</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown user-menu">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="hidden-xs"><?php echo e(Auth::user()->name); ?></span>
                    </a>
                    <ul class="dropdown-menu">

                        <li class="body">
                            <ul>
                                <li>
                                    <a href="pages/miscellaneous/profile.html">
                                        <i class="material-icons">account_circle</i> Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="material-icons">lock_open</i> Change Password
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer">
                            <div class="row clearfix">
                                <div class="col-xs-12">
                                    <a class="btn btn-default btn-sm btn-block" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>   
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>