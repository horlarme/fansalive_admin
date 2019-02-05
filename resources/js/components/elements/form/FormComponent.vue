<template>
    <form :action="getAction"
          :method="getMethod"
          :class="getClass"
          @submit="$emit('submitted', $event)">
        <slot> </slot>
    </form>
</template>

<script>
    export default {
        name: "form-component",
        props: {
            method: String,
            action: String,
        },
        computed: {
            getMethod() {
                return this.method ? this.method : 'get';
            },
            getAction() {
                return this.action ? this.action : '#';
            },
            getClass() {
                return this.class ? this.class : 'form';
            }
        }
    }
</script>

<style scoped>

</style>