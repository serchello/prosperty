<template>
  <v-app>
    <Navbar titleStr="Prosperty" :links="links" />
    <v-main>
      <router-view />
    </v-main>
  </v-app>
</template>

<script>
import { Navbar } from "vuetify-nav";
export default {
  name: "App",
  components: { Navbar },
  data: () => ({
    links: [
      { icon: "home", text: "Home", route: "/" },
      { icon: "face", text: "Filter", route: "/filter" },
    ],
  }),
};
</script>
<style>
</style>
