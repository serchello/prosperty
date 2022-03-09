"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_components_filter_index_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/filter/index.vue?vue&type=script&lang=js&":
/*!*******************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/filter/index.vue?vue&type=script&lang=js& ***!
  \*******************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: "Home",
  data: function data() {
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
      headers: [{
        text: "Title",
        value: "title"
      }, {
        text: "Type",
        value: "type.name",
        filter: this.typeFilter
      }, {
        text: "Size",
        value: "size"
      }, {
        text: "Address (Street, Street Number, Postal Code)",
        value: "address"
      }, {
        text: "Amenities",
        value: "amenities"
      }],
      rows: []
    };
  },
  mounted: function mounted() {
    var _this = this;

    axios.get("/api/types").then(function (res) {
      _this.types = res.data.data.map(function (_ref) {
        var name = _ref.name;
        return name;
      });
    });
    axios.get("/api/amenities").then(function (res) {
      _this.amenities = res.data.data;
    });
    axios.get("/api/listings").then(function (res) {
      _this.rows = res.data.data;
    });
  },
  methods: {
    amenitiesChanged: function amenitiesChanged(value) {
      this.value = value.join(", ");
    },
    typeFilter: function typeFilter(value) {
      if (!this.typeFilterValue) {
        return true;
      }

      return value === this.typeFilterValue;
    }
  }
});

/***/ }),

/***/ "./resources/js/components/filter/index.vue":
/*!**************************************************!*\
  !*** ./resources/js/components/filter/index.vue ***!
  \**************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _index_vue_vue_type_template_id_95478c74___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./index.vue?vue&type=template&id=95478c74& */ "./resources/js/components/filter/index.vue?vue&type=template&id=95478c74&");
/* harmony import */ var _index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./index.vue?vue&type=script&lang=js& */ "./resources/js/components/filter/index.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _index_vue_vue_type_template_id_95478c74___WEBPACK_IMPORTED_MODULE_0__.render,
  _index_vue_vue_type_template_id_95478c74___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/filter/index.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/components/filter/index.vue?vue&type=script&lang=js&":
/*!***************************************************************************!*\
  !*** ./resources/js/components/filter/index.vue?vue&type=script&lang=js& ***!
  \***************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./index.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/filter/index.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/filter/index.vue?vue&type=template&id=95478c74&":
/*!*********************************************************************************!*\
  !*** ./resources/js/components/filter/index.vue?vue&type=template&id=95478c74& ***!
  \*********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_template_id_95478c74___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_template_id_95478c74___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_index_vue_vue_type_template_id_95478c74___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./index.vue?vue&type=template&id=95478c74& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/filter/index.vue?vue&type=template&id=95478c74&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/filter/index.vue?vue&type=template&id=95478c74&":
/*!************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/components/filter/index.vue?vue&type=template&id=95478c74& ***!
  \************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function () {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    { attrs: { "data-app": "" } },
    [
      _c(
        "v-container",
        { staticClass: "grey lighten-5", attrs: { "mt-2": "" } },
        [
          _c(
            "v-card",
            [
              _c(
                "v-card-title",
                [_vm._v("\n        Filter\n        "), _c("v-spacer")],
                1
              ),
              _vm._v(" "),
              _c(
                "v-row",
                { attrs: { align: "center" } },
                [
                  _c(
                    "v-col",
                    { attrs: { cols: "12", sm: "6" } },
                    [
                      _c("v-select", {
                        attrs: {
                          items: _vm.types,
                          label: "Please select type",
                          outlined: "",
                        },
                        model: {
                          value: _vm.typeFilterValue,
                          callback: function ($$v) {
                            _vm.typeFilterValue = $$v
                          },
                          expression: "typeFilterValue",
                        },
                      }),
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _c(
                    "v-col",
                    { attrs: { cols: "12", sm: "6" } },
                    [
                      _c("v-select", {
                        attrs: {
                          items: _vm.amenities,
                          label: "Please select amenities",
                          multiple: "",
                          outlined: "",
                        },
                        model: {
                          value: _vm.amenitiesFilterValue,
                          callback: function ($$v) {
                            _vm.amenitiesFilterValue = $$v
                          },
                          expression: "amenitiesFilterValue",
                        },
                      }),
                    ],
                    1
                  ),
                ],
                1
              ),
              _vm._v(" "),
              _c("v-data-table", {
                staticClass: "elevation-1",
                attrs: {
                  headers: _vm.headers,
                  items: _vm.rows,
                  "item-key": "name",
                  "items-per-page": 30,
                  "footer-props": {
                    "items-per-page-options": _vm.opts,
                    showFirstLastPage: true,
                    firstIcon: "mdi-arrow-collapse-left",
                    lastIcon: "mdi-arrow-collapse-right",
                    prevIcon: "mdi-minus",
                    nextIcon: "mdi-plus",
                    "items-per-page-text": "rows per page",
                  },
                },
                scopedSlots: _vm._u(
                  [
                    {
                      key: "item.address",
                      fn: function (ref) {
                        var item = ref.item
                        return [
                          _vm._v(
                            _vm._s(item.street) +
                              " " +
                              _vm._s(item.street_number) +
                              "\n          " +
                              _vm._s(item.postal_code)
                          ),
                        ]
                      },
                    },
                  ],
                  null,
                  true
                ),
              }),
            ],
            1
          ),
        ],
        1
      ),
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ })

}]);