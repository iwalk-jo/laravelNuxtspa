<template>
    <div>
        <div class="flex justify-center items-center mt-10" role="status">
            <div class="loader ease-linear rounded-full border-8 border-t-8 border-gray-200 h-20 w-20">
            </div>{{ title }}
        </div>
    </div>
</template>

<script>
export default {
    name: "Loading",
    props: {
        title: String
    }
}
</script>

<style>
/* Add this style to your component's style section */
.loader {
    border-top-color: #3498db;
    border-left-color: #3498db;
    animation: spin 1.5s linear infinite;
}

@keyframes spin {
    to {
        transform: rotate(360deg);
    }
}
</style>