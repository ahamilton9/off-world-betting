<script setup lang="ts">
import InputError from '@/components/InputError.vue';
import TextLink from '@/components/TextLink.vue';
import { Button } from '@/components/ui/button';
import { Checkbox } from '@/components/ui/checkbox';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import AuthBase from '@/layouts/AuthLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';
import { LoaderCircle, WindArrowDown } from 'lucide-vue-next';
import { watch, ref } from 'vue';

defineProps<{
    status?: string;
    canResetPassword: boolean;
}>();

const loc = window.location.host
const frag = ref(window.location.hash.substring(1));
console.log(frag.value);

addEventListener("hashchange", (event) => {
    frag.value = window.location.hash.substring(1)
})

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

function submit() {
    // TODO: Check active tab, submit form to that intent
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};

function home() {
    window.location.href = '/';
}
</script>

<template>
    <div style="display: flex; align-items: center; justify-content: center; height: 100%;">
        <div class="window" style="width: 350px">
            <div class="title-bar">
                <div class="title-bar-text">Off-World Betting NetSoft</div>
                <div class="title-bar-controls">
                    <button aria-label="Close" @click="home"></button>
                </div>
            </div>
            <div class="window-body" style="margin: 0;">
                <div style="overflow: hidden; user-select: none; height: 50px; background: #e6b054; background: linear-gradient(90deg, #e6b054 0%, rgba(255, 255, 255, 1) 100%); color: #fff; font-weight: bold; font-size: 6em; line-height: 1.25; padding-left: 10px; font-family: sans-serif;">
                    <img src="logo_white.png" style="width: 64px; display: inline-block; position: relative; left: 10px; top: -6px;" />
                </div>

                <form @submit.prevent="submit" style="padding: 10px 5px; display: flex;">
                    <div style="width: 100%;">
                        <menu role="tablist">
                            <li role="tab" :aria-selected="frag === 'login' || frag === ''"><a href="#login">Login</a></li>
                            <li role="tab" :aria-selected="frag === 'register'"><a href="#register">Register</a></li>
                            <li role="tab" :aria-selected="frag === 'forgot'"><a href="#forgot">Forgot</a></li>
                        </menu>
                        <div class="window" role="tabpanel">
                            <div class="window-body">
                                <div id="#login" v-if="frag === 'login' || frag === ''">
                                    <div v-if="status">
                                        {{ status }}
                                    </div>
                                    <div>
                                        <strong>Logging into <u>{{ loc }}</u></strong>
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
                                <div id="register" v-else-if="frag === 'register'">
                                    <div v-if="status">
                                        {{ status }}
                                    </div>
                                    <div>
                                        <strong>Registering for <u>{{ loc }}</u></strong>
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

                                        <div style="display: flex; margin: 5px 0;">
                                            <Label for="confirm" style="flex-basis: 60px;">Confirm Password:</Label>
                                            <Input
                                                id="confirm"
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
                                            <input type="checkbox" id="age" />
                                            <label for="age">I am 13 years of age or older.</label>
                                        </div>

                                        <div style="margin: 5px 0;">
                                            <input type="checkbox" id="location" />
                                            <label for="location">I live in, and will play from<br />the United States of America</label>
                                        </div>
                                    </div>
                                </div>
                                <div id="forgot" v-else-if="frag === 'forgot'">
                                    <div v-if="status">
                                        {{ status }}
                                    </div>
                                    <div>
                                        <strong>Recovering for <u>{{ loc }}</u></strong>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="padding-left: 5px; padding-top: 20px; width: 25%;">
                        <Button class="default" type="submit" :tabindex="4" :disabled="form.processing">
                            OK
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
