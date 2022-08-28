/**
 * PUBLIC MAIN SCRIPT
 */
import ReactDOM from 'react-dom';
import React from 'react';
import ReactAppThemeOne from './react/ReactAppThemeOne';
import ReactWpApp1 from './react/ReactWpApp1';

import VanillaJavascriptTest from './VanillaJavascriptTest';

class App {
  constructor() {
    console.info('ES8 REACT PLUGIN APP!');
    // LUNCHING REACT APP THEME ONE
    const appThemeOne = document.getElementById('REACT-PLUGIN-APP');
    if (appThemeOne) {
      ReactDOM.render(<ReactAppThemeOne />, appThemeOne);
    }

    // LUNCHING REACT ROUTER APP
    const reactWpApp1 = document.getElementById('REACT-ROUTER-APP');
    if (reactWpApp1) {
      ReactDOM.render(<ReactWpApp1 />, reactWpApp1);
    }

    // VENILLA JAVASCRIPT OR JQUERY
    new VanillaJavascriptTest();
  }
}

export default App;
