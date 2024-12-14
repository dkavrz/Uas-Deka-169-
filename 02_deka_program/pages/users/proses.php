<?php
// koneksi
require_once '../../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'];

    // CREATE
    if ($action == 'save') {
        // menyimpan data ke db
        $nama = $_POST['nama'];
        $tujuan = $_POST['tujuan'];
        $tanggal = $_POST['tanggal'];

        // cek inputan
        if (empty($nama) || empty($tujuan) || empty($tanggal)) {
            $response = ['status' => false, 'msg' => 'Inputan wajib diisi'];
        } else {
            // Menentukan harga berdasarkan tujuan
            $harga = 0;
            switch ($tujuan) {
                case 'concert in the park':
                    $harga = 300000;
                    break;
                case 'comedy night':
                    $harga = 150000;
                    break;
                case 'theater play':
                    $harga = 100000;
                    break;
                case 'fight show':
                    $harga = 500000;
                    break;
                case 'culture events':
                    $harga = 250000;
                    break;
                case 'art exhibitions':
                    $harga = 100000;
                    break;
                default:
                    $response = ['status' => false, 'msg' => 'Tujuan tidak valid'];
                    echo json_encode($response);
                    exit;
            }

            // Prepare query to prevent SQL injection
            $stmt = $koneksi->prepare("INSERT INTO pesan (nama, tujuan, tanggal, harga) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("sssi", $nama, $tujuan, $tanggal, $harga);

            if ($stmt->execute()) {
                $response = ['status' => true, 'msg' => 'Data Berhasil disimpan'];
            } else {
                $response = ['status' => false, 'msg' => 'Gagal menyimpan data'];
            }
            $stmt->close();
        }

        echo json_encode($response);
    }

    // UPDATE (EDIT)
    if ($action == 'update') {
        // menyimpan data ke db
        $id = intval($_POST['id']);
        $nama = $_POST['nama'];
        $tujuan = $_POST['tujuan'];
        $tanggal = $_POST['tanggal'];

        // cek inputan
        if (empty($nama) || empty($tujuan) || empty($tanggal)) {
            $response = ['status' => false, 'msg' => 'Inputan wajib diisi'];
        } else {
            // Menentukan harga berdasarkan tujuan
            $harga = 0;
            switch ($tujuan) {
                case 'concert in the park':
                    $harga = 300000;
                    break;
                case 'comedy night':
                    $harga = 150000;
                    break;
                case 'theater play':
                    $harga = 100000;
                    break;
                case 'fight show':
                    $harga = 500000;
                    break;
                case 'culture events':
                    $harga = 250000;
                    break;
                case 'art exhibitions':
                    $harga = 100000;
                    break;
                default:
                    $response = ['status' => false, 'msg' => 'Tujuan tidak valid'];
                    echo json_encode($response);
                    exit;
            }

            // Prepare query to prevent SQL injection
            $stmt = $koneksi->prepare("UPDATE pesan SET nama=?, tujuan=?, tanggal=?, harga=? WHERE id=?");
            $stmt->bind_param("sssii", $nama, $tujuan, $tanggal, $harga, $id);

            if ($stmt->execute()) {
                $response = ['status' => true, 'msg' => 'Data berhasil diperbarui'];
            } else {
                $response = ['status' => false, 'msg' => 'Gagal memperbarui data'];
            }
            $stmt->close();
        }

        echo json_encode($response);
    }

    // DELETE
    if ($action == 'delete') {
        $id = intval($_POST['id']);
        // Check if the ID is valid
        if ($id <= 0) {
            $response = ['status' => false, 'msg' => 'ID tidak valid'];
            echo json_encode($response);
            exit;
        }

        // Prepare query to prevent SQL injection
        $stmt = $koneksi->prepare("DELETE FROM pesan WHERE id=?");
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            $response = ['status' => true, 'msg' => 'Data Berhasil Dihapus'];
        } else {
            $response = ['status' => false, 'msg' => 'Gagal menghapus data'];
        }
        $stmt->close();
        echo json_encode($response);
    }
}
?>
