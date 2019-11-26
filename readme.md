> Tugas Ini di rilis oleh  **Erlangga Ibrahim** secara terbuka (*Open Source*)
> Dibawah Lisensi **GNU GPLv3**. untuk keterangan dan informasi lebih lanjut mengenai
> Lisensi, dapat dibuka di : https://www.gnu.org/licenses/gpl-3.0.en.html
> atau dengan membaca file `LICENSE`
>  
> Semua sumber yang digunakan pada tugas ini, dapat dilihat pada :
> https://github.com/wowotek/Grafkom-Dosen-TugasRancang
>  
> **PERINGATAN** : *Tugas ini dirilis **setelah tenggat waktu** pengumpulan tugas, dan tidak akan berlaku untuk kolega dengan tenggat waktu pengumpulan yang sama*
>  
> **PERINGATAN** : *Tugas ini dirilis **tanpa garansi**, termasuk nilai yang di-nihilkan oleh sebab **mencontek** dan/atau **menyalin** dan/atau **meniru** yang bersumber dari tugas ini*

# PBP Dosen Tugas Rancang - Sistem Informasi Raport Siswa
![thumbnail](./screenshot.png)

## Pengawas / Dosen

* **Yeremia Alfa Susetyo**

## Penulis

* **Aurelia Gabriele** (672017277) - *@aureliagbrl*
* **Bimo Bagus** (672017288) - *bimobagus*
* **Erlangga Ibrahim** (672017282) - *@wowotek*

## Development

1. Clone Repo ini
    * via HTTPS:

      ```bash
      git clone https://github.com/wowotek/PBP-Dosen-TR.git
      ```

    * via SSH:

      ```bash
      git clone git@github.com:wowotek/PBP-Dosen-TR.git
      ```

2. Installasi Laravel dan _dependenciesnya_

    ```bash
    composer install
    ```

3. Kopi file `.env.example` dan beri nama dengan `.env`

    ```bash
    cp ./.env.example ./.env
    ```

4. bangkitkan _app-key_ baru

    ```bash
    composer key:generate
    ```

5. Nyalakan serve development [^1]

    ```bash
    php artisan serve
    ```

6. buka browser anda dan arahkan ke [`http://localhost:8000/`](http://localhost:8000/).