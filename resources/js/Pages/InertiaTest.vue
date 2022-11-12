<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import {ref} from 'vue';

const newTitle = ref('');
const newContent = ref('');

</script>

<template>
    <Link :href="route('inertia.index')">名前付きルートの確認です　</Link><br>
    <Link :href="route('inertia.show', { id: 1 })">botann</Link>

    <div class="mb-90"></div>
    <div>
        title
    </div>
    <input type="text" name="newTitle" v-model="newTitle">{{newTitle}}<br>
    <div>
        content
    </div>
    <input type="text" name="newContent" v-model="newContent">{{newContent}}<br>
    <Link method="post" as="button" :href="route('inertia.store')" :data="{
        title: newTitle,
        content: newContent
    }">DB保存テスト</Link>
</template>
