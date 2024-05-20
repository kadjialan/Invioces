import { createRouter, createWebHistory } from "vue-router";

import notFound from "../components/NotFound.vue";

import invioceIndex from "../components/invoice/index.vue";

const routes = [
    {
        path: '/',
        component: invioceIndex
    },
    {
        path: '/:pathMatch(.*)*',
        component: notFound
    }

]


const router = createRouter({
    history: createWebHistory(),
    routes
})


export default router