<script setup>
import { ref, reactive, computed } from "vue";
import { Link, router } from "@inertiajs/vue3";
import Swal from "sweetalert2";
import FormLayout from "@/Layouts/FormLayout.vue";

const props = defineProps({
    token: String,
});
const token = props.token;

const questions = reactive([
    //questions 1
    {
        questionsId: 1,
        questionsName: "ท่านเข้าฟิตเนสมานานแค่ไหน",
        options: [
            { id: 1, answer: "1 - 6 เดือน" },
            { id: 2, answer: "6 เดือน - 1 ปี" },
            { id: 3, answer: "1 - 2 ปี" },
            { id: 4, answer: "3 - 5 ปี" },
            { id: 5, answer: "มากกว่า 5 ปี" },
        ],
        type: "radio",
    },
    //questions 2
    {
        questionsId: 2,
        questionsName: "ท่านเข้าฟิตเนสกี่ครั้งต่อสปดาห์",
        options: [
            { id: 1, answer: "เป็นประจำทุกวัน" },
            { id: 2, answer: "6 วันต่อสัปดาห์" },
            { id: 3, answer: "4- 5 วันต่อสัปดาห์" },
            { id: 4, answer: "1 - 3 วันต่อสัปดาห์" },
        ],
        type: "radio",
    },
    //questions 3
    {
        questionsId: 3,
        questionsName: "ท่านสมัครบริการฟิตเนสกี่ที่",
        options: [
            { id: 1, answer: "1 ที่" },
            { id: 2, answer: "2 ที่" },
            { id: 3, answer: "มากกว่า 2 ที่" },
        ],
        type: "radio",
    },
    //questions 4
    {
        questionsId: 4,
        questionsName:
            "ท่านเข้าฟิตเนสเดิมเป็นประจำหรือเปลี่ยนที่เล่นฟิตเนสบ่อยๆ",
        options: [
            { id: 1, answer: "เล่นที่เดิมประจำ" },
            { id: 2, answer: "เปลี่ยนที่เล่นเรื่อยๆ" },
        ],
        type: "radio",
    },
    //questions 5
    {
        questionsId: 5,
        questionsName:
            "วัตถุประสงค์ของการเข้าฟฟิตเนสของท่านคืออะไร ? (ตอบได้หลายข้อ)",
        options: [
            { id: 1, answer: "ออกกำลังกายทั่วไป" },
            { id: 2, answer: "สร้างกล้ามเนื้อ" },
            { id: 3, answer: "ลดน้ำหนัก" },
            { id: 4, answer: "เพื่อสุขภาพที่ดีอย่างต่อเนื่อง" },
            { id: 5, answer: "อื่นๆ" },
        ],
        type: "checkbox",
    },
    //questions 6
    {
        questionsId: 6,
        questionsName:
            "ในช่วงแรกที่เริ่มเข้าฟิตเนส ท่านได้รับคำแนะนำจากที่ไหนบ้าง",
        options: [
            { id: 1, answer: "บทความ/สื่อ ในอินเตอร์เน็ต" },
            { id: 2, answer: "อินฟลูเอ็นเซอร์ใน Social Media" },
            { id: 3, answer: "เทรนเนอร์ประจำฟิตเนส" },
            { id: 4, answer: "อื่นๆ" },
        ],
        type: "radio",
    },
    //questions 7
    {
        questionsId: 7,
        questionsName:
            "ในช่วงแรกที่เริ่มเข้าฟิตเนส หากท่านไม่ทราบว่าควรเริ่มเล่นเครื่องเล่นอะไร หรือไม่ทราบว่าควรเริ่มจากตรงไหน ท่านทำอย่างไร",
        options: [
            { id: 1, answer: "สอบถาม/ขอคำแนะนำจากเทรนเนอร์" },
            { id: 2, answer: "สอบถาม/ขอคำแนะนำจากพนักงาน" },
            { id: 3, answer: "สอบถาม/ขอคำแนะนำจากผู้เล่นท่านอื่น" },
            { id: 4, answer: "ค้นหาในอินเตอร์เน็ตด้วยตัวเอง" },
            { id: 5, answer: "มองดูผู้เล่นท่านอื่นและทำตาม" },
            { id: 6, answer: "ไม่ขอคำแนะนำและทดลองเล่นด้วยตัวเอง" },
            { id: 7, answer: "อื่นๆ" },
        ],
        type: "radio",
    },
    //questions 8
    {
        questionsId: 8,
        questionsName:
            "อุปสรรคในการเล่นฟิตเนสครั้งแรกของท่านคืออะไร  (ตอบได้หลายข้อ)",
        options: [
            { id: 1, answer: "ไม่ทราบว่าจะเล่นอะไรก่อน - หลัง" },
            { id: 2, answer: "ไม่ทราบวิธีการใช้งานเครื่องเล่นแต่ละประเภท" },
            {
                id: 3,
                answer: "ไม่ทราบวิธีการปรับหรือตั้งค่าเครื่องเล่นแต่ละประเภท",
            },
            {
                id: 4,
                answer: "ไม่แน่ใจในการจัดระเบียบท่าทางในการออกกำลังกายที่ถูกต้อง",
            },
            {
                id: 5,
                answer: "ไม่ทราบถึงค่าวัดหลังจากการออกกำลังกายว่าเผาผลาญไปเท่าไหร่ หรือ ส่งผลอย่างไรต่อกล้ามเนื้อของท่าน",
            },
            { id: 6, answer: "อื่นๆ" },
        ],
        type: "checkbox",
    },
    //questions 9
    {
        questionsId: 9,
        questionsName:
            "อุปสรรคในการเล่นฟิตเนสของท่านเมื่อใช้บริการฟิตเนสมาได้สักพักคืออะไร",
        options: [],
        type: "text",
    },
    //questions 10
    {
        questionsId: 10,
        questionsName: "ท่านได้จดบันทึกการออกกำลังกายของท่านหรือไม่",
        options: [
            { id: 1, answer: "จด" },
            { id: 2, answer: "ไม่จด" },
        ],
        type: "radio",
    },
    //questions 11
    {
        questionsId: 11,
        questionsName: "ท่านมีวิธีการติดตามการออกกำลังกายของท่านเองอย่างไร",
        options: [
            { id: 1, answer: "สร้างตาราง/แผนการออกกำลังกาย" },
            { id: 2, answer: "ใช้แอพพลิเคชันการออกกำลังกาย" },
            { id: 3, answer: "ไม่ได้ติดตามการออกกำลังกาย" },
            { id: 4, answer: "อื่นๆ" },
        ],
        type: "radio",
    },
    //questions 12
    {
        questionsId: 12,
        questionsName:
            "ท่านสะดวกที่จะใช้งาน แอพพลิเคชั่นช่วยออกกำลังกายในระหว่างใช้งานฟิตเนสหรือไม่",
        options: [
            { id: 1, answer: "สะดวก" },
            { id: 2, answer: "ไม่สะดวก" },
        ],
        type: "radio",
    },
    //questions 13
    {
        questionsId: 13,
        questionsName:
            "หากมีแอพพลิเคชันที่ช่วยเหลือท่านในการใช้งานในฟิตเนส เช่น การใช้งานเครื่องเล่นต่างๆ, วิธีการออกกำลังการกับเครื่องเล่นแต่ละชนิด, การจัดท่าทางการออกกำลังกาย, Checklist คอยติดตามการออกกำลังกาย ท่านจะดาวน์โหลดแอพมาใช้เพื่อช่วยในการออกกำลังกายของท่านหรือไม่",
        options: [
            { id: 1, answer: "ใช้" },
            { id: 2, answer: "ไม่ใช้" },
        ],
        type: "radio",
    },
    //questions 14
    {
        questionsId: 14,
        questionsName:
            "หากท่านต้องการใช้งานแอพพลิเคชันที่ช่วยในเรื่องการใช้งานฟิตเนส อยากให้มีฟังก์ชั่นใดในแอพของท่าน",
        options: [],
        type: "text",
    },
    //questions 15
    {
        questionsId: 15,
        questionsName:
            "ท่านได้ใช้แอพพลิเคชันในการช่วยการออกกำลังกายของท่านหรือไม่",
        options: [
            { id: 1, answer: "เคยประจำ" },
            { id: 2, answer: "เคยใช้บางครั้ง" },
            { id: 3, answer: "เคยใช้แค่ช่วงแรก" },
            { id: 4, answer: "ไม่เคยใช้" },
        ],
        type: "radio",
    },
]);

