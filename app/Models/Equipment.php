<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class equipment extends Model
{
    use HasFactory;
    protected $table = 'equipments';
    protected $primaryKey = 'id';
    protected $fillable = [
        'mark',
        'model',
        'serial',
        'size_disk',
        'type_disk',
        'ram',
        'processor',
        'operating_system',
        'usb_ports',
        'audio_ports',
        'microphone_ports',
        'hdmi_ports',
        'vga_ports',
        'dvi_ports',
        'sd_ports',
        'cd_ports',
        'ps2_ports',
    ];
}
