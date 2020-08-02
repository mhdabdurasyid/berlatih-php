<?php

/*
1. Buat array hasil & array negara
2. isi array negara dgn mengambil nama-nama negara yg sudah dihapus duplikasinya
3. Jika array input kosong, maka isi array hasil dgn "no data"
4. Jika array input tidak kosong, maka lakukan looping sebanyak jumlah negara pada array negara
4a. set perolehan emas, perak, perunggu pada nilai 0
4b. Lakukan looping sebanyak jumlah array input
4b1. Jika nama negara pada array negara terdapat pada array input & medali emas, maka tambah 1 emas utk negara tsb
4b2. Jika nama negara pada array negara terdapat pada array input & medali perak, maka tambah 1 perak utk negara tsb
4b3. Jika nama negara pada array negara terdapat pada array input & medali perunggu, maka tambah 1 perunggu utk negara tsb
5. Entry (push) hasil perolehan medali emas, perak, perunggu tiap negara pada array hasil
*/
function perolehan_medali($array)
{
    $result = array();
    $country = array();

    for ($i = 0; $i < count($array); $i++) {
        array_push($country, $array[$i][0]);
    }
    $country = array_unique($country);

    if ($array != null) {
        for ($i = 0; $i < count($country); $i++) {
            $gold = 0;
            $silver = 0;
            $bronze = 0;
            for ($j = 0; $j < count($array); $j++) {
                if ($array[$j][0] == $country[$i]) {
                    if ($array[$j][1] == "emas") {
                        $gold++;
                    } else if ($array[$j][1] == "perak") {
                        $silver++;
                    } else {
                        $bronze++;
                    }
                    $country_result = array(
                        "negara" => $country[$i],
                        "emas" => $gold,
                        "perak" => $silver,
                        "perunggu" => $bronze
                    );
                }
            }
            array_push($result, $country_result);
        }
    } else {
        array_push($result, "no data");
    }

    return $result;
}

//TEST CASE
$test_case = array(
    array("Indonesia", "emas"),
    array("India", "perak"),
    array("Korea Selatan", "emas"),
    array("India", "perak"),
    array("India", "emas"),
    array("Indonesia", "perak"),
    array("Indonesia", "emas")
);

echo "<pre>";
print_r(perolehan_medali($test_case));
echo "</pre>";

echo "<pre>";
print_r(perolehan_medali([]));
echo "</pre>";
