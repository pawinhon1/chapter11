﻿<?php
// อาเรย์ที่ใช้เก็บข้อมูลชื่อของสัตว์
$a[] = "มด";
$a[] = "นก";
$a[] = "แมว";
$a[] = "สุนัข";
$a[] = "อินทรีย์";
$a[] = "ปลา";
$a[] = "ห่าน";
$a[] = "แม่ไก่";
$a[] = "อีกัวนา";
$a[] = "ยีราฟ";
$a[] = "จิงโจ้";
$a[] = "สิงโต";
$a[] = "หอยมุข";
$a[] = "ลิงอุรังอุตัง";
$a[] = "นกยูง";

// สร้างตัวแปรที่รับพารามิเตอร์จาก URL
$q = $_REQUEST["q"];

$hint = "";

// หาข้อมูลจากอาเรย์ที่มีค่าตรงกับคำค้นหา ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

// เมื่อไม่พบผลลัพธ์
echo $hint === "" ? "ไม่พบผลลัพธ์" : $hint;
?>