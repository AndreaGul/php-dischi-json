const { createApp } = Vue;

createApp({
  data() {
    return {
      discs: [],
      currentDisc: null,
      currentInfo: null,
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
      this.currentInfo = index;
      axios.get('server.php', { params: { index } }).then((response) => {
        console.log(response);
        this.currentDisc = response.data;
      });
      console.log(this.currentInfo);
    },
  },
  created() {
    this.getDiscs();
    console.log(this.currentInfo);
  },
}).mount('#app');
