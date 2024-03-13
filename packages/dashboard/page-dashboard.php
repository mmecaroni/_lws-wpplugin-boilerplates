<?php
/********************************
 * Dashboard Page
 */

require_once trailingslashit(LWS_WPSETTINGS_BOILERPLATE_DIR) . 'packages/dashboard/view-htmx-testing.php';
require_once trailingslashit(LWS_WPSETTINGS_BOILERPLATE_DIR) . 'packages/dashboard/view-alpinejs-testing.php';

function lws_wpsettings_boilerplate_dashboard_page() {
    ?>

    <!-- <section class="-ml-5 py-4 px-8 min-h-screen bg-white shadow-sm"> -->
    <section class="-ml-5 py-4 px-8 bg-white shadow-sm">
        <header class="flex justify-between items-center container mx-auto">
            <h1 class="font-normal text-2xl text-slate-900">Dashboard</h1>
            <small class="px-2 text-sm text-slate-900 bg-slate-200 border border-slate-300 rounded">
                <?php echo LWS_WPSETTINGS_BOILERPLATE_VERSION; ?>
            </small>
        </header>
        <hr class="my-4" />
        <p>This is the dashboard content.</p>
        <hr class="my-4" />

        <div class="flex flex-row gap-4">
            <?php lws_wpsettings_boilerplate_view_htmx_testing(); ?>
            <?php lws_wpsettings_boilerplate_view_alpinejs_testing(); ?>
        </div>
    </section>

    <?php
}