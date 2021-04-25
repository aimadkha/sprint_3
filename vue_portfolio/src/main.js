import Vue from "vue";
import App from "./App.vue";
import router from "./router";
import VueAnimateOnScroll from '/node_modules/vue-animate-onscroll';
import anime from 'animejs';


import "bootstrap/dist/css/bootstrap.css";
import "bootstrap-vue/dist/bootstrap-vue.css";

Vue.config.productionTip = false;
Vue.use(VueAnimateOnScroll)


new Vue({
  router,
  render: (h) => h(App),
}).$mount("#app");