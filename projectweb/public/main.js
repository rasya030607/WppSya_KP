// preview image
let choosen_image;
let choose_image_button = document.getElementById('choose_image');
let preview_image = document.getElementById('preview_image');

// debug
console.log(choose_image_button);

choose_image_button.addEventListener('change', refresh_choosen_image);

function refresh_choosen_image(event) {
    console.log("image changed");
    
    const file = event.target.files[0];
    
    if (file) {
        const reader = new FileReader();
        
        reader.onload = function (e) {
            // Mengatur atribut src elemen img untuk menampilkan pratinjau gambar
            preview_image.src = e.target.result;
        };
        
        reader.readAsDataURL(file);
    } else {
        // Mengatur src ke kosong jika tidak ada gambar yang dipilih
        preview_image.src = "";
    }
}