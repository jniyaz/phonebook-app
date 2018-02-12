<template>
<section class="section">
    <div class="container">
    <nav class="panel column is-8 is-offset-2">
        <div class="panel-heading">
            PhoneBook
            <button @click="openAddModal" class="button is-link is-outlined">
            <i class="fa fa-plus"></i>&nbsp;Add New
            </button>
        </div>
        <div class="panel-block">
            <p class="control has-icons-left">
            <input class="input is-small" type="text" placeholder="search">
            <span class="icon is-small is-left">
                <i class="fas fa-search"></i>
            </span>
            </p>
        </div>
        <a class="panel-block is-active">
            <span class="column is-9">
                Test
            </span>
            <span class="has-text-warning column is-1">
                <i class="fa fa-edit"></i>
            </span>
            <span class="has-text-info column is-1">
                <i class="fa fa-eye"></i>
            </span>
            <span class="has-text-danger column is-1">
                <i class="fa fa-trash"></i>
            </span>
        </a>
    </nav>
    <Add :openmodal="addActive" @closeModalRequest="closeModal"></Add>
    </div>
</section>
</template>

<script>
    let Add = require('./modals/AddModal.vue');

    export default {
        components: {Add},
        data () {
            return {
                addActive : ''
            }
        },
        methods: {
            openAddModal () {
                this.addActive = 'is-active';
            },
            closeModal () {
                this.addActive = '';
            }
        }
    }
</script>
