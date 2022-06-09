import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import AllDeliveries from '../views/deliveries/AllDeliveries.vue'
import ViewDelivery from '../views/deliveries/ViewDeliveries.vue'
import DealsView from '../views/deals/DealsView.vue'
import FastFoodsView from '../views/fastfoods/FastFoodsView.vue'
import deliveryman from '../views/deliverymen/deliveryman.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: '/about',
      name: 'about',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../views/AboutView.vue')
    },
    {
      path: '/deals',
      name: 'deals',
      component: DealsView
    },
    {
      path: '/fastfoods',
      name: 'fastfoods',
      component: FastFoodsView
    },
    {
      path: '/deliverymen',
      name: 'men',
      component: deliveryman
    },
    {
      path: '/deliveries',
      name: 'all-deliveries',
      component: AllDeliveries,
    },
    {
      path: '/deliveries/:id',
      name: 'view-delivery',
      component: ViewDelivery,
      props: true
    }
  ]
})

export default router
