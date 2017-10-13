<template>
    <div class="row">
        <ul class="collapsible" data-collapsible="accordion">
            <li>
                <div class="collapsible-header active"><i class="material-icons">filter_drama</i>Gestao de Utilizadores</div>
                <div class="collapsible-body stee-components-container white">
                    <!-- ===================================================================== -->

                    <ul id="tabs-swipe-demo" class="tabs">
                        <li class="tab col s3"><a class="active"  href="#stee-user">UTILIZADORES</a></li>
                        <li class="tab col s3"><a href="#stee-role">PAPEIS</a></li>
                        <li class="tab col s3"><a href="#stee-permission">PERMISSOES</a></li>
                    </ul>

                    <div id="stee-user" class="col s12 white stee-tabs-container">
                        <!-- ======================================================== -->
                        <div class="row">
                            <div class="fixed-action-btn horizontal click-to-toggle">
                                <a class="btn-floating btn-large blue">
                                    <i class="material-icons">menu</i>
                                </a>
                                <ul>
                                    <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
                                    <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
                                    <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
                                    <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- ======================================================== -->
                        <div class="row">
                            <table class="highlight responsive-table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Item Name</th>
                                        <th>Item Price</th>
                                    </tr>
                                </thead>



                                <tbody>
                                    <tr>
                                        <td>Alvin</td>
                                        <td>Eclair</td>
                                        <td>$0.87</td>
                                    </tr>
                                    <tr>
                                        <td>Alan</td>
                                        <td>Jellybean</td>
                                        <td>$3.76</td>
                                    </tr>
                                    <tr>
                                        <td>Jonathan</td>
                                        <td>Lollipop</td>
                                        <td>$7.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div id="stee-role" class="col s12 red">
                        Test 2
                    </div>
                    <div id="stee-permission" class="col s12 green">
                        Test 3
                    </div>
                    <!-- ===================================================================== -->
                </div>
            </li>
        </ul>
    </div>
</template>
<!-- ===================================================================================================================== -->
<script>
export default {
    mounted() {
        console.log('Component mounted.')
    },

}
</script>
