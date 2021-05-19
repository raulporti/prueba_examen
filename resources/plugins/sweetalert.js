import Vue from "vue";
import VueSweetalert2 from "vue-sweetalert2";

const options = {
    confirmButtonColor: "#AED50E",
    cancelButtonColor: "#005092",
    cancelButtonText: "Cancelar",
    confirmButtonText: "Aceptar"
};

// If you don't need the styles, do not connect
import "sweetalert2/dist/sweetalert2.min.css";

Vue.use(VueSweetalert2, options);