<script setup>
import { Link } from "@inertiajs/vue3";
import FormLayout from "@/Components/LogoFITPUNG.vue";
</script>
<template>
    <div class="w-full min-h-screen relative font-k2d">
        <div
            class="flex flex-row h-16 bg-stone-700 shadow-md shadow-orange-200"
        >
            <div class="pl-4">
                <FormLayout></FormLayout>
            </div>
            <h2 class="py-6 pl-2 text-xs text-orange-500 shadow-md">
                FIT PUNG: FIT for Life, PUNG for Results!
            </h2>
        </div>
        <div class="relative max-w-screen-xl mx-auto h-screen">
            <slot />
            <footer class="bottom-0 w-full">
                <div class="bg-stone-700 text-white py-4 text-center">
                    &copy; 2023 FIT PUNG. All rights reserved.
                </div>
            </footer>
        </div>
    </div>
</template>
