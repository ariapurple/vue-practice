window.Vue = require('vue');

import Vuex from "vuex";

// Import the `getField` getter and the `updateField`
// mutation function from the `vuex-map-fields` module.
import { getField, updateField } from 'vuex-map-fields';

Vue.use(Vuex);

export const store = new Vuex.Store({
  state: {},
  mutations: {
      // Add the `getField` getter to the
      // `getters` of your Vuex store instance.
      getField,
  },
  getters: {
      // Add the `updateField` mutation to the
      // `mutations` of your Vuex store instance.
      updateField,
  }
});
