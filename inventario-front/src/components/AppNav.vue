<template>
  <nav class="navbar navbar-expand-sm navbar-light navbar-jw">
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#appnav"
      aria-controls="appnav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand" href="#">
      <img src="../assets/logo.png" alt="shop logo" /> Inventario
    </a>
  </nav>
</template>

<script>
import ShoppingCart from './ShoppingCart'
import { mapGetters } from 'vuex'

export default {
  components: {
    ShoppingCart
  },
  computed: {
    totalItems () {
      return this.inCart.reduce((sum, p) => sum + p.quantity, 0)
    },
    ...mapGetters({
      inCart: 'getCartItems'
    })
  }
}
</script>
