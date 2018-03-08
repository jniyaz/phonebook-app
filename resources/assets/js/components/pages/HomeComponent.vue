<template>
<section class="section">
    <div class="container">
    <nav class="panel column is-8 is-offset-2">
        <div class="panel-heading">
            PhoneBook
            <button @click="openModal" class="button is-link is-outlined">
                <i class="fa fa-plus"></i>&nbsp;Add New
            </button>
            <span class="is-pulled-right" v-if="loading">
                <i class="fa fa-refresh fa-spin fa-2x fa-fw"></i>
            </span>
        </div>
        <div class="panel-block">
            <p class="control has-icons-left">
            <input class="input is-small" type="text" placeholder="search">
            <span class="icon is-small is-left">
                <i class="fas fa-search"></i>
            </span>
            </p>
        </div>
        <a v-show="lists.length > 0" v-for="(item,key) in lists" v-bind:key="item.id" class="panel-block is-active">
            <span class="column is-4">
                {{ item.name }}
            </span>
            <span class="column is-5">
                {{ item.phone }}
            </span>
            <span class="has-text-info column is-1" @click="openShow(key)">
                <i class="fa fa-eye"></i>
            </span>
            <span class="has-text-warning column is-1" @click="openUpdate(key)">
                <i class="fa fa-edit"></i>
            </span>            
            <span class="has-text-danger column is-1" @click="del(key, item.id)">
                <i class="fa fa-trash"></i>
            </span>
        </a>
    </nav>
    <Add :openmodal="addActive" @closeModalRequest="closeModal"></Add>
    <Show :openmodal="showActive" @closeModalRequest="closeModal"></Show>
    <Update :openmodal="updateActive" @closeModalRequest="closeModal"></Update>
    </div>
</section>
</template>

<script>
    let Add = require('./modals/AddModal.vue');
    let Show = require('./modals/ShowModal.vue');
    let Update = require('./modals/UpdateModal.vue');

    export default {
        components: {Add, Show, Update},
        data () {
            return {
                addActive : '',
                showActive: '',
                updateActive: '',
                lists:{},
				errors:{},
                loading: false
            }
        },
        mounted () {
            this.getPhonebooks();
        },
        methods: {
            openModal () {
                this.addActive = 'is-active';
            },
            openShow (key) {
                this.showActive = 'is-active';
                this.$children[1].list = this.lists[key];
            },
            openUpdate (key) {
                this.updateActive = 'is-active';
                this.$children[2].list = this.lists[key];
            },
            closeModal () {
                this.addActive = this.showActive = this.updateActive = '';
            },
            getPhonebooks () {
                axios.post('/getData')
                     .then((response) => this.lists = response.data)
                     .catch((error) => this.errors = error.response.data.errors)
            },
            del(key, id){
                this.loading = !this.loading
                if (confirm('Are you sure?')){
                    axios.delete(`/phonebook/${id}`)
                        .then((response)=> {
                            this.lists.splice(key, 1);
                            this.loading = !this.loading
                        })
                        .catch((error) => this.errors = error.response.data.errors)
                }
            }
        }
    }
</script>
