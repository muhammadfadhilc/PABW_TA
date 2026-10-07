<?php

namespace App\Services;

class SmartResidentData
{
    private const WARGA_KEY = 'sr_warga_data';
    private const ADMIN_KEY = 'sr_admin_data';
    private const LAPORAN_KEY = 'sr_laporan_data';

    public static function seedWarga(): array
    {
        return [
            ['id' => 1, 'nama' => 'Andika Ramadhan', 'username' => 'andika', 'password' => 'warga123'],
            ['id' => 2, 'nama' => 'Rania Renata', 'username' => 'rania', 'password' => 'warga123'],
            ['id' => 3, 'nama' => 'Muhammad Fadhil Cholilullah', 'username' => 'fadhil', 'password' => 'warga123'],
        ];
    }

    public static function seedAdmins(): array
    {
        return [
            ['id' => 1, 'nama' => 'Rousyan Fikr (Admin)', 'username' => 'admin', 'password' => 'admin123', 'role' => 'admin'],
            ['id' => 2, 'nama' => 'Kepala Desa Citeureup (Super)', 'username' => 'super', 'password' => 'super123', 'role' => 'superadmin'],
            ['id' => 3, 'nama' => 'PT Semen Jaya (Kontraktor)', 'username' => 'kontraktor', 'password' => 'vendor123', 'role' => 'kontraktor'],
        ];
    }

    public static function seedReports(): array
    {
        return [
            [
                'id' => 1,
                'id_warga' => 1,
                'tipe_fasilitas' => 'Jalan Raya',
                'lokasi' => 'RT 05 RW 02, Dekat Masjid Al-Ikhlas',
                'deskripsi' => 'Jalan berlubang cukup dalam sekitar 15 cm, membahayakan pengendara motor.',
                'status' => 'Diproses',
                'tanggal_lapor' => '08 Juni 2026 17:17',
                'id_kontraktor' => 3,
            ],
            [
                'id' => 2,
                'id_warga' => 2,
                'tipe_fasilitas' => 'Penerangan Jalan',
                'lokasi' => 'Gang Mawar 3, RT 01',
                'deskripsi' => 'Lampu PJU mati sejak 3 hari yang lalu, jalanan gelap gulita di malam hari.',
                'status' => 'Diproses',
                'tanggal_lapor' => '08 Juni 2026 17:17',
                'id_kontraktor' => 3,
            ],
            [
                'id' => 3,
                'id_warga' => 3,
                'tipe_fasilitas' => 'Saluran Air',
                'lokasi' => 'Dusun Citeureup Selatan',
                'deskripsi' => 'Saluran air tersumbat sampah plastik menyebabkan genangan saat hujan deras.',
                'status' => 'Selesai',
                'tanggal_lapor' => '08 Juni 2026 17:17',
                'id_kontraktor' => 3,
            ],
        ];
    }

    public static function warga(): array
    {
        if (!session()->has(self::WARGA_KEY)) {
            session()->put(self::WARGA_KEY, self::seedWarga());
        }

        return session(self::WARGA_KEY, []);
    }

    public static function admins(): array
    {
        if (!session()->has(self::ADMIN_KEY)) {
            session()->put(self::ADMIN_KEY, self::seedAdmins());
        }

        return session(self::ADMIN_KEY, []);
    }

    public static function reports(): array
    {
        if (!session()->has(self::LAPORAN_KEY)) {
            session()->put(self::LAPORAN_KEY, self::seedReports());
        }

        return session(self::LAPORAN_KEY, []);
    }

    public static function findWarga(string $username, string $password): ?array
    {
        foreach (self::warga() as $warga) {
            if (strcasecmp($warga['username'], $username) === 0 && $warga['password'] === $password) {
                return $warga;
            }
        }

        return null;
    }

    public static function addWarga(string $nama, string $username, string $password): array
    {
        $warga = self::warga();
        $nextId = empty($warga) ? 1 : max(array_column($warga, 'id')) + 1;
        $new = compact('nama', 'username', 'password');
        $new['id'] = $nextId;
        $warga[] = $new;
        session()->put(self::WARGA_KEY, $warga);
        return $new;
    }

