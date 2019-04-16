import VueRouter from 'vue-router'
import Vue from 'vue'
Vue.use(VueRouter)

/**
 * Pages
 */
import Home from '../pages/Home.vue'
import Contact from '../pages/Contact.vue'

const router = new VueRouter({
    mode: 'history',
    routes: [
        { path: '/', component: Home },
        { path: '/contact', component: Contact },
    ],
})

export default router
