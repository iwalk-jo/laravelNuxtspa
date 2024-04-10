<template>
    <header class="sticky-top-0 z-20 border-b bg-background/80 backdrop-blur">
        <!-- Container of flex -->
        <div class="container flex h-16 items-center justify-between">
            <!-- Logo and page title -->
            <div class="flex items-center gap-3">
                <button @click="isOpen" aria-label="Open menu"
                    class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full border bg-background lg:hidden">
                    <span class="sr-only">Button used to open menu</span>
                    <!-- Icon component here -->
                </button>
                <!-- Logo -->
                <img src="https://img.logoipsum.com/296.svg" alt="Analytics logo" class="h-7 w-7 object-contain" />
                <!-- Page title -->
                <NuxtLink class="text-xl font-bold" to="/">Analytics</NuxtLink>
            </div>

            <!-- Right side of header -->
            <div class="flex items-center gap-5">
                <button @click="toggleTheme"
                    class="flex h-9 w-9 shrink-0 justify-center rounded-full border bg-background">
                    <!-- Icon component here -->
                </button>

              
            </div>
        </div>
        <!-- Mobile menu -->
        <MobileMenu v-model="isOpen" />
    </header>
</template>

<script>
import { ref } from 'vue';

// Items that will be displayed in menu
const profileMenuOptions = [
    { title: "Profile" },
    { title: "Settings" },
 
    { divider: true },
    { title: "Logout" },
];

// Used to open/close menu
const isOpen = ref(false);

export default {
    setup() {
        return {
            isOpen,
            profileMenuOptions,
        };
    },
};
</script>
