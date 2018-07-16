
src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"
src="componentes/jquery.pajinate.js";


    
    
    $(document).ready(function () {
            $('#paging_container3').pajinate({
                items_per_page: 3,
                item_container_id: '.alt_content',
                nav_panel_id: '.alt_page_navigation'
            });
        });
       