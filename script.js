// Mendapatkan elemen form dan field input
const form = document.querySelector('form');
const namaInput = document.querySelector('input[name="nama"]');
const dokterInput = document.querySelector('input[name="dokter"]');
const tanggalInput = document.querySelector('input[name="tanggal"]');

// Event listener untuk form submit
form.addEventListener('submit', function(event) {
    // Menghentikan default behavior form submit
    event.preventDefault();

    // Memanggil fungsi validasi
    if (validateForm()) {
        // Jika validasi sukses, submit form
        this.submit();
    }
});

// Fungsi untuk validasi form
function validateForm() {
    let isValid = true;

    // Validasi Nama
    if (namaInput.value.trim() === '') {
        isValid = false;
        setErrorFor(namaInput, 'Nama harus diisi');
    } else {
        setSuccessFor(namaInput);
    }

    // Validasi Dokter
    if (dokterInput.value.trim() === '') {
        isValid = false;
        setErrorFor(dokterInput, 'Nama dokter harus diisi');
    } else {
        setSuccessFor(dokterInput);
    }

    // Validasi Tanggal
    if (tanggalInput.value.trim() === '') {
        isValid = false;
        setErrorFor(tanggalInput, 'Tanggal harus diisi');
    } else {
        setSuccessFor(tanggalInput);
    }

    return isValid;
}

// Fungsi untuk menetapkan pesan error
function setErrorFor(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');
    formControl.className = 'form-control error';
    small.innerText = message;
}

// Fungsi untuk menetapkan status sukses
function setSuccessFor(input) {
    const formControl = input.parentElement;
    formControl.className = 'form-control success';
}
