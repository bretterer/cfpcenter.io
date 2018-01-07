<style lang='scss'>

</style>
<template>
    <div>
        <navbar></navbar>
        <div v-for="conference in conferences.data" class="inline-flex justify-center items-stretch px-4 py-3 m-3">
            <div class="max-w-xs rounded overflow-hidden shadow-lg flex-1">
                <img class="w-full" src="https://tailwindcss.com/img/card-top.jpg" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{ conference.name }}</div>
                    <p class="text-grey-darker text-base">
                        {{ conference.about }}
                    </p>
                </div>
                <div class="px-6 py-4">
                    <button class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded">Submit</button>
                </div>
                <div class="px-6 py-4" v-for="tag in conference.tags.data">
                    <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#{{tag.tag.tag }}</span>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
  import axios from 'axios';
  import Navbar from './NavComponent.vue';

  export default {
    data() {
      return {
        conferences: [],
      };
    },

    created() {
      this.getConferences();
    },

    methods: {
      getConferences() {
        axios.get('/api/conferences').then(response => this.conferences = response.data).catch(error => error.console(error));
      }
    },

    components: {
      Navbar,
    }
  };
</script>