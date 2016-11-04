var webpack = require('webpack');

import * as conf from './config';

var babelConf = {
    presets: [
        "es2015",
        "react"
    ].map(function(name) { return require.resolve("babel-preset-"+name) })
};

var config = {
    entry: conf.path.join(conf.appBundleJsDir, '/index.js'),
    output: {
        path: conf.path.join(__dirname, 'web/js'),
        filename: 'bundle.js'
    },
    module : {
        loaders : [
            {
                test : /\.jsx?/,
                include : conf.appBundleJsDir,
                exclude: /node_modules/,
                loader: 'babel',
                query: babelConf
            },
            {
                test: /\.css$/,
                loader: 'style!css'
            }
        ]
    }
};

module.exports = config;
