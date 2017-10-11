function SiteController(n) {
    function t() {
        n('iframe[src*="youtube"]').parent().fitVids();
    }
    return self.init = function() {
        t();
    }, self;
}

jQuery(function(n) {
    new SiteController(n).init();
});