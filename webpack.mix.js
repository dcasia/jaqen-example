const mix = require('laravel-mix')
const path = require('path')

const tailwindcss = require('tailwindcss')

mix.ts(path.join(__dirname, '/resources/js/Jaqen.ts'), 'public/js')
    .vue()
    .options({
        postCss: [
            tailwindcss(path.join(__dirname, './vendor/dcasia/jaqen/tailwind.config.js'))
        ]
    })
