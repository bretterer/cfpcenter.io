<style lang='scss'>

</style>
<template>
    <div>
      <navbar></navbar>
      <div class="container mx-auto flex pt-4">
          <div class="flex-1">
              <h2 class="font-sans font-light text-5xl text-blue-darker tracking-wide">{{ conference.name }}</h2>
              <h4 class="font-sans font-light text-3xl text-blue-darker tracking-wide">{{ conference.city }}, {{ conference.state }}</h4>
              <p><a :href="conference.website">Conference Website</a> | <p  v-if="conference.coc === 1"><a :href="conference.cocLink">Code of Conduct</a></p> <p v-else>This conference has not put a Code of Conduct in place for us to show you.</p></p>
              <p class="font-sans font-light pt-4 text-3xl text-blue-darker tracking-wide"> Conference Date: {{ conference.confDate }}</p>
              <p class="font-sans font-light pt-4 text-3xl text-blue-darker tracking-wide"> Cfp Date: {{ conference.cfpDate }}</p>
              <button class="bg-blue-dark hover:bg-blue-dark text-white font-bold py-2 px-4 rounded">
                  Submit
              </button>
          </div>
          <div class="flex-1">
              <img :src="conference.image">
          </div>
      </div>
      <div class="container mx-auto flex pt-4">
        <div class="flex-1">
            {{ conference.about }}
        </div>
      </div>
    </div>
</template>
<script>
  import axios from 'axios';
  import Navbar from './NavComponent.vue';
  import Footer from './FooterComponent.vue';

  export default {
    created() {
      this.getConference();
    },

    data() {
      return {
        conference: [],
      };
    },

    methods: {
      getConference() {
        axios.get(`/api/conferences/${this.$route.params.id}`).then(response => {
          this.conference = response.data.data[0];
        }).catch(error => {
          console.log(error);
        });
      }
    },

    components: {
      Navbar,
      Footer,
    },
  };
</script>