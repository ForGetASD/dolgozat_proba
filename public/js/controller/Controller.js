import Model from "../model/Model.js";
import Viewk from "../view/Viewk.js";
import ujViewk from "../view/ujViewk.js";

class Controller{
    constructor(){
        console.log("asd")
        const token = $(`meta[name="csrf-token"]`).attr("content");
        const model = new Model(token);

        

        $("#hirdet").on("click", () => {
            model.adatBe('/osszesIngatlan', this.mutat);
        })
        $("#ujhirdet").on("click", () => {
            model.adatBe('/osszesKateg', this.mutatuj)
        })
    }

    mutat(tomb){
        const szuloElem = $("article");
        new Viewk(tomb, szuloElem);
    }

    mutatuj(tomb){
        const szuloElem = $("article");
        new ujViewk(tomb, szuloElem);
    }
}

export default Controller