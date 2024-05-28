<?php
/******************************************
 * View | Htmx Testing
 */

if (isset($_POST['htmx_test'])) { echo "HTMX is working!"; exit; }

function lws_wpsettings_theme_view_htmx_testing() {
  ?>

  <section class="p-4 w-1/3 bg-slate-200 border border-slate-300 rounded">
    <h2 class="text-xl text-slate-800">HTMX Testing</h2>
    <hr class="my-4" />
    <div
      hx-post="?page=your-plugin-page-slug" 
      hx-trigger="click" 
      hx-include="[name='htmx_test']" hx-target="#htmx-response">
      <button type="button">Click me to test HTMX</button>
      <input type="hidden" name="htmx_test" value="1">
    </div>
    <div id="htmx-response"></div>
  </section>

  <?php
}