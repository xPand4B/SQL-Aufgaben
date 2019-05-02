 // Wait until page is loaded
$(document).ready(function(){
    // Run if you type inside the searchbar
    $('#searchBar').keyup(function() {
        var val = $(this).val().replace(/\s/g,'').toLowerCase();
        var items = document.getElementsByClassName("searchContent");

        for (var i = 0; i < items.length; i++) {
            var hide = true;
            var item = items[i];
            var subItems = item.getElementsByTagName("div");

            for (var j = 0; j < subItems.length; j++) {
                var subItem = subItems[j];
                var text = subItem.innerText.replace(/\s/g,'').toLowerCase();
                if(text.includes(val)){ hide = false; }
            }

            item.style.display = hide ? "none" : "block";
        }
    });
});

jQuery(function($) {
    function tog(v){
        return v ? 'addClass':'removeClass';
    }
    
    $(document).on('input', '.clearable', function(){
        $(this)[tog(this.value)]('x');
    }).on('mousemove', '.x', function( e ){
        $(this)[
            tog(
                this.offsetWidth-18 < e.clientX
                    -this.getBoundingClientRect().left
            )
        ]('onX');
    }).on('click', '.onX', function(){
        $(this).removeClass('x onX').val('').change();
        
        var items = document.getElementsByClassName("searchContent");

        for (var i = 0; i < items.length; i++) {
            items[i].style.display = "block";
        }
    });
});