<template>
    <div class="login-container">
        <el-form autoComplete="on" label-position="left" label-width="0px" class="card-box login-form">
            <h3 class="title"> 系 统 登 陆 </h3>
            <el-form-item prop="username">
            <span class="svg-container svg-container_login">
              <icon-svg icon-class="yonghuming" />
            </span>
                <el-input name="username" type="text"  autoComplete="on" placeholder="username" />
            </el-form-item>
            <el-form-item prop="password">
            <span class="svg-container">
              <icon-svg icon-class="mima"></icon-svg>
            </span>
                <el-input name="password" type="password"  autoComplete="on" placeholder="password"></el-input>
            </el-form-item>
            <el-form-item>
                <el-button type="primary" style="width:100%;"  >
                    登 陆
                </el-button>
            </el-form-item>
        </el-form>
    </div>
</template>

<script>
    export default {
        data () {
            return {

            }
        },
        methods: {
        },
        mounted () {

        },
        computed: {

        }
    }
</script>

<style lang="scss" scoped>
    $bg:#2d3a4b;
    $dark_gray:#889aa4;
    $light_gray:#eee;

    .login-container {
        height: 100vh;
        background-color: $bg;
    }
    input:-webkit-autofill {
        -webkit-box-shadow: 0 0 0px 1000px #293444 inset !important;
        -webkit-text-fill-color: #fff !important;
    }
    input {
        background: transparent;
        border: 0px;
        -webkit-appearance: none;
        border-radius: 0px;
        padding: 12px 5px 12px 15px;
        color: $light_gray;
        height: 47px;
    }
    .el-input {
        display: inline-block;
        height: 47px;
        width: 85%;
    }
    .tips {
        font-size: 14px;
        color: #fff;
        margin-bottom: 10px;
    }
    .svg-container {
        padding: 6px 5px 6px 15px;
        color: $dark_gray;
        vertical-align: middle;
        width: 30px;
        display: inline-block;
    }
    .title {
        font-size: 26px;
        font-weight: 400;
        color: $light_gray;
        margin: 0px auto 40px auto;
        text-align: center;
        font-weight: bold;
    }
    .login-form {
        position: absolute;
        left: 0;
        right: 0;
        width: 400px;
        padding: 35px 35px 15px 35px;
        margin: 120px auto;
    }
</style>
