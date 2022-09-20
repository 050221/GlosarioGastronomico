
//nav

window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
        }

    };

    // Shrink the navbar 
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            offset: 72,
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

});



// buscar por letra


function buscarletraa(){
  $.ajax({
    url:'letras_sql/a.php'
})
  .done(function(res){
    $('#letra_buscar').html(res);
})

}

function buscarletrab(){
  $.ajax({
    url:'letras_sql/b.php'
})
  .done(function(res){
    $('#letra_buscar').html(res);
})

}
function buscarletrac(){
  $.ajax({
    url:'letras_sql/c.php'
})
  .done(function(res){
    $('#letra_buscar').html(res);
})

}
function buscarletrad(){
  $.ajax({
    url:'letras_sql/d.php'
})
  .done(function(res){
    $('#letra_buscar').html(res);
})

}
function buscarletrae(){
  $.ajax({
    url:'letras_sql/e.php'
})
  .done(function(res){
    $('#letra_buscar').html(res);
})
}

function buscarletraf(){
  $.ajax({
    url:'letras_sql/f.php'
})
  .done(function(res){
    $('#letra_buscar').html(res);
})
}

function buscarletrag(){
  $.ajax({
    url:'letras_sql/g.php'
})
  .done(function(res){
    $('#letra_buscar').html(res);
})
}
function buscarletrah(){
  $.ajax({
    url:'letras_sql/h.php'
})
  .done(function(res){
    $('#letra_buscar').html(res);
})
}
function buscarletrai(){
  $.ajax({
    url:'letras_sql/i.php'
})
  .done(function(res){
    $('#letra_buscar').html(res);
})
}
function buscarletraj(){
  $.ajax({
    url:'letras_sql/j.php'
})
  .done(function(res){
    $('#letra_buscar').html(res);
})
}
function buscarletrak(){
  $.ajax({
    url:'letras_sql/k.php'
})
  .done(function(res){
    $('#letra_buscar').html(res);
})
}
function buscarletral(){
  $.ajax({
    url:'letras_sql/l.php'
})
  .done(function(res){
    $('#letra_buscar').html(res);
})
}
function buscarletram(){
  $.ajax({
    url:'letras_sql/m.php'
})
  .done(function(res){
    $('#letra_buscar').html(res);
})
}
function buscarletran(){
  $.ajax({
    url:'letras_sql/n.php'
})
  .done(function(res){
    $('#letra_buscar').html(res);
})
}
function buscarletrao(){
  $.ajax({
    url:'letras_sql/o.php'
})
  .done(function(res){
    $('#letra_buscar').html(res);
})
}
function buscarletrap(){
  $.ajax({
    url:'letras_sql/p.php'
})
  .done(function(res){
    $('#letra_buscar').html(res);
})
}
function buscarletraq(){
  $.ajax({
    url:'letras_sql/q.php'
})
  .done(function(res){
    $('#letra_buscar').html(res);
})
}
function buscarletrar(){
  $.ajax({
    url:'letras_sql/r.php'
})
  .done(function(res){
    $('#letra_buscar').html(res);
})
}
function buscarletras(){
  $.ajax({
    url:'letras_sql/s.php'
})
  .done(function(res){
    $('#letra_buscar').html(res);
})
}
function buscarletrat(){
  $.ajax({
    url:'letras_sql/t.php'
})
  .done(function(res){
    $('#letra_buscar').html(res);
})
}
function buscarletrau(){
  $.ajax({
    url:'letras_sql/u.php'
})
  .done(function(res){
    $('#letra_buscar').html(res);
})
}
function buscarletrav(){
  $.ajax({
    url:'letras_sql/v.php'
})
  .done(function(res){
    $('#letra_buscar').html(res);
})
}
function buscarletraw(){
  $.ajax({
    url:'letras_sql/w.php'
})
  .done(function(res){
    $('#letra_buscar').html(res);
})
}
function buscarletrax(){
  $.ajax({
    url:'letras_sql/x.php'
})
  .done(function(res){
    $('#letra_buscar').html(res);
})
}
function buscarletray(){
  $.ajax({
    url:'letras_sql/y.php'
})
  .done(function(res){
    $('#letra_buscar').html(res);
})
}
function buscarletraz(){
  $.ajax({
    url:'letras_sql/z.php'
})
  .done(function(res){
    $('#letra_buscar').html(res);
})
}

function todas_letras(){
  $.ajax({
    url:'letras_sql/todas.php'
})
  .done(function(res){
    $('#letra_buscar').html(res);
})
}