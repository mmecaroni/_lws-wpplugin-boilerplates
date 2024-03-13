<?php
/********************************
 * Updates Page
 */

require_once trailingslashit(LWS_WPSETTINGS_BOILERPLATE_DIR) . 'packages/updates/view-card-updates.php';

function lws_wpsettings_boilerplate_updates_page() {
    ?>

    <section class="-ml-5 py-4 px-8 bg-white shadow-sm">
        <header class="container mx-auto">
            <h1 class="font-normal text-2xl text-slate-800">
                Updates
            </h1>
        </header>
        <hr class="my-4" />
        <p>This is the updates content.</p>
        <hr class="my-4" />
        <div class="flex flex-row gap-4">
            <?php lws_wpsettings_boilerplate_view_card_updates(); ?>
            <?php lws_wpsettings_boilerplate_view_card_updates(); ?>
            <?php lws_wpsettings_boilerplate_view_card_updates(); ?>
        </div>
    </section>

    <?php
}