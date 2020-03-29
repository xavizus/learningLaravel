<script>
    export default {
        props: {
            hello: {
                type: String,
                default: null,
            },
            world: {
                type: String,
                default: null,
            },
        },
        data() {
            return {
                    params: {
                        hello: this.hello,
                        world: this.world,
                    }
            };
        },
        methods: {
            testprint() {
                console.log(`${this.params.hello[0].toUpperCase() + this.params.hello.slice(1)} ${this.world}!`);
            },
        },
    };
</script>