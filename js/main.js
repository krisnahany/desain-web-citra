$(document).ready(function(){

    //-------------------------------------//
    // init Masonry

    var $grid = $('.grid').masonry({
        itemSelector: 'none', // select none at first
        columnWidth: '.grid__col-sizer',
        gutter: '.grid__gutter-sizer',
        percentPosition: true,
        stagger: 30,
        // nicer reveal transition
        visibleStyle: { transform: 'translateY(0)', opacity: 1 },
        hiddenStyle: { transform: 'translateY(100px)', opacity: 0 },
    });
    
    // get Masonry instance
    var msnry = $grid.data('masonry');
    
    // initial items reveal
    $grid.imagesLoaded( function() {
        $grid.removeClass('are-images-unloaded');
        $grid.masonry( 'option', { itemSelector: '.grid__item' });
        var $items = $grid.find('.grid__item');
        $grid.masonry( 'appended', $items );
    });
    
    //-------------------------------------//
    // hack CodePen to load pens as pages
    
    var nextPenSlugs = [
        // 'kp/citra/page1'
        'kp/citra/index'
        // 'kp/masonry/test/page2',
        // 'kp/masonry/test/page3',
    ];
    
    function getPenPath() {
        var slug = nextPenSlugs[ this.loadCount ];
        if ( slug ) {
        return '/' + slug + '.php';
        }
    }
    
    //-------------------------------------//
    // init Infinte Scroll
    
    $grid.infiniteScroll({
        path: getPenPath,
        append: '.grid__item',
        outlayer: msnry,
        status: '.page-load-status',
    });
    
});
    