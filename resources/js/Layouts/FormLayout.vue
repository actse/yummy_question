<script setup>
import { Link } from "@inertiajs/vue3";
import LogoFITPUNG from "@/Components/LogoFITPUNG.vue";
import Footer from "@/Layouts/Footer.vue";

const props = defineProps({
    name: String,
    phone: String,
});
const name = props.name;
console.log(name);
const phone = props.phone;
console.log(phone);
</script>
<template>
    <div class="w-full min-h-screen relative font-k2d">
        <div
            class="flex flex-row lg:h-28 md:h-16 bg-stone-700 shadow-md shadow-orange-200"
        >
            <div class="lg:pl-6 pl-4">
                <LogoFITPUNG></LogoFITPUNG>
            </div>

            <h2 class="lg:py-10 lg:pl-4 lg:text-lg  py-6 pl-2 text-xs text-orange-500 shadow-md">
                FIT PUNG: FIT for Life, PUNG for Results!
            </h2>
        </div>
        <!-- Title -->
        <div class="lg:pt-6 lg:py-4 pt-6 px-4 py-2">
            <div
                class="relative flex w-full flex-col rounded-xl bg-orange-200/30 bg-clip-border text-gray-700 shadow-md"
            >
                <div class="lg:p-6 p-4">
                    <h1
                        class="block font-k2d lg:text-2xl text-lg font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased"
                    >
                        แบบสำรวจผู้ใช้บริการ Gym หรือ Fitness
                    </h1>
                    <p
                        class="p-2 block font-k2d text-sm font-light leading-relaxed text-inherit antialiased"
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
