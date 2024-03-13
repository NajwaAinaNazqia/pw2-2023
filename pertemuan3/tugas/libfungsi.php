<?php

function kelulusan($total_nilai) {
    if ($total_nilai >= 55) {
        return "Lulus";
    } else {
        return "Tidak Lulus";

    }
}

function grade($total_nilai) {
    if ($total_nilai >= 85 && $total_nilai <= 100) {
        return "A";
    } elseif ($total_nilai >= 70 && $total_nilai < 85) {
        return "B";
    } elseif ($total_nilai >= 60 && $total_nilai < 70) {
        return "C";
    } elseif ($total_nilai >= 55 && $total_nilai < 60) {
        return "D";
    } elseif ($total_nilai < 55) {
        return "E";
    } else {
        return "I";
    }

}

function Predikat($total_nilai) {
    if ($total_nilai >= 85) {
        return 'Sangat Memuaskan';
    } elseif ($total_nilai >= 70) {
        return 'Memuaskan';
    } elseif ($total_nilai >= 60) {
        return 'Cukup';
    } elseif ($total_nilai >= 50) {
        return 'Kurang';
    } else {
        return 'Sangat Kurang';
    }
}


?>
