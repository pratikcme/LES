<style>
    .demo a.active i {
        trandform: rotate(-45deg) !important
    }

    .demo a i {
        trandform: rotate(0deg) !important
    }
</style>
<li>
    <a class="<?php if ($this->uri->segment(1) == 'admin' && $this->uri->segment(2) == 'dashboard') { ?> active <?php } ?>" href="<?php echo base_url() . 'admin/dashboard/'; ?>">
        <i class="fa fa-dashboard"></i>
        <span>Dashboard</span>
    </a>
</li>
<li>
    <a class="<?php if ($this->uri->segment(1) == 'vendor') { ?> active <?php } ?>" href="<?php echo base_url() . 'vendor/vendor_list'; ?>">
        <i class="fa fa-tree"></i>
        <span>Branch Setting</span>
    </a>
</li>
<li>
    <a class="<?php if ($this->uri->segment(1) == 'admins' && ($this->uri->segment(2) == 'privacy_policy' || $this->uri->segment(2) == 'return_refund' || $this->uri->segment(2) == 'term')) { ?> active <?php } ?>" href="#">
        <i class="fa fa-users"></i>
        <span>Terms</span>
        <i class="fas fa-chevron-right <?= ($this->uri->segment(1) == 'admins' && ($this->uri->segment(2) == 'privacy_policy' || $this->uri->segment(2) == 'return_refund' || $this->uri->segment(2) == 'term')) ? 'rotate' : '' ?>"></i>
    </a>
    <ul>
        <li>
            <a class="<?php if ($this->uri->segment(2) == 'privacy_policy') { ?> active <?php } ?>" href="<?php echo base_url() . 'admins/privacy_policy'; ?>">
                <i class="fa fa-product-hunt"></i>
                <span>privacy policy</span>
            </a>
        </li>
        <li>
            <a class="<?php if ($this->uri->segment(2) == 'return_refund') { ?> active <?php } ?>" href="<?php echo base_url() . 'admins/return_refund'; ?>">
                <i class="fa fa-envelope"></i>
                <span>Return & Refund</span>
            </a>
        </li>
        <li>
            <a class="<?php if ($this->uri->segment(2) == 'term') { ?> active <?php } ?>" href="<?php echo base_url() . 'admins/term'; ?>">
                <i class="fa fa-file"></i>
                <span>Terms & conditions</span>
            </a>
        </li>
    </ul>
</li>

<li style="display: none;">
    <a class="<?php if ($this->uri->segment(2) == 'faq') { ?> active <?php } ?>" href="<?php echo base_url() . 'admins/faq'; ?>">
        <i class="fa fa-file"></i>
        <span>FAQ</span>
    </a>
</li>
<li>
    <a class="<?php if ($this->uri->segment(2) == 'about') { ?> active <?php } ?>" href="#">
        <i class="fa fa-users"></i>
        <span>About</span>
        <i class="fas fa-chevron-right <?= ($this->uri->segment(2) == 'about') ? 'rotate' : '' ?>"></i>
    </a>
    <ul>
        <li>
            <a class="<?php if ($this->uri->segment(2) == 'about' && $this->uri->segment(3) == 'about_section_one') { ?> active <?php } ?>" href="<?php echo base_url() . 'admins/about/about_section_one'; ?>">
                <i class="fa fa-users"></i>
                <span>About content</span>
            </a>
        </li>
        <li>
            <a class="<?php if ($this->uri->segment(2) == 'about' && $this->uri->segment(3) == 'about_section_two' || $this->uri->segment(2) == 'add') { ?> active <?php } ?>" href="<?php echo base_url() . 'admins/about/about_section_two'; ?>">
                <i class="fa fa-university"></i>
                <span>Testimonials</span>
            </a>
        </li>
        <li>
            <a class="<?php if ($this->uri->segment(2) == 'about' && $this->uri->segment(3) == 'banner' || $this->uri->segment(2) == 'set_profit') { ?> active <?php } ?>" href="<?php echo base_url() . 'admins/about/banner'; ?>">
                <i class="fa fa-university"></i>
                <span>About Banner</span>
            </a>
        </li>
        <li>
            <a class="<?php if ($this->uri->segment(2) == 'about' && $this->uri->segment(3) == 'about_app') { ?> active <?php } ?>" href="<?php echo base_url() . 'admins/about/about_app'; ?>">
                <i class="fa fa-university"></i>
                <span>About App</span>
            </a>
        </li>
    </ul>
