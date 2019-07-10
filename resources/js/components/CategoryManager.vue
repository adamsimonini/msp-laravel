<template>
    <div>
        <p>CATEGORY LOADED!</p>
        <!-- <div v-for="category in categories" :key="catgeory.id">
            {{ category.name }}
        </div> -->
    </div>
</template>

<script>
    export default {
        props: ['categories']
    }
</script>