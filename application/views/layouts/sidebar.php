<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <div class="user-profile">
            <!-- User profile image -->
            <div class="profile-img"> <img src="<?= base_url() ?>assets/images/users/1.jpg" alt="user" /> </div>
            <!-- User profile text-->
            <div class="profile-text"> <a href="#" class="dropdown-toggle link u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Markarn Doe <span class="caret"></span></a>
                <div class="dropdown-menu animated flipInY">
                <a href="#" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                <a href="#" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
                <a href="#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                <div class="dropdown-divider"></div> <a href="login.html" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                </div>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li>
                    <a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-account-circle"></i><span class="hide-menu">Accounts </span></a>
                    <ul aria-expanded="true" class="collapse">
                        <li><a href="<?= base_url() . 'accounts/approved' ?>"><i class="fa fa-circle-o"></i> Approved Accounts</a></li>
                        <li><a href="<?= base_url() . 'accounts/pending' ?>"><i class="fa fa-circle-o"></i> Pending Accounts</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Events </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?= base_url() . 'events/approved' ?>"><i class="fa fa-circle-o"></i> Approved Events</a></li>
                        <li><a href="<?= base_url() . 'events/pending' ?>"><i class="fa fa-circle-o"></i> Pending Events</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?= base_url() . 'calendar' ?>"><i class="mdi mdi-calendar-text"></i><span class="hide-menu">Calendar </span></a>
                </li>
                <li>
                    <a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-email"></i><span class="hide-menu">Mail </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?= base_url() . 'mail/compose' ?>"><i class="mdi mdi-plus"></i> Compose</a></li>
                        <li><a href="<?= base_url() . 'mail/inbox' ?>"><i class="fa fa-circle-o"></i> Inbox</a></li>
                        <li><a href="<?= base_url() . 'mail/sent' ?>"><i class="fa fa-circle-o"></i> Sent</a></li>
                        <li><a href="<?= base_url() . 'mail/drafts' ?>"><i class="fa fa-circle-o"></i> Drafts</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>