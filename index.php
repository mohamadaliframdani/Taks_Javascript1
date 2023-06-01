<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/form-style.css"/>
	<title>Registration Form</title>
</head>
<body background="img/Starlid-illustration.svg">
	<div class="nav">
        <img src="img/nw-horizontal.png">
	</div>
	<form id="rekrutasiForm" class="boxform" >
        <img src="img/logomark-sign.png">
		
		<h4>Form Rekrutasi</h4>
        <p>Isi data di bawah sesuai dengan identitas diri anda dan lowongan yang akan anda pilih</p>
		
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama">

    <label for="email">Email:</label>
    <input type="email" id="email" name="email">

    <label for="phone">Nomor Telepon:</label>
    <input type="number" id="phone" name="phone">

    <label for="vacancy">Lowongan Pekerjaan:</label>
    <select id="vacancy" name="vacancy">
      <option value="">Pilih Lowongan</option>
    </select>

    <label for="posisi">Posisi yang Dilamar:</label>
    <select id="posisi" name="posisi">
      <option value="">Pilih Posisi</option>
    </select>

    <input type="submit" value="Kirim">
	<ul class="sosmed">
					<a href="https://instagram.com/neuronworks">
						<img src="img/instagram.svg">
					</a>                        

					<a href="https://www.youtube.com/@NeuronworksIndonesia">
						<img src="img/youtube.svg">
					</a>

					<a href="https://twitter.com/neuronworks">
						<img src="img/twitter.svg">
					</a>

					<a href="https://www.facebook.com/neuronworks/">
						<img src="img/square-facebook.svg">
					</a>
			</ul>
			<a class="web" href="https://www.neuronworks.co.id">
				www.neuronworks.co.id
			</a>
  </form>

  <table id="dataTable" class="hasil">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>Nomor Telepon</th>
        <th>Lowongan Pekerjaan</th>
        <th>Posisi yang Dilamar</th>
      </tr>
    </thead>
    <tbody id="dataBody">
    </tbody>
  </table>

  <script>
    // Mendefinisikan opsi untuk lowongan pekerjaan
    const vacancyOptions = [
      { value: "lowongan1", label: "Lowongan 1" },
      { value: "lowongan2", label: "Lowongan 2" },
      { value: "lowongan3", label: "Lowongan 3" }
    ];

    // Mendefinisikan opsi untuk posisi yang dilamar
    const posisiOptions = [
      { value: "posisi1", label: "Posisi 1" },
      { value: "posisi2", label: "Posisi 2" },
      { value: "posisi3", label: "Posisi 3" }
    ];

    // Mengisi pilihan option untuk lowongan pekerjaan
    const vacancySelect = document.getElementById("vacancy");
    vacancyOptions.forEach(option => {
      const optionElement = document.createElement("option");
      optionElement.value = option.value;
      optionElement.text = option.label;
      vacancySelect.appendChild(optionElement);
    });

    // Mengisi pilihan option untuk posisi yang dilamar
    const posisiSelect = document.getElementById("posisi");
    posisiOptions.forEach(option => {
      const optionElement = document.createElement("option");
      optionElement.value = option.value;
      optionElement.text = option.label;
      posisiSelect.appendChild(optionElement);
    });

    // Menangani event saat form dikirim
    const form = document.getElementById("rekrutasiForm");
    const dataBody = document.getElementById("dataBody");
    form.addEventListener("submit", function(event) {
      event.preventDefault(); // Mencegah form dikirim secara langsung

      // Mengambil nilai input
      const nama = document.getElementById("nama").value;
      const email = document.getElementById("email").value;
      const phone = document.getElementById("phone").value;
      const vacancy = document.getElementById("vacancy").value;
      const posisi = document.getElementById("posisi").value;

      // Memvalidasi input
      if (nama === "" || email === "" || phone === "" || vacancy === "" || posisi === "") {
        alert("Harap isi semua kolom!");
        return;
      }

      // Membuat elemen <tr> dan <td> untuk setiap kolom data
      const newRow = document.createElement("tr");
      const namaCell = document.createElement("th");
      const emailCell = document.createElement("th");
      const phoneCell = document.createElement("th");
      const vacancyCell = document.createElement("th");
      const posisiCell = document.createElement("th");

      // Mengisi teks pada setiap elemen <td> dengan nilai yang diisi pengguna
      namaCell.textContent = nama;
      emailCell.textContent = email;
      phoneCell.textContent = phone;
      vacancyCell.textContent = vacancy;
      posisiCell.textContent = posisi;

      // Menambahkan elemen <td> ke dalam elemen <tr>
      newRow.appendChild(namaCell);
      newRow.appendChild(emailCell);
      newRow.appendChild(phoneCell);
      newRow.appendChild(vacancyCell);
      newRow.appendChild(posisiCell);

      // Menambahkan elemen <tr> ke dalam elemen <tbody>
      dataBody.appendChild(newRow);

      // Mereset form setelah berhasil ditambahkan ke dalam tabel
      form.reset();
    });
  </script>
</body>
</html>
