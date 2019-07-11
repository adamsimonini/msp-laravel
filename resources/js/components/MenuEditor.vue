<template>
    <div class="">
        <h1>Menu Editor</h1>
        <!-- placeholder that swaps out the components based on the corresponding URL path -->
        <router-view></router-view>
    </div>
</template>

<script>
    import VueRouter from 'vue-router';
    import CategroyManager from './CategoryManager.vue';
    import MenuItem from './MenuItem.vue';

    export default {
        name: 'menu-editor',
        router: new VueRouter({
            routes: [
                {
                    path: '/categories',
                    name: 'categories',
                    component: CategroyManager
                },
                {
                    path: '/',
                    redirect: {name: 'categories'}
                },
                {
                    path: '/add-item',
                    name: 'add-item',
                    component: MenuItem
                },
            ]
        }),
    }
</script>
