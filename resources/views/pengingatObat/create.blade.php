<x-layouts.app :activePage="'pengingatobat'" :title="'Pengingat obat'" :description="''">


    <style>
        /* Sembunyikan tombol kode */

        trix-toolbar [data-trix-attribute="quote"] {

            display: none;

        }



        trix-toolbar [data-trix-attribute="href"] {

            display: none;

        }



        trix-toolbar [data-trix-attribute="heading1"] {

            display: none;

        }



        trix-toolbar [data-trix-button-group="file-tools"] {

            display: none;

        }



        trix-toolbar [data-trix-attribute="code"] {

            display: none;

        }
    </style>

    <div class="container margin-top-for-content-desktop">
        <form action="{{ route('pengingatobat.store') }}" method="post">

            @csrf

            <div class="row mt-3 p-3 gap-4" style="background-color: antiquewhite">

                {{-- title --}}

                <div class="col-12 bg-light p-3">

                    <label for="namaObat" class="">Judul</label>

                    <p style="font-size: 10pt" class="text-danger">*required.

                    </p>

                    <div class="form-floating">

                        <input type="text" class="form-control" id="title" name="title" required>

                        <label for="namaObat" style="color: darkgrey">Masukan judul pengingat...</label>

                    </div>

                </div>



                {{-- description --}}

                <div class="col-12 bg-light p-3">

                    <div class="grid">

                        <label for="namaObat" class="">Deskripsi</label>

                        <p style="font-size: 10pt" class="text-muted">*kamu bisa masukan list obat, dosis dan lain-lain.

                        </p>

                    </div>

                    <div class="form-floating">

                        <input id="x" type="hidden" name="description">

                        <trix-editor input="x"></trix-editor>



                    </div>

                </div>



                {{-- insctruction --}}

                <div class="col-12 bg-light p-3">

                    <label for="" class="mb-3">Instruksi</label>

                    <div class="d-flex gap-3">

                        <div class="form-check">

                            <input class="form-check-input" type="radio" name="instruction" id="instruction1"
                                value="sebelum makan">

                            <label class="form-check-label" for="instruction1">

                                Sebelum makan

                            </label>

                        </div>

                        <div class="form-check">

                            <input class="form-check-input" type="radio" name="instruction" id="instruction2"
                                value="sesudah makan">

                            <label class="form-check-label" for="instruction2">

                                Sesudah makan

                            </label>

                        </div>

                        <div class="form-check">

                            <input class="form-check-input" type="radio" name="instruction" id="instruction3"
                                value="tidak ada" checked>

                            <label class="form-check-label" for="instruction3">

                                Tidak ada

                            </label>

                        </div>

                    </div>

                </div>



                {{-- notification --}}

                <div class="col-12 bg-light p-3">

                    <label for="">Notifikasi</label>

                    <p style="font-size: 10pt" class="text-danger m-0">*required.

                    </p>

                    <p style="font-size: 10pt" class="text-muted">*kamu bisa pilih media pengiriman notifikasi.

                    </p>

                    <div class="d-xl-flex d-md-block gap-3">

                        <div class="form-check">

                            <input class="form-check-input" type="radio" name="notification" id="notification1"
                                value="gmail" required>

                            <label class="form-check-label" for="notification1">

                                Gmail

                            </label>

                        </div>

                        {{-- <div class="form-check">

                            <input class="form-check-input" type="radio" name="notification" id="notification2"

                                value="push_notification">

                            <label class="form-check-label" for="notification2">

                                Aplikasi

                            </label> 

                        </div>

                        <div class="form-check">

                            <input class="form-check-input" type="radio" name="notification" id="notification3"

                                value="whatsapp">

                            <label class="form-check-label" for="notification3">

                                WhatsApp

                            </label>

                        </div> --}}

                    </div>

                </div>



                {{-- time --}}

                <div class="col-12 bg-light p-3">

                    <label for="time">Waktu pengingat</label>

                    <p style="font-size: 10pt" class="text-danger">*required.

                    </p>

                    <div class="form-floating">

                        <input type="time" class="form-control" id="time" name="time" required>

                        <label for="time" style="color: darkgrey">Masukan waktu pengingat...</label>

                    </div>

                </div>



                <!-- repeat -->

                <div class="col-12 bg-light p-3">

                    <label for="">Perulangan</label>

                    <p style="font-size: 10pt" class="text-muted">*kamu bisa mengulang pengingat ini.</p>



                    <div class="d-flex flex-wrap gap-3">

                        <!-- Radio Hanya Sekali -->

                        <div class="form-check">

                            <input class="form-check-input" type="radio" name="day" id="just_once"
                                value="just_once" checked>

                            <label class="form-check-label" for="just_once">Hanya sekali</label>

                        </div>



                        |



                        <!-- Radio Setiap Hari -->

                        <div class="form-check">

                            <input class="form-check-input" type="radio" name="day" id="everyday"
                                value="everyday">

                            <label class="form-check-label" for="everyday">Setiap hari</label>

                        </div>



                        |



                        <!-- Checkbox Hari -->

                        <div class="form-check">

                            <input class="form-check-input day-checkbox" type="checkbox" value="monday"
                                name="day[]" id="monday">

                            <label class="form-check-label" for="monday">Senin</label>

                        </div>

                        <div class="form-check">

                            <input class="form-check-input day-checkbox" type="checkbox" value="tuesday"
                                name="day[]" id="tuesday">

                            <label class="form-check-label" for="tuesday">Selasa</label>

                        </div>

                        <div class="form-check">

                            <input class="form-check-input day-checkbox" type="checkbox" value="wednesday"
                                name="day[]" id="wednesday">

                            <label class="form-check-label" for="wednesday">Rabu</label>

                        </div>

                        <div class="form-check">

                            <input class="form-check-input day-checkbox" type="checkbox" value="thursday"
                                name="day[]" id="thursday">

                            <label class="form-check-label" for="thursday">Kamis</label>

                        </div>

                        <div class="form-check">

                            <input class="form-check-input day-checkbox" type="checkbox" value="friday"
                                name="day[]" id="friday">

                            <label class="form-check-label" for="friday">Jumat</label>

                        </div>

                        <div class="form-check">

                            <input class="form-check-input day-checkbox" type="checkbox" value="saturday"
                                name="day[]" id="saturday">

                            <label class="form-check-label" for="saturday">Sabtu</label>

                        </div>

                        <div class="form-check">

                            <input class="form-check-input day-checkbox" type="checkbox" value="sunday"
                                name="day[]" id="sunday">

                            <label class="form-check-label" for="sunday">Minggu</label>

                        </div>

                    </div>

                </div>



                <button class="btn btn-primary col-12" type="submit">Simpan</button>

            </div>

        </form>

    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const justOnce = document.getElementById("just_once");

            const everyday = document.getElementById("everyday");

            const dayCheckboxes = document.querySelectorAll(".day-checkbox");



            // Saat "Hanya Sekali" diceklis, disable semua checkbox hari

            justOnce.addEventListener("change", function() {

                if (this.checked) {

                    dayCheckboxes.forEach(checkbox => {

                        checkbox.checked = false;

                    });

                    everyday.checked = false; // Uncheck "Setiap Hari"

                }

            });



            // Saat "Setiap Hari" diceklis, aktifkan semua checkbox hari

            everyday.addEventListener("change", function() {

                if (this.checked) {

                    dayCheckboxes.forEach(checkbox => {

                        checkbox.checked = true;

                        checkbox.disabled = false;

                    });

                    justOnce.checked = false; // Uncheck "Hanya Sekali"

                }

            });



            // Jika ada perubahan di salah satu checkbox hari

            dayCheckboxes.forEach(checkbox => {

                checkbox.addEventListener("change", function() {

                    if (this.checked) {

                        justOnce.checked = false; // Uncheck "Hanya Sekali"

                    }



                    // Jika salah satu checkbox hari tidak diceklis, uncheck "Setiap Hari"

                    if (![...dayCheckboxes].every(cb => cb.checked)) {

                        everyday.checked = false;

                    }

                });

            });

        });



        document.addEventListener("trix-file-accept", function(event) {

            event.preventDefault();

            alert("Upload file tidak diperbolehkan!");

        });



        document.addEventListener("DOMContentLoaded", function() {

            const justOnce = document.getElementById("just_once");

            const everyday = document.getElementById("everyday");

            const dayCheckboxes = document.querySelectorAll(".day-checkbox");

            const timeInput = document.getElementById("time");



            function setMinTime() {

                if (justOnce.checked) {

                    let now = new Date();

                    let hours = String(now.getHours()).padStart(2, "0");

                    let minutes = String(now.getMinutes()).padStart(2, "0");

                    timeInput.min = `${hours}:${minutes}`;

                } else {

                    timeInput.removeAttribute("min"); // Hapus batasan jika bukan "Hanya Sekali"

                }

            }



            // Set min time saat halaman pertama kali dimuat

            setMinTime();



            // Saat "Hanya Sekali" diceklis, set min time

            justOnce.addEventListener("change", function() {

                setMinTime();

            });



            // Saat "Setiap Hari" diceklis, min time dihapus

            everyday.addEventListener("change", function() {

                setMinTime();

            });



            // Jika ada perubahan di salah satu checkbox hari

            dayCheckboxes.forEach(checkbox => {

                checkbox.addEventListener("change", function() {

                    setMinTime();

                });

            });

        });
    </script>

</x-layouts.app>
