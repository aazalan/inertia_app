<template>
    <Link href="/" class="text-yellow-700 hover:underline"
    :class="{ 'font-bold underline': active }">
        <slot />
    </Link>
</template>

<script>


    export default {
        components: {},
        
        props: {
            active: Boolean
        }
    };
</script>

<style>

</style>