<template>
    <div>

        <div class="fixed top-0 left-0 w-full z-50 bg-white border-b backdrop-blur-lg bg-opacity-80">
            <div class="mx-auto max-w-7xl px-6 sm:px-6 lg:px-8 ">
                <div class="relative flex h-16 justify-between">
                    <div class="flex flex-1 items-stretch justify-start">
                        <NuxtLink to="/" class="flex flex-shrink-0 items-center">
                            <img class="block h-12 w-auto" src="https://www.svgrepo.com/show/501888/donut.svg">
                        </NuxtLink>
                    </div>
                    <div class="flex items-center text-sm font-semibold">
                        <template v-if="$auth.loggedIn">
                            <a href="" class="text-gray-700 hover:text-purple-700" @click.prevent="logout">
                                Log Out
                            </a>
                            <NuxtLink to="/dashboard"
                                class="text-gray-700 ml-7 border border-gray-300 hover:border-purple-400 hover:text-purple-700 rounded px-4 py-2">
                                Dashboard
                            </NuxtLink>
                        </template>
                        <template v-else>
                            <NuxtLink to="/login" class="text-gray-700 hover:text-purple-700">
                                Sign In
                            </NuxtLink>
                            <NuxtLink to="/register"
                                class="text-gray-700 ml-7 border border-gray-300 hover:border-purple-400 hover:text-purple-700 rounded px-4 py-2">
                                Create Account
                            </NuxtLink>
                        </template>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full mt-16">
            <Nuxt />
        </div>
    </div>

</template>

<script>
export default {
    methods: {
        async logout() {
            try {
                await this.$auth.logout()
            } catch (error) {
                console.log(error);
            }
        }
    }
}
</script>
