<template>
    <h1>test</h1>
    <hello-world></hello-world>
</template>
<script>
import axios from "axios";
import HelloWorld from "./pages/HelloWorld.vue";
export default {
    name: "App",
    data() {
        return {
            endPointURL: "http://127.0.0.1:8001/posts",
        };
    },
    components: {
        helloWorld: HelloWorld,
    },
    methods: {
        consoleTest() {
            axios.get(this.endPointURL).then((response) => {
                console.log(response);
            });
        },
    },
    mounted() {
        this.consoleTest();
    },
};
</script>

<style scoped>
.logo {
    height: 6em;
    padding: 1.5em;
    will-change: filter;
    transition: filter 300ms;
}
.logo:hover {
    filter: drop-shadow(0 0 2em #646cffaa);
}
.logo.vue:hover {
    filter: drop-shadow(0 0 2em #42b883aa);
}
</style>
