<template>
    <div class="row">
        <ul class="collapsible" data-collapsible="accordion">
            <li>
                <div class="collapsible-header active"><i class="material-icons">filter_drama</i>Gestão de Utilizadores</div>
                <div class="collapsible-body white">
                    <!-- ######################################################################################3 -->
                    <div class="row">
                        <ul id="tabs-swipe-demo" class="tabs">
                            <li class="tab col s3 blue lighten-5"><a href="#stee-user">UTILIZADORES</a></li>
                            <li class="tab col s3"><a class="active" href="#stee-role">PAPEIS</a></li>
                            <li class="tab col s3"><a href="#stee-permission">PERMISSÕES</a></li>
                        </ul>
                        <div id="stee-user" class="col s12 blue">
                            
                            <div class="row">
                                <p>ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                        <div id="stee-role" class="col s12 red">Second tab content</div>
                        <div id="stee-permission" class="col s12 green">Third tab content</div>
                    </div>
                    <!-- ######################################################################################3 -->
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
