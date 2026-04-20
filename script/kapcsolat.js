document.getElementById("kapcsolatForm").addEventListener("submit", async function (e) {

    e.preventDefault();

    const email  = document.getElementById("email").value.trim();
    const targy  = document.getElementById("targy").value.trim();
    const uzenet = document.getElementById("uzenet").value.trim();
    const felhaszn_id = document.getElementById("felhaszn_id").value.trim();

    const hibak = [];

    if (email === "") {
        hibak.push("Az e-mail megadása kötelező!");
    } else if (!email.includes("@")) {
        hibak.push("Érvénytelen e-mail cím!");
    }

    if (targy.length < 3) {
        hibak.push("A tárgy legalább 3 karakter legyen!");
    }

    if (uzenet.length < 10) {
        hibak.push("Az üzenet legalább 10 karakter legyen!");
    }

    if (hibak.length > 0) {
        alert(hibak.join("\n"));
        return;
    }
    
    try {
        const response = await fetch("./logicals/kapcsolatellenor.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            body: new URLSearchParams({
                felhaszn_id: felhaszn_id,
                email: email,
                targy: targy,
                uzenet: uzenet
            })
        });

        const text = await response.text();

        alert(text);
        e.target.reset();

        console.log("string");

    } catch (error) {
        alert("Hiba történt az adatküldés során!");
        console.error(error);
    }
});
