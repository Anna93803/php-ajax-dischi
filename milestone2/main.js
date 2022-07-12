const appVue = new Vue({
    el: "#app",
    data: {
        apiUrl: "./db.php",
        arrayList: [],
    },
    mounted() {
        axios.get(this.apiUrl).then((resp) =>{
            this.arrayList = resp.data.disco;
            console.log(resp);
        })
    }
});