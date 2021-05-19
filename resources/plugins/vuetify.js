import Vue from "vue";
import Vuetify from "vuetify";
Vue.use(Vuetify);

const opts = {
    icons: {
        iconfont: "mdi" // default - only for display purposes
    },
    theme: {
        themes: {
            light: {
                //primary: "#005092",
                primary: "#2763D3",
                secondary: "#0C2E6F",
                accent: "#AED50E",
                error: "#FF5252",
                info: "#2196F3",
                success: "#4CAF50",
                warning: "#FFC107",
                white: "#ffffff",
                bgcard: "#F2F6FC"
            }
        }
    }
};

export default new Vuetify(opts);