document.addEventListener('DOMContentLoaded', function() {
    //Para el sidenav
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);

    // Para los tabs 
    var el = document.querySelectorAll('.tabs');
    var instance = M.Tabs.init(el);

    //Para el slider
    var elems = document.querySelectorAll('.slider');
    var instances = M.Slider.init(elems);

    //para el parallax
    var elems = document.querySelectorAll('.parallax');
    var instances = M.Parallax.init(elems);

    //Para los modals
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems);

    //Para los collapse
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems);

    //Para los dropdowns
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems, {
        coverTrigger: false
    });

});