</li>
<!-- <li>
    <a class="<?php if ($this->uri->segment(2) == 'messagelist' || $this->uri->segment(2) == 'contactinfo') { ?> active <?php } ?>" href="#">
        <i class="fa fa-phone"></i>
        <span>Contact</span>
        <i class="fas fa-chevron-right <?= ($this->uri->segment(2) == 'messagelist' || $this->uri->segment(2) == 'contactinfo') ? 'rotate' : '' ?>"></i>
    </a>
    <ul>
        <li style="display: none;">
            <a class="<?php if ($this->uri->segment(2) == 'contactinfo') { ?> active <?php } ?>" href="<?php echo base_url() . 'admins/contactinfo'; ?>">
                <i class="fa fa-"></i>
                <span>Contact info</span>
            </a>
        </li>
        <li>
            <a class="<?php if ($this->uri->segment(2) == 'messagelist' || $this->uri->segment(2) == 'add') { ?> active <?php } ?>" href="<?php echo base_url() . 'admins/messagelist'; ?>">
                <i class="fa fa-message"></i>
                <span>User Message List</span>
            </a>
        </li>
    </ul>
</li> -->
<li style="display:none">
    <a class="<?php if ($this->uri->segment(1) == 'city' && $this->uri->segment(2) == 'city_list' || $this->uri->segment(2) == 'city_profile') { ?> active <?php } ?>" href="<?php echo base_url() . 'city/city_list/'; ?>">
        <i class="fa fa-building"></i>
        <span>City</span>
    </a>
</li>
<li>
    <a class="<?php if ($this->uri->segment(1) == 'web_setting') { ?> active <?php } ?>" href="<?php echo base_url() . 'web_setting'; ?>">
        <i class="fa fa-tree"></i>
        <span>Web Setting</span>
    </a>
</li>

<li>

    <a class="<?php if ($this->uri->segment(1) == 'price_list' || $this->uri->segment(1) == 'package' || $this->uri->segment(1) == 'weight') { ?> active <?php } ?>" href="#">
        <i class="fa fa-users"></i>
        <span>Product Setting</span>
        <i class="fas fa-chevron-right <?= ($this->uri->segment(1) == 'price_list' || $this->uri->segment(1) == 'package' || $this->uri->segment(1) == 'weight') ? 'rotate' : '' ?>"></i>
    </a>
    <ul>

        <li>
            <a class="<?php if ($this->uri->segment(1) == 'price_list' || $this->uri->segment(2) == 'price' || ($this->uri->segment(1) == 'admin' && $this->uri->segment(2) == 'price_list') || ($this->uri->segment(1) == 'admin' && $this->uri->segment(2) == 'price_profile') || ($this->uri->segment(1) == 'admin' && $this->uri->segment(2) == 'discount_list') || ($this->uri->segment(1) == 'admin' && $this->uri->segment(2) == 'discount_profile')) { ?> active <?php } ?>" href="#">
                <i class="fa fa-users"></i>
                <span>Filter</span>
                <i class="fas fa-chevron-right <?= $this->uri->segment(1) == 'price_list' || $this->uri->segment(2) == 'price' || ($this->uri->segment(1) == 'admin' && $this->uri->segment(2) == 'price_list') || ($this->uri->segment(1) == 'admin' && $this->uri->segment(2) == 'price_profile') || ($this->uri->segment(1) == 'admin' && $this->uri->segment(2) == 'discount_list') || ($this->uri->segment(1) == 'admin' && $this->uri->segment(2) == 'discount_profile') ? 'rotate' : '' ?>"></i>
            </a>

            <ul>
                <li>
                    <a class="<?php if ($this->uri->segment(1) == 'price_list' && $this->uri->segment(2) == 'price' || $this->uri->segment(2) == 'price_list' || $this->uri->segment(2) == 'price_profile') { ?> active <?php } ?>" href="<?php echo base_url() . 'price_list/price/'; ?>">
                        <i class="fa fa-money"></i>
                        <span>Filter Price</span>
                    </a>
                </li>

                <li>
                    <a class="<?php if ($this->uri->segment(2) == 'discount_list' || $this->uri->segment(2) == 'discount_profile') { ?> active <?php } ?>" href="<?php echo base_url() . 'admin/discount_list/'; ?>">
                        <i class="fa fa-tags"></i>
                        <span>Filter Discount</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a class="<?php if ($this->uri->segment(1) == 'package' || $this->uri->segment(2) == 'package_list' || $this->uri->segment(2) == 'package_profile') { ?> active <?php } ?>" href="<?php echo base_url() . 'package'; ?>">
                <i class="fa fa-cubes"></i>
                <span>Package</span>
            </a>
        </li>

        <li>
            <a class="<?php if ($this->uri->segment(1) == 'weight' && $this->uri->segment(2) == 'weight_list' || $this->uri->segment(2) == 'weight_profile') { ?> active <?php } ?>" href="<?php echo base_url() . 'weight/weight_list/'; ?>">
                <i class="fa fa-balance-scale"></i>
                <span>Unit</span>
            </a>
        </li>

    </ul>
</li>

