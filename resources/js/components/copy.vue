<script>
    export default {
        props: {
            'hello': {
                type: String,
                default: null,
            },
            'world': {
                type: String,
                default: null,
            },
        },
        data() {
            return {
                urlParams: {
                    hello: this.hello,
                    world: this.world,
                },
            };
        },
        methods: {
            testprint() {
                var hello = this.urlParams.hello;
                var world = this.urlParams.world;
                console.log(`${hello} ${world}!`);
            },
        },
    };
</script>