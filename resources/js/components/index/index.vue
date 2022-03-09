<template>
  <div data-app>
    <v-container mt-2 class="grey lighten-4">
      <v-card>
        <v-card-title>
          Data Prosperty
          <v-spacer></v-spacer>

          <v-autocomplete
            v-model="search"
            :items="item_type"
            clearable
            dense
            filled
            solo
            solo-inverted
          ></v-autocomplete>
        </v-card-title>
        <v-data-table
          :headers="headers"
          :items="rows"
          :sort-by="['title', 'type.name']"
          :sort-desc="[false, true]"
          :search="search"
          multi-sort
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
      opts: [5, 20, 30, 50],
      item_type: [],
      values: [],
      value: null,
      headers: [
        {
          text: "Title",
          align: "start",
          sortable: true,
          value: "title",
        },
        { text: "Type", value: "type.name" },
        { text: "Size", value: "size" },
        {
          text: "Address (Street, Street Number, Postal Code)",
          value: "address",
        },
        { text: "Description", value: "description" },
        { text: "Created", value: "created_at" },
        { text: "Updated", value: "updated_at" },
      ],
      rows: [],
    };
  },

  mounted() {
    axios.get("/api/listings").then((res) => {
      this.rows = res.data.data;

      this.rows.forEach((item) => {
        if (
          !this.item_type.some((rec) => {
            return item.type.name === rec;
          })
        ) {
          this.item_type.push(item.type.name);
        }
      });
    });
  },
};
</script>
