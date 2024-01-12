const { createApp } = Vue;

createApp({
  data() {
    return {
      discs: [
        {
          disco: 'nome1',
          img: 'img1',
        },
        {
          disco: 'nome2',
          img: 'img2',
        },
        {
          disco: 'nome3',
          img: 'img3',
        },
      ],
    };
  },
  methods: {
    getDiscs() {
      axios.get('server.php').then((response) => {
        console.log({ response });
      });
    },
  },
  created() {
    this.getDiscs();
  },
}).mount('#app');
