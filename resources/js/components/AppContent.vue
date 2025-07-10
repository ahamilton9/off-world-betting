<style lang="scss">
    main {
        flex-basis: 80%;
        margin: 4px 4px 4px 0;
        max-width: none;
        padding: 0;
    }
</style>

<template>
    <main class="window">
        <div class="title-bar">
            <div class="title-bar-text">Off-World Betting Platform</div>
            <div class="title-bar-controls">
                <button aria-label="Minimize"></button>
                <button aria-label="Maximize"></button>
                <button aria-label="Close"></button>
            </div>
        </div>
        <div class="window-body">
            <slot />
        </div>
    </main>
</template>