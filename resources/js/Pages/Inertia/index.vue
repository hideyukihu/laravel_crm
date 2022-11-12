<script setup>
import { Link } from '@inertiajs/inertia-vue3';


defineProps({
    blogs: Array
})
</script>


<template>

    <div v-if="$page.props.flash.message" class="bg-blue-200">
        {{ $page.props.flash.message }}
    </div>


    <ul>
        <li v-for="blog in blogs" :key="blog.id">
            タイトル: <Link :href="route('inertia.show', { id: blog.id })">{{blog.title}}</Link>
            本文：{{ blog.contents }}
        </li>
    </ul>
</template>
