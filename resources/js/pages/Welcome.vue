<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div>
        <section style="background-image: url('nebula.jpg'); background-position: right; background-size: cover; color: #fff; box-shadow: inset 0px -80px 40px -10px #01060d;">
            <div style="max-width: 1280px; margin: 0 auto;">
                <div style="padding: 2em 7em; vertical-align: middle;">
                    <img src="logo_white.png" style="width: 36px; vertical-align: middle;" />
                    <span style="font-size: 24px; vertical-align: middle; padding-left: 20px; font-weight: bold;" class="heading">Off-World Betting</span>
                </div>
                <div style="padding: 4em 7em 9em;">
                    <div style="font-size: 5em; line-height: 1; margin-left: -4px;" class="heading">Mecha Battle League</div>
                    <div style="padding-bottom: 1em; font-size: 2em;">Free-to-Play Fantasy Sports in Deep Space</div>
                    <template v-if="$page.props.auth.user">
                        <Link :href="route('schedule')" class="button">
                        Dashboard
                        </Link>
                    </template>
                    <template v-else>
                        <Link :href="route('login')" class="button">
                        Log in
                        </Link>
                        <Link :href="route('login') + '?register=1'" class="button">
                        Register
                        </Link>
                    </template>
                </div>
            </div>
        </section>

        <section>
            <div style="margin: auto; padding: 2em 0; background: #01060d url('silo.png') no-repeat center center; background-size:contain; color:#fff; font-size: 12pt;">
                <div style="text-align: center; font-weight: bold; font-size: 3em;" class="heading">Forge Your Dynasty</div><br />
                <div style="font-size: 1.5em; list-style-type: square; text-align: center;">
                    <p><strong>Become a General Manager</strong><br />Assemble your dream roster of celebrity pilots and their signature Mecha.</p><br />
                    <p><strong>Outsmart the Competition</strong><br />Watch your pilots battle in the arena — their performance determines your team's outcome.</p><br />
                    <p><strong>An Honest Contest of Skill</strong><br />Truly free to play. Your success is determined by your strategy, not your wallet.</p><br />
                    <p><strong>Access the Grid from Anywhere</strong><br />Log in and manage your team instantly on any device with a web browser.</p>
                </div>
            </div>
        </section>

        <footer style="text-align: center; background-color: #01060d; color: #fff; padding: 3em; font-size: 12pt;">All Rights Reserved &copy; Off-World Betting {{ new Date().getFullYear() }}</footer>
    </div>
</template>

<style>
.heading {
    font-family: Michroma, sans-serif;
}
.button {
    padding: 6px 12px;
    background: #0496cd;
    border-radius: 6px;
    color: #fff;
    text-decoration: none;
    font-weight: bold;
    font-size: 1.5em;
    margin-right: 5px;
    display: inline-block;
}
.button:hover, .button:active {
    background: #49aed3;
}
hr {
    max-width: 1045px;
    margin: 4em auto;
}
</style>