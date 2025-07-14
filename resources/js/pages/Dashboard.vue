<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { User, type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Dashboard',
        href: '/dashboard',
    },
];

defineProps<{
    user: User;
}>();
</script>

<template>
    <Head title="Dashboard" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <p class="pb">Welcome, {{ user.username }}!</p>

        <fieldset style="width: 200px;">
            <legend>Standings</legend>
            <div class="sunken-panel">
                <table class="interactive">
                    <thead><tr><td>#</td><td>Team</td></tr></thead>
                    <tbody>
                        <tr><td>1</td><td>Hamilton Beach</td></tr>
                        <tr><td>2</td><td>Now Here's A Guy</td></tr>
                        <tr><td>3</td><td>The Benchwarmers</td></tr>
                        <tr><td>4</td><td>Globo Gym</td></tr>
                        <tr><td>5</td><td>I'm Thinkin' RBs</td></tr>
                        <tr><td>6</td><td>No Punt Intended</td></tr>
                        <tr><td>7</td><td>Cleveland's Teamers</td></tr>
                        <tr><td>8</td><td>42 Panickers</td></tr>
                        <tr><td>9</td><td>Shake &amp; Bake</td></tr>
                        <tr><td>10</td><td>The Usual Suspects</td></tr>
                    </tbody>
                </table>
            </div>
        </fieldset>

        <fieldset style="width: 200px;">
            <legend>Schedule</legend>
            Recent Games, Current Games, Upcoming Games
        </fieldset>
        <!-- <div class="sunken-panel" style="background-color: green; display: inline-block; padding: 5px;">
            <table class="radar">
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td class="center"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><span class="dot">AB</span></td>
                        <td></td>
                        <td class="center"></td>
                        <td></td>
                        <td><span class="dot">ST</span></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td class="center"></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div> -->
    </AppLayout>
</template>

<style lang="scss">
.radar {
    background: none;

    td {
        background: none;
        border: 1px solid yellowgreen;
        height: 50px;
        width: 50px;
        padding: 0;
        text-align: center;

        &.center {
            background: hsl(120, 100%, 30%);
        }

        .dot {
            width: 20px;
            height: 20px;
            background: yellowgreen;
            border-radius: 50%;
            display: inline-block;
            margin: 2px;
            color: green;
            flex-direction:row;
            text-align: center;
            line-height: 1.9;
            font-weight: bold;
        }
    }
}
</style>