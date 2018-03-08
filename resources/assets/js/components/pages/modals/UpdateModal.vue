<template>
  <div class="modal" :class="openmodal">
    <div class="modal-background"></div>
    <div class="modal-card">    
        <header class="modal-card-head">
        <p class="modal-card-title">Update {{ list.name }} Details</p>
        <button @click="closeModal" class="delete" aria-label="close"></button>
        </header>
        <section class="modal-card-body">
            <div class="field">
                <label class="label">Name</label>
                <div class="control">
                    <input class="input" :class="{'is-danger':typeof errors !== 'undefined' && errors.name}" type="text" v-model="list.name" placeholder="Name">
                </div>
                <small v-if="typeof errors !== 'undefined' && errors.name" class="has-text-danger">{{ errors.name[0] }}</small>
            </div>
            <div class="field">
                <label class="label">Phone</label>
                <div class="control">
                    <input class="input" :class="{'is-danger':typeof errors !== 'undefined' && errors.phone}" type="number" v-model="list.phone" placeholder="Phone">
                </div>
                <small v-if="typeof errors !== 'undefined' && errors.phone" class="has-text-danger">{{ errors.phone[0] }}</small>
            </div>
            <div class="field">
                <label class="label">Email</label>
                <div class="control">
                    <input class="input" :class="{'is-danger':typeof errors !== 'undefined' && errors.email}" type="email" v-model="list.email" placeholder="Email">
                </div>
                <small v-if="typeof errors !== 'undefined' && errors.email" class="has-text-danger">{{ errors.email[0] }}</small>
            </div>
        </section>
        <footer class="modal-card-foot">
        <button class="button is-success" @click="update">Update</button>
        <button class="button" @click="closeModal">Close</button>
        </footer>
    </div>
    </div>
</template>

<script>
    export default {
        props: ['openmodal'],
        data () {
            return {
                list: {},
                errors:{}
            }
        },
        methods: {
            closeModal () {
                this.$emit('closeModalRequest');
            },
            update () {
                axios.patch(`/phonebook/${this.list.id}`, this.$data.list)
                    .then((response) => this.closeModal())
                    .catch((error) => this.errors = error.response.data.errors)
            }
        }
    }
</script>
