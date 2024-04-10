<template>
  <div>
    <!-- Header -->
    <DashboardHeader />
    <div class="container lg:grid lg:grid-cols-12 lg:gap-10">
      <!-- Sidebar -->
      <DashboardSidebar class="sticky top-[65px] hidden h-[calc(100vh-65px)] py-5 lg:col-span-3 lg:block" />

      <!-- Main Section -->
      <main class="py-5 lg:col-span-6">
        <!-- Section Title and Button -->
        <DashboardStatusCard />
        <!-- Listing Cards Starts-->
        <!-- index all -->

        <!-- Card Table - checkbox, name, feature action-->

        <!-- Property list - property type, address, built year-->

        <!-- Pagination -->

        <!-- Listing Cards Ends-->

      </main>
      <div class="hidden py-5 lg:col-span-3 lg:block">
        <!-- Profile info to the side -->
        <DashboardProfileInfo />
        <hr class="my-5" />
        <!-- Reminders to the side -->

      </div>
    </div>
  </div>
</template>

<script>
export default {
  middleware: 'auth'
};
</script>