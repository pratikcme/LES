<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="<?= base_url() ?>super_admin/dashboard"> <img class="side-logo" src="<?= base_url() ?>public/super_admin/assets/img/logo.svg" style="width: 220px;"><br>
            <span class="logo-name">LES</span>
        </a>
    </div>
    <div class="sidebar-user">
        <!-- <div class="sidebar-user-picture">
              <img alt="image" src="<?= base_url() ?>public/admin/assets/img/userbig.png">
            </div>
            <div class="sidebar-user-details">
              <div class="user-name">Sarah Smith</div>
              <div class="user-role">Administrator</div>
            </div> -->
    </div>
    <ul class="sidebar-menu">
        <li class="<?php if ($this->uri->segment(2) == 'dashboard') { ?> active <?php } ?>">
            <a href="<?= base_url() ?>super_admin/dashboard" class="nav-link "><i style="margin-left: 8px" data-feather="monitor"></i><span>Dashboard</span></a>
        </li>
        <li class="<?php if ($this->uri->segment(2) == 'vendors' && $this->uri->segment(3) != 'version') { ?> active <?php } ?>">
            <a href="<?= base_url() ?>super_admin/vendors" class="nav-link "><i class="far fa-check-square"></i><span>Vendors</span></a>
        </li>
        <li class="<?php if ($this->uri->segment(2) == 'branches') { ?> active <?php } ?>">
            <a href="<?= base_url() ?>super_admin/branches" class="nav-link "><i class="far fa-check-square"></i><span>Branches</span></a>
        </li>
        <li class="<?php if ($this->uri->segment(2) == 'projectConfig') { ?> active <?php } ?>">
            <a href="<?= base_url() ?>super_admin/projectConfig" class="nav-link "><i class="far fa-check-square"></i><span>Configration</span></a>
        </li>
        <li class="<?php if ($this->uri->segment(2) == 'store_type') { ?> active <?php } ?>">
            <a href="<?= base_url() ?>super_admin/store_type" class="nav-link "><i class="far fa-check-square"></i><span>Store Type</span></a>
        </li>
        <li class="<?php if ($this->uri->segment(2) == 'food_category') { ?> active <?php } ?>">
            <a href="<?= base_url() ?>super_admin/food_category" class="nav-link "><i class="far fa-check-square"></i><span>Food Category</span></a>
        </li>
        <li class="<?php if ($this->uri->segment(2) == 'themes') { ?> active <?php } ?>">
            <a href="<?= base_url() ?>super_admin/themes" class="nav-link "><i class="far fa-check-square"></i><span>
                    Themes</span></a>
        </li>
        <li class="<?php if ($this->uri->segment(3) == 'version') { ?> active <?php } ?>">
            <a href="<?= base_url() ?>super_admin/vendors/version" class="nav-link "><i class="far fa-check-square"></i><span>Update App Version</span></a>
        </li>

        <li class="dropdown <?php if ($this->uri->segment(2) == 'tax' || $this->uri->segment(3) == 'tax_type') { ?> active <?php } ?>">
            <a href="#" class="nav-link has-dropdown"><i class="fa
                    fa-percentage"></i><span>Tax</span></a>
            <ul class="dropdown-menu">

                <li><a class="nav-link <?php if ($this->uri->segment(2) == 'tax') { ?> active <?php } ?>" href="<?= base_url() ?>super_admin/tax">Tax List</a></li>
                <li><a class="nav-link <?php if ($this->uri->segment(3) == 'tax_type') { ?> active <?php } ?>" href="<?= base_url() ?>super_admin/tax/tax_type">Tax Type List</a></li>
            </ul>
        </li>

        <!-- <li class="">
              <a href="<?= base_url() ?>admin/experience" class="nav-link "><i class="far fa-file" aria-hidden="true" ></i><span>Experience level</span></a>
            </li> -->
        <!-- <li class="dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="far
                    fa-user"></i><span>Customer</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?= base_url() ?>admin/customer/add">Add New Customer</a></li>
                <li><a class="nav-link" href="<?= base_url() ?>admin/customer">Customers</a></li>
            </ul>
        </li> -->
    </ul>
</aside>