<?php  

function get($url = null, $headers = null) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	if ($headers != "") {
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	}

	return $result = curl_exec($ch);
	curl_close($ch);
}

function number($length) {
	$characters = '0123456789';
	$charactersLength = strlen($characters);
	$randomString = '';
	for ($i = 0; $i < $length; $i++) {
		$randomString .= $characters[rand(0, $charactersLength - 1)];
	}
	return $randomString;
}

function shutdown(){
    echo "\033c";                                        // Clear terminal
    system("tput cnorm && tput cup 0 0 && stty echo");   // Restore cursor default
    echo PHP_EOL;                                        // New line
    exit;                                                // Clean quit 
}

echo "\e[96m---------------------------\n";
echo "|                         |\n";
echo "|       Viu Premium       |\n";
echo "|       PremiumKita       |\n";
echo "|                         |\n";
echo "---------------------------\n";

echo "\e[93mJumlah Akun : ";
$banyak = trim(fgets(STDIN));
sleep(3);
flush();
echo "\n\e[93mPilih Layanan Premium :";
echo "
1. Premium 1 Bulan [Tanpa Iklan]
2. Premium 6 Bulan [Tanpa Iklan]
3. Premium 1 Tahun [Tanpa Iklan]
Masukan Angka : ";
$tipe = trim(fgets(STDIN));
echo "\e[95mTUNGGU SEBENTAR \n";
sleep(3);
flush();
echo "\n";
echo "\e[96mSEDANG MEMBUAT AKUN\n";

for ($i = 0; $i < $banyak ; $i++) {
	sleep(5);
	flush();
	if ($tipe == '1') {
		echo $data = "\e[92m[SUKSES]\e[0m premiumkita".number(6)."@gmail.com | premiumkita123 [Premium 1 Bulan]\n\r";
		$fh = fopen("result.txt", "a");
		fwrite($fh, "premiumkita".number(6)."@gmail.com | premiumkita123 [Premium 1 Bulan] \n\r");
		fclose($fh);
	} elseif ($tipe == '2') {
		echo $data = "\e[92m[SUKSES]\e[0m premiumkita".number(6)."@gmail.com | premiumkita123 [Premium 6 Bulan]\n\r";
		$fh = fopen("result.txt", "a");
		fwrite($fh, "premiumkita".number(6)."@gmail.com | premiumkita123 [Premium 6 Bulan] \n\r");
		fclose($fh);
	} elseif ($tipe == '3') {
		echo $data = "\e[92m[SUKSES]\e[0m premiumkita".number(6)."@gmail.com | premiumkita123 [Premium 1 Tahun]\n\r";
		$fh = fopen("result.txt", "a");
		fwrite($fh, "premiumkita".number(6)."@gmail.com | premiumkita123 [Premium 1 Tahun] \n\r");
		fclose($fh);
	} else {
		echo "\e[91m[GAGAL] Layanan Premium Tidak Tersedia\n";
		exit();
	}
}
echo "====================================================\n";
echo "Akun Viu Premium \e[92mSUKSES\e[0m Dibuat Cek result.txt\n";
echo "====================================================\n";

?>
