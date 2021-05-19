import config from "../config";

export default {
    state: {},
    actions: {
        insertarVenta: async ({ commit }, venta) => {
            let response = await axios.post(
                config.baseUrl + "ventas",
                venta,
                {
                }
            );
            return response;
        },
    },
    mutations: {},
    getters: {}
}