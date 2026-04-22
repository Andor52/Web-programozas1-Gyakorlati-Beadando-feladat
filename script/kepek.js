document.getElementById("kepfeltolt").addEventListener("submit", async function (e) {
    e.preventDefault();

    const kep = document.getElementById("kep");
    const felhaszn_id = document.getElementById("felhaszn_id").value;
    const hibak = [];

    if (hibak.length > 0) {
            alert(hibak.join("\n"));
            return;
    }

    const formData = new FormData();
    formData.append("kep", kep.files[0]);
    formData.append("felhaszn_id", felhaszn_id);

    try {
        const response = await fetch("./logicals/kepfeltoltconnect.php", {
            method: "POST",
            body: formData
        });

        const text = await response.text();
        alert(text);
        e.target.reset();
        console.log("Kép feltöltve");
        location.reload();

    } catch (error) {
        alert("Hiba történt a képfeltöltés során!");
        console.error(error);
    }
});