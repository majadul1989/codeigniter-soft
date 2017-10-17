<div class="row">
<?php $pageUrl =  $this->router->fetch_class(); ?>
<div class="sidebar hidden-xs hidden-sm" data-spy="affix" data-offset-top="50">
    <ul class="menu">
        <li><a class="<?php echo  ($pageUrl == 'dashboard'? 'active2' : ''); ?>" href="<?php echo base_url('dashboard/dashboard'); ?>">Dashboard</a></li>
        <li><a class="dropdown" href="javascript:;">Branch<i class="local fa fa-chevron-circle-down"></i></a>
            <ul class="sub_menu" style="display: <?php echo  ($pageUrl == 'branch' || $pageUrl == 'menu' ? 'block' : 'none'); ?>;">
                <li><a class="<?php echo  ($pageUrl == 'branch'? 'active2' : ''); ?>" href="<?php echo base_url('dashboard/branch'); ?>">Add New</a></li>
                <li><a  href="#">Branch List</a></li>
            </ul>
        </li>
        <li><a class="dropdown" href="javascript:;">Products<i class="local fa fa-chevron-circle-down"></i></a>
            <ul class="sub_menu" style="display: none">
                <li><a href="#">Add New</a></li>
                <li><a href="#">Product Lists</a></li>
            </ul>
        </li>
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Dashboard</a></li>
        <li><a class="dropdown" href="javascript:;">Settings<i class="local fa fa-chevron-circle-down"></i></a>
            <ul class="sub_menu" style="display: <?php echo  ($pageUrl == 'categories' || $pageUrl == 'menu' ? 'block' : 'none'); ?>;">
                <li><a class="<?php echo  ($pageUrl == 'categories'? 'active2' : ''); ?>" href="<?php echo base_url('dashboard/categories'); ?>">Categories</a></li>
                <li><a class="<?php echo  ($pageUrl == 'menu'? 'active2' : ''); ?>" href="<?php echo base_url('dashboard/menu'); ?>">Menus</a></li>
            </ul>
        </li>
    </ul>
</div>

</div>
<script>
    // Dropdown Menu fuctions here
    $(document).ready(function(){
        $(document).on("click",".dropdown", function(e){
            if($(this).children(".fa").hasClass("fa-chevron-circle-down")){
                $(this).children(".fa").removeClass("fa-chevron-circle-down");
                $(this).children(".fa").addClass("fa-chevron-circle-up");
            }
            else{
                $(this).children(".fa").addClass("fa-chevron-circle-down");
                $(this).children(".fa").removeClass("fa-chevron-circle-up");
            }

            $(".sub_menu").not(this).slideUp('slow'); // it call to other open element
            $(".dropdown").not(this).children(".fa").addClass("fa-chevron-circle-down");
            $(this).siblings(".sub_menu").slideDown('slow');

        }) ;

    });

</script>
