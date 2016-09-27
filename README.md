## Laravel-Zurb-Foundation (Boilerplate)

A boilerplate using Laravel v5.3 and Foundation 6.
All blade views have been re-styled for Foundation 6 for sites.
Elixir is configured to compile all the individual components in order to add a bit of flexibility in making custom modifications to the framework. 

<br>

**Jquery**, **Node-Sass** and **Foundation** are added as devDependencies in the node packagage.json and can be installed via **npm**:

    npm install

<br>

Foundation is copied to the "resources/assets/(scss/js)" directory the first time you run gulp:

    from node_modules => resources/assets/scss/foundation

<br>

    from node_modules => resources/assets/js/foundation

<br>

**NOTE:** If you plan on making modifications to the foundation scss files, you should outcomment following from the gulpfile after you ran it once.

```
    .copy(
        './node_modules/foundation-sites/scss', 
        'resources/assets/scss/foundation'
    )

    .copy(
        './node_modules/foundation-sites/js',
        'resources/assets/js/foundation'
        )
```

<br>

**Housekeeping:**

The main "app.scss" and "gulpfile.js" files are pre-configured to import foundation scss and js, and include a full list of the individual components which make it easy to add/remove to the mix. 

<br>

* resources/assets/scss/app.scss:

```
    /// Import Foundation 6 for sites
    @import 'foundation/foundation';

    /// Foundation components
    @include foundation-global-styles;
    @include foundation-grid;
    @include foundation-flex-grid;
    @include foundation-typography;
    @include foundation-button;
    ...
```

<br>

* gulpfile.js:

```
    /// Foundation 6 core
    'foundation/foundation.core.js',

    /// Foundation 6 components
    'foundation/foundation.abide.js',
    'foundation/foundation.accordion.js',
    'foundation/foundation.accordionMenu.js',
    'foundation/foundation.drilldown.js',
    'foundation/foundation.dropdown.js',
    'foundation/foundation.dropdownMenu.js',
    ...
```

<br>

Boilerplate helper samples for easy prototyping located in **App\Helpers**, additionally the **Helper.php** is being autoloaded:

    "files": [
            "app/Zen/Helpers/Helper.php"
        ]

<br>

**Minor modifications:**

* Application name can be set in .env using APP_NAME
* Foundation powered views (Welcome, auth view, error views)
* Versioning of css and js files (added in the master blade partial)

<br>

**Feel free to use at will!**

<br>

### Built on top of Laravel - The PHP Framework For Web Artisans

For more information visit [Laravel website](http://laravel.com/docs).

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).