const moreQuestions = reactive([
    {
        questionsId: 1,
        questionsName:
            "ท่านใช้แอพพลิเคชันอะไรในการช่วยเหลือการเล่นฟิตเนสของท่าน",
        options: [],
        type: "text",
    },
    {
        questionsId: 2,
        questionsName: "ท่านให้คะแนนแอพพลิเคชันฟิตเนสที่ท่านใช้กี่คะแนน",
        options: [
            { id: 1, answer: 1 },
            { id: 2, answer: 2 },
            { id: 3, answer: 3 },
            { id: 4, answer: 4 },
            { id: 5, answer: 5 },
        ],
        type: "radio",
    },
    {
        questionsId: 3,
        questionsName:
            "แอพพลิเคชันฟิตเนสที่ท่านใช้งานอยู่มีสิ่งใดที่ต้องปรับปรุงบ้าง",
        options: [],
        type: "text",
    },
]);

const form = reactive({
    token: token,
    question1: "",
    question2: "",
    question3: "",
    question4: "",
    question5: [],
    question5Other: "",
    question6: "",
    question6Other: "",
    question7: "",
    question7Other: "",
    question8: [],
    question8Other: "",
    question9: "",
    question10: "",
    question11: "",
    question11Other: "",
    question12: "",
    question13: "",
    question14: "",
    question15: "",
    moreQuestion1: "",
    moreQuestion2: "",
    moreQuestion3: "",
});

