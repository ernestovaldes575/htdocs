// console.log('Hola desde ScrollJs');
function revealFunction(){
    window.sr = ScrollReveal({duration:1000, distance:'250px',easing:'ease-out'});
    sr.reveal('.reveal-left',{origin:'left', reset:true});
    sr.reveal('.reveal-right',{origin:'right',reset:true});
    sr.reveal('.reveal-bottom',{origin:'bottom',reset:true});
}
window.addEventListener('load',()=>{
    revealFunction();
})