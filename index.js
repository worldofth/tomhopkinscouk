var styleguide = require('./component-styleguide');
styleguide({
	components: 'components',
    ext: 'html',
    data: './data',
    staticLocalDir: './resources',
    staticPath: './resources',
    stylesheets: ['css/main.css'],
    scripts: ['js/dist/index.min.js'],
});