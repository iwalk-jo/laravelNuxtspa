<template>
  <div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-4">Dashboard</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
      <!-- Card 1-->
      <div class="bg-white rounded shadow p-6">
        <h2 class="text-xl font-bold mb-2">Card 1</h2>
        <p class="text-gray-700">This is some dummy data for Card 1.</p>
      </div>

      <!-- Card 2 -->
      <div class="bg-white rounded shadow p-6">
        <h2 class="text-xl font-bold mb-2">Card 2</h2>
        <p class="text-gray-700">This is some dummy data for Card 2.</p>
      </div>

      <!-- Card 3 -->
      <div class="bg-white rounded shadow p-6">
        <h2 class="text-xl font-bold mb-2">Card 3</h2>
        <p class="text-gray-700">This is some dummy data for Card 3.</p>
      </div>
    </div>
  </div>
</template>


<script>
export default {
  middleware: "auth"
};
</script>