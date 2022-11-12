<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue'
import Label from '@/Components/TextInput.vue'

const emitTest = (e) => {
    console.log(e);
}

</script>

<template>
    <GuestLayout>
        <Label @update:modelValue="emitTest" modelValue="初期値です">タイトル</Label>
    </GuestLayout>
</template>
