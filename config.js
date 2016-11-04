export var path = require('path');
var yaml = require('yamljs');

// Configuration of the sf app bundles
export const { parameters } = yaml.load('app/config/parameters.yml');
export const appBundleJsDir = path.join(__dirname, parameters['app-bundle.paths']['js']);
export const appBundleCssDir = path.join(__dirname, parameters['app-bundle.paths']['css']);
// More to be added with more bundles
