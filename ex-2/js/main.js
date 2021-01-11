const app = new Vue ({

  el: "#root",

  data: {

    api: 'http://localhost/php-ajax-dischi/ex-2/server.php',
    albums: []

  },

  mounted: function () {

    axios
      .get (this.api)
      .then (got => {
        this.albums = got.data.response
      });

  },

});
