<template>
    <form>
        <a @click='addCategory' class='add'>+ Add Category</a>
        <div v-for="(category, index) in categories" v-bind:key="category.id">
            <!-- :ref makes a reference, as described here: https://vuejs.org/v2/api/#ref -->
            <input type='text' v-model='category.name' :ref='category.name'/>
            <input type='number' v-model='category.display_order'/>
            <a @click='removeCategory(index)' class='remove'>delete</a>
            <div>
                <!-- use of sting interpolation to add php variable into string -->
                <img v-if='category.image' :src="`/images/${category.image}`" width='100' />
                <label v-else>Image: </label>
                <!-- .lazy means sync only after change event -->
                <input type='text' v-model.lazy='category.image' />
                <hr/>
            </div>
        </div>
    </form>
</template>

<script>
export default {
    
    name: 'category-manager',
    // initialCategories is passed in as props on 'index.blade.php'
    props: ['initialCategories'],
    data() {
        return {
            // using Low Dash to make a copy of the categories object, so we don't mutate the base data
            categories: _.cloneDeep(this.initialCategories),
        };
    },
    created() {
        axios.post('/api/categories/upsert');
    },
    methods: {
        removeCategory(index) {
            if (confirm('Are you sure?')) {
                this.categories.splice(index, 1);
            }
        },
        addCategory() {
            this.categories.push({
                id: 0,
                name: '',
                image: '',
                display_order: this.categories.length + 1,
            });
            // provide DOM with time to load item before scroll
            this.$nextTick(() => {
                window.scrollTo(0, document.body.scrollHeight);
                // placing 'Entrees' into first [] will continually focus on first part of 'Entrees"
                this.$refs[''][0].focus();
            });
        }
    },
}
</script>

<style scoped>
    img {
        vertical-align: middle;
    }
    hr {
        margin-bottom: 30px;
    }
</style>