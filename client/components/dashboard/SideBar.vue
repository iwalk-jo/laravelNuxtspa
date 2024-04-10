<template>
    <aside>
        <div
            class="flex h-full w-full flex-col gap-5 overflow-y-auto rounded-md border bg-card pb-5 scrollbar-thin scrollbar-thumb-input scrollbar-thumb-rounded-md">
            <DashboardSidebarItem :links="menu" />

            <div class="mt-auto">
                <DashboardSidebarItem :links="bottomMenu" />
            </div>
        </div>
    </aside>
</template>

<script>
const bottomMenu = [
    {
        title: "Settings",
        icon: "heroicons:cog-8-tooth",
    },
    {
        title: "Help",
        icon: "heroicons:question-mark-circle",
    },
    {
        title: "Logout",
        icon: "heroicons:arrow-left-on-rectangle",
    },
];

const menu = [
    {
        title: "Dashboard",
        icon: "heroicons:home",
    },

    {
        title: "Property",
        icon: "heroicons:chart-pie",
        items: [{ title: "Overview" }, { title: "Statistics" }, { title: "Trends" }],
    },
];
</script>