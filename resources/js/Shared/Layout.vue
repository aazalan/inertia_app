<template>

    <section class="p-6 bg-orange-200">
        <header class="flex justify-between">
            <div class="flex items-center">
                <h1 class="font-bold text-lg mb-1.5">
                    My App
                </h1>
                <p class="text-sm ml-4">
                    Welcome back, {{ username }}!
                </p>
            </div>
            <Nav />
        </header>
    </section>
    
    <section class="p-6">
        <div class="max-w-3xl mx-auto">
            <slot/>
        </div>
    </section>
    
</template>

<script>
import Nav from './Nav.vue';
export default {
    components: { Nav },

    props: {},

    computed: {
        username() {
            return this.$page.props.auth.user.username;
        }
    }
};
</script>

<style>

</style>