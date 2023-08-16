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
            <div class="m-12">
                <FITPUNG_SVG class="mx-auto w-46 h-auto" />
            </div>
            <div class="flex flex-col justify-center">
                <div
                    class="bg-orange-300 rounded-lg p-6 shadow-lg shadow-orange-600"
                >
                    <div class="pb-6">
                        <span class="font-prompt  text-lg text-stone-800">
                            โปรดแจ้งรหัสให้เจ้าหน้าที่ เพื่อแลกส่วนลด
                        </span>
                    </div>
                    <div
                        class="mx-auto bg-stone-600 h-40 w-40 rounded-lg shadow-md relative flex justify-center items-center"
                    >
                        <span
                            class="animate-ping absolute inline-flex h-4 w-4 rounded-full bg-orange-500 opacity-75 right-0 top-0"
                        ></span>
                        <h1 class="text-5xl font-k2d font-bold text-orange-500">
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
