<template>
    <h1 class="text-center mt-10 text-2xl font-bold underline space-x-8">
        <span>{{ message }}</span>
        <button @click="increment(1)" class="px-3 py-0 bg-green-600 text-white">
            <i class="fa-solid fa-plus"></i>
        </button>
    </h1>
    <div
        class="mx-auto justify-center text-center w-5/12 flex flex-col space-y-4 mt-2"
    >
        <table class="table">
            <thead class="bg-blue-200 h-7">
                <tr>
                    <th>Chapter</th>
                    <th>Title</th>
                    <th>Page</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr
                    v-for="item in items"
                    :key="item"
                    :class="`cursor-pointer hover:bg-gray-300 ${className(item)}`"
                >
                    <td>{{ item }}</td>
                    <td>{{ randomName(item) }}</td>
                    <td>{{ randomPage(item) }}</td>
                    <td>
                        <button
                            @click="increment(-1)"
                            class="rounded-full h-6 w-6 bg-red-300 hover:bg-red-600 text-white"
                        >
                        <i class="fa-solid fa-xmark"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>

        <button @click="increment(1)" class="px-5 py-1 bg-green-600 text-white">
            <i class="fa-solid fa-plus"></i>
        </button>
    </div>
</template>
<script>
import { ref } from "vue";
export default {
    setup() {
        const count = ref(0);
        const items = ref(1);
        return {
            message: "Table of Contents",
            count: count,
            items: items,
        };
    },
    methods: {
        increment(value) {
            this.items += value;
        },
        randomName(value) {
            return "Chapter " + value;
        },
        className(value) {
            return value % 2 === 0 ? "bg-gray-200" : "";
        },
        randomPage(value) {
            return Math.floor(Math.random() * 100) + 1 + value;
        },
    },
};
</script>
