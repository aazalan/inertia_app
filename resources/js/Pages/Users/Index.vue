<template>
    <Head title="Users" />
    <div class="flex justify-between mb-6">
        <div class="flex items-center ">
            <h1 class="text-3xl">Users</h1>

            <Link v-if="can.createUser" href="/users/create" class="text-blue-500 text-sm ml-3 hover:underline">New User</Link>
        </div>

        <input v-model="search" type="text" placeholder="search..." class="border px-2 rounded-lg">
    </div>
    

    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700" v-for="user in users.data" :key="user.id">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white" v-text="user.name">
                    </th>
                    <td v-if="user.can.editUser" class="px-6 py-4">
                        <Link :href="`users/${user.id}/edit`"
                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                            Edit
                        </Link>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Paginator -->
    <pagination :links="users.links" class="mt-6"></pagination>

</template>

<script setup>
    import { ref, watch, getCurrentInstance } from 'vue';
    import Pagination from '../../Shared/Pagination.vue';
    import { router } from '@inertiajs/vue3';
    import throttle from 'lodash/throttle';
    import debounce from 'lodash/debounce';


    const props = defineProps({ 
        users: Object,
        filters: Object,
        can: Object
     });
 
    let search = ref(props.filters.search);

    watch(search, debounce(value => {
        router.get('/users', { search: value }, {
            preserveState: true,
            replace: true
        });
    }, 500)
    );
</script>

<style>

</style>