<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VacanciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('vacancies')->insert([
           [
                'title' =>  'Dərzi',
                'employer' => 'Winter Park Hotel Baku',
                'published' => Carbon::now()->format('Y-m-d'),
                'location' => 'Azerbaijan',
                'updated'    => Carbon::now()->format('Y-m-d'),
                'deadline'  => date('2021-11-22'),
                'img' => '1206titled.png',
               'text' => "<p><br>Departament: Təsərrüfat<br>Vəzifə: <strong>Dərzi</strong><br>Ünvan: M. Əliyev küç. 210, Nəsimi rayonu, Bakı, Azərbaycan<br>Web: <a title='www.winterparkhotelbaku.com' href='http://www.winterparkhotelbaku.com'><strong>www.winterparkhotelbaku.com</strong></a></p>
<p><span style='text-decoration: underline;'>ƏMƏK FUNKSIYASI:</span></p>
<p>- Tikiş maşınlarında tikiş əməliyyatlarını sərbəst yerinə yetirə bilən işçilərə üstünlük verilir.<br>- Götürülmüş ölçülər əsasında kəsim, biçim işlərinin aparılması;<br>- Tikiş maşınlarının sazlığının qorunması və təmiz saxlanılması;<br>- Bütün növ camaşırların düzgün yuyulması, təmizlənməsi və saxlanması, uyğun yerlərə və ya daha sonra üzərində iş görülməsi məqsədilə lazımi yerlərə göndərilməsi üçün məsuliyyət daşıyır.<br>- Təsərrüfat işləri üzrə müdirlə inventarizasiya aparır və bu inventarizasiyaya əvvəlcədən hazırlıq görür.<br>- Camaşırxana inventarını yoxlayır, camaşırxananın fəaliyyətinə mane ola biləcək amillərlə əlaqədar qrup rəhbərinə dərhal xəbər verir.<br>- Camaşırxananın işinin keyfiyyətli olması məqsədilə materiallardan qənaətlər və ekoloji təmiz üsullarla istifadə edir.<br>- Kollektivin yeni üzvlərinə kömək edir, onlara işi öyrədir.<br>- Camaşırxananın təmizliyi və səliqəsi üçün məsuliyyət daşıyır, təmizlik işlərini təşkil edir və nəzarət altında saxlayır,<br>- Camaşırxanadakı qurğu və avadanlıqları düzgün (onların işlədilməsinə aid təlimatlara uyğun olaraq) işlədə bilir</p>
<p><span style='text-decoration: underline;'>BACARIQLAR VƏ TƏCRÜBƏ:</span></p>
<p>- Ən azı camaşırxana və ya dərzilik sahəsində 1-3 illik iş təcrübəsi<br>- Stress altında işləmə bacarığı<br>- Dəyişkən iş qrafikində işləmə qabiliyyəti<br>- Müsbət ünsiyyət və komandada işləmə bacarığı<br>- Əməyin təhlükəsizliyi qaydalarından agah olmalı</p>
<p>Əgər bu iş Sizi maraqlandırırsa, lütfən CV-nizi <a title='hr@winterparkhotel.net' href='mailto:hr@winterparkhotel.'><strong>hr@winterparkhotel.net</strong></a> ünvanına yollayın. Mövzu yerində “<strong>Dərzi</strong>” yazmağı unutmayın.</p>
			"
           ],

            [
                'title' =>  'Helpdesk operator',
                'employer' => 'Kalem Yazılım',
                'published' => Carbon::now()->format('Y-m-d'),
                'location' => 'Azerbaijan',
                'updated'    => Carbon::now()->format('Y-m-d'),
                'deadline'  => date('2021-11-22'),
                'img' => 'kalem.png',
                'text'=> "<p>Vəzifə: <strong>Helpdesk operator</strong></p>
<p>- İş qrafiki həftədə 6 gün<br>- İş saadı 09:00-dan 18:00-dək<br>- AR Respublikası əmək məcəlləsinə uyğun sənədləşdirmə</p>
<p><span style='text-decoration: underline;'>Tələblər:</span></p>
<p>- Müştərilərə telefon və online vasitələrlə dəstək verilmək<br>- Periyodik olaraq müştəri ofislərində lazımi monitorinqin aparmaq<br>- Müştəri personalına təlimlərin vermək<br>- İş günləri: Bazar ertəsi - Şənbə<br>- İş saatları: 9:00-dan 18:00-dək<br>(Şənbə 9:00-dan 14:00-dək)<br>- Kompüter proqram təminatı və hissələrinin qurulması və sazlanması<br>- Printer avadanlıqlarının qurulması və sazlanması<br>- Notebook və PC-ləri təmir etmə təcrübəsinin olması<br>- Analitik düşünmə və izah edəbilmə imkanları<br>- İşində dəqiq və məsuliyyətli olması<br>- Komandada işləyə bilməsi<br>- Tam iş günü işləyə biləcək oğlan əməkdaş<br>- Əmək haqqı: Bilik səviyyəsinə uyğun olaraq təyin ediləcəkdir.</p>
<p>Mail: <a title='hr@kalemyazilim.' href='mailto:hr@kalemyazilim.az'><strong>hr@kalemyazilim.az</strong></a></p>
<p>Qeyd: CV göndərərkən mütləq hansı vakansiya üzrə olduğunu mövzu bölməsində qeyd edilsin.</p>"
            ]
        ]);
    }
}
