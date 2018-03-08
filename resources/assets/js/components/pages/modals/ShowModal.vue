<template>
 <div class="modal" :class="openmodal">
    <div class="modal-background"></div>
    <div class="modal-card">
        <header class="modal-card-head">
        <p class="modal-card-title">{{ list.name }}'s Details</p>
        <button @click="closeModal" class="delete" aria-label="close"></button>
        </header>
        <section class="modal-card-body">
            <div class="field">
                <label class="label">Name</label>
                {{ list.name }}
            </div>
            <div class="field">
                <label class="label">Phone</label>
                {{ list.phone }}
            </div>
            <div class="field">
                <label class="label">Email</label>
                {{ list.email }}
            </div>
        </section>
        <footer class="modal-card-foot">
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
          list: ''
      }
  },
  methods: {
    closeModal () {
        this.$emit('closeModalRequest');
    }
  }
}
</script>
