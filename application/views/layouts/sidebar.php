<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li>
                    <a href="<?= base_url() . 'accounts' ?>" class="waves-effect">
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                        <i class="fa fa-user m-r-10" aria-hidden="true"></i>Accounts</a>
                            <ul class="treeview-menu">
                                <li><a href="views/accounts/index.php"><i class="fa fa-circle-o"></i> Approved Accounts</a></li>
                                <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Pending Accounts</a></li>
            </ul>
                </li>
                <li>
                    <a href="<?= base_url() . 'calendar' ?>" class="waves-effect">
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                        <i class="fa fa-table m-r-10" aria-hidden="true"></i>Events</a>
                            <ul class="treeview-menu">
                                <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> Approved Events</a></li>
                                <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Pending Events</a></li>
                            </ul>

                    </li>
                <li>
                    <a href="<?= base_url() . 'events' ?>" class="waves-effect">
                        <i class="fa fa-clock-o m-r-10" aria-hidden="true"></i>Calendar</a>
                </li>
                <li>
                    <a href="<?= base_url() . 'mail' ?>" class="waves-effect">
                        <i class="fa fa-font m-r-10" aria-hidden="true"></i>Mail</a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>