require('./bootstrap');
import Vue from "vue";
import App from "./App.vue";
import Vuetify from "vuetify";
import 'vuetify/dist/vuetify.min.css';
import router from "./routes";

Vue.use(Vuetify);

new Vue({
    el: "#app",
    router,
    vuetify: new Vuetify(),
    components: { App },
    template: "<App/>"
});

