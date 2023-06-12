const { createApp } = Vue;

createApp({
    data() {
        return {
            text: "Ciao a tutti",
            urlApiPhp: "api.php",
            lista: []
        }
    },

    methods: {
        getLista() {
            axios.get(this.urlApiPhp).then((response) => {
                this.lista = response.data;
            })
        }
    }


}).mount("#app");


