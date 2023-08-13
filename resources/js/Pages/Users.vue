<template>
    <Head title="Users" />
    <h1 class="text-3xl">Users</h1>

    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700" v-for="user in users.data" :key="user.id">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white" v-text="user.name">
                    </th>
                    <td class="px-6 py-4">
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
    import Pagination from '../Shared/Pagination.vue';
    defineProps({ users : Object });
</script>

<style>

</style>