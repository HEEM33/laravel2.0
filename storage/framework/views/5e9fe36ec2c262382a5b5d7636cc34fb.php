            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="<?php echo e(url('admin/dashboard')); ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link <?php echo e(Request::is('admin/universities')? 'active':''); ?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-universities"></i></div>
                                Universities
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse <?php echo e(Request::is('admin/universities')? 'show':''); ?>" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link <?php echo e(Request::is('admin/add-universities')? 'active':''); ?>" href="<?php echo e(url('admin/add-universities')); ?>">Add university</a>
                                    <a class="nav-link <?php echo e(Request::is('admin/universities')? 'active':''); ?>" href="<?php echo e(url('admin/universities')); ?>">View universities</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed <?php echo e(Request::is('admin/comments')? 'active':''); ?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Comment
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

                            <div class="collapse  <?php echo e(Request::is('admin/comments')? 'show':''); ?>" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link <?php echo e(Request::is('admin/comments')? 'active':''); ?>" href="<?php echo e(url('admin/comments')); ?>" >
                                        View comments
                                    </a>
                                </nav>
                            </div>
                            <a class="nav-link <?php echo e(Request::is('/users/manage')? 'active':''); ?>" href="<?php echo e(url('/users/manage')); ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Users
                            </a>
                        </div>
                    </div>
                </nav>
            </div>    <?php /**PATH C:\Users\emile\myapp\resources\views/layouts/inc/admin-sidebar.blade.php ENDPATH**/ ?>