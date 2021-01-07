<!DOCTYPE html>
<html lang="en">
<head>
  <title>Image Translate</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
        .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
  </style>
</head>
<body>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-6 sidenav">
      <h3>Translate text from image</h3>
      <div class="well">
        <form action="" method="post" enctype="multipart/form-data" class="text-center">
            Select image to upload:
            <br>
            <br>
            <?php require_once ( 'upload.php' ); ?>
            <?php if(isset($_POST["image"])) echo('<img src="uploads/'. $_POST["image"] .'" width="400" height="225">');?>
            <br>
            <br>
            <input type="file" name="fileToUpload" id="fileToUpload" style="margin: 0 auto;">
            <br>
            <input type="submit" value="Upload" name="submit">
        </form>  
        <br>
        <form action="" method="post">

        <br>
            <input hidden type="text" name="image" value=<?php if(isset($_POST['image'])) echo($_POST['image']);?>>
            <br>
            From: <select id="from" name="fromLanguage">
                <option value="af">afrikaans</option>
                <option value="sq">albanian</option>
                <option value="am">amharic</option>
                <option value="ar">arabic</option>
                <option value="hy">armenian</option>
                <option value="az">azerbaijani</option>
                <option value="eu">basque</option>
                <option value="be">belarusian</option>
                <option value="bn">bengali</option>
                <option value="bs">bosnian</option>
                <option value="bg">bulgarian</option>
                <option value="ca">catalan</option>
                <option value="ceb">cebuano</option>
                <option value="ny">chichewa</option>
                <option value="zh-cn">chinese (simplified)</option>
                <option value="zh-tw">chinese (traditional)</option>
                <option value="co">corsican</option>
                <option value="hr">croatian</option>
                <option value="cs">czech</option>
                <option value="da">danish</option>
                <option value="nl">dutch</option>
                <option selected value="en">english</option>
                <option value="eo">esperanto</option>
                <option value="et">estonian</option>
                <option value="tl">filipino</option>
                <option value="fi">finnish</option>
                <option value="fr">french</option>
                <option value="fy">frisian</option>
                <option value="gl">galician</option>
                <option value="ka">georgian</option>
                <option value="de">german</option>
                <option value="el">greek</option>
                <option value="gu">gujarati</option>
                <option value="ht">haitian creole</option>
                <option value="ha">hausa</option>
                <option value="haw">hawaiian</option>
                <option value="iw">hebrew</option>
                <option value="he">hebrew</option>
                <option value="hi">hindi</option>
                <option value="hmn">hmong</option>
                <option value="hu">hungarian</option>
                <option value="is">icelandic</option>
                <option value="ig">igbo</option>
                <option value="id">indonesian</option>
                <option value="ga">irish</option>
                <option value="it">italian</option>
                <option value="ja">japanese</option>
                <option value="jw">javanese</option>
                <option value="kn">kannada</option>
                <option value="kk">kazakh</option>
                <option value="km">khmer</option>
                <option value="ko">korean</option>
                <option value="ku">kurdish (kurmanji)</option>
                <option value="ky">kyrgyz</option>
                <option value="lo">lao</option>
                <option value="la">latin</option>
                <option value="lv">latvian</option>
                <option value="lt">lithuanian</option>
                <option value="lb">luxembourgish</option>
                <option value="mk">macedonian</option>
                <option value="mg">malagasy</option>
                <option value="ms">malay</option>
                <option value="ml">malayalam</option>
                <option value="mt">maltese</option>
                <option value="mi">maori</option>
                <option value="mr">marathi</option>
                <option value="mn">mongolian</option>
                <option value="my">myanmar (burmese)</option>
                <option value="ne">nepali</option>
                <option value="no">norwegian</option>
                <option value="or">odia</option>
                <option value="ps">pashto</option>
                <option value="fa">persian</option>
                <option value="pl">polish</option>
                <option value="pt">portuguese</option>
                <option value="pa">punjabi</option>
                <option value="ro">romanian</option>
                <option value="ru">russian</option>
                <option value="sm">samoan</option>
                <option value="gd">scots gaelic</option>
                <option value="sr">serbian</option>
                <option value="st">sesotho</option>
                <option value="sn">shona</option>
                <option value="sd">sindhi</option>
                <option value="si">sinhala</option>
                <option value="sk">slovak</option>
                <option value="sl">slovenian</option>
                <option value="so">somali</option>
                <option value="es">spanish</option>
                <option value="su">sundanese</option>
                <option value="sw">swahili</option>
                <option value="sv">swedish</option>
                <option value="tg">tajik</option>
                <option value="ta">tamil</option>
                <option value="te">telugu</option>
                <option value="th">thai</option>
                <option value="tr">turkish</option>
                <option value="uk">ukrainian</option>
                <option value="ur">urdu</option>
                <option value="ug">uyghur</option>
                <option value="uz">uzbek</option>
                <option value="vi">vietnamese</option>
                <option value="cy">welsh</option>
                <option value="xh">xhosa</option>
                <option value="yi">yiddish</option>
                <option value="yo">yoruba</option>
                <option value="zu">zulu</option>
            </select>      
            To: <select id="to" name="toLanguage">
                <option value="af">afrikaans</option>
                <option value="sq">albanian</option>
                <option value="am">amharic</option>
                <option value="ar">arabic</option>
                <option value="hy">armenian</option>
                <option value="az">azerbaijani</option>
                <option value="eu">basque</option>
                <option value="be">belarusian</option>
                <option value="bn">bengali</option>
                <option value="bs">bosnian</option>
                <option value="bg">bulgarian</option>
                <option value="ca">catalan</option>
                <option value="ceb">cebuano</option>
                <option value="ny">chichewa</option>
                <option value="zh-cn">chinese (simplified)</option>
                <option value="zh-tw">chinese (traditional)</option>
                <option value="co">corsican</option>
                <option value="hr">croatian</option>
                <option value="cs">czech</option>
                <option value="da">danish</option>
                <option value="nl">dutch</option>
                <option selected value="en">english</option>
                <option value="eo">esperanto</option>
                <option value="et">estonian</option>
                <option value="tl">filipino</option>
                <option value="fi">finnish</option>
                <option value="fr">french</option>
                <option value="fy">frisian</option>
                <option value="gl">galician</option>
                <option value="ka">georgian</option>
                <option value="de">german</option>
                <option value="el">greek</option>
                <option value="gu">gujarati</option>
                <option value="ht">haitian creole</option>
                <option value="ha">hausa</option>
                <option value="haw">hawaiian</option>
                <option value="iw">hebrew</option>
                <option value="he">hebrew</option>
                <option value="hi">hindi</option>
                <option value="hmn">hmong</option>
                <option value="hu">hungarian</option>
                <option value="is">icelandic</option>
                <option value="ig">igbo</option>
                <option value="id">indonesian</option>
                <option value="ga">irish</option>
                <option value="it">italian</option>
                <option value="ja">japanese</option>
                <option value="jw">javanese</option>
                <option value="kn">kannada</option>
                <option value="kk">kazakh</option>
                <option value="km">khmer</option>
                <option value="ko">korean</option>
                <option value="ku">kurdish (kurmanji)</option>
                <option value="ky">kyrgyz</option>
                <option value="lo">lao</option>
                <option value="la">latin</option>
                <option value="lv">latvian</option>
                <option value="lt">lithuanian</option>
                <option value="lb">luxembourgish</option>
                <option value="mk">macedonian</option>
                <option value="mg">malagasy</option>
                <option value="ms">malay</option>
                <option value="ml">malayalam</option>
                <option value="mt">maltese</option>
                <option value="mi">maori</option>
                <option value="mr">marathi</option>
                <option value="mn">mongolian</option>
                <option value="my">myanmar (burmese)</option>
                <option value="ne">nepali</option>
                <option value="no">norwegian</option>
                <option value="or">odia</option>
                <option value="ps">pashto</option>
                <option value="fa">persian</option>
                <option value="pl">polish</option>
                <option value="pt">portuguese</option>
                <option value="pa">punjabi</option>
                <option value="ro">romanian</option>
                <option value="ru">russian</option>
                <option value="sm">samoan</option>
                <option value="gd">scots gaelic</option>
                <option value="sr">serbian</option>
                <option value="st">sesotho</option>
                <option value="sn">shona</option>
                <option value="sd">sindhi</option>
                <option value="si">sinhala</option>
                <option value="sk">slovak</option>
                <option value="sl">slovenian</option>
                <option value="so">somali</option>
                <option value="es">spanish</option>
                <option value="su">sundanese</option>
                <option value="sw">swahili</option>
                <option value="sv">swedish</option>
                <option value="tg">tajik</option>
                <option value="ta">tamil</option>
                <option value="te">telugu</option>
                <option value="th">thai</option>
                <option value="tr">turkish</option>
                <option value="uk">ukrainian</option>
                <option value="ur">urdu</option>
                <option value="ug">uyghur</option>
                <option value="uz">uzbek</option>
                <option value="vi">vietnamese</option>
                <option value="cy">welsh</option>
                <option value="xh">xhosa</option>
                <option value="yi">yiddish</option>
                <option value="yo">yoruba</option>
                <option value="zu">zulu</option>
            </select>    
            <input type="submit" value="Translate" name="submit">
        </form>  
      </div>
      <hr>
    </div>
    <div class="col-sm-6">

    <?php 
      
        
        translate();
        //var_dump($_POST);
        ?>
    </div>


  </div>
</div>
</body>
</html>
