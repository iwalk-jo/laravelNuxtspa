<template>
  <div class="container mx-auto">
    <div class="w-1/2 mx-auto">
      <div class="bg-white p-5 rounded-lg">
        <h2 class="text-lg font-bold mb-4">Private Dashboard</h2>
        <p class="text-gray-700">Welcome <span class="font-bold"></span></p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  middleware: "auth"
};
</script>