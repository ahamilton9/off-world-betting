<script setup lang="js">
import AppLogo from '@/components/AppLogo.vue';
import axios from 'axios';

function logout(event) {
    event.preventDefault();
    axios.post('/logout')
    .then(
        () => window.location = '/',
        (reason) => console.log(reason)
    )
}
</script>

<template>
    <div id="sidebar" class="window">
        <div class="title-bar">
            <div class="title-bar-text">Menu</div>
            <div class="title-bar-controls">
                <button aria-label="Minimize"></button>
                <button aria-label="Maximize"></button>
                <button aria-label="Close"></button>
            </div>
        </div>
        <div class="window-body">
            <!-- <AppLogo /> -->

            <form id="logout" @submit="logout">
                <input type="submit" value="Logout" />
            </form>
        </div>
    </div>
</template>

<style lang="scss" scoped>
    #sidebar {
        flex-basis: 20%;
        margin: 4px;
    }
</style>