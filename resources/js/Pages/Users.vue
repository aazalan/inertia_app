<template>
  <h1 class="text-4xl">Users</h1>
  <Nav />

  <div style="margin-top: 700px;">
    <p>The current time is {{ time }}.</p>
    <Link href="/users" class="text-yellow-700" preserve-scroll>Refresh</Link>
  </div>
</template>

<script>
import Nav from "../Shared/Nav.vue"
import { Link } from "@inertiajs/vue3";

export default {
  components: { Nav, Link },

  props: {
    time: String
  }
};
</script>

<style>

</style>