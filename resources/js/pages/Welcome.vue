<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import AppLogoIcon from '@/components/AppLogoIcon.vue';
</script>

<template>
    <div class="container">
        <nav class="navbar is-dark" role="navigation" aria-label="main navigation">
            <div class="navbar-brand px-4">
                <div class="navbar-item" style="font-weight: bold; font-size: 1.5em; width: 300px; color: #fff;">
                    <AppLogoIcon />
                    Off World Betting
                </div>

                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false"
                    data-target="navbarBasicExample">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons field">
                        <div v-if="$page.props.auth.user" class="control">
                            <Link :href="route('dashboard')" class="button has-background-primary is-link">
                            Dashboard
                            </Link>
                        </div>
                        <template v-else>
                            <div class="control">
                                <Link :href="route('login')" class="button has-background-primary is-link">
                                Log in
                                </Link>
                            </div>
                            <div class="control">
                                <Link :href="route('register')" class="button has-background-danger is-link">
                                Register
                                </Link>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </nav>
        
        <section class="hero is-primary is-medium" style="background-image: url('hero.png'); background-position: right; background-size: cover;">
            <div class="hero-body" style="padding: 6em 7em;">
                <p class="has-text-weight-bold has-text-grey-dark" style="font-size: 4em;">Off World Betting</p>
                <p class="subtitle has-text-grey">Your strategy. Their combat. Your victory.</p>
            </div>
        </section>

        <section class="p-4">
            <div style="margin: auto;">
                <div style="text-align: center; font-weight: bold; font-size: 3em;">FORGE YOUR AEGIS LEGACY</div><br />
                <div style="font-size: 1.5em; list-style-type: square; text-align: center;">
                    <p><strong>Become a General Manager</strong><br />Assemble your dream roster of celebrity pilots and their signature Mecha.</p><br />
                    <p><strong>Outsmart the Competition</strong><br />Watch your pilots battle in the arena — their performance determines your team's outcome.</p><br />
                    <p><strong>An Honest Contest of Skill</strong><br />Truly free to play. Your success is determined by your strategy, not your wallet.</p><br />
                    <p><strong>Access the Grid from Anywhere</strong><br />Log in and manage your team instantly on any device with a web browser.</p>
                </div>
                <hr />
                <div style="margin: 0 auto; max-width: 800px; text-indent: 2em;">
                    <p class="mb-2">The roar of jet boosters has replaced the silence of the frontlines. In the year 22XX, the galaxy's greatest warriors are no longer soldiers, but the superstar pilots of Aegis — the most brutal and celebrated sport in the universe. In colossal off-world arenas, teams of advanced Mecha clash in a spectacle of steel and strategy, drawing millions of fans to screens in every pub and gambling den.</p>
                    <img src="single_mecha.png" style="margin: 0 auto; display: block; max-height: 400px;" />
                    <p><strong>Off-World Betting</strong> drops you right into the action. We offer immersive Fantasy Aegis Leagues where you call the shots. Draft your ultimate team of celebrity pilots, manage your roster, and compete against your friends in high-stakes weekly matches. Your victory depends on your players' real-world performance in the Aegis arena. Do you have what it takes to build a dynasty?</p>
                </div>
                <hr />
                <div style="text-align: center;">All Rights Reserved &copy; Off World Betting, 2025</div>
            </div>
        </section>
    </div>
</template>
