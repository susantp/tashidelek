const mix = require("laravel-mix");
const path = require("path");

mix.disableNotifications();
mix
    // .js("resources/js/admin/app.js", "public/js/admin/app.js").vue()
    .setPublicPath(path.normalize('public/dist'))
    .js("resources/js/app.js", "js").vue()
    // .sass("resources/css/header.scss", "css/admin")
    .postCss("resources/css/app.css", "css")
    .version()
/*mix.js("resources/js/admin/app.js", "public/js/admin/app.js").vue({
    extractStyles: true,
    globalStyles: false
}).version()*/

mix.extract()
mix.webpackConfig({
    optimization: {
        providedExports: false,
        sideEffects: false,
        usedExports: false
    }
});

if (mix.inProduction()) {
    mix.version();
}
