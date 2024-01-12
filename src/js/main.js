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
}).mount('#app');
