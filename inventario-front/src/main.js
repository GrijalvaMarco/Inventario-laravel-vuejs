// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import VueRouter from 'vue-router'
import VueResource from 'vue-resource'

Vue.use(VueRouter)
Vue.use(VueResource)

Vue.config.productionTip = false

import store from './vuex/store'

// import components
import App from './App'
import ProductCatalog from './components/ProductCatalog'
import ManageProducts from './components/ManageProducts'

// import some global styles
import './styles/style.scss'

// set the API root so we can use relative url's in our actions.
Vue.http.options.root = 'http://127.0.0.1:8000/api'

const routes = [
  { path: '/home', alias: '/home', component: ProductCatalog },
  { path: '/manage-products', alias: '/',component: ManageProducts }
]

// Create the router instance and pass the `routes` option
const router = new VueRouter({
  routes
})

/* eslint-disable no-new */
new Vue({
  el: '#app',
  store,
  router,
  render: h => h(App)
})
