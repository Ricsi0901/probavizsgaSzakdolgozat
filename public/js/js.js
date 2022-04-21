$(function () {
const myajax= new MyAjax();
let tomb=[];

myajax.adatbeolvas('/szakdogak',tomb,megjelenit);
$(window).on("torol", function (eseny) {


 myajax.adatbeolvas('/szakdogak',tomb,megjelenit);


});
$(window).on("modosit", function (eseny) {

        
 myajax.adatbeolvas('/szakdogak',tomb,megjelenit);

});
function megjelenit(adat){
    
      
        
        const szuloElem = $(".listaadmin");
        const sablonElem = $(".elemek");
       
    
        szuloElem.empty();
       adat.forEach(elem => {
        let node = sablonElem.clone().appendTo(szuloElem);
        const obj = new Kartya(node, elem, tomb);
       });
           
                
            
     
        sablonElem.hide(); //sablonelem eltávolítása
    
}

});