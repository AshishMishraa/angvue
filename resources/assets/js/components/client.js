Vue.component('client-list', {
    props: ['user'],


    data() {
        return {
            clients: [],
            clientsLoaded: false
        };
    },
    methods: {
        getClients() {
            axios.get('/api/client')
                .then(response => {
                    this.clients = response.data;
                    console.log(response.data);
                    this.clientsLoaded = true;
                });
        }
    },
    mounted() {
        this.getClients();
    }

});
