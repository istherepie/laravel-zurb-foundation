/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

const elixir = require('laravel-elixir');

/// Disabled laravel-elixir-vue requirement
// require('laravel-elixir-vue');

elixir(mix => {
      mix
      .copy(
            './node_modules/foundation-sites/scss', 
            'resources/assets/scss/foundation'
      )

      .copy(
            './node_modules/foundation-sites/js',
            'resources/assets/js/foundation'
      )

      .sass(
            './resources/assets/scss/app.scss', 
            'public/css/style.css'
      )

      .webpack([
            /// Jquery
            './node_modules/jquery/src/jquery.js',

            /// Vue components
            //'vue.js',

            /// Foundation 6 core
            'foundation/foundation.core.js',

            /// Foundation 6 components
            'foundation/foundation.abide.js',
            'foundation/foundation.accordion.js',
            'foundation/foundation.accordionMenu.js',
            'foundation/foundation.drilldown.js',
            'foundation/foundation.dropdown.js',
            'foundation/foundation.dropdownMenu.js',
            'foundation/foundation.equalizer.js',
            'foundation/foundation.interchange.js',
            'foundation/foundation.magellan.js',
            'foundation/foundation.offcanvas.js',
            'foundation/foundation.orbit.js',
            'foundation/foundation.responsiveMenu.js',
            'foundation/foundation.responsiveToggle.js',
            'foundation/foundation.reveal.js',
            'foundation/foundation.slider.js',
            'foundation/foundation.sticky.js',
            'foundation/foundation.tabs.js',
            'foundation/foundation.toggler.js',
            'foundation/foundation.tooltip.js',
            'foundation/foundation.util.box.js',
            'foundation/foundation.util.keyboard.js',
            'foundation/foundation.util.mediaQuery.js',
            'foundation/foundation.util.motion.js',
            'foundation/foundation.util.nest.js',
            'foundation/foundation.util.timerAndImageLoader.js',
            'foundation/foundation.util.touch.js',
            'foundation/foundation.util.triggers.js',
           
      /// Combine in public/js/app.js
      ], 
            'public/js/app.js'
      )

      .version([
            'css/style.css',
            'js/app.js'
      ]);
});
