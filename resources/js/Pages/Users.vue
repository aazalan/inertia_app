<template>
    <Layout>
        <h1 class="text-3xl">Users</h1>
        <div style="margin-top: 700px;">
            <p>The current time is {{ time }}.</p>
            <Link href="/users" class="text-yellow-700" preserve-scroll>Refresh</Link>
        </div>
    </Layout>
      
</template>

<script setup>
import Layout from "../Shared/Layout.vue";

defineProps({
  time: String
})
</script>

<style>

</style>