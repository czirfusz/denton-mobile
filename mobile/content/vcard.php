<?php
        $uagent = $_SERVER['HTTP_USER_AGENT'];
        $today = getdate();
        $timeStamp = $today["year"]."-".$today["mon"]."-".$today["mday"]." ".$today["hours"].":".$today["minutes"].":".$today["seconds"]."|".$uagent;
        $counterFile = '../vcard.log';
        $cf = fopen($counterFile, 'a') or die("Cannot open file!");
        fwrite($cf, $timeStamp."\n");
        fclose($cf);
?>

<?php
	header("Content-type:text/x-vCard; charset=utf-8");
	header("Content-Disposition: attachment; filename=caspary.vcf");
?>

BEGIN:VCARD
VERSION:3.0
PROFILE:VCARD
FN;CHARSET=utf-8:Caspary Emese Dr
N;CHARSET=utf-8:Caspary Emese Dr;;;;
ADR;CHARSET=utf-8;TYPE=INTL;TYPE=POSTAL;TYPE=PARCEL;TYPE=WORK:;;Strohmayerg 7/8;Wien;;1060;Austria
ORG;CHARSET=utf-8:Caspary Emese Dr
CLASS:PUBLIC
TEL;TYPE=FAX;TYPE=WORK:+43 1 5955747
TEL;TYPE=PREF;TYPE=WORK:+43 1 5974692
URL:http://drcaspary.denton.at
GEO:16.3407187040839,48.1919431173934 
END:VCARD
