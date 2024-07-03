/*export default {
    plugins: {
        tailwindcss: {},
        autoprefixer: {},
    },
};*/
module.exports = {
    plugins: [
      require('tailwindcss'),
      require('autoprefixer'),
    ]
  }
 /*
 faire la commande:
 $ npm cache clean --force
Pour empêcher que notre application web n'utilise les
 modules CommonJS par défaut, vous devez configurer PostCSS 
 pour utiliser les modules ES6 (aussi appelés modules 
 ECMAScript) à la place.
*/
