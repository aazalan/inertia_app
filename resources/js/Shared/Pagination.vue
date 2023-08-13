<template>
      <div>
        <Component 
        class="px-1"
        :class="{'text-gray-500' : ! link.url, 'font-bold' : link.active}"
        v-for="link in links" 
        :is="link.url? 'Link' : 'span'"
        :key="link.label" 
        :href="link.url" 
        v-html="link.label"/>
    </div>
</template>

<script>
export default {
    props: {
        links: Array
    }
}
</script>

<style>

</style>