import { createRouter, createWebHistory } from "vue-router";
import Form from "../components/Form.vue";
import BookingDetails from "../components/BookingDetails.vue";

const routes = [
  { path: "/", name: "Form", component: Form },
  {
    path: "/booking-details",
    name: "BookingDetails",
    component: BookingDetails,
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
