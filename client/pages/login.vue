<template>
    <div>
        <index />
        <!-- Removed <index /> since it's unclear what it refers to -->
        <div class="container mx-auto mt-5 md:w-1/2 lg:w-1/3">
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <h2 class="mb-6 text-xl font-bold">Log in</h2>
                <form @submit.prevent="login">
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                        <input id="email" v-model="form.email" type="email"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            aria-describedby="email-help-block" required>
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                        <input id="password" v-model="form.password" type="password"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            aria-describedby="password-help-block" required>
                    </div>
                    <div class="flex items-center justify-between">
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    middleware: ['guest'],
    data() {
        return {
            form: {
                email: '',
                password: ''
            }
        };
    },

    methods: {
        login() {
            this.$auth.loginWith('laravelSanctum', {
                data: this.form
            })
                .then(response => console.log('Login successful:', response))
                .catch(error => console.log('Login error:', error));
        }
    }
};
</script>
