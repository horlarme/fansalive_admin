<template>
    <div :class="getCss">
        <input type="submit" :class="getButtonClass" :value="value" v-on:click="$emit('clicked', $event.target)">
    </div>
</template>

<script>
    export default {
        name: "button-component",
        props: {
            groupClass: String,
            buttonClass: String,
            value: String,
        },
        data() {
            return {
                hasLabel: false,
                label: false,
            }
        },
        computed: {
            getButtonClass() {
                return this.buttonClass ? this.buttonClass : "btn primary btn-block p-x-md";
            },
            getCss() {
                return this.css ? this.css : "md-form-group"
            }
        }
    }
</script>

<style scoped>

</style>