<template>
    <div class="flex flex-col">
        <!-- <template v-for="(l, i) in links" :key="i">
            <template v-if="!l.items">
                <NuxtLink to="/" class="inline-flex items-center gap-4 p-3 px-4 text-left text-[15px]">
                    <Icon v-if="l.icon" :name="l.icon" class="h-5 w-5 text-muted-foreground" />
                    <p class="truncate">{{ l.title }}</p>
                </NuxtLink>
            </template>
<template v-else>
                <HDisclosure v-slot="{ open }">
                    <HDisclosureButton class="inline-flex items-center justify-between p-3 px-4 text-left text-[15px]">
                        <div class="flex items-center gap-4">
                            <Icon v-if="l.icon" :name="l.icon" class="h-5 w-5 text-muted-foreground" />
                            <p class="truncate">{{ l.title }}</p>
                        </div>
                        <div>
                            <Icon name="heroicons:chevron-down" :class="[open && 'rotate-180']"
                                class="h-4 w-4 text-muted-foreground transition" />
                        </div>
                    </HDisclosureButton>
                    <TransitionExpand>
                        <HDisclosurePanel class="mx-6 flex flex-col border-l px-3">
                            <template v-for="(i, j) in l.items">
                                <NuxtLink class="rounded-md px-3 py-1.5 text-sm hover:bg-muted" to="/">{{ i.title }}
                                </NuxtLink>
                            </template>
</HDisclosurePanel>
</TransitionExpand>
</HDisclosure>
</template>
</template> -->
    </div>
</template>

<script>
export default {
    props: {
        links: {
            type: Array,
            default: () => [],
        },
    },
};
</script>