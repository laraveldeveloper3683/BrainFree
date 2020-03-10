<template>
    <div id="app">
        <ol>
            <li v-bind:key="todo.text" v-for="todo in todos">{{ todo.text }}</li>
        </ol>
    </div>
</template>

<script>
    import ExampleComponent from "./components/ExampleComponent";
    export default {
        name: "App",
        components: {
            ExampleComponent
        },
        data() {
            return {
                todos: [
                    { text: "Learn JavaScript" },
                    { text: "Learn Vue" },
                    { text: "Build something awesome" }
                ]
            };
        }
    };
