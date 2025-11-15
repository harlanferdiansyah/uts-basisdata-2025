# 🏥 Sistem Manajemen Rumah Sakit  
Dokumentasi Proyek — Database, Migration & Seeder Laravel

---

## 📌 Deskripsi Proyek
Proyek ini merupakan sistem manajemen rumah sakit yang mencakup pengelolaan data:

- Rumah Sakit  
- Poliklinik  
- Pasien  
- Dokter  
- Obat  
- Jadwal Praktek  
- Kunjungan Pasien  
- Resep Obat  

Seluruh struktur database dibuat menggunakan **Laravel Migration**, dan data dummy disediakan melalui **Laravel Seeder**.  
Dokumentasi ini dibuat untuk kebutuhan pembelajaran di kelas.

---

## 📂 Struktur Tabel Database

### 1. **rumah_sakit**
| Kolom | Tipe | Keterangan |
|------|------|-------------|
| id | BIGINT | Primary Key |
| nama | VARCHAR | Nama rumah sakit |
| alamat | TEXT | Alamat lengkap |
| telepon | VARCHAR | Nomor telepon |
| email | VARCHAR | Email resmi |

---

### 2. **poliklinik**
| Kolom | Tipe | Keterangan |
|------|------|-------------|
| id | BIGINT |
| rumah_sakit_id | BIGINT | Relasi ke rumah_sakit |
| nama | VARCHAR |
| deskripsi | TEXT |

---

### 3. **dokter**
| Kolom | Tipe | Keterangan |
|------|------|-------------|
| id | BIGINT |
| nama | VARCHAR |
| spesialis | VARCHAR |
| telepon | VARCHAR |
| email | VARCHAR |

---

### 4. **pasien**
| Kolom | Tipe | Keterangan |
|------|------|-------------|
| id | BIGINT |
| nama | VARCHAR |
| tanggal_lahir | DATE |
| alamat | TEXT |
| telepon | VARCHAR |
| jenis_kelamin | ENUM |

---

### 5. **obat**
| Kolom | Tipe | Keterangan |
|------|------|-------------|
| id | BIGINT |
| nama | VARCHAR |
| jenis | VARCHAR |
| stok | INT |
| harga | DECIMAL |

---

### 6. **jadwal_praktek**
| Kolom | Tipe | Keterangan |
|------|------|-------------|
| id | BIGINT |
| dokter_id | BIGINT |
| poliklinik_id | BIGINT |
| hari | VARCHAR |
| jam_mulai | TIME |
| jam_selesai | TIME |

---

### 7. **kunjungan**
| Kolom | Tipe | Keterangan |
|------|------|-------------|
| id | BIGINT |
| pasien_id | BIGINT |
| dokter_id | BIGINT |
| poliklinik_id | BIGINT |
| tanggal | DATE |
| keluhan | TEXT |

---

### 8. **resep**
| Kolom | Tipe | Keterangan |
|------|------|-------------|
| id | BIGINT |
| kunjungan_id | BIGINT |
| obat_id | BIGINT |
| jumlah | INT |
| dosis | VARCHAR |

---

---
