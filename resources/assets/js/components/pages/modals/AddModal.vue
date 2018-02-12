<template>
  <div class="modal" :class="openmodal">
    <div class="modal-background"></div>
    <div class="modal-card">
        <header class="modal-card-head">
        <p class="modal-card-title">Add Phone Data</p>
        <button @click="closeModal" class="delete" aria-label="close"></button>
        </header>
        <section class="modal-card-body">
        <!-- Content ... -->
        </section>
        <footer class="modal-card-foot">
        <button class="button is-success">Save</button>
        <button class="button" @click="closeModal">Close</button>
        </footer>
    </div>
    </div>
</template>

<script>
    export default {
        props: ['openmodal'],
        methods: {
            closeModal () {
                this.$emit('closeModalRequest');
            }
        }
    }
</script>
