# Panduan Untuk yang punya Skripsi

## Langkah-langkah Instalasi

1. **Clone Repository**

    ```bash
    git clone 
    ```

2. **Install Dependencies**

    Masuk ke direktori proyek dan jalankan perintah:

    ```bash
    composer install
    ```

3. **Salin Berkas Konfigurasi**

    Salin file `.env.example` menjadi `.env`:

    ```bash
    cp .env.example .env
    ```

4. **Generate Kunci Aplikasi**

    Jalankan perintah berikut untuk menghasilkan kunci aplikasi:

    ```bash
    php artisan key:generate
    ```

5. **Migrasi Database**

    Jalankan migrasi untuk membuat skema database:

    ```bash
    php artisan migrate
    ```

6. **Menjalankan Server Lokal**

    Terakhir, jalankan server lokal dengan perintah:

    ```bash
    php artisan serve
    ```

    Aplikasi akan dapat diakses di `http://localhost:8000`.

## Kontribusi

Jika Anda menemukan masalah atau ingin berkontribusi, silakan buat *issue* atau *pull request*.

<img width="300" align="center"  src="https://media1.tenor.com/m/E1EW9pwYAz4AAAAC/frieren-anime.gif">
