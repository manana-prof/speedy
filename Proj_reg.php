<!DOCTYPE html>
<html lang="en">
<head>
<?php require("partials/head.php")?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/all.css" rel="stylesheet">
        <link href="css/brands.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">

  <title>Project Register</title>
</head>
<body>
<hr>
<br><br>
<form action="insert.php" method="POST">
    <label for="Municipality">Select municipality</label>
    <select class="form-control" name="municipality">
      <option>Alfred Nzo District Municipality</option>
      <option>Abaqulusi Local Municipality</option>
      <option>Albert Luthuli Local Municipality</option>
      <option>Alfred Duma Local Municipality</option>
      <option>Amahlathi Local Municipality</option>
      
      <option>Amajuba District Municipality</option>
      <option>Amathole District Municipality</option>
      <option>Ba-Phalaborwa Local Municipality</option>
      <option>Beaufort West Local Municipality</option>
      <option> Bela-Bela Local Municipality</option>
      <option>Bergrivier Local Municipality</option>
      <option> Big Five Hlabisa Local Municipality</option>
      <option>Bitou Local MunicipalityBlouberg Local Municipality</option>
      <option>Blue Crane Route Local Municipality</option>
      <option>Breede Valley Local Municipality</option>
      <option>Bojanala District Municipality</option>
      <option>Buffalo City Metropolitan Municipality</option>
      <option>Bushbuckridge Local Municipality</option>
      <option>Cape Winelands District Municipality</option>        
      <option>Capricorn District Municipality</option>
      <option>Cape Agulhas Local Municipality</option>
      <option>Cederberg Local Municipality</option>
      <option>Central Karoo District Municipality</option>
      <option>Chris Hani District Municipality</option>
      <option>City of Cape Town Metropolitan Municipality</option>
      <option>City of Johannesburg Metropolitan Municipality</option>
      <option>City of Matlosana Local Municipality</option>
      <option>City of Tshwane Metropolitan Municipality</option>
      <option>Collins Chabane Local Municipality</option>
      <option>Buffalo City Metropolitan Municipality</option>
      <option>Buffalo City Metropolitan Municipality</option>
      <option>Buffalo City Metropolitan Municipality</option>
      <option>Dannhauser Local Municipality</option>
      <option>Dawid Kruiper Local Municipality</option>
      <option> Dihlabeng Local Municipality</option>
      <option>Dikgatlong Local Municipality</option>
      <option>Dipaleseng Local Municipality</option>
      <option>Ditsobotla Local Municipality</option>
      <option>DrJS Moroka Local Municipality</option>
      <option>Dr Nkosazana Dlamini Zuma Local Municipality</option>
      <option>Dr Beyers Naudé Local Municipality</option>
      <option> Drakenstein Local MunicipalityElias Motsoaledi Local Municipality</option>
      <option>Dr Kenneth Kaunda District Municipality</option>
      <option>Dr Ruth Segomotsi Mompati District Municipality</option>
      <option>Ehlanzeni District Municipality</option>
      <option>Ekurhuleni Metropolitan Municipality</option>
      <option>Elundini Local Municipality</option>
      <option>eDumbe Local Municipality</option>
      <option>Emakhazeni Local Municipality</option>
      <option>Emalahleni Local Municipality</option>
      <option>Emfuleni Local Municipality</option>
      <option>Emthanjeni Local Municipality</option>
      <option>Endumeni Local Municipality</option>
      <option> Engcobo Local Municipality</option>
      <option>Enoch Mgijima Local Municipality</option>
      <option>Ephraim Mogale Local Municipality</option>
      <option>eThekwini Metropolitan Municipality</option>
      <option> Fetakgomo/Greater Tubatse Local Municipality</option>
      <option> Ga-Segonyana Local Municipality</option>
      <option>Gamagara Local Municipality</option>
      <option>George Local Municipality</option>
      <option>Govan Mbeki Local Municipality</option>
      <option>Great Kei Local Municipality</option>
      <option>Greater Giyani Local Municipality</option>
      <option>Greater Kokstad Local Municipality</option>
      <option>Greater Letaba Local Municipality</option>
      <option>Greater Taung Local Municipality</option>
      <option>Greater Tzaneen Local Municipality</option>
      <option>Hantam Local Municipality</option>
      <option>Hessequa Local Municipality</option>
      <option>Fezile Dabi District Municipality</option>
      <option>Frances Baard District Municipalityy</option>
      <option>Garden Route District Municipality</option>
      <option>Gert Sibande District Municipality</option>
      <option>Harry Gwala District Municipality</option>
      <option>Impendle Local Municipality</option>
      <option>Ingquza Hill Local Municipality</option>
      <option>Inkosi Langalibalele Local Municipality</option>
      <option>Intsika Yethu Local Municipality</option>
      <option>Inxuba Yethemba Local Municipality</option>
      <option>JB Marks Local Municipality</option>
      <option>Joe Morolong Local Municipality</option>
      <option>Jozini Local Municipality</option>
      <option>Kagisano-Molopo Local Municipality</option>
      <option>Kai !Garib Local Municipality</option>
      <option>iLembe District Municipality</option>
      <option>Joe Gqabi District Municipality</option>
      <option>John Taolo Gaetsewe District Municipality</option>
      <option>King Cetshwayo District Municipality</option>
      <option>Lejweleputswa District Municipality</option>
      <option>Mangaung Metropolitan Municipality</option>
      <option>Mopani District Municipality</option>
      <option>Namakwa District Municipality</option>
      <option>Nelson Mandela Bay Metropolitan Municipality;</option>
      <option>Ngaka Modiri Molema District Municipality</option>
      <option>Nkangala District Municipality</option>
      <option>OR Tambo District Municipality</option>
      <option>Overberg District Municipality</option>
      <option>Pixley ka Seme District Municipality</option>
      <option>Sarah Baartman District Municipality</option>
      <option>Sedibeng District Municipality</option>
      <option>Sekhukhune District Municipality</option>
      <option>Thabo Mofutsanyana District Municipality</option>
      <option>Ugu District Municipality</option>
      <option>uMgungundlovu District Municipality</option>
      <option>uMkhanyakude District Municipality</option>
      <option>uMzinyathi District Municipality</option>
      <option>uThukela District Municipality</option>
      <option>Vhembe District Municipality</option>
      <option>Waterberg District Municipality</option>
     <option>West Coast District Municipality</option>
     <option>West Rand District Municipality</option>    
      <option>Xhariep District Municipality</option>     
      <option>ZF Mgcawu District Municipality</option>     
      <option>Zululand District Municipality</option>
      <option>!Kheis Local Municipality</option>
      <option>Buffalo City Metropolitan Municipality</option>
      <option>Buffalo City Metropolitan Municipality</option>
      <option>Buffalo City Metropolitan Municipality</option>
      <option>Buffalo City Metropolitan Municipality</option>
      <option>Buffalo City Metropolitan Municipality</option>
      <option>Buffalo City Metropolitan Municipality</option>
      <option>Buffalo City Metropolitan Municipality</option>     
      <option>Buffalo City Metropolitan Municipality</option>
      <option>Buffalo City Metropolitan Municipality</option>           
      <option>Buffalo City Metropolitan Municipality</option>
      <option>Buffalo City Metropolitan Municipality</option>     
      <option>Buffalo City Metropolitan Municipality</option>
      <option>Buffalo City Metropolitan Municipality</option>
      <option>Buffalo City Metropolitan Municipality</option>
      <option>Buffalo City Metropolitan Municipality</option>
    
       </select>
     
  <label for="contact_person">Contant Person</label>
  <input type="text" class="form-control" id="contact_person" placeholder="Municipal Contact Person" name="contact_person"> 

  <label for="email">Email</label>
    <input type="text" class="form-control" id="email" placeholder="Valid Email Address"  name="email">

  <label for="phone">Phone</label>
    <input type="number" class="form-control" id="phone" placeholder="Phone Number" name="phone">

  <label for="designation">Designation</label>
    <input type="text" class="form-control" id="designation" placeholder="Contact Designation" name="designation">

  <label for="department">Department</label>
    <input type="text" class="form-control" id="Department" placeholder="Department" name="department">

    <label for="project Data">project Data</label>
    <input type="multipart/form-data" class="form-control" id="Department" placeholder="Department" name="project_data">

<br>
<input type="hidden" name="submit" value="insert" />
 <button type="submit" class="btn btn-primary" >Submit</button>
</form>

<?php include("partials/js_script.php")?>

</body>
</html>