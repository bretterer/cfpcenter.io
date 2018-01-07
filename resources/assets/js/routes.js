import VueRouter from 'vue-router';
import HomeComponent from './components/HomeComponent.vue';

const routes = [
  {
    path: '/',
    component: HomeComponent,
  },
];

const router = new VueRouter({
  routes,
  hashbang: false,
  linkActiveClass: 'active',
  mode: 'history',
});

export default router;