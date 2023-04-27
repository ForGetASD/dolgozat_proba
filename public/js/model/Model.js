class Model{
    #adatok
    #token
    constructor(token){
        this.#token = token;
    }

    adatBe(vegpont, myCallback){
        fetch(vegpont, {
            method:"GET",
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': this.#token,
            }
        })
        .then((response) => response.json())
        .then((data) => {
            this.#adatok = data;
            console.log(this.#adatok);
            myCallback(this.#adatok);
        })
        .catch((error) => {
            console.error("Error: ", error);
        })
    }

    adatUj(vegpont, adat) {
        fetch(vegpont, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': this.#token,
            },
            body: JSON.stringify(adat),
        })
            .then((response) => response.json())
            .then((data) => {
                console.log(vegpont)
            })
            .catch((error) => {
                console.error('Error:', error);
            });
    }



    adatTorol(vegpont, adat) {
        vegpont += adat.id
        fetch(vegpont, {
            method: 'DELETE',
            headers: {
                "Content-Type": "application/json",
                'X-CSRF-TOKEN': this.#token
            },
            body: JSON.stringify(adat),
        })
            .then()
            .then(() => {
                console.log("sikeres Törlés");
            })
            .catch((error) => {
                console.error('Error:', error);
            });
    }
}

export default Model