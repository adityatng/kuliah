<section>
       <h1><?php echo $judul ?></h1>
       <p align="justify"> Pada pengertian codeigniter di atas tadi di jelaskan bahwa codeigniter menggunakan metode MVC. Apa itu MVC? kitaa juga harus mengetahui apa itu MVC sebelum masuk dan lebih jauh dalam belajar codeigniter.</p>
       <p>MVC adalah teknik atau konsep yang memisahkan komponen utama menjadi tiga komponen yaitu model, view dan controller.</p>
       <ol type="a">
           <li>Model</li>
           <p align="justify">
               Model adalah kelas yang mempresentasikan atau memodelkan tipe data yang akan digunakan oleh aplikasi. Model juga dapat didefenisikan sebagai bagian penanganan yang berhubungan dengan pengolahan atau manipulasi database. seperti misalnya mengambil data dari database, menginput dan pengolahan database lainnya. semua intruksi atau fungsi yang berhubungan dengan pegolahan database di letakkan di dalam model. Sebagai contoh, jika ingin membuat aplikasi untuk menghitung luas dan keliling lingkaran, maka dapat memodelkan objek lingkaran sebagai kelas model.
           </p>
           <p align="justify">
               Sebagai catatan, Semua model harus disimpan di dalam folder application/model
           </p>
           <li>View</li>
           <p align="justify">
               View merupakan bagian yang menangani halaman user interface atau halaman yang muncul pada user(pada browser). tampilan dari user interface dikumpulkan pada view untuk memisahkannya dengan controller dan model sehingga memudahkan web designer dalam melakukan pengembangan website.
           </p>
           <li>Controller</li>
           <p align="justify">
               Controller merupakan kumpulan intruksi aksi yang menghubunkan model dan view, jadi user tidak akan berhubungaan dengan model secara langsung, intinya data yang tersimpan di database (model) diambil oleh controller dan kemudian controller pula yang menampilkannya ke view. Jadi controllerlah yang  mengolah intruksi.
           </p>
           <p align="justify">
               Dari penjelasan tentang model view dan controller di atas  dapat disimpulkan controller sebagai penhubung view dan model. Misalnya pada aplikasi yang menampilkan data dengan menggunakan metode konsep MVC. controller memanggil intruksi pada model yang mengambil data pada database, kemudian controller yang meneruskannya pada view untuk di tampilkan. jadi jelas sudah dan sudah sangat mudah dalam pengembangan aplikasi dengan cara MVC ini karena web designer atau front-end developer tak perlu lagi berhubungan dengan controller, dia hanya perlu berhubungan dengan view untuk mendesain tampilan aplikasi, karena back-end developer yang manangani bagian controller dan modelnya. Jadi pembagian tugas pun menjadi semakin mudah dan pengembangan aplikasi dapat dilakukan dengan cepat dan terstruktur.
           </p>
       </ol>
   </section>