function newsletterCheck() {
	var emailUser = document.getElementsById("email");
	if(emailUser.value.length == "0"){
		alert("Tidak berhasil mendaftarkan newsletter karena email kosong");
	} else if(emailUser.value.length < "10") {
		alert("Email tidak boleh terlalu pendek");
	} else {
		alert("Pendaftaran newsletter berhasil");
	}
}
