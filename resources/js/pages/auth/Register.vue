<script setup lang="ts">
import InputError from '@/components/InputError.vue';
import TextLink from '@/components/TextLink.vue';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import AuthBase from '@/layouts/AuthLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';
import { LoaderCircle } from 'lucide-vue-next';

const form = useForm({
    username: '',
    email: '',
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <AuthBase title="Create an account" description="Enter your details below to create your account"
        class="has-text-white">

        <Head title="Register" />

        <form @submit.prevent="submit">
            <div>
                <div class="field">
                    <Label for="username" class="label">Username</Label>
                    <div class="control">
                        <Input id="username" type="text" required autofocus :tabindex="1" autocomplete="username"
                            v-model="form.username" />
                        <InputError :message="form.errors.username" />
                    </div>
                </div>
                <!-- New above, old below -->
                <div class="field">
                    <Label for="email">Email address</Label>
                    <div class="control">
                        <Input id="email" type="email" required :tabindex="2" autocomplete="email"
                            v-model="form.email" />
                        <InputError :message="form.errors.email" />
                    </div>
                </div>

                <div class="field">
                    <Label for="password">Password</Label>
                    <div class="control">
                        <Input id="password" type="password" required :tabindex="3" autocomplete="new-password"
                            v-model="form.password" />
                        <InputError :message="form.errors.password" />
                    </div>
                </div>

                <div class="field">
                    <Label for="password_confirmation">Confirm password</Label>
                    <div class="control">
                        <Input id="password_confirmation" type="password" required :tabindex="4"
                            autocomplete="new-password" v-model="form.password_confirmation" />
                        <InputError :message="form.errors.password_confirmation" />
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <label class="checkbox">
                            <input type="checkbox">
                            I live in and will play from the USA.
                        </label>
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <label class="checkbox">
                            <input type="checkbox">
                            I am 13 years of age or older.
                        </label>
                    </div>
                </div>

                <div class="field">
                    <div class="control" style="text-align: center;">
                        <Button type="submit" class="button is-primary">
                            <LoaderCircle v-if="form.processing" />
                            Create account
                        </Button>
                    </div>
                </div>
            </div>

            <hr />

            <div style="text-align: center;">
                Already have an account?
                <TextLink :href="route('login')">Log in</TextLink>
            </div>
        </form>
    </AuthBase>
</template>
