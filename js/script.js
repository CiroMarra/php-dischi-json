const { createApp } = Vue;

createApp({
    data() {
        return {
            disks: [],
        };
    },
    methods: {
        getDisksFromApi() {
            axios.get('server.php').
            then((response) => {
                console.log(response);

                this.disks = response.data;
            }); 

        },

    },
    mounted() {
        this.getDisksFromApi();
      
    }
}).mount('#app');