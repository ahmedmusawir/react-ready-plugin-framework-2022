import $ from 'jquery';
import axios from 'axios';

class JlightCafeMenu {
  constructor() {
    // COLLECTING ELEMENTS
    this.getDataBtn = $('.tcb-button-link.tcb-plain-text');

    this.init();
    this.setEvents();
  }

  init = () => {
    console.info('This is from React Based Plugin Framework');
  };

  setEvents = () => {
    this.getDataBtn.on('click', this.displayDataHandler);
  };

  displayDataHandler = () => {
    alert('You clicked the box');
  };
}

export default JlightCafeMenu;