    public static function usernameExists(string $username): bool
    {
        foreach (self::warga() as $warga) {
            if (strcasecmp($warga['username'], $username) === 0) {
                return true;
            }
        }
        return false;
    }

    public static function findAdmin(string $username, string $password): ?array
    {
        foreach (self::admins() as $admin) {
            if (strcasecmp($admin['username'], $username) === 0 && $admin['password'] === $password) {
                return $admin;
            }
        }

        return null;
    }

    public static function reportsForWarga(int $idWarga): array
    {
        return array_values(array_filter(self::reports(), fn (array $r) => $r['id_warga'] === $idWarga));
    }

    public static function addReport(int $idWarga, string $tipe, string $lokasi, string $deskripsi): array
    {
        $reports = self::reports();
        $nextId = empty($reports) ? 1 : max(array_column($reports, 'id')) + 1;
        $new = [
            'id' => $nextId,
            'id_warga' => $idWarga,
            'tipe_fasilitas' => $tipe,
            'lokasi' => $lokasi,
            'deskripsi' => $deskripsi,
            'status' => 'Menunggu',
            'tanggal_lapor' => now()->locale('id')->translatedFormat('d F Y H:i'),
            'id_kontraktor' => null,
        ];
        $reports[] = $new;
        session()->put(self::LAPORAN_KEY, $reports);
        return $new;
    }

    public static function findReport(int $id): ?array
    {
        foreach (self::reports() as $report) {
            if ($report['id'] === $id) {
                return self::attachPelapor($report);
            }
        }
        return null;
    }

    public static function allReportsWithPelapor(): array
    {
        return array_map([self::class, 'attachPelapor'], self::reports());
    }

    public static function updateReportStatus(int $id, string $status): bool
    {
        $reports = self::reports();
        $updated = false;
        foreach ($reports as &$report) {
            if ($report['id'] === $id) {
                $report['status'] = $status;
                $updated = true;
                break;
            }
        }
        unset($report);
        session()->put(self::LAPORAN_KEY, $reports);
        return $updated;
    }

    public static function deleteReport(int $id): bool
    {
        $reports = self::reports();
        $remaining = array_values(array_filter($reports, fn (array $r) => $r['id'] !== $id));
        if (count($remaining) === count($reports)) {
            return false;
        }
        session()->put(self::LAPORAN_KEY, $remaining);
        return true;
    }

    public static function addAdmin(string $nama, string $username, string $password, string $role): array
    {
        $admins = self::admins();
        $nextId = empty($admins) ? 1 : max(array_column($admins, 'id')) + 1;
        $new = compact('nama', 'username', 'password', 'role');
        $new['id'] = $nextId;
        $admins[] = $new;
        session()->put(self::ADMIN_KEY, $admins);
        return $new;
    }

    public static function updateAdmin(int $id, string $nama, string $username, ?string $password, string $role): bool
    {
        $admins = self::admins();
        $updated = false;
        foreach ($admins as &$admin) {
            if ($admin['id'] === $id) {
                $admin['nama'] = $nama;
                $admin['username'] = $username;
                $admin['role'] = $role;
                if ($password !== null && $password !== '') {
                    $admin['password'] = $password;
                }
                $updated = true;
                break;
            }
        }
        unset($admin);
        session()->put(self::ADMIN_KEY, $admins);
        return $updated;
    }

    public static function deleteAdmin(int $id): bool
    {
        $admins = self::admins();
        $remaining = array_values(array_filter($admins, fn (array $a) => $a['id'] !== $id));
        if (count($remaining) === count($admins)) {
            return false;
        }
        session()->put(self::ADMIN_KEY, $remaining);
        return true;
    }

    private static function attachPelapor(array $report): array
    {
        $report['pelapor'] = 'Warga Tidak Dikenal';
        foreach (self::warga() as $warga) {
            if ($warga['id'] === $report['id_warga']) {
                $report['pelapor'] = $warga['nama'];
                break;
            }
        }
        return $report;
    }
}
