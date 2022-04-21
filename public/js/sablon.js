class Kartya {
    constructor(elem, adat) {
      this.elem = elem;    
      
        
        this.szakdogacime = this.elem.children(".szakdogacime");
        this.githublink = this.elem.children(".githublink");
        this.oldallink = this.elem.children(".oldallink");
        this.tagokneve = this.elem.children(".tagok");
        this.adat = adat;
        
    

      this.termekTorles = this.elem.children(".torol");
      this.termekModosit = this.elem.children(".modosit");
      this.setAdatok(this.adat);
      this.termekTorles.on("click ", ()=> {
        
        this.torol();
       
      });
      this.termekModosit.on("click ", ()=>{
        
        this.modosit();
        
      });
    }
   
  
    setAdatok(ertek) {
        this.szakdogacime.html(ertek.szakdoga_nev);
        this.githublink.html(ertek.githublink);
        this.oldallink.html(ertek.oldallink);
        this.tagokneve.html(ertek.tagokneve);
      
    }
    
  
    torol() {
      let esemeny = new CustomEvent("torol", { detail: this.adat });
      window.dispatchEvent(esemeny);
      console.log("bent vagyokk azéterben ");
    }
    modosit() {
      let esemeny = new CustomEvent("modosit", { detail: this.adat });
      window.dispatchEvent(esemeny);
      console.log("bent vagyokk azéterben ");
    }
}