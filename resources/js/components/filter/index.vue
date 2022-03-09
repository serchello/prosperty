<template>
  <div data-app>
    <v-container mt-2 class="grey lighten-5">
      <v-card>
        <v-card-title>
          Filter
          <v-spacer></v-spacer>
        </v-card-title>
        <v-row align="center">
          <v-col cols="12" sm="6">
            <v-select
              v-model="typeFilterValue"
              :items="types"
              label="Please select type"
              outlined
            ></v-select>
          </v-col>
          <v-col cols="12" sm="6">
            <v-select
              v-model="amenitiesFilterValue"
              :items="amenities"
              label="Please select amenities"
              multiple
              outlined
            ></v-select>
          </v-col>
        </v-row>

        <v-data-table
          :headers="headers"
          :items="rows"
          item-key="name"
          class="elevation-1"
          :items-per-page="30"
          :footer-props="{
            'items-per-page-options': opts,
            showFirstLastPage: true,
            firstIcon: 'mdi-arrow-collapse-left',
            lastIcon: 'mdi-arrow-collapse-right',
            prevIcon: 'mdi-minus',
            nextIcon: 'mdi-plus',
            'items-per-page-text': 'rows per page',
          }"
        >
          <template v-slot:[`item.address`]="{ item }"
            >{{ item.street }} {{ item.street_number }}
            {{ item.postal_code }}</template
          >
        </v-data-table>
      </v-card>
    </v-container>
  </div>
</template>


<script>
export default {
  name: "Home",
  data() {
    return {
      search: "",
      typeFilterValue: [],
      amenitiesFilterValue: [],
      types: [],
      amenities: [],
      value: [],
      opts: [5, 20, 30, 50],
      item_type: [],
      values: [],

      headers: [
        { text: "Title", value: "title" },
        { text: "Type", value: "type.name", filter: this.typeFilter },
        { text: "Size", value: "size" },
        {
          text: "Address (Street, Street Number, Postal Code)",
          value: "address",
        },
        { text: "Amenities", value: "amenities" },
      ],
      rows: [],
    };
  },

  mounted() {
    axios.get("/api/types").then((res) => {
      this.types = res.data.data.map(({ name }) => name);
    });
    axios.get("/api/amenities").then((res) => {
      this.amenities = res.data.data;
    });
    axios.get("/api/listings").then((res) => {
      this.rows = res.data.data;
    });
  },

  methods: {
    amenitiesChanged(value) {
      this.value = value.join(", ");
    },
    typeFilter(value) {
      if (!this.typeFilterValue) {
        return true;
      }
      return value === this.typeFilterValue;
    },
  },
};
</script>
