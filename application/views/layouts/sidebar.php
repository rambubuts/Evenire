<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <div class="user-profile">
            <!-- User profile image -->
            <div class="profile-img"> <img src="<?= base_url() ?>assets/images/users/1.jpg" alt="user" /> </div>
            <!-- User profile text-->
            <div class="profile-text">
                <a href="#" class="dropdown-toggle link u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="#"></span></a>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li>
                    <a href="<?= base_url() . 'dashboard' ?>"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard </span></a>
                </li>
                <li>
                    <a class="#" href="<?= base_url() . 'accounts/' ?>" aria-expanded="false"><i class="mdi mdi-account-circle"></i><span class="hide-menu">Accounts </span></a>
                </li>
                <li>
                    <a class="#" href="<?= base_url() . 'events/' ?>" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Events </span></a>
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