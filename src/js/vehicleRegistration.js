function loadFile(event) {
    let image = document.getElementById(
        "default-vehicle-image"
    );
    image.src = URL.createObjectURL(
        event.target.files[0]
    );
}