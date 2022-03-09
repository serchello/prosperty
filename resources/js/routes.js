import Vue from "vue";
import Router from "vue-router";

const routerOptions = [
  { path: "/", component: "index" },
  { path: "/filter", component: "filter" }
];

const routes = routerOptions.map(route => {
  return {
    ...route,
    component: () => import(`./components/${route.component}`)
  };
});

Vue.use(Router);

export default new Router({
  mode: "history",
  routes
});
