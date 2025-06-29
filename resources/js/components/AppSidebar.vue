<script setup lang="ts">
import AppLogo from '@/components/AppLogo.vue';

const csrf = document.head.querySelector('meta[name="csrf-token"]') ? document.head.querySelector('meta[name="csrf-token"]').content : '';
</script>

<template>
    <div id="sidebar">
        <AppLogo />

        <form action="/logout" method="post">
            <input type="hidden" name="_token" :value="csrf" />

            <input type="submit" value="Logout" />
        </form>
    </div>
</template>

<style lang="scss" scoped>
    #sidebar {
        background: blue;
        flex-basis: 20%;
    }

    form {
        border: 0;
        box-shadow: none;
    }
</style>