<template>
    <h1 class="bg-gray-300">{{ title }}</h1>
    <br/>
    <button @click="handleClick" class="py-2 px-4 border border-green-600  text-green-600 hover:bg-green-600 hover:text-white">Click Me</button>
</template>
<script>
export default {
    setup: () => ({
        title: 'How To Install Vue 3 in Laravel 8 From Scratch',
        handleClick: () => {
            alert('Vue 3 is working!')
        }
    })

}
</script>
