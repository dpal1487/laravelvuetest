<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import useForm from "@inertiajs/vue3";

const form= useForm({
    
});
</script>

<template>
    <AuthenticatedLayout>
        <Head title="Employee Form" />
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <form @submit.prevent="submit()">
                            <div class="grid gap-6 mb-6 md:grid-cols-2">
                                <div>
                                    <label
                                        for="first_name"
                                        class="block mb-2 text-sm font-medium text-gray-900"
                                        >First name</label
                                    >
                                    <input
                                        type="text"
                                        id="first_name"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5"
                                        placeholder="John"
                                        required
                                    />
                                </div>
                                <div>
                                    <label
                                        for="last_name"
                                        class="block mb-2 text-sm font-medium text-gray-900"
                                        >Last name</label
                                    >
                                    <input
                                        type="text"
                                        id="last_name"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                                        placeholder="Doe"
                                        required
                                    />
                                </div>
                                <div>
                                    <label
                                        for="company"
                                        class="block mb-2 text-sm font-medium text-gray-900"
                                        >Company</label
                                    >
                                    <input
                                        type="text"
                                        id="company"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:placeholder-gray-400"
                                        placeholder="Flowbite"
                                        required
                                    />
                                </div>
                                <div>
                                    <label
                                        for="phone"
                                        class="block mb-2 text-sm font-medium text-gray-900"
                                        >Phone number</label
                                    >
                                    <input
                                        type="tel"
                                        id="phone"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5"
                                        placeholder="123-45-678"
                                        pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"
                                        required
                                    />
                                </div>
                                <div>
                                    <label
                                        for="website"
                                        class="block mb-2 text-sm font-medium text-gray-900"
                                        >Website URL</label
                                    >
                                    <input
                                        type="url"
                                        id="website"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5"
                                        placeholder="flowbite.com"
                                        required
                                    />
                                </div>
                                <div>
                                    <label
                                        for="visitors"
                                        class="block mb-2 text-sm font-medium text-gray-900"
                                        >Unique visitors (per month)</label
                                    >
                                    <input
                                        type="number"
                                        id="visitors"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5"
                                        placeholder=""
                                        required
                                    />
                                </div>
                                <div>
                                    <label
                                        for="email"
                                        class="block mb-2 text-sm font-medium text-gray-900"
                                        >Email address</label
                                    >
                                    <input
                                        type="email"
                                        id="email"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5"
                                        placeholder="john.doe@company.com"
                                        required
                                    />
                                </div>
                                <div>
                                    <label
                                        for="password"
                                        class="block mb-2 text-sm font-medium text-gray-900"
                                        >Password</label
                                    >
                                    <input
                                        type="password"
                                        id="password"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:border-blue-500 block w-full p-2.5"
                                        placeholder="•••••••••"
                                        required
                                    />
                                </div>
                            </div>
                            <div
                                class="flex items-center justify-center w-full"
                            >
                                <label
                                    for="dropzone-file"
                                    class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600"
                                >
                                    <div
                                        class="flex flex-col items-center justify-center pt-5 pb-6"
                                    >
                                        <svg
                                            class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400"
                                            aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 20 16"
                                        >
                                            <path
                                                stroke="currentColor"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"
                                            />
                                        </svg>
                                        <p
                                            class="mb-2 text-sm text-gray-500 dark:text-gray-400"
                                        >
                                            <span class="font-semibold"
                                                >Click to upload</span
                                            >
                                            or drag and drop
                                        </p>
                                        <p
                                            class="text-xs text-gray-500 dark:text-gray-400"
                                        >
                                            SVG, PNG, JPG or GIF (MAX.
                                            800x400px)
                                        </p>
                                    </div>
                                    <input
                                        id="dropzone-file"
                                        type="file"
                                        class="hidden"
                                    />
                                </label>
                            </div>

                            <button
                                type="submit"
                                class="text-white my-5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            >
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
