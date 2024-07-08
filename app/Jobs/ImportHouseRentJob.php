<?php

namespace App\Jobs;
use App\Models\HouseRent;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ImportHouseRentJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    public function handle()
    {
        $data = array_map('C:\Users\bugra\OneDrive\Masaüstü\House_Rent_Dataset.csv', file($this->filePath));

        foreach ($data as $index => $row) {
            // İlk satırı (başlık satırı) atla
            if ($index === 0) {
                continue;
            }
            HouseRent::create([
                'posted_on' => $row[0],
                'bhk' => $row[1],
                'rent' => $row[2],
                'size' => $row[3],
                'floor' => $row[4],
                'area_type' => $row[5],
                'area_locality' => $row[6],
                'city' => $row[7],
                'furnishing_status' => $row[8],
                'tenant_preferred' => $row[9],
                'bathroom' => $row[10],
                'point_of_contact' => $row[11],
            ]);
        }
    }
}