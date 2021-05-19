<template>
    <div id="app">
        <main>
            <v-app>
                <v-main>
                    <v-container>
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                    <v-card>
                        <v-card-title>
                            Ventas
                        </v-card-title>
                        <v-card-text>
                    <v-text-field
                    color="purple darken-2"
                    label="ID Cliente"
                    v-model="cli_id"  
                    required
                    ></v-text-field>
                    <v-text-field
                    color="purple darken-2"
                    label="Mes"
                    required
                    v-model="vta_mes"  
                    ></v-text-field>
                    <v-text-field
                    color="purple darken-2"
                    label="Año"
                    required
                    v-model="vta_anio"
                    ></v-text-field>
                    <v-text-field
                    color="purple darken-2"
                    label="Monto"
                    required
                    v-model="vta_monto"
                    @change="asignar_categoria(vta_monto)"
                    ></v-text-field>
                    <v-text-field
                    color="purple darken-2"
                    label="Clasificacion"
                    required
                    v-model="vta_clascli"
                    ></v-text-field>
        </v-card-text>
        <v-card-actions>
        <v-btn
        text
        color="teal accent-4"
        @click="guardar_venta"
        >
        Guardar
        </v-btn>
    </v-card-actions>
                    </v-card>
            </div>
        </div>
                    </v-container>
                </v-main>
            </v-app>
        </main>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                    cli_id: '',
                    vta_mes: '',
                    vta_anio: '',
                    vta_monto:'',
                    vta_clascli: ''
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            async guardar_venta(){
                const venta = {
                    cli_id: parseInt(this.cli_id),
                    vta_mes: this.vta_mes,
                    vta_anio: this.vta_anio,
                    vta_monto: parseFloat( this.vta_monto),
                    vta_clascli: this.vta_clascli
                }
                //console.log(venta)
            let response = await this.$store.dispatch('insertarVenta', venta)
            console.log(response)
                if(response.data.success){
                    this.$swal({
                            icon: "success",
                            title: "Importante!",
                            text: response.data.message
                        });
                        this.limpiar_datos()
                }else{
                    this.$swal({
                            icon: "error",
                            title: "Importante!",
                            text: response.data.message
                        });
                }
            },

            limpiar_datos(){
                this.clid_id = '',
                this.vta_mes = '',
                this.vta_anio = '',
                this.vta_monto = '',
                this.vta_clascli = ''
            },
            asignar_categoria(vta_monto){
                let monto = parseFloat(vta_monto)
                if(vta_monto >= 1 && monto <= 200000){
                    this.vta_clascli = 'E'
                }else if(monto > 200000 && monto <= 500000){
                    this.vta_clascli = 'D'
                }else if(monto > 500000 && monto <= 800000){
                        this.vta_clascli = 'C'
                }else if(monto > 800000 && monto <= 1000000){
                    this.vta_clascli = 'B'
                }else if(monto > 1000000){
                    this.vta_clascli = 'A'
                }else{
                    this.$swal({
                            icon: "error",
                            title: "Importante!",
                            text: 'Ingrese una cantidad Correcta'
                        });

                }
            }
        }
    }
</script>
