var Encore = require('@symfony/webpack-encore');

Encore
    // directory where compiled assets will be stored
    .setOutputPath('public/template/')
    // public path used by the web server to access the output path
    .setPublicPath('http://127.0.0.1/Asterion/public/template')
    // only needed for CDN's or sub-directory deploy
    .setManifestKeyPrefix('template/')

    /*
     * ENTRY CONFIG
     *
     * Add 1 entry for each "page" of your app
     * (including one that's included on every page - e.g. "app")
     *
     * Each entry will result in one JavaScript file (e.g. app.js)
     * and one CSS file (e.g. app.css) if you JavaScript imports CSS.
     */
    .addEntry('desktop', './assets/scss/desktop.scss')
    //.addEntry('app', './assets/js/app.js')
    //.addEntry('page2', './assets/js/page2.js')

    // will require an extra script tag for runtime.js
    // but, you probably want this, unless you're building a single-page app
    .enableSingleRuntimeChunk()

    .cleanupOutputBeforeBuild()
    .enableSourceMaps(!Encore.isProduction())
    // enables hashed filenames (e.g. app.abc123.css)
    //.enableVersioning(Encore.isProduction())

    // uncomment if you use TypeScript
    //.enableTypeScriptLoader()

    // uncomment if you use Sass/SCSS files
    .enableSassLoader()

    // uncomment if you're having problems with a jQuery plugin
    //.autoProvidejQuery()

    .configureFilenames({
        js: '[name].js',
        images: 'img/[name].[ext]',
        fonts: 'fonts/[name].[ext]'
    })

    .copyFiles({
        from: './assets/img',
        to: 'img/[path][name].[ext]',
    })

    .copyFiles({
        from: './assets/fonts',
        to: 'fonts/[path][name].[ext]',
    })
;


module.exports = Encore.getWebpackConfig();