const shouldCheckRequired = computed(() => {
    const checkboxQuestions = questions.filter(
        (question) => question.type === "checkbox"
    );

    for (const question of checkboxQuestions) {
        if (form[`question${question.questionsId}`].length > 0) {
            return false;
        }
    }

    return true;
});

const clearData = (e) => {
    //console.log(e.target);
    // console.log(e.target.name);
    // console.log(e.target.value);
    //console.log(form.question5Other);

    if (e.target.name === "question-5" && e.target.value === "อื่นๆ") {
        form.question5Other = "";
    }

    if (e.target.name === "question-6" && e.target.value === "อื่นๆ") {
        form.question6Other = "";
    }

    if (e.target.name === "question-7" && e.target.value === "อื่นๆ") {
        form.question7Other = "";
    }

    if (e.target.name === "question-8" && e.target.value === "อื่นๆ") {
        form.question8Other = "";
    }

    if (e.target.name === "question-11" && e.target.value === "อื่นๆ") {
        form.question11Other = "";
    }

    if (e.target.name === "question-15" && e.target.value === "เคยประจำ") {
        form.moreQuestion1 = "";
        form.moreQuestion2 = "";
        form.moreQuestion3 = "";
    }
};

const Submit = () => {
    router.post("/saveQuestion", form);
};
</script>
<template>
    <FormLayout>
        <!-- Start Form -->
        <form @submit.prevent="Submit">
            <!-- Questions -->
            <div
                class="px-4 py-2"
                v-for="(question, index) in questions"
                :key="index"
            >
                <div
                    class="relative flex flex-col w-full max-w-screen-md mx-auto text-gray-700 shadow-md rounded-xl bg-orange-200/30 bg-clip-border"
                >
                    <div class="p-4">
                        <div class="flex flex-col">
                            <div class="">
                                <div
                                    class="flex flex-row pb-4 font-semibold lg:text-base md:text-base"
                                >
                                    <div class="">{{ index + 1 }}.</div>
                                    <div class="pl-4">
                                        {{ question.questionsName }}
                                    </div>
                                </div>
                                <!-- Loop through options for each question -->
                                <div
                                    class="py-2"
                                    v-for="(
                                        option, optionIndex
                                    ) in question.options"
                                    :key="option.id"
                                >
                                    <div
                                        class="flex flex-row lg:text-base text-sm"
                                        v-if="
                                            question.type == 'radio' ||
                                            question.type == 'checkbox'
                                        "
                                    >
                                        <div class="pl-2">
                                            <input
                                                v-model="
                                                    form[
                                                        `question${question.questionsId}`
                                                    ]
                                                "
                                                :type="question.type"
                                                :name="
                                                    'question-' +
                                                    question.questionsId
                                                "
                                                :value="option.answer"
                                                class="text-orange-500 border-gray-300 focus:ring-orange-500"
                                                :required="shouldCheckRequired"
                                                @change="clearData($event)"
                                            />
                                        </div>
                                        <div class="pl-4">
                                            {{ option.answer }}
                                        </div>
                                    </div>
                                </div>
                                <!-- Check Question 5 -->
                                <input
                                    v-if="
                                        form.question5.includes('อื่นๆ') &&
                                        question.questionsId == 5
                                    "
                                    type="text"
                                    v-model="form.question5Other"
                                    class="block w-full px-3 py-2 mt-1 bg-white border rounded-md shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-orange-600 focus:ring-orange-500 sm:text-sm focus:ring-1"
                                    placeholder="โปรดระบุ"
                                    :required="
                                        form.question5.includes('อื่นๆ') &&
                                        question.questionsId == 5
                                    "
                                />

                                <!-- Check Question 6 -->
                                <input
                                    v-if="
                                        form.question6 == 'อื่นๆ' &&
                                        question.questionsId == 6
                                    "
                                    type="text"
                                    v-model="form.question6Other"
                                    class="block w-full px-3 py-2 mt-1 bg-white border rounded-md shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-orange-600 focus:ring-orange-500 sm:text-sm focus:ring-1"
                                    placeholder="โปรดระบุ"
                                    :required="
                                        form.question6 == 'อื่นๆ' &&
                                        question.questionsId == 6
                                    "
                                />

                                <!-- Check Question 7 -->
                                <input
                                    v-if="
                                        form.question7 == 'อื่นๆ' &&
                                        question.questionsId == 7
                                    "
                                    type="text"
                                    v-model="form.question7Other"
                                    class="block w-full px-3 py-2 mt-1 bg-white border rounded-md shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-orange-600 focus:ring-orange-500 sm:text-sm focus:ring-1"
                                    placeholder="โปรดระบุ"
                                    :required="
                                        form.question7 == 'อื่นๆ' &&
                                        question.questionsId == 7
                                    "
                                />

                                <!-- Check Question 8 -->
                                <input
                                    v-if="
                                        form.question8.includes('อื่นๆ') &&
                                        question.questionsId == 8
                                    "
                                    type="text"
                                    v-model="form.question8Other"
                                    class="block w-full px-3 py-2 mt-1 bg-white border rounded-md shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-orange-600 focus:ring-orange-500 sm:text-sm focus:ring-1"
                                    placeholder="โปรดระบุ"
                                    :required="
                                        form.question8.includes('อื่นๆ') &&
                                        question.questionsId == 8
                                    "
                                />
                                <!-- Check Question 9 -->
                                <input
                                    v-if="question.questionsId === 9"
                                    :type="question.type"
                                    v-model="
                                        form[`question${question.questionsId}`]
                                    "
                                    class="block w-full px-3 py-2 mt-1 bg-white border rounded-md shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-orange-600 focus:ring-orange-500 sm:text-sm focus:ring-1"
                                    placeholder="โปรดระบุ"
                                    required
                                />
                                <!-- Check Question 14 -->
                                <input
                                    v-if="question.questionsId === 14"
                                    :type="question.type"
                                    v-model="
                                        form[`question${question.questionsId}`]
                                    "
                                    class="block w-full px-3 py-2 mt-1 bg-white border rounded-md shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-orange-600 focus:ring-orange-500 sm:text-sm focus:ring-1"
                                    placeholder="โปรดระบุ"
                                    required
                                />
                                <!-- Check Question 11 -->
                                <input
                                    v-if="
                                        form.question11 == 'อื่นๆ' &&
                                        question.questionsId == 11
                                    "
                                    type="text"
                                    v-model="form.question11Other"
                                    class="block w-full px-3 py-2 mt-1 bg-white border rounded-md shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-orange-600 focus:ring-orange-500 sm:text-sm focus:ring-1"
                                    placeholder="โปรดระบุ"
                                    :required="
                                        form.question11 == 'อื่นๆ' &&
                                        question.questionsId == 11
                                    "
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ShowMoreQuestions -->
            <div v-if="form.question15 && form.question15 !== 'ไม่เคยใช้'">
                <div class="px-4 py-2">
                    <div
                        class="relative flex flex-col w-full text-gray-700 shadow-md rounded-xl bg-lime-300/30 bg-clip-border"
                    >
                        <div class="p-4">
                            <h2 class="font-semibold">
                                คำถามเพิ่มเติมสำหรับผู้ใช้งานแอพพลิเคชันช่วยการออกกำลังกายในฟิตเนส
                            </h2>
                        </div>
                    </div>
                </div>
                <div
                    class="px-4 py-2"
                    v-for="(moreQ, index) in moreQuestions"
                    :key="index"
                >
                    <div
                        class="relative flex flex-col w-full text-gray-700 shadow-md rounded-xl bg-lime-300/30 bg-clip-border"
                    >
                        <div class="p-4">
                            <div class="flex flex-col gap-4">
                                <div class="">
                                    <h2 class="py-2 text-base font-semibold">
                                        {{ index + 1 }}
                                        {{ moreQ.questionsName }}
                                    </h2>
                                    <!-- Loop through options for each question -->
                                    <div
                                        class="py-2"
                                        v-for="(
                                            option, optionIndex
                                        ) in moreQ.options"
                                        :key="option.id"
                                    >
                                        <label
                                            class="text-sm"
                                            v-if="
                                                moreQ.type == 'radio' ||
                                                moreQ.type == 'checkbox'
                                            "
                                            ><input
                                                v-model="
                                                    form[
                                                        `moreQuestion${moreQ.questionsId}`
                                                    ]
                                                "
                                                :type="moreQ.type"
                                                :name="
                                                    'moreQuestion-' +
                                                    moreQ.questionsId
                                                "
                                                :value="option.id"
                                                class="text-orange-500 border-gray-300 focus:ring-orange-500"
                                                required
                                            />
                                            <span class="pl-2"
                                                >{{ option.answer }}
                                            </span>
                                        </label>
                                    </div>
                                    <!-- Check More Question 1 -->
                                    <input
                                        v-if="moreQ.questionsId === 1"
                                        :type="moreQ.type"
                                        v-model="
                                            form[
                                                `moreQuestion${moreQ.questionsId}`
                                            ]
                                        "
                                        class="block w-full px-3 py-2 mt-1 bg-white border rounded-md shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-orange-600 focus:ring-orange-500 sm:text-sm focus:ring-1"
                                        placeholder="โปรดระบุ"
                                        required
                                    />
                                    <!-- Check More Question 3 -->
                                    <input
                                        v-if="moreQ.questionsId === 3"
                                        :type="moreQ.type"
                                        v-model="
                                            form[
                                                `moreQuestion${moreQ.questionsId}`
                                            ]
                                        "
                                        class="block w-full px-3 py-2 mt-1 bg-white border rounded-md shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-orange-600 focus:ring-orange-500 sm:text-sm focus:ring-1"
                                        placeholder="โปรดระบุ"
                                        required
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Summit -->
            <div class="p-4 pt-2">
                <button
                    class="select-none rounded-lg border-2 border-orange-50 text-orange-50/90 py-3 px-6 text-center align-middle text-sm font-bold uppercase shadow-md shadow-orange-500/20 transition-all hover:shadow-lg hover:shadow-orange-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    type="submit"
                    data-ripple-light="true"
                >
                    ส่งแบบฟอร์ม
                </button>
            </div>
        </form>
        <!-- End Form -->
    </FormLayout>
</template>

<style scoped></style>
