<script setup>
import { Link } from "@inertiajs/vue3";
import LogoFITPUNG from "@/Components/LogoFITPUNG.vue";
import Footer from "@/Layouts/Footer.vue";
</script>
<template>
    <div class="relative w-full min-h-screen font-k2d">
        <div
            class="flex flex-row max-w-screen-xl mx-auto shadow-md lg:h-28 md:h-16 bg-stone-700 shadow-orange-200"
        >
            <div class="pl-4 lg:pl-6 ">
                <div class="w-16 h-16 lg:w-28 lg:h-28">
                    <LogoFITPUNG></LogoFITPUNG>
                </div>
            </div>

            <h2 class="py-6 pl-2 text-xs text-orange-500 shadow-md lg:py-10 lg:pl-4 lg:text-lg">
                FIT for Success, PUNG for Progress!
            </h2>
        </div>
        <!-- Title -->
        <div class="max-w-screen-md px-4 py-2 pt-6 mx-auto lg:pt-6 lg:py-4">
            <div
                class="relative flex flex-col items-center justify-center w-full h-24 border-2 shadow-md border-orange-50 rounded-xl text-orange-50/90 bg-clip-border"
            >
                <div class="p-4 lg:p-6">
                    <h1
                        class="block text-lg antialiased font-semibold leading-snug tracking-normal text-center font-k2d lg:text-2xl text-blue-gray-900"
                    >
                        แบบสำรวจผู้ใช้บริการ Gym หรือ Fitness
                    </h1>
                    <p
                        class="hidden block p-2 text-sm antialiased font-light leading-relaxed font-k2d text-inherit"
                    >
                        คำอธิบายแบบฟอร์ม
                    </p>
                </div>
            </div>
        </div>
        <!-- End Title -->
        <div class="relative max-w-screen-xl mx-auto h-max">
            <slot />
        </div>
        <div class="p-8">
            <Footer></Footer>
        </div>
    </div>
</template>
