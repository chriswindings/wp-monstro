// eslint-disable-next-line no-restricted-modules
const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');

const assetPath = '/assets/';
const distPath = `${assetPath}dist`;
const srcPath = `${assetPath}src`;

const baseConfiguration = {
  context: path.join(__dirname, srcPath),
  entry: {
    navbar: ['./sass/navbar.scss'],
  },
  mode: 'production',
  output: {
    filename: '[name].min.js',
    path: path.join(__dirname, distPath, '/js')
  },
  watch: true,
  plugins: [
    new CleanWebpackPlugin({
      cleanOnceBeforeBuildPatterns: [path.join(__dirname, distPath)]
    }),
    new MiniCssExtractPlugin({
      filename: '../css/[name].min.css'
    })
  ],
  module: {
    rules: [
      {
        test: /\.scss$/,
        include: /(sass)/,
        use: [
          MiniCssExtractPlugin.loader,
          'css-loader',
          'postcss-loader',
          {
            loader: 'sass-loader'
          }
        ]
      },
      {
        test: /\.js$/,
        include: /(js)/,
        use: {
          loader: 'babel-loader',
          options: {
            cacheDirectory: true,
            presets: ['@babel/preset-env']
          }
        }
      }
    ]
  }
};

module.exports = baseConfiguration;
