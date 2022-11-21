// /**
//  * Eslint config file
//  * as configured in package.json under eslintConfig.extends
//  *
//  * @docs BabelJS: https://babeljs.io/
//  * @docs Webpack babel-loader: https://webpack.js.org/loaders/babel-loader/
//  * @docs @wordpress/eslint-plugin : https://www.npmjs.com/package/@wordpress/eslint-plugin
//  * @since 1.0.0
//  */
module.exports = {
    parser: "@babel/eslint-parser",
    env: {
        "es6": true,
        "browser": true,
        "node": true,
        "jquery": true,
        "amd": true,
    },
    parserOptions: {
        ecmaFeatures: {
            jsx: true,
        },
        ecmaVersion: 12,
        sourceType: 'module',
    },
    extends: ["eslint:recommended", "plugin:@wordpress/eslint-plugin/recommended"],
    rules: {},
    globals: {
        "wp": true,
        "jQuery": true,
        'react': true
    },
    ignorePatterns: [
        "tests/**/*.js",
        "temp.js",
        "/vendor/**/**/*.js",
        "/node_modules/**/**/*.js"
    ],
}


// module.exports = {
//     env: {
//         browser: true,
//         es2021: true,
//     },
//     extends: [
//         'plugin:react/recommended',
//         'airbnb',
//     ],
//     parser: 'babel-eslint',
//     parserOptions: {
//         ecmaFeatures: {
//             jsx: true,
//         },
//         ecmaVersion: 12,
//         sourceType: 'module',
//     },
//     plugins: [
//         'react',
//         "jQuery"
//     ],
//     rules: {
//     },
// };
