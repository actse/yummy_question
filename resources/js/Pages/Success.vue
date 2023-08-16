<script setup>
import { ref } from "vue";
import FITPUNG_SVG from "@/Components/FITPUNG_SVG.vue";
import ACTSE_SVG from "@/Components/ACTSE_SVG.vue";

const props = defineProps({
    token: String,
});
const token = props.token;
</script>
<template>
    <div class="min-h-screen bg-stone-600 flex">
        <div class="w-full p-4 text-center">
            <div class="mx-12 my-10">
                <FITPUNG_SVG
                    class="lg:mx-auto lg:w-[20%] lg:h-auto mx-auto w-46 h-auto"
                />
                <div class="pt-4 text-orange-400 font-varela text-sm">FIT for Success, PUNG for Progress!</div>
            </div>
            <div class="flex flex-col justify-center lg:px-64">
                <div
                    class="bg-orange-300 rounded-lg p-6 lg:p-16 shadow-lg shadow-orange-600"
                >
                    <div class="pb-6 lg:pb-12">
                        <span
                            class="font-kanit text-lg lg:text-3xl text-stone-800"
                        >
                            โปรดแจ้งรหัสให้เจ้าหน้าที่ เพื่อแลกส่วนลด
                        </span>
                    </div>
                    <div
                        class="mx-auto bg-stone-600 h-40 w-40 lg:h-64 lg:w-80 rounded-lg shadow-md relative flex justify-center items-center"
                    >
                        <span
                            class="animate-ping absolute inline-flex h-4 w-4 rounded-full bg-orange-500 opacity-75 right-0 top-0"
                        ></span>
                        <h1
                            class="text-5xl lg:text-8xl font-k2d font-bold text-orange-500"
                        >
                            {{ token }}
                        </h1>
                    </div>
                    <div class="flex flex-row absolute bottom-0 right-0 m-4">
                        <ACTSE_SVG class="w-24 h-auto"></ACTSE_SVG>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style></style>
