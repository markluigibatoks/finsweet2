const path = require('path');

module.exports = {
  entry: {
    index: './src/index.js',
    editor: './src/editor.js'
  },
  output: {
    path: path.resolve(__dirname, 'build'),
    filename: '[name].js'
  },
  resolve: {
    extensions: ['.js']
  },
  mode: 'production', // or 'production'
  devtool: false,
};
