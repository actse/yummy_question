<script setup>
import { ref, reactive } from "vue";
import { Link, router } from "@inertiajs/vue3";
import FormLayout from "@/Layouts/FormLayout.vue";
import Swal from "sweetalert2";

const form = reactive({
    userName: "",
    phone: "",
});

const Submit = () => {
    //console.log(form.phone);
    router
        .post("/saveUserData", form)
        .then((response) => {
            console.log(response.data);
        })
        .catch((error) => {
            console.error(error);
        });
};
</script>
<template>
    <FormLayout>
        <!-- Start Form -->
        <div class="px-4 py-2">
            <div
                class="relative flex w-full flex-col rounded-xl bg-orange-200/30 bg-clip-border text-gray-700 shadow-md"
            >
                <form @submit.prevent="Submit" action="">
                    <div class="p-4">
                        <div class="flex flex-col gap-4">
                            <div class="">
                                <label class="block">
                                    <span
                                        class="pl-2 font-k2d after:content-['*'] after:ml-0.5 after:text-red-500 block text-base font-medium text-slate-700"
                                    >
                                        ชื่อ
                                    </span>
                                    <input
                                        type="text"
                                        name="userName"
                                        v-model="form.userName"
                                        class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                                        required
                                    />
                                </label>
                            </div>
                            <div class="">
                                <label class="block">
                                    <span
                                        class="pl-2 font-k2d after:content-['*'] after:ml-0.5 after:text-red-500 block text-base font-medium text-slate-700"
                                    >
                                        เบอร์โทรศัพท์
                                    </span>
                                    <input
                                        type="tel"
                                        name="phone"
                                        pattern="[0-9]*"
                                        minlength="10"
                                        maxlength="10"
                                        v-model="form.phone"
                                        class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                                        required
                                    />
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 pt-0">
                        <button
                            class="select-none rounded-lg bg-[#f49f0a] py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-orange-500/20 transition-all hover:shadow-lg hover:shadow-orange-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                            type="submit"
                            data-ripple-light="true"
                        >
                            ต่อไป
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Form -->
    </FormLayout>
</template>

<style scoped></style>
