<template>
    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <ul>
                    <li class="menu-title">Navigation</li>


                    <li>
                        <a href="calendar.html" class="waves-effect"><i class="mdi mdi-view-dashboard"></i><span>  Dashboard  </span><span class="menu-arrow"></span></a>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-invert-colors"></i> <span> User Interface </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="ui-buttons.html">Buttons</a></li>
                            <li><a href="ui-typography.html">Typography</a></li>
                            <li><a href="ui-panels.html">Panel</a></li>
                            <li><a href="ui-portlets.html">Portlets</a></li>
                            <li><a href="ui-modals.html">Modals</a></li>
                            <li><a href="ui-checkbox-radio.html">Checkboxs-Radios</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!-- Sidebar -->
            <div class="clearfix"></div>

            <div class="help-box">
                <h5 class="text-muted m-t-0">For Help ?</h5>
                <p class=""><span class="text-custom">Email:</span> <br/> support@support.com</p>
                <p class="m-b-0"><span class="text-custom">Call:</span> <br/> (+123) 123 456 789</p>
            </div>

        </div>
        <!-- Sidebar -left -->

    </div>
    <!-- Left Sidebar End -->


</template>

<script>
    export default {
        name: "AppMenu"
    }
</script>

<style scoped>

</style>
