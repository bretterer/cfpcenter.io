import VueRouter from 'vue-router';
import HomeComponent from './components/HomeComponent.vue';
import ConferenceComponent from './components/ConferenceComponent.vue';

const routes = [
  {
    path: '/',
    component: HomeComponent,
  },
  {
    path: '/conferences/:id',
    component: ConferenceComponent,
  }
];

const router = new VueRouter({
  routes,
  hashbang: false,
  linkActiveClass: 'active',
  mode: 'history',
});

export default router;