<li style="display: none">
    <a class="<?php if ($this->uri->segment(1) == 'subscription') { ?> active <?php } ?>" href="<?php echo base_url() . 'subscription'; ?>">
        <i class="fa fa-envelope"></i>
        <span>Subcription</span>
    </a>
</li>
<li>
    <a class="<?php if ($this->uri->segment(2) == 'user_list' || $this->uri->segment(2) == 'messagelist' || $this->uri->segment(1) == 'feedback') { ?> active <?php } ?>" href="#">
        <i class="fa fa-cog"></i>
        <span>Manage Users </span>
        <i class="fas fa-chevron-right <?= ($this->uri->segment(2) == 'user_list' || $this->uri->segment(2) == 'messagelist' || $this->uri->segment(1) == 'feedback') ? 'rotate' : '' ?>"></i>
    </a>
    <ul>
        <li>
            <a class="<?php if ($this->uri->segment(1) == 'admin' && $this->uri->segment(2) == 'user_list') { ?> active <?php } ?>" href="<?php echo base_url() . 'admin/user_list/'; ?>">
                <i class="fa fa-user"></i>
                <span>User List</span>
            </a>
        </li>
        <li>
            <a class="<?php if ($this->uri->segment(2) == 'messagelist' || $this->uri->segment(2) == 'add') { ?> active <?php } ?>" href="<?php echo base_url() . 'admins/messagelist'; ?>">
                <i class="fas fa-comment-dots"></i>
                <span>User Message List</span>
            </a>
        </li>
        <li>
            <a class="<?php if ($this->uri->segment(1) == 'feedback') { ?> active <?php } ?>" href="<?php echo base_url() . 'feedback'; ?>">
                <i class="fa fa-file" aria-hidden="true"></i>
                <span>Feedback</span>
            </a>
        </li>
    </ul>
</li>
<li>
    <a class="<?php if ($this->uri->segment(1) == 'firebase') { ?> active <?php } ?>" href="<?php echo base_url() . 'firebase'; ?>">
        <i class="fa fa-credit-card" aria-hidden="true"></i>
        <span>Common keys</span>
    </a>
</li>
<li>
    <a class="<?php if ($this->uri->segment(1) == 'setting' || $this->uri->segment(1) == 'delivery_charge' || $this->uri->segment(1) == 'time_slot' || $this->uri->segment(1) == 'setting' || $this->uri->segment(1) == 'setting') { ?> active <?php } ?>" href="#">
        <i class="fa fa-cog"></i>
        <span>Settings</span>
        <i class="fas fa-chevron-right <?= ($this->uri->segment(1) == 'setting' || $this->uri->segment(1) == 'delivery_charge' || $this->uri->segment(1) == 'time_slot' || $this->uri->segment(1) == 'setting' || $this->uri->segment(1) == 'setting') ? 'rotate' : '' ?>"></i>
    </a>
    <ul>

        <li>
            <a class="<?php if ($this->uri->segment(1) == 'setting') { ?> active <?php } ?>" href="<?php echo base_url() . 'setting'; ?>">
                <i class="fa fa-cog"></i>
                <span>Additional Setting</span>
            </a>
        </li>


        <!-- <li>
            <a class="<?php if ($this->uri->segment(1) == 'setting' && $this->uri->segment(2) == 'profit_percent') { ?> active <?php } ?>" href="<?php echo base_url() . 'setting/profit_percent/'; ?>">
                <i class="fa fa-cog"></i>
                <span>Profit Percentage</span>
            </a>
        </li> -->
        <li style="display: none;">
            <a class="<?php if ($this->uri->segment(1) == 'setting' && $this->uri->segment(2) == 'subscription') { ?> active <?php } ?>" href="<?php echo base_url() . 'setting/subscription/'; ?>">
                <i class="fa fa-cog"></i>
                <span>Set Subscription Plan</span>
            </a>
        </li>



        <li>
            <a class="<?php if ($this->uri->segment(1) == 'setting' || $this->uri->segment(1) == 'delivery_charge' || $this->uri->segment(1) == 'time_slot' || $this->uri->segment(1) == 'setting' || $this->uri->segment(1) == 'setting') { ?> active <?php } ?>" href="#">
                <i class='fa-solid fa-receipt'></i>

                <span>Delivery & Pickup</span>
                <i class="fas fa-chevron-right <?= ($this->uri->segment(1) == 'setting' || $this->uri->segment(1) == 'delivery_charge' || $this->uri->segment(1) == 'time_slot' || $this->uri->segment(1) == 'setting' || $this->uri->segment(1) == 'setting') ? 'rotate' : '' ?>"></i>
            </a>
            <ul>
                <li>
                    <a class="<?php if ($this->uri->segment(1) == 'delivery_charge') { ?>< active ><?php } ?><" href="<?php echo base_url() . 'delivery_charge/'; ?>">
                        <i class="fa fa-cog"></i>
                        <span>Delivery Charge</span>
                    </a>
                </li>
                <li>
                    <a class="<?php if ($this->uri->segment(1) == 'time_slot' && $this->uri->segment(2) == 'time_slot_list' || $this->uri->segment(2) == 'time_slot_profile') { ?> active <?php } ?>" href="<?php echo base_url() . 'time_slot/time_slot_list/'; ?>">
                        <i class="fa fa-clock-o"></i>
                        <span>Time Slot</span>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
