<style lang="scss">
    main {
        flex-basis: 100%;
        margin: 5px;
        max-width: none;
        padding: 0;
    }
</style>

<template>
    <main class="window" style="max-width: 960px; flex-basis: auto;">
        <div class="title-bar">
            <img src="logo_white_small.png" style="padding: 0 6px 0 2px;" />
            <div class="title-bar-text" style="flex-grow: 1;">Off-World Betting Platform</div>
            <div class="title-bar-controls">
                <button aria-label="Minimize"></button>
                <button aria-label="Maximize"></button>
                <button aria-label="Close"></button>
            </div>
        </div>
        <!-- <div class="menu-bar-container">
            <div class="menu-bar">
                <button class="menu-bar-item">Settings</button>
                <button class="menu-bar-item">Help</button>
            </div>
        </div> -->
        <!-- <div style="overflow: hidden; user-select: none; height: 50px; background: #e6b054; background: linear-gradient(90deg, #e6b054 0%, rgba(255, 255, 255, 1) 100%); color: #fff; font-weight: bold; font-size: 6em; line-height: 1.25; padding-left: 10px; font-family: sans-serif;">
            <img src="logo_white.png" style="width: 64px; display: inline-block; position: relative; left: 10px; top: -6px;" />
        </div> -->
        <div class="menu-bar-container">
            <div class="menu-bar">
                <div>
                    <button class="menu-bar-item icon">
                        <div class="mso">dashboard</div>
                        Dashboard
                    </button>
                    <button class="menu-bar-item icon">
                        <div class="mso">groups</div>
                        Roster
                    </button>
                    <button class="menu-bar-item icon">
                        <div class="mso">trending_up</div>
                        Standings
                    </button>
                    <button class="menu-bar-item icon">
                        <div class="mso">communities</div>
                        Leagues
                    </button>
                    <button class="menu-bar-item icon">
                        <div class="mso">quiz</div>
                        Training
                    </button>
                </div>

                <div style="display: flex; align-items: center; justify-content: center; padding: 4px;" class="thumper emboss">
                    <img src="logo_black.png" style="width: 36px; display: inline-block; height: auto;" />
                </div>
            </div>
        </div>
        <div class="window-body">
            <slot />
        </div>
    </main>
</template>