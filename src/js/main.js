const { createApp } = Vue;

createApp({
  data() {
    return {
      discs: [],
      currentDisc: null,
    };
  },
  methods: {
    getDiscs() {
      axios.get('server.php').then((response) => {
        console.log(response);
        this.discs = response.data;
      });
    },
    viewDisc(index) {
      axios.get('server.php', { params: { index } }).then((response) => {
        console.log(response);
        this.currentDisc = response.data;
      });
    },
  },
  created() {
    this.getDiscs();
  },
}).mount('#app');
