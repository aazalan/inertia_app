<template>
    <nav class="mt-6">
      <ul class="list-disc">
        <li><Link href="/" class="text-yellow-700 hover:underline">Home</Link></li>
        <li><Link href="/users" class="text-yellow-700 hover:underline" >Users</Link></li>
        <li><Link href="/settings" class="text-yellow-700 hover:underline">Settings</Link></li>
        <li><Link href="/logout" method="POST" :data="{testData: 'test'}" as="button" class="text-yellow-700 hover:underline">Log Out</Link></li>
      </ul>
    </nav>
  </template>
  
  <script>
  import { Link } from '@inertiajs/vue3';
  
  export default {
    components: { Link }
  }
  </script>
  
  <style>
  
  </style>