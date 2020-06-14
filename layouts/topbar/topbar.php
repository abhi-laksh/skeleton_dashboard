<div class="topbar py-2 px-3 bg-primary2">
    <?php
        include(__DIR__."/search_box.php");
    ?>
    <nav class="topbar-nav">
        <ul>
            <li class="topbar-nav-item search">
                <button id="search-toggler-admin" class="topbar-nav-btn button-primary2">
                    <i class="fas fa-search"></i>
                </button>
            </li>
            <li class="topbar-nav-item">
                <button class="topbar-nav-btn button-primary2" id="topbar-menu-dropdown-toggler">
                    <i class="fas fa-ellipsis-v"></i>
                </button>

                <?php
                    include(__DIR__."/menu_dropdown.php");
                ?>
            </li>
            <li class="topbar-nav-item">
                <button class="topbar-nav-btn button-primary2 active" id="topbar-notify-dropdown-toggler">
                    <i class="far fa-bell"></i>
                    <!-- <i class="fas fa-bell"></i> -->
                </button>
                <!-- <span class="batch"></span> -->
                <?php
                    include(__DIR__."/notification_dropdown.php");
                ?>
            </li>
            <li class="topbar-nav-item">
                <button class="topbar-nav-btn button-primary2 " id="topbar-user-dropdown-toggler">
                    <!-- <i class="fas fa-user-tie"></i> -->
                    <!-- <span class="profile-img"></span> -->
                    <i class="far fa-user"></i>
                </button>
                <?php
                    include(__DIR__."/profile_dropdown.php");
                ?>
            </li>
        </ul>
    </nav>
</div>