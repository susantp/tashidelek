let mix = require('laravel-mix');
mix.disableNotifications();

mix.options({
    autoprefixer: {remove: false}
});
mix.webpackConfig(webpack => {
    return {
        plugins: [
            new webpack.DefinePlugin({
                __VUE_OPTIONS_API__: true,
                __VUE_PROD_DEVTOOLS__: false,
            }),
        ],
    }
})

mix.override((config) => {
    delete config.watchOptions;
});
// mix.js("resources/js/src/libraries", "public/js/app.js")
// mix.extract(["jquery", "@fingerprintjs/fingerprintjs", "sweetalert2", "lodash", "vue", "vuex", "@vue-stripe/vue-stripe", "@stripe/stripe-js"])
// mix.extract()
if (process.env.section) {
    require(`${__dirname}/webpack.mix.${process.env.section}.js`);
}
