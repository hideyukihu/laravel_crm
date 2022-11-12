<script setup>
import { reactive } from 'vue';
import { Inertia } from '@inertiajs/inertia';

const form = reactive({
    title: null,
    content: null,
})

defineProps({
    errors:Object
})

const submitFunction = ()=> {
    Inertia.post('/inertia', form)
}
</script>


<template>
    <form @submit.prevent="submitFunction">
        <div>タイトル</div>
        <input name="title" type="text" v-model="form.title"> <br>
        <div v-if="errors.title">{{errors.title}}</div>
        <div>コンテンツ</div>
        <input name="content" type="text" v-model="form.content">
        <div v-if="errors.content">{{errors.content}}</div>
        <div>
            <button type="submit">送信</button>
        </div>
    </form>
</template>


