const mix = require("laravel-mix");
const path = require("path");

mix.disableNotifications();
mix
    // .js("resources/js/admin/app.js", "public/js/admin/app.js").vue()
    .setPublicPath(path.normalize('public/dist/admin'))
    .js("resources/js/admin/app.js", "admin/js").vue()
    .postCss("resources/css/admin/app.css", "admin/css")
    .version()
mix.extract()
if (mix.inProduction()) {
    mix.version();
}
