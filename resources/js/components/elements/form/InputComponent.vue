<template>
    <div :class="getCss">
        <input :type="type" :name="name" :class="getInputClass" :required="isRequired"
               :placeholder="placeholder"
               :value="value"
               v-on:blur="$emit('the-value', $event.target.value)"
               v-on:click="$emit('the-value', $event.target.value)"
               v-on:keyup="$emit('the-value', $event.target.value)" />
        <label v-show="hasLabel">{{getLabel}}</label>
    </div>
</template>

<script>
    export default {
        name: "input-component",
        props: {
            name: String,
            groupClass: String,
            label: String,
            inputClass: String,
            type: String,
            required: String,
            value: String,
            placeholder: String
        },
        data() {
            return {
                hasLabel: false,
            }
        },
        computed: {
            isRequired() {
                return this.required == 'true';
            },
            getInputClass() {
                return this.inputClass ? this.inputClass : "md-input";
            },
            getCss() {
                return this.css ? this.css : "md-form-group float-label"
            },
            getLabel() {
                let label = this.label;
                if (label) {
                    this.hasLabel = true;
                    return label;
                }

                this.hasLabel = false;
            }
        },
        methods: {
        }
    }
</script>

<style scoped>

</style>