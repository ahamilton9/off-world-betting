<script setup lang="ts">
import AppLogoIcon from '@/components/AppLogoIcon.vue';
import { Link } from '@inertiajs/vue3';

defineProps<{
    title?: string;
    description?: string;
}>();
</script>

<template>
    <div style="padding: 30px 15px;">
        <div style="margin: 15px auto; max-width: 500px;" class="card">
            <div class="card-content" style="color: #000;">
                <div style="text-align: center;">
                    <Link :href="route('home')">
                        <div class="has-text-primary" style="max-width: 128px; margin: 0 auto;">
                            <AppLogoIcon />
                        </div>
                    </Link>
                    <div>
                        <h1>{{ title }}</h1>
                        <p>{{ description }}</p>
                    </div>
                </div>
                <slot />
            </div>
        </div>
    </div>
</template>
