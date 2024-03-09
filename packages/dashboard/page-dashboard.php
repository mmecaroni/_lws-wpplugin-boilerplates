<?php
/********************************
 * Dashboard Page
 */

require_once trailingslashit(LWS_WPSETTINGS_BOILERPLATE_DIR) . 'packages/dashboard/view-htmx-testing.php';
require_once trailingslashit(LWS_WPSETTINGS_BOILERPLATE_DIR) . 'packages/dashboard/view-alpinejs-testing.php';

function lws_wpsettings_boilerplate_dashboard_page() {
    ?>

    <div class="-ml-5 py-4 px-8 min-h-full bg-white shadow-sm">
        <div class="container mx-auto">
            <h1 class="font-normal text-2xl text-slate-800">
                Dashboard <small><?php echo LWS_WPSETTINGS_BOILERPLATE_VERSION; ?></small>
            </h1>
        </div>
        <hr class="my-4" />
        <p>This is the dashboard content.</p>
        <hr class="my-4" />

        <div class="flex flex-row gap-4">
            <?php lws_wpsettings_boilerplate_view_htmx_testing(); ?>
            <?php lws_wpsettings_boilerplate_view_alpinejs_testing(); ?>
        </div>
    </div>

    <?php
}