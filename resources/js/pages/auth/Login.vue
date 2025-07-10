<script setup lang="ts">
import InputError from '@/components/InputError.vue';
import TextLink from '@/components/TextLink.vue';
import { Button } from '@/components/ui/button';
import { Checkbox } from '@/components/ui/checkbox';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import AuthBase from '@/layouts/AuthLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';
import { LoaderCircle } from 'lucide-vue-next';

defineProps<{
    status?: string;
    canResetPassword: boolean;
}>();

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <div style="display: flex; align-items: center; justify-content: center; height: 100%;">
        <div class="window" style="width: 350px">
            <div class="title-bar">
                <div class="title-bar-text">Off-World Betting NetSoft</div>
                <div class="title-bar-controls">
                    <button aria-label="Close"></button>
                </div>
            </div>
            <div class="window-body" style="margin: 0;">
                <div style="overflow: hidden; user-select: none; height: 75px; background: #e6b054; background: linear-gradient(90deg, #e6b054 0%, rgba(255, 255, 255, 1) 100%); color: #fff; font-weight: bold; font-size: 6em; line-height: 1.25; padding-left: 10px; font-family: sans-serif;">
                    <img src="logo_white.png" style="width: 90px; display: inline-block; position: relative; left: 10px; top: -10px;" />
                </div>

                <form @submit.prevent="submit" style="padding: 10px 5px; display: flex;">
                    <div style="width: 100%;">
                        <menu role="tablist">
                            <li role="tab" aria-selected="true"><a href="#tabs">Login</a></li>
                            <li role="tab"><a href="#tabs">Register</a></li>
                            <li role="tab"><a href="#tabs">Forgot</a></li>
                        </menu>
                        <div class="window" role="tabpanel">
                            <div class="window-body">
                                <div v-if="status">
                                    {{ status }}
                                </div>
                                <div>
                                    <strong>Logging into <u>offworld.bet</u></strong>
                                </div>
                                <div>
                                    <div style="display: flex; margin: 5px 0;">
                                        <Label for="email" style="flex-basis: 60px;">Email:</Label>
                                        <Input
                                            id="email"
                                            type="email"
                                            required
                                            autofocus
                                            :tabindex="1"
                                            autocomplete="email"
                                            v-model="form.email"
                                            style="width: 180px;"
                                        />
                                        <InputError :message="form.errors.email" />
                                    </div>

                                    <div style="display: flex; margin: 5px 0;">
                                        <Label for="password" style="flex-basis: 60px;">Password:</Label>
                                        <Input
                                            id="password"
                                            type="password"
                                            required
                                            :tabindex="2"
                                            autocomplete="current-password"
                                            v-model="form.password"
                                            style="width: 180px;"
                                        />
                                        <InputError :message="form.errors.password" />
                                    </div>

                                    <div style="margin: 5px 0;">
                                        <input type="checkbox" id="remember" />
                                        <label for="remember">Remember me</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="padding-left: 5px; padding-top: 20px; width: 25%;">
                        <Button class="default" type="submit" :tabindex="4" :disabled="form.processing">
                            <LoaderCircle v-if="form.processing" />
                            Login
                        </Button>
                        <Button type="button" :tabindex="5" :disabled="form.processing" style="margin-top: 5px;">
                            Help
                        </Button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
