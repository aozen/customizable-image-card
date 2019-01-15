<template>
    <card class="flex flex-col items-center justify-center custom-card" :style="{ 'height': card.panelheight }">
        <div class="main-container px-3 py-3" :class="card.isFlex">
            <div class="img-container text-center text-3xl text-80 font-light verticallycenter" :class="card.imgsize">
                <a :href="card.redirectUrl" class="anchorstyle" target="_blank">
                    <img :src="card.imageUrl" style="margin: 5px;">
                </a>
            </div>
            <div class="text-container text-center text-3xl text-80 font-light verticallycenter" :class="card.textsize">
                <a :href="card.redirectUrl" class="anchorstyle" :style="{ 'color': card.textcolor }" target="_blank">
                    {{card.title}}
                </a>
            </div>
        </div>
    </card>
</template>

<script>
    export default {
        props: {
            card: {
                type: Object,
                required: true
            },
        },

        data() {
            return {
                redirectUrl: "",
                title: "",
                imageUrl: "",
                textcolor: "",
                isFlex: "",
                imgsize: "",
                textsize: "",
                panelheight: ""

            }
        },

        mounted() {
            this.getData()
        },

        methods: {
            getData() {
                Nova.request().get('/nova-vendor/aozen/customizable-image-card/', {
                    params: {
                        redirectUrl: this.card.redirectUrl,
                        title: this.card.title,
                        imageUrl: this.card.imageUrl,
                        textcolor: this.card.textcolor,
                        isFlex: this.card.isFlex,
                        imgsize: this.card.imgsize,
                        textsize: this.card.textsize,
                        panelheight: this.card.panelheight
                    }
                })
                    .then(({data}) => {
                        this.$set(this, 'redirectUrl', data.redirectUrl);
                        this.$set(this, 'title', data.title);
                        this.$set(this, 'imageUrl', data.imageUrl);
                        this.$set(this, 'textcolor', data.textcolor);
                        this.$set(this, 'isFlex', data.isFlex);
                        this.$set(this, 'imgsize', data.imgsize);
                        this.$set(this, 'textsize', data.textsize);
                        this.$set(this, 'panelheight', data.panelheight);
                    })
            }
        }
    }
</script>