</li>
<!-- <li>
    <a class="<?php if ($this->uri->segment(1) == 'banners') { ?> active <?php } ?>" href="#">
        <i class="fa fa-picture-o"></i>
        <span>Banner</span>
        <i class="fas fa-chevron-right <?= ($this->uri->segment(1) == 'banners') ? 'rotate' : '' ?>"></i>
    </a>
    <ul>
        <li>
            <a class="<?php if ($this->uri->segment(2) == 'banners') { ?> active <?php } ?>" href="<?php echo base_url() . 'banners'; ?>">
                <i class="fa fa-picture-o"></i>
                <span>Web & App Banner</span>
            </a>
        </li>
    </ul>
</li> -->
<li>
    <a class="<?php if ($this->uri->segment(1) == 'banners') { ?> active <?php } ?>" href="<?php echo base_url() . 'banners'; ?>">
        <i class="fa fa-picture-o"></i>
        <span>Web & App Banner</span>
    </a>
</li>
<!-- <li>
    <a class="<?php if ($this->uri->segment(1) == 'offer') { ?> active <?php } ?>" href="#">
        <i class="fa fa-picture-o"></i>
        <span>Offer</span>
        <i class="fas fa-chevron-right <?= ($this->uri->segment(1) == 'offer') ? 'rotate' : '' ?>"></i>
    </a>
    <ul>
        <li>
            <a class="<?php if ($this->uri->segment(2) == 'offer') { ?> active <?php } ?>" href="<?php echo base_url() . 'offer'; ?>">
                <i class="fa fa-crosshairs"></i>
                <span>Offer</span>
            </a>
        </li>
    </ul>
</li> -->

<li>
    <a class="<?php if (($this->uri->segment(1) == 'offer' || $this->uri->segment(1) == 'promocode_manage' || $this->uri->segment(1) == 'cart_amount_based_discount')) { ?> active <?php } ?>" href="#">
        <i class="fa fa-tag fa-lg"></i>
        <span>Discount</span>
        <i class="fas fa-chevron-right <?= ($this->uri->segment(1) == 'admins' && ($this->uri->segment(1) == 'offer' || $this->uri->segment(1) == 'promocode_manage' || $this->uri->segment(1) == 'cart_amount_based_discount')) ? 'rotate' : '' ?>"></i>
    </a>
    <ul>
        <li>
            <a class="<?php if ($this->uri->segment(1) == 'offer') { ?> active <?php } ?>" href="<?php echo base_url() . 'offer'; ?>">
                <i class="fa fa-crosshairs"></i>
                <span>Offer</span>
            </a>
        </li>
        <li>
            <a class="<?php if ($this->uri->segment(1) == 'promocode_manage') { ?> active <?php } ?>" href="<?php echo base_url() . 'promocode_manage'; ?>">
                <i class="fa fa-code" aria-hidden="true"></i>
                <span>Manage Promocode</span>
            </a>
        </li>
        <li>
            <a class="<?php if ($this->uri->segment(1) == 'cart_amount_based_discount') { ?> active <?php } ?>" href="<?php echo base_url() . 'cart_amount_based_discount'; ?>">
                <i class="fa fa-percentage" aria-hidden="true"></i>
                <span>Cart Based Discount</span>
            </a>
        </li>
    </ul>
</li>


<li>
    <a class="<?php if ($this->uri->segment(1) == 'pushNotification') { ?> active <?php } ?>" href="<?php echo base_url() . 'pushNotification'; ?>">
        <i class="fa fa-file" aria-hidden="true"></i>
        <span>Push Notification</span>
    </a>
</li>

<li>
    <a class="<?php if ($this->uri->segment(1) == 'live_chat') { ?> active <?php } ?>" href="<?php echo base_url() . 'live_chat'; ?>">
        <i class="fa fa-file" aria-hidden="true"></i>
        <span>Live Chat Credentials</span>
    </a>
</li>
<li>
    <a class="<?php if ($this->uri->segment(1) == 'smsgateway') { ?> active <?php } ?>" href="<?php echo base_url() . 'smsgateway'; ?>">
        <i class="fa fa-credit-card" aria-hidden="true"></i>
        <span>Sms gateway</span>
    </a>
</li>