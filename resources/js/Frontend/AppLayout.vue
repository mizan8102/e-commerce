<template>
    <Header title="sh" />
      <slot></slot>
    <!-- recomended for you end -->
    <Footer />

</template>
<script>
    import { defineComponent } from 'vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';
    import Header from '@/Frontend/header.vue'
    import Footer from '@/Frontend/footer.vue'
    export default defineComponent({
        components: {
            Head,
            Link,
            Header,
            Footer,
        },

        props: {
            canLogin: Boolean,
            canRegister: Boolean,
            laravelVersion: String,
            phpVersion: String,
        }
    })
</script>
<style>
</style>
