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
    <Head title="Roster" />

    <AppLayout :breadcrumbs="breadcrumbs">
        Roster
    </AppLayout>
</template>