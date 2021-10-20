<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            [
                'title' => 'Bizim barədə',
                'text'=> "<p><a class='table_text' href='http://www.jobsearch.az/'><strong>WWW.JOBSEARCH.AZ</strong></a>&nbsp;
Azərbaycanda aparıcı onlayn işədüzəltmə saytıdır. Jobsearch.az&nbsp; şirkətiniz üçün ixtisaslaşmış və yararlı işçilərin tapılmasında siz köməkçi olacaqdır.</p>
<p>Bizim məqsədimiz sizin karyeranızın inkişafına və şirkətlərə təcrübəli və ixtisaslaşmış işçilərin <u>daha münasib qiymət müqabilində</u> tapılmasına
 köməklik etməkdən ibarətdir.</p>
<p>Bizim saytımızın üzvlərinə neft və qeyri-neft sektorunda çalışan yerli və xarici menecment nümayəndələri, inzibati işçilər və iş axtarışında olanlar
 daxildirlər.</p>
<p>Hal-hazırda bizim menecment bu sayt haqqında məlumatları neft və qeri-neft şirkələrində, həmçinin, yerli şirkətlərdə yayırlar. Biz əhalini bu sayt haqqında
 məlumatlandırmaq üçün çoxlu resurslar səf etmişik və bu işi hal-hazırda davam etdiririk.</p>"
            ],
            [
                'title' => 'İşə götürənlər üçün',
                'text'=> "<p><strong>İşə Götürənlər (Şirkətlər, Təşkilatlar, QHT, Səfirliklər, İşə Düzəltmə Şirkətləri və s.)</strong>- Jobsearch.az&nbsp; sizin üçün yeni texnologiya və yüksək səviyyəli xidmətlər&nbsp; vasitəsilə ixtisaslı işçilərin axtarışı və bütövlüklə, işə götürmə prosesini təkmilləşdirən bir sistem təklif edir. Bizim xidmətlər aşağıdakılardan ibarətdir:</p>
<ul>
<li>İş elanının bizim saytda yerləşdirilməsi
</li><li>Şirkətin reklam bannerinin bizim saytda yerdəşdirilməsi
</li><li>İş elanı və reklam haqqında informasiyanın əhali və şirkətlər arasında yayılması</li></ul>
<p>Vaxta Qənaət- Sizə hər hansı bir yerə getməyə və və ya kiminsə vasitəsilə reklamın mətnini yollamaq artıq lazım deyil. Siz yalnız və yalnız, bizimlə əlaqə saxlamalı və iş haqqında məlumatı və işə aid tələbləri bizə elektron poçtu vasitəsilə yollamalısınız (əgər şərtdər artıq razılaşdırılıbsa).</p>
<p>Bizim saytdan gündəlik istifadə edənlərin sayı 7,000-dən artıqdır və bu rəqəm gün-gündən artır.</p>
<p>İş elanının və şirkətin reklam bannerinin yerləşdirilməsi ödənişli xidmətdir. Daha ətraflı <a class='table_text'
href='http://www.jobsearch.az/inside3_az.html'>Xidmət Haqqında</a>.</p>
<p>Qeyd: İş elanını yerləşlirərkən siz əlaqə vasitəsi kimi öz şirkətinizin elektron poçt adresini yerləşdirə bilərsiniz,
        alternativ variant kimi biz sizə xüsusi elektron poçtu təqdim edə bilərik və namizədlər iş elanına öz CV-lərini bu ünvana yollayarkən,
        həmən CV-lər avtomatik olaraq sizin şirkətin elektron poçtuna göndəriləcək. Biz bunu sizin elektron poçtunun spam poçtlarından qorunmaq üçün
        təklif edirik.&nbsp; </p>"
            ],
            [
                'title' => 'İş axtaranlar üçün',
                'text'=> "<p><strong>Yerli iş axtaranlar üçün</strong>- Yeni iş yeri, yeni karyera, yeni şəhər və yeni istiqamət haqqında düşünərkən, Jobsearch.az&nbsp; sizə çeşidli interaktiv iş axtarışı metodları ilə yeni imkanlar yaradır:</p>
<ul>
<li>Yeni iş elanlarının axtarışı
</li><li>Sizin CV-nizin aidiyyatı vakansiyaya göndərilməsi
</li><li>Sizin CV-nizin bizim məlumat bazasına göndərilməsi
</li><li>İnsan Qaynaqları üzrə yeni məsləhlətlər və məqalələrlə tanışlıq</li></ul>
<p>Bizim saytdan istifadə edərkən siz elan verilmiş vakansiyaya (<a class='table_text' href='http://www.jobsearch.az/index_az.html'>İş Elanları</a>) və həmçinin, bizim məlumat bazasına müraciət edə bilərsiniz. Biz sizin CV-nizi avtomatik olaraq bizim sayt vasitəsilə İş elan verən şirkətlərə gndərəcəyik, əlbəttə, ki, əgər sizin təcrübəniz elan olunan vəzifənin tələblərinə cavab verirsə.</p>
<p>CV-nizi bizim məlumat bazasına yollamaq üçün <a class='table_text' href='http://www.jobsearch.az/post_resume4_az.html'>CV-ni Göndər</a></p>
<p><strong>Xarici iş axtaranlar üçün</strong>- Azərbaycanda işləyən xarici vətəndaşların çoxu neft və qaz proyektləri qurtardıqdan sonra işsiz qalacaqlar.&nbsp; Bizim Menecment BƏƏ, Qatar, Kazaxstan, Rusiya və digər ölkələrin İşə düzəltmə şirkətləri ilə əməkdaşlıq çün danışıqlar aparırlər. Siz CV-nizi bizə yollamaqla bu ölkələrin birinda işə düzəlmək imkanı qazanacaqsınız.</p>
<p>CV-nizi bizim məlumat bazasına yollamaq üçün <a class='table_text' href='http://www.jobsearch.az/post_resume4_az.html'>CV-ni Göndər</a></p>
<p>&nbsp;</p>
<p>&nbsp;</p>"
            ],
            [
                'title' => 'Xidmət haqqı',
                'text'=> "<p><u>İş Elanının Yerləşdirilməsi</u></p>
<p><strong>İş Elanının yerləşdərilməsi cəmi 25 AZN-dir.</strong> Qiymətə ancaq bir iş elanı daxildir. İş elanının müddəti bir aydır. </p>
<p>Xidmət haqqı iş elanı yerləşdiyi vaxtdan 7 gün ərzində ödənilir. Müstəsna hallar ayrılıqda müzakirə olunacaq.</p>
<p>İş elanı yerləşdirmək üçün, siz vakant iş yeri haqqında məlumatı <a class='table_text' href='mailto:info@jobsearch.az'>info@jobsearch.az</a> Word formatında göndərməlisiniz. Mətnin daha rahat oxunması üçün bizim tərəfdən müəyyən qrammatik düzəlişlər aparılacaq.</p>
<p>Biz həmçinin normal işə düzəltmə prinsiplərindən və standartlarından uzaq olan iş elanlarının müştəri tərəfindən bizim saytdə yerləşdirilməsi təklifindən imtina etmək hüququna malikik.</p>
<p>Cins və yaşa aid olan tələblər iş elanına daxil olunubsa, biz bu elanı həmən tələblərsiz yerləşdirəcəyik. Müstəsna hallar ayrılıqda müzakirə olunacaq.</p>
<p>Elan müddətinin qurtarması haqqında məlumat İş Elanına daxil olunmayıbsa, həmən elanın müddəti 30 gün hesab olunacaq. Bu müddət əlavə ödənişin müqabilində artırıla bilər.</p>
<p>Hər bir müştəri öz adını və əlaqə məlumatını bizim saytda yerləşdirməmək seçiminə malikdir, lakin bizə iş elanı yerləşdirmək təklifi olanda biz bu məlumatların saytımızda yerləşdirməməyi öhdəmizə götürürük və məxfiliyə da zəmanət veririk.</p>
<p>İş Elanını yerləşdirmək üçün bizimlə <a class='table_text' href='http://www.jobsearch.az/inside7_az.html'>Əlaqə</a> saxlayın</p>
<p><u>Reklam Bannerinin Yerləşdirilməsi </u></p>
<p>Reklam bannerinin bizim saytda yerləşdirilməsi Bannerin&nbsp; ölçüsündən asılıdır.&nbsp;&nbsp; Banneri yerləşdirmək üçün və daha ətraflı məlumat üçün bizimlə <a class='table_text' href='http://www.jobsearch.az/inside7_az.html'>Əlaqə</a> saxlayın</p>
<p>&nbsp;</p>"
            ],
            [
                'title' => 'İnsan Qaynaqları',
                'text'=> "<a class='menuNav' href='page6_8_az.html' id='link_c1' title='Azeri Labor Legislation (last updates)'>Azeri Labor Legislation</a><br>
<a class='menuNav' href='page6_9_az.html' id='link_c2' title='HR Advice and Tips'>HR Advice and Tips</a><br>
<a class='menuNav' href='page6_10_az.html' id='link_c3' title='Office Culture'>Office Culture</a><br>
<a class='menuNav' href='page6_43_az.html' id='link_c4' title='''>EDUCATION &amp; CAREER 2008 (2-4 October, Baku, Azerbaijan)</a><br>"
            ],
            [
                'title' => 'Əlaqə',
                'text'=> "<p>Bizim əlaqə məlumatlarımız aşağıdakılardır:</p>
<p>
</p><table border='0' cellspacing='1' cellpadding='2' width='100%'>
<tbody>
<tr>
<td class='table_text' width='70' align='right'><strong>Tel:</strong></td>
<td class='table_text'>99 412 434 50 30&nbsp;</td></tr>
<tr>
<td class='table_text' align='right'><strong>Mob:</strong></td>
<td class='table_text'>99 450 205 66 20</td></tr>
<tr>
<td class='table_text'></td> align='right'><strong>E-mail:</strong></td>
<td class='table_text'><a href='mailto:info@jobsearch.az'>info@jobsearch.az</a></td></tr></tbody></table><p></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </p>"
            ],

        ]);

    }
}
