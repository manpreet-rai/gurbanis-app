@php
    $sggs_indices = [
        "Jap" => "1",
        "So Dar" => "8",
        "So Purakh" => "10",
        "Sohila" => "12",
        "Siree Raag" => "14",
        "Raag Maajh" => "94",
        "Raag Gauree" => "151",
        "Raag Aasaa" => "347",
        "Raag Gujri" => "489",
        "Raag Dayv Gandhaaree" => "527",
        "Raag Bihaagraa" => "537",
        "Raag Vadhans" => "557",
        "Raag Sorath" => "595",
        "Raag Dhanaasree" => "660",
        "Raag Jaithsree" => "696",
        "Raag Todee" => "711",
        "Raag Bairaaree" => "719",
        "Raag Tilang" => "721",
        "Raag Soohee" => "728",
        "Raag Bilaaval" => "795",
        "Raag Gond" => "859",
        "Raag Raamkalee" => "876",
        "Raag Nat Naaraayan" => "975",
        "Raag Maalee Gauraa" => "984",
        "Raag Maaroo" => "989",
        "Raag Tukhaari" => "1107",
        "Raag Kaydaaraa" => "1118",
        "Raag Bhairao" => "1125",
        "Raag Basant" => "1168",
        "Raag Saarang" => "1197",
        "Raag Malaar" => "1254",
        "Raag Kaanraa" => "1294",
        "Raag Kalyaan" => "1319",
        "Raag Prabhaatee" => "1327",
        "Raag Jaijaavantee" => "1352",
        "Salok Sehshkritee" => "1353",
        "Gaathaa Fifth Mehl" => "1360",
        "Phunhay Fifth Mehl" => "1361",
        "Chaubolas Fifth Mehl" => "1363",
        "Salok Kabeer Jee" => "1364",
        "Salok Fareed Jee" => "1377",
        "Svaiyay Sri Mukhbak Mehl 5" => "1385",
        "Svaiyay First Mehl" => "1389",
        "Svaiyay Second Mehl" => "1391",
        "Svaiyay Third Mehl" => "1392",
        "Svaiyay Fourth Mehl" => "1396",
        "Svaiyay Fifth Mehl" => "1406",
        "Salok Vaaran Tey Vadheek" => "1410",
        "Salok Ninth Mehl" => "1426",
        "Mundhaavanee Fifth Mehl" => "1429",
        "Raag Maalaa" => "1429"
    ];
@endphp

<h3 class="border-b border-dashed border-white">Sri Guru Granth Sahib</h3>
<div class="flex justify-between my-2 text-pink-400">
    <span class="text-sm">Section</span>
    <span class="text-sm">Ang</span>
</div>
@foreach($sggs_indices as $section => $ang)
    <a href="/sggs/{{$ang}}" class="flex justify-between mb-2 hover:text-pink-400">
        <span>{{$section}}</span>
        <span>{{$ang}}</span>
    </a>
@endforeach
