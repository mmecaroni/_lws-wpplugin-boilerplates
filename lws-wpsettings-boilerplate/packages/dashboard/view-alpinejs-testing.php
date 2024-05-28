<?php
/******************************************
 * View | AlpineJS Testing
 */

function lws_wpsettings_boilerplate_view_alpinejs_testing() {
  ?>

  <section class="p-4 w-1/3 bg-slate-200 border border-slate-300 rounded">
    <h2 class="text-xl text-slate-800">AlpineJS Testing</h2>
    <hr class="my-4" />

    <div x-data="{ open: false }">
        <button @click="open = !open">Toggle Text Visibility</button>
        <p x-show="open">Alpine.js is working!</p>
    </div>

  </section>

  <?php
}