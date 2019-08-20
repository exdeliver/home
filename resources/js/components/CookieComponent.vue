<template>
    <div class="cookie-container" style="opacity: 0.9; transform: translateY(0px);" v-if="cookie_wall !== true">
        <div class="cookie-inner">
            <div class="cookie">
                <p class="cookie-header">
                    Cookies
                <hr/>
                </p>
                <p>We use cookies to monitor and improve the experience of our target audience.</p>
                <p><a class="btn btn-outline-dark" href="/privacy-policy">More information</a>
                    <button class="btn btn-success"
                            type="button" @click="acceptCookies()"><span>I AGREE</span></button>
                </p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Cookie component');
        },
        data: function () {
            return {
                cookie_wall: false,
            }
        },
        created() {
            if ($cookies.get('cookiewall') !== null) {
                this.cookie_wall = true;
            } else {
                this.cookie_wall = false;
            }
        },
        methods: {
            acceptCookies: function (e) {
                $cookies.set('cookiewall', true);
                this.cookie_wall = true;
            },
        }
    }
</script>