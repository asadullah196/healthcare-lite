<?php

/**
 * Bootsrap calling here
 */
wp_enqueue_style('shc-admin-bootstrap');
wp_enqueue_style('shc-admin-style');

echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">';

?>


<div class="wrap">
    <div class="admin-heading row">
        <h1 class="wp-heading-inline"><?php _e('Admin Dashboard!', 'healthcare-lite'); ?></h1>
        <br /><br /><br />
    </div>
    <div class="admin-topmenu">
        <div class="row">
            <div class="text-white col-md-3 admin-dashboard-card">
                <div class="row">
                    <div class="col-md-3">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="col-md-9">
                        <h1><span>Total Patients</h1>
                        <p>05</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="admin-quickaction"></div>
    <div class="admin-analytics"></div>
    <div class="admin-footer"></div>

    <h1 class="madamf">Sorry Doctor Bhai!</h1>;